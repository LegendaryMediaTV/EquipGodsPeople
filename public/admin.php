<?php
if ($_POST['api']) {
  switch ($_POST['api']) {
    case 'bible-books':
    case 'bible-testaments':
    case 'lexicon-languages':
    case 'lexicons':
    case 'reading-plans':
      $output = $db->documents($_POST['api']);

      break;

    case 'blog':
      // decode the JSON document
      $document = $_POST['document'] ? json_decode($_POST['document']) : null;

      // build out and format the provided document
      if ($document) {
        $document = (object) [
          '_id' => $document->_id,
          'title' => $document->title,
          'url' => $document->url,
          'sequence' => $document->sequence,
          'published' => $document->published,
          'description' => $document->description,
          'excerpt' => '',
          'image' => $document->image,
          'imageAlt' => $document->imageAlt,
          'previous' => '',
          'next' => '',
        ];
        if (!$document->image) unset($document->image);
        if (!$document->imageAlt) unset($document->imageAlt);

        $filename = 'includes/pages/egp-blog/' . $document->_id . '.php';
        if (file_exists($filename)) {
          // retrieve the source code and prepare for ad hoc execution
          $source = file_get_contents($filename);
          $document->excerpt = str_replace(
            "<?php\nrequire_once('BlogEntryPage.php');\n\n\$html->add(new BlogEntryPage(",
            'echo new BS_Division(',
            $source
          );
          $document->excerpt = str_replace(
            "\n));\n",
            ");",
            $document->excerpt
          );

          // execute code as PHP, capturing output
          ob_start(); // start output buffer
          eval($document->excerpt); // execute code
          $document->excerpt = ob_get_contents(); // store results in a string
          ob_end_clean(); // stop output buffer

          // convert the HTML to a text excerpt
          $document->excerpt = admin_excerpt($document->excerpt);
        }
        if (!$document->excerpt)
          unset($document->excerpt);

        // get all blog entry IDs
        $entries = $db->rows("SELECT _id FROM Documents WHERE Collection = 'blog'");
        $entries = array_map(
          function ($entry) {
            return $entry['_id'];
          },
          $entries
        );

        // swap out and sort IDs as needed
        if ($_POST['_id'] !== $document->_id) {
          // remove the old ID
          $index = array_search($_POST['_id'], $entries);
          if ($index !== false)
            unset($entries[$index]);

          // add the new ID
          $entries[] = $document->_id;

          sort($entries);
        }
        $entryCount = count($entries);

        // find the current post's Index
        $index = array_search($document->_id, $entries);

        // set previous
        if ($index)
          $document->previous = $entries[$index - 1];
        else
          unset($document->previous);

        // set next
        if ($index !== $entryCount - 1)
          $document->next = $entries[$index + 1];
        else
          unset($document->next);
      }

      // retrieving the document for a new entry
      if ($_POST['_id'] === 'new' && !$document) {
        $date = date('Y-m-d', mktime(0, 0, 0, date('n'), date('j') + ((7 - date('w')) % 7), date('Y')));
        $_id = $date . '-new-blog-entry';

        $output = (object)[
          '_id' => $_id,
          'title' => 'New Blog Entry',
          'url' => '/egp-blog/' . $_id,
          'published' => $date,
          'sequence' => $date,
        ];
      }
      // lookup/upsert the entry document
      else
        $output = $db->documentFindUpsert('blog', $_POST['_id'], $document);

      break;

    case 'lexiconConvert':
      $output = egp_lexiconConvert($_POST['languageID'], $_POST['code']);

      break;

    case 'lexicon-entry':
      // prefix the ID as needed
      $_id =
        preg_match('/^[gh]?[0-9]+$/i', $_POST['_id'])
        ? 'strongs-' .
        (preg_match('/^[0-9]/', $_POST['_id']) ? 'g' : '') .
        mb_strtolower($_POST['_id'])
        : $_POST['_id'];

      // is a lexicon entry request
      if (preg_match('/^strongs-/', $_id)) {
        // decode the JSON document
        $document = $_POST['document'] ? json_decode($_POST['document']) : null;

        // extract lexicons/definitions before upserting the entry
        $upserts = $document->lexicons ?: [];
        unset($document->lexicons);

        // sort the inflections
        if ($document->inflections) {
          uasort(
            $document->inflections,
            function ($a, $b) {
              return $a->name > $b->name ? 1 : -1;
            }
          );
          $document->inflections = array_values($document->inflections);
        }

        // determine searchable string when updating
        if ($document) {
          // add basic entry information
          $searchable = [
            $document->_id,
            $document->strongs->_id,
            $document->word,
            $document->strongs->word !== $document->word ? $document->strongs->word : '',
            $document->shortDefinition,
          ];

          // add name/inflections
          $searchable[] = $document->name;
          if ($document->inflections) {
            foreach ($document->inflections as $inflection)
              $searchable[] = $inflection->name;
          }

          // convert searchable array to a string
          $searchable = preg_replace_callback_array(
            [
              // remove bold/italics text markers
              '/\*/' => function ($match) {
                return '';
              },

              // consolidate spaces
              '/\s+/' => function ($match) {
                return ' ';
              },

              // remove lexicon definition numbering
              '/ [0-9]+[a-z]*\) /' => function ($match) {
                return ' ';
              },
            ],

            egp_bb(implode(' ', $searchable), true)
          );
        } else $searchable = null;

        // lookup/upsert the entry document
        $output = $db->documentFindUpsert('lexicon-entries', $_id, $document, $searchable);

        // retrieve available lexicons, filtering by the entry's language
        $lexicons = $db->documents('lexicons');
        $lexicons = array_filter(
          $lexicons,
          function ($lexicon) use ($output) {
            return $lexicon->languageID === $output->language;
          }
        );

        // upsert definitions and append them to the output
        $output->lexicons = [];
        foreach ($lexicons as $lexicon) {
          // determine the lexicon's definition ID
          $definitionID =
            $lexicon->_id .
            '-' .
            substr($output->_id, strpos($output->_id, '-') + 1);

          // upsert the definition, if requested
          $upserted = egp_documentViaID($upserts, $lexicon->_id);

          // find/upsert the definition
          $definition = $db->documentFindUpsert(
            'lexicon-definitions',
            $definitionID,
            $upserted
              ? (object) [
                '_id' => $definitionID,
                'lexicon' => $lexicon->_id,
                'entry' => $output->_id,
                'sequence' =>
                $lexicon->_id .
                  '-' .
                  str_pad(substr($output->_id, strpos($output->_id, '-') + 2), 4, '0', STR_PAD_LEFT),
                'definition' => $upserted->definition,
              ]
              : null
          );

          // add the lexicon/definition to the entry object
          $lexicon->definition = $definition->definition;
          $output->lexicons[] = $lexicon;
        }

        // get the old site's lexicon definition
        $sql =
          "SELECT Number AS _id, ShortDefinition AS shortDefinition" .
          "\nFROM equipgod_old.StrongsNumbers" .
          "\nWHERE Number = ?";
        $original = $db->row($sql, substr($_id, 8, 1) . str_pad(substr($_id, 9), 4, '0', STR_PAD_LEFT));

        // update the old site's short definition when different
        if ($original['shortDefinition'] !== $output->shortDefinition) {
          $db->update(
            'equipgod_old`.`StrongsNumbers',
            ['ShortDefinition' => $output->shortDefinition],
            ['Number' => $original['_id']]
          );
        }
      }
      // is a search request
      else
        $output = $db->documents('lexicon-entries', $_id);

      break;

    case 'reading-plan':
      $output = $db->documentFindUpsert(
        'reading-plans',
        $_POST['_id'],
        json_decode($_POST['document'])
      );

      break;

    default:
      $output = ['error' => 'invalid API task ' . $_POST['api']];

      break;
  }

  // send the response as JSON
  header('Content-Type: application/json');
  echo json_encode(
    $output,
    JSON_UNESCAPED_LINE_TERMINATORS | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR
  );
  exit;
}

