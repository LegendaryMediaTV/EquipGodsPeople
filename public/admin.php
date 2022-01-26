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

    case 'lexiconConvert':
      $output = egp_lexiconConvert($_POST['languageID'], $_POST['code']);

      break;

    case "lexicon-entry":
      // prefix the ID as needed
      $_id =
        preg_match('/^[gh]?[0-9]+$/i', $_POST['_id'])
          ? "strongs-" .
            (preg_match('/^[0-9]/', $_POST['_id']) ? "g" : "") .
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

        // lookup/upsert the entry document
        $output = $db->documentFindUpsert('lexicon-entries', $_id, $document);

        // retrieve available lexicons, filtering by the entry's language
        $lexicons = $db->documents('lexicons');
        $lexicons = array_filter(
          $lexicons,
          function ($lexicon) use($output) {
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
                "_id" => $definitionID,
                "lexicon" => $lexicon->_id,
                "entry" => $output->_id,
                "sequence" =>
                  $lexicon->_id .
                  "-" .
                  str_pad(substr($output->_id, strpos($output->_id, '-') + 2), 4, "0", STR_PAD_LEFT),
                "definition" => $upserted->definition,
              ]
              : null
          );

          // add the lexicon/definition to the entry object
          $lexicon->definition = $definition->definition;
          $output->lexicons[] = $lexicon;
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
      $output = [ 'error' => 'invalid API task ' . $_POST['api'] ];
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
  [ '_id' => '', 'title' => 'Home' ],
  [
    '_id' => 'bible',
    'title' => 'Bible',
    'subtabs' => [
      [ '_id' => 'testaments', 'title' => 'Testaments' ],
      [ '_id' => 'ranges', 'title' => 'Ranges' ],
      [ '_id' => 'books', 'title' => 'Books' ],
      [ '_id' => 'chapters', 'title' => 'Chapters' ],
      [ '_id' => 'versions', 'title' => 'Versions' ],
      [ '_id' => 'verses', 'title' => 'Verses' ],
    ],
  ],
  [ '_id' => 'blog', 'title' => 'Blog' ],
  [ '_id' => 'languages', 'title' => 'Languages' ],
  [
    '_id' => 'lexicons',
    'title' => 'Lexicons',
    'subtabs' => [
      [ '_id' => 'versions', 'title' => 'Versions' ],
      [ '_id' => 'entries', 'title' => 'Entries' ],
    ],
  ],
  [ '_id' => 'reading-plans', 'title' => 'Reading Plans' ],
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

// determine the selected tab
if ($selectedTab->subtabs && $_GET['subtab'])
  $selectedSubtab = egp_documentViaID($selectedTab->subtabs, $_GET['subtab']);
else
  $selectedSubtab = null;

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
    $html->add(new BS_Division([ 'id' => 'react-like' ]));

    break;

  case 'lexicons':
    if ($selectedSubtab)
      $html->add(new BS_Division([ 'id' => 'react-lexicons-' . $selectedSubtab->_id ]));
    else
      $html->add(new BS_Lead(null, 'Please select a menu option above'));

    break;

  case 'reading-plans':
    $html->add(new BS_Division([ 'id' => 'react-reading-plans' ]));

    break;

  default:
    $html->add(new BS_Lead(null, 'Please select a menu option above'));

    break;
}

// display the resultant page
echo $html;

// TODO: delete this
function admin_pages() {
  global $selectedTab, $db, $html;

  $sql =
    "SELECT _id, Title" .
    "\nFROM Pages" .
    "\nWHERE ParentID IS NULL" .
    "\nORDER BY Sequence";
  $rows = $db->rows($sql);

  $rows = array_map(
    function ($row) {
      return [
        '_id' => $row['_id'],
        'title' => $row['Title'] ?: 'Home',
        'url' => $selectedTab->url . '&page=' . $row['_id'],
      ];
    },
    $rows
  );

  $html->add(new BS_ListGroup([
    'title' => 'Select a Page',
    'items' => $rows,
  ]));

  $html->add(new BS_Preformatted([ 'title' => 'Pages', 'item' => $rows ]));
}