// define available tabs
$tabs = [
  ['_id' => '', 'title' => 'Home'],
  [
    '_id' => 'bible',
    'title' => 'Bible',
    'subtabs' => [
      ['_id' => 'testaments', 'title' => 'Testaments'],
      ['_id' => 'ranges', 'title' => 'Ranges'],
      ['_id' => 'books', 'title' => 'Books'],
      ['_id' => 'chapters', 'title' => 'Chapters'],
      ['_id' => 'versions', 'title' => 'Versions'],
      ['_id' => 'verses', 'title' => 'Verses'],
    ],
  ],
  ['_id' => 'blog', 'title' => 'Blog'],
  ['_id' => 'languages', 'title' => 'Languages'],
  [
    '_id' => 'lexicons',
    'title' => 'Lexicons',
    'subtabs' => [
      ['_id' => 'versions', 'title' => 'Versions'],
      ['_id' => 'entries', 'title' => 'Entries'],
    ],
  ],
  ['_id' => 'reading-plans', 'title' => 'Reading Plans'],
];

// add URLs to tabs/subtabs
$tabCount = count($tabs);
for ($tabIndex = 0; $tabIndex < $tabCount; $tabIndex++) {
  $tabs[$tabIndex] = (object) $tabs[$tabIndex];

  // add tab URL
  $tabs[$tabIndex]->url =
    '/admin' . ($tabs[$tabIndex]->_id ? '?tab=' . $tabs[$tabIndex]->_id : '');

  // add subtab URLs
  if ($tabs[$tabIndex]->subtabs) {
    $subtabCount = count($tabs[$tabIndex]->subtabs);
    for ($subtabIndex = 0; $subtabIndex < $subtabCount; $subtabIndex++) {
      $tabs[$tabIndex]->subtabs[$subtabIndex] =
        (object) $tabs[$tabIndex]->subtabs[$subtabIndex];

      $tabs[$tabIndex]->subtabs[$subtabIndex]->url =
        $tabs[$tabIndex]->url . '&subtab=' . $tabs[$tabIndex]->subtabs[$subtabIndex]->_id;
    }
  }
}

// determine the selected tab
$selectedTab = egp_documentViaID($tabs, $_GET['tab'] ?: '');
if (!$selectedTab) $selectedTab = (object)[];

// determine the selected tab
if ($selectedTab->subtabs && $_GET['subtab'])
  $selectedSubtab = egp_documentViaID($selectedTab->subtabs, $_GET['subtab']);
else
  $selectedSubtab = null;
if (!$selectedSubtab) $selectedSubtab = (object)[];

// define page metadata
$metadata = (object) [
  'title' => $selectedTab->_id ? $selectedTab->title : 'EGP Admin',
  'parent' => $selectedTab->_id ? 'EGP Admin' : null,
  'admin' => true,
  'react' => true,
];

// start the HTML page
$html = new BS_HTMLPage($metadata, $selectedTab->_id ? 'EGP Admin' : null);

// add the main tabs
$html->add(new BS_Nav([
  'items' => $tabs,
  'tabs' => true,
  'activeItem' => $selectedTab->_id,
  'className' => 'h4 ' . ($selectedTab->subtabs ? 'mb-3' : 'mb-5'),
]));

// add the subtabs
if ($selectedTab->subtabs) {
  $html->add(new BS_Nav([
    'items' => $selectedTab->subtabs,
    'tabs' => true,
    'activeItem' => $selectedSubtab->_id,
    'className' => 'mb-5',
  ]));
}

// add tab-specific content
switch ($selectedTab->_id) {
  case 'blog':
    if (!$_GET['_id']) {
      $entries = $db->documents('blog');

      $items = [];
      $items[] = (object) [
        'title' => 'New Blog Entry',
        'url' => $selectedTab->url . '&_id=new'
      ];
      foreach ($entries as $entry) {
        $items[] = (object) [
          'title' => $entry->published . ' – ' . egp_bb($entry->title),
          'url' => $selectedTab->url . '&_id=' . $entry->_id
        ];
      }

      $html->add(new BS_ListGroup(['title' => 'Blog Entries', 'items' => $items]));
    } else {
      $entry = $db->document('blog', $_GET['_id']);
      $previous = $entry->previous ? $db->document('blog', $entry->previous) : null;
      $next = $entry->next ? $db->document('blog', $entry->next) : null;

      $html->add(new BS_Division(['id' => 'react-blog-entry']));

      $html->add(new BS_Pagination([
        'items' => [
          (object)['_id' => 'parent', 'title' => 'Blog Entry List', 'url' => $selectedTab->url],
          (object)['_id' => 'new', 'title' => 'New Blog Entry', 'url' => $selectedTab->url . '&_id=new'],
        ],
        'previous' => $previous ? (object)[
          '_id' => $previous->_id,
          'title' => egp_bb($previous->title),
          'url' => $selectedTab->url . '&_id=' . $previous->_id
        ] : null,
        'next' => $next ? (object)[
          '_id' => $next->_id,
          'title' => egp_bb($next->title),
          'url' => $selectedTab->url . '&_id=' . $next->_id
        ] : null,
        'className' => 'mt-5',
      ]));
    }

    break;

  case 'languages':
    $html->add(new BS_Division(['id' => 'react-like']));

    break;

  case 'lexicons':
    if ($selectedSubtab)
      $html->add(new BS_Division(['id' => 'react-lexicons-' . $selectedSubtab->_id]));
    else
      $html->add(new BS_Lead(null, 'Please select a menu option above'));

    break;

  case 'reading-plans':
    $html->add(new BS_Division(['id' => 'react-reading-plans']));

    break;

  default:
    $html->add(new BS_Lead(null, 'Please select a menu option above'));

    break;
}

// display the resultant page
echo $html;

function admin_excerpt($html) {
  $output = '';

  $words = preg_split(
    '/\s+/',
    str_replace(
      '°',
      '',
      trim(egp_bb(
        strip_tags(str_replace(
          [
            '<br />',
            '</blockquote>',
            '</div>',
            '</h1>',
            '</h2>',
            '</h3>',
            '</h4>',
            '</h5>',
            '</h6>',
            '</li>',
            '</p>'
          ],
          "\n",
          $html
        )),
        true
      ))
    )
  );
  $wordCount = count($words);

  for ($wordIndex = 0; $wordIndex < $wordCount; $wordIndex++) {
    $len = mb_strlen($output);

    $len += mb_strlen($words[$wordIndex]) + 1;

    if ($len <= 298 || ($len <= 300 && $wordIndex == $wordCount - 1))
      $output .= ($wordIndex ? ' ' : '') . $words[$wordIndex];
    else {
      if (mb_substr($output, -1) !== '…')
        $output .= ' …';

      break;
    }
  }

  return $output;
}
