<?php
$testaments = egp_bibleTestaments();
// page_crash($testaments);

$ranges = egp_bibleRanges();
// page_crash($ranges);

$books = egp_bibleBooks();
// page_crash($books);

$versions = egp_bibleVersions();
// page_crash($versions);

// retrieve input
$search = stripslashes($_POST['search'] ? $_POST['search'] : $_GET['search']);
$range = stripslashes($_POST['range'] ? $_POST['range'] : $_GET['range']);
$page = stripslashes($_POST['page'] ? $_POST['page'] : $_GET['page']);

// ensure there is a page number
if (!$page) $page = 1;

// number of results on the page
define('EGP_PAGINATION', 50);

if ($search) {
  // parameters haven't changed, use cached results
  if ($search === $_SESSION['bible-search']['search'] && $range === $_SESSION['bible-search']['range'] && false) {
    $matches = $_SESSION['bible-search']['matches'];
    $matchesCount = $_SESSION['bible-search']['matchesCount'];
  }
  // parameters have changed, re-run search
  else {
    if ($range) {
      // see if the selected range is a testament
      $rangeFilter = array_search_callback(
        $testaments,
        function ($testament) use ($range) {
          return $testament->_id === $range;
        }
      );
      if (!is_null($rangeFilter))
        $rangeFilter = $testaments[$rangeFilter]->books;
      else {
        // see if the selected range is a book
        $rangeFilter = array_search_callback(
          $books,
          function ($book) use ($range) {
            return $book->_id === $range;
          }
        );
        if (!is_null($rangeFilter))
          $rangeFilter = [$range];
        else {
          // see if the selected range is a range
          $rangeFilter = array_search_callback(
            $ranges,
            function ($bibleRange) use ($range) {
              return $bibleRange->_id === $range;
            }
          );
          if (!is_null($rangeFilter))
            $rangeFilter = $ranges[$rangeFilter]->books;
        }
      }

      // convert book IDs to SQL-based sequences
      $rangeFilter = array_map(
        function ($book) {
          return 'VerseID LIKE \'' . $book->sequence . '%\'';
        },
        array_values(array_filter(
          $books,
          function ($book) use ($rangeFilter) {
            return array_search($book->_id, $rangeFilter) !== false;
          }
        ))
      );

      // combine range pieces into one SQL filter
      $rangeFilter = '(' . implode(' || ', $rangeFilter) . ')';
    }

    // break search criteria into keywords
    $keywords = egp_getKeywords($search);
    $keywordCount = count($keywords);
    // page_crash($keywords);

    // get exact matches by keyword
    $exact = [];
    if ($keywordCount === 1) {
      $sql = implode("\n", [
        'SELECT VerseID',
        'FROM equipgod_old.BibleKeywords',
        'WHERE',
        ($rangeFilter ? $rangeFilter . ' AND' : ''),
        'CONCAT_WS(\',\', Automatic, Manual) LIKE \'%' . str_replace('\'', '\\\'', $keywords[0]) . '%\'',
      ]);

      $rows = $db->rows($sql);
      $rowCount = count($rows);
      for ($j = 0; $j < $rowCount; $j++)
        $exact[$rows[$j]['VerseID']] = 100;
    } else {
      $texts = $db->rows(implode("\n", [
        'SELECT VersionID, Formatted',
        'FROM equipgod_old.BibleVersions',
        'WHERE VersionID LIKE \'trn%\' AND VersionID != \'trnGRKT\'',
        'ORDER BY VersionID;'
      ]));

      $textCount = count($texts);
      for ($j = 0; $j < $textCount; $j++) {
        $sql = implode("\n", [
          'SELECT VerseID',
          'FROM equipgod_old.' . $texts[$j]['VersionID'],
          'WHERE',
          ($rangeFilter ? $rangeFilter . ' AND' : ''),
          '(',
          'MATCH (Scripture' . ($texts[$j]['Formatted'] ? 'Unformatted' : '') . ')',
          'AGAINST (\'' . str_replace('\'', '\\\'', (!strstr($search, '"') ? '"' : '') . $search . (!strstr($search, '"') ? '"' : '')) . '\' IN BOOLEAN MODE)',
          'OR Scripture' . ($texts[$j]['Formatted'] ? 'Unformatted' : '') . ' LIKE \'%' . str_replace('\'', '\\\'', $search) . '%\'',
          ')',
        ]);

        $rows = $db->rows($sql);
        $rowCount = count($rows);
        for ($k = 0; $k < $rowCount; $k++)
          if (!in_array($rows[$k]['VerseID'], $exact))
            $exact[$rows[$k]['VerseID']] = 100;
      }
    }

    // natural matches
    $natural = [];
    if ($keywordCount) {
      $sql = implode("\n", [
        'SELECT *,',
        'MATCH (Automatic, Manual)',
        'AGAINST (\'' . str_replace('\'', '\\\'', implode(' ', $keywords)) . '\')/10 AS Relevance',
        'FROM equipgod_old.BibleKeywords',
        'WHERE',
        ($rangeFilter ? $rangeFilter . ' AND' : ''),
        'MATCH (Automatic, Manual) AGAINST (\'' . str_replace('\'', '\\\'', implode(' ', $keywords)) . '\')',
        'ORDER BY VerseID',
      ]);

      $rows = $db->rows($sql);
      $rowCount = count($rows);
      if ($rowCount) {
        $verses = [];
        $relevances = [];

        // calculate keyword matches into relevance
        for ($j = 0; $j < $rowCount; $j++) {
          $verseKeywords = array_merge(explode(',', $rows[$j]['Automatic']), explode(',', $rows[$j]['Manual'])); // join automated keywords with manual-entry
          $verseRelevance = 0; // zero out relevance

          // increment relevance for each keyword found
          for ($k = 0; $k < $keywordCount; $k++) { // loop through keywords
            if (in_array($keywords[$k], $verseKeywords)) // keyword found for verse
              $verseRelevance++; // increment relevance
          }

          // combine relevances, keeping only most relevant
          $relevance = ($verseRelevance / $keywordCount + $rows[$j]['Relevance']) / 2; // average my relevances with DB’s
          if ($relevance >= 0.5) { // must at least half-way match
            $verses[] = $rows[$j]['VerseID']; // add verse to matches
            $relevances[] = $relevance; // remember relevance
          }
        }

        // sort by relevance
        array_multisort($relevances, SORT_DESC, $verses, SORT_ASC); // sort by relevance (highest first) and subsort that by verse (canonical)
        $verseCount = count($verses);
        for ($j = 0; $j < $verseCount; $j++) { // loop through matches
          if (!isset($exact[$verses[$j]])) // isn’t already an exact match
            $natural[$verses[$j]] = $relevances[$j] * 100; // add to natural matches
        }
      }
    }

    // combine matches into one array
    $matches = $exact + $natural;
    $matchesCount = count($matches);

    // update session info
    $_SESSION['bible-search'] = [
      'search' => $search,
      'range' => $range,
      'matches' => $matches,
      'matchesCount' => $matchesCount,
    ];
  }

  // apply pagination to matches
  $sliceStart = ($page - 1) * EGP_PAGINATION + 1;
  $sliceEnd = $sliceStart + EGP_PAGINATION - 1;
  if ($sliceEnd > $matchesCount) $sliceEnd = $matchesCount;
  if ($matchesCount > EGP_PAGINATION || $page)
    $matches = array_slice($matches, ($page - 1) * EGP_PAGINATION, EGP_PAGINATION, true);
  $sliceCount = count($matches);
}

// convert versions to dropdown options
$versionOptions = [];
foreach ($versions as $version) {
  // only use public versions that aren't for goodies or goodies are enabled
  if ($version->public && !($version->goodies && !$_SESSION['goodies']))
    $versionOptions[] = (object)['_id' => $version->_id, 'title' => $version->title];
}

// collect/format version copyrights
$copyrights = ['verse' => ''];
foreach ($metadata->selected as $version)
  $copyrights[$version->_id] = new BS_Paragraph(['className' => 'text-muted small'], $version->copyright);

// form column configuration
$formCol = ['xs' => 12, 'md' => 6, 'lg' => 4, 'xl' => 3, 'xxl' => 2, 'className' => 'mb-1'];

$html->add(new BS_Container(
  ['fluid' => true, 'className' => 'py-section'],

  // search form
  new BS_Form(
    [
      'url' => '/bible-study-tools/bible-search',
      'className' => 'row gx-1 mb-5',
    ],

    new BS_Col(
      $formCol,
      new BS_Textbox([
        'name' => 'search',
        'type' => 'search',
        'required' => true,
        'value' => $search ?: $search,
        'placeholder' => 'phrase or keywords'
      ])
    ),

    new BS_Col(
      $formCol,
      new BS_Select(
        ['name' => 'range'],

        new BS_SelectOption(['value' => ''], 'Entire Bible'),
        new BS_SelectGroup(['label' => 'Testaments', 'options' => $testaments, 'selected' => $range]),
        new BS_SelectGroup(['label' => 'OT books', 'options' => array_filter($books, function ($book) {
          return $book->testament === 'old-testament';
        }), 'selected' => $range]),
        new BS_SelectGroup(['label' => 'NT books', 'options' => array_filter($books, function ($book) {
          return $book->testament === 'new-testament';
        }), 'selected' => $range]),
        new BS_SelectGroup(['label' => 'Book ranges', 'options' => array_filter($ranges, function ($range) {
          return $range->_id !== 'book-of-revelation' && $range->_id !== 'acts-of-the-apostles';
        }), 'selected' => $range]),
      )
    ),

    implode('', array_map(
      function ($slot) use ($versionOptions, $metadata, $formCol) {
        return new BS_Col(
          $formCol,
          new BS_Select([
            'name' => 'versions[]',
            'options' => array_merge([(object)['_id' => '', 'title' => 'slot ' . $slot]], $versionOptions),
            'selected' => $slot <= $metadata->selectedCount ? $metadata->selected[$slot - 1]->_id : ''
          ])
        );
      },

      range(1, 7)
    )),

    // add submit button
    new BS_Col(
      $formCol,
      new BS_Button(['type' => 'submit', 'className' => 'w-100'], 'Search')
    ),
  ),

  new BS_Container(
    ['fluid' => $metadata->selectedCount < 2 ? 'lg' : ($metadata->selectedCount < 3 ? 'xxl' : true)],

    // $_POST ? new BS_Preformatted(['item' => $_POST, 'title' => 'POST']) : null,

    // $keywords ? new BS_Preformatted(['item' => $keywords, 'title' => 'Keywords']) : null,

    // $rangeFilter ? new BS_Preformatted(['item' => $rangeFilter, 'title' => 'Range Filter']) : null,

    // $exact ? new BS_Preformatted(['item' => $exact, 'title' => 'Exact Matches']) : null,

    // $natural ? new BS_Preformatted(['item' => $natural, 'title' => 'Natural Matches']) : null,

    // $matches ? new BS_Preformatted(['item' => $matches, 'title' => 'Matches']) : null,

    // $_SESSION['bible-search'] ? new BS_Preformatted(['item' => $_SESSION['bible-search'], 'title' => 'Search Session']) : null,

    $search
      ? ($matchesCount
        ? implode('', [
          new BS_Heading2(
            null,
            'Search results ',
            $matchesCount > EGP_PAGINATION ? $sliceStart . ' to ' . $sliceEnd . ' of ' . $matchesCount . ' ' : null,
            'for “' . htmlspecialchars($search) . '”',
            $matchesCount <= EGP_PAGINATION ? ' (' . $matchesCount . ' ' . ($matchesCount === 1 ? 'match' : 'matches') . ')' : null,
          ),

          // new BS_Preformatted(['item' => $metadata->selected, 'title' => 'Selected']),

          // new BS_Preformatted(['item' => $matches, 'title' => 'Matches']),

          new BS_ResponsiveTable([
            'columns' => [
              [
                '_id' => 'verse',
                'name' => 'Verse',
                'title' => 'Verse/Relevancy',
                'noPrefix' => true,
              ],
              ...array_map(
                function ($version) use ($metadata) {
                  return [
                    '_id' => $version->_id,
                    'name' => $version->title,
                    'noPrefix' => $metadata->selectedCount === 1
                  ];
                },
                $metadata->selected
              ),
            ],
            'items' => [
              ...array_map(
                function ($verse) use ($matches, $metadata) {
                  $item =  [];

                  $item['verse'] =
                    new BS_Paragraph(
                      null,

                      new BS_BibleLink(['to' => $verse, 'popover' => false]),

                      new BS_Span(
                        ['className' => 'd-xl-block'],
                        ' (' . round($matches[$verse], 2) . '%)'
                      )
                    );

                  foreach ($metadata->selected as $version) {
                    $item[$version->_id] =
                      new BS_BiblePassage([
                        'passage' => $verse,
                        'variant' => 'content',
                        'version' => $version,
                      ]);
                  }

                  return $item;
                },
                array_keys($matches)
              ),

              $copyrights
            ],
            'expand' => 'xl',
            'className' => 'w-100',
            'rowClassName' => 'pt-3 pt-xl-0',
            'colClassName' => 'pt-xl-3',
          ]),

          $matchesCount > EGP_PAGINATION
            ? new BS_PreviousNext([
              'previous' => $page > 1 ? [
                'title' => 'Page ' . ($page - 1),
                'url' => '/bible-study-tools/bible-search?search=' . urlencode($search) . ($range ? '&range=' . urlencode($range) : null) . '&page=' . ($page - 1),
              ] : null,
              'next' => $sliceEnd < $matchesCount ? [
                'title' => 'Page ' . ($page + 1),
                'url' => '/bible-study-tools/bible-search?search=' . urlencode($search) . ($range ? '&range=' . urlencode($range) : null) . '&page=' . ($page + 1),
              ] : null,
              'className' => 'mt-5'
            ])
            : null,
        ])
        : new BS_Paragraph(null, $matchesCount > EGP_PAGINATION && $page > 1 ? 'Selected search results page farther than number of results found; ' . new BS_Link(['to' => '/bible-study-tools/bible-search?search=' . urlencode($search) . ($range ? '&range=' . urlencode($range) : null)], 'click here to go back to page one of the results') : 'No matches found for “' . htmlspecialchars($search) . '”')
      )
      : implode('', [
        new BS_Heading2(null, 'How to Search the Bible'),

        new BS_List([
          'ordered' => true,
          'items' => [
            implode('', [
              new BS_Division(null, 'in the [b]phrase or keywords[/b] textbox, type any of the following:'),
              new BS_List(['items' => [
                'a [strong]phrase[/strong] from the verse (e.g., “' . new BS_Link(
                  ['to' => '/bible-study-tools/bible-search?search=' . urlencode('God is love') . '&range=new-testament'],
                  'God is love'
                ) . '”)',
                'any [strong]word(s)[/strong] that [em]are[/em] or [em]might be[/em] in the verse (e.g., “' . new BS_Link(
                  ['to' => '/bible-study-tools/bible-search?search=' . urlencode('repentance salvation') . '&range=new-testament'],
                  'repentance salvation'
                ) . '”)',
                'a [strong]word segment[/strong] from the verse (e.g., “' . new BS_Link(
                  ['to' => '/bible-study-tools/bible-search?search=' . urlencode('baptis') . '&range=new-testament'],
                  'baptis'
                ) . '”)',
              ]]),
            ]),

            implode('', [
              new BS_Division(null, 'choose a [b]range[/b] from the dropdown box that probably currently says “Entire Bible”:'),
              new BS_List(['items' => [
                '[strong]Entire Bible[/strong] searches the entire Bible (i.e., Genesis through Revelation)',
                '[strong]Old Testament[/strong] searches the entire Old Testament (i.e., Genesis through Malachi)',
                '[strong]word segment[/strong] searches the entire New Testament (i.e., Matthew through Revelation)',
                'all other options search a common range that’s a subset of these or a specific book of the Bible',
              ]]),
              new BS_Paragraph(['className' => 'text-muted my-2'], '[i]NOTE: The larger the range, the longer it will take to search it, so choosing a smaller range is desired when applicable (e.g., if you know it’s in the New Testament, then choose [b]New Testament[/b] for the range)[/i]'),
            ]),

            'using the remaining dropdown boxes, [b]choose up to seven (7) translations[/b]',
            'click the [b]Search[/b] button'
          ],
        ]),

        new BS_Heading3(null, 'Example Searches'),

        new BS_List(['items' => [
          implode('', [
            '“',
            new BS_Link(
              ['to' => '/bible-study-tools/bible-search?search=' . urlencode('love your neighbor')],
              'love your neighbor'
            ),
            '” (Entire Bible)',
          ]),

          implode('', [
            '“',
            new BS_Link(
              ['to' => '/bible-study-tools/bible-search?search=' . urlencode('the word of God doesn’t return void') . '&range=old-testament'],
              'the word of God doesn’t return void'
            ),
            '” (Old Testament)',
          ]),

          implode('', [
            '“',
            new BS_Link(
              ['to' => '/bible-study-tools/bible-search?search=' . urlencode('love') . '&range=john'],
              'love'
            ),
            '” (Gospel of John)',
          ]),
        ]]),

        ////////////////////////////////////////////////////////////////////////

        new BS_Heading2(null, 'How It Works'),

        new BS_Paragraph(null, 'Over [strong]15 different translations[/strong]° were converted into keywords:'),

        new BS_List([
          'ordered' => true,
          'items' => [
            'American Standard Version (ASV)',
            'Amplified Bible (AMP)',
            'Good News Bible (GNB)',
            'Septuagint (LXX)',
            'Greek New Testament with and without Strong’s Numbers',
            'King James Version (KJV) with and without Strong’s Numbers',
            'Latin Vulgate (VUL)',
            'New English Translation (NET Bible®)',
            'New American Standard Bible (NASB) with and without Strong’s Numbers',
            'New Century Version (NCV)',
            'New International Version (NIV)',
            'New King James Version (NKJV)',
            'New Living Translation (NLT)',
            'New Living Translation, 2nd Edition (NLT2)',
            'Transliterated Unaccented (TUA)',
            'Young’s Literal Translation (YLT)'
          ],
        ]),

        new BS_Paragraph(
          ['className' => 'text-muted'],
          new BS_Small(null, '° [i]Due to copyrights, not all of these translations are available for viewing[/i]'),
        ),

        new BS_Paragraph(
          null,
          'It then searches your primary translation and these keywords, combining the results, ordering by relevance, displaying the [strong]entire verse[/strong] (as opposed to a couple surrounding words, like most other concordances).'
        ),

        new BS_Paragraph(
          null,
          'Then it pulls up the resultant verses in each of the subsidiary versions for [strong]instant parallel comparison[/strong].'
        ),

        new BS_Paragraph(
          null,
          'Also, all the verses are linked to the ',
          new BS_Link(['to' => '/bible-study-tools/parallel-bible'], 'Parallel Bible'),
          ' section, so that you can click the verse and [strong]see it with the context of its entire chapter[/strong]!'
        ),
      ]),
  ),
));


/**
 * convert given string to keywords
 * @param string $in query string
 * @return string[] array of keywords
 */
function egp_getKeywords($in) {
  $out = [];

  if ($in) {
    $srch = ['&lt;', '&gt;', '&mdash;', '—', '&ndash;', '–', ':', '&laquo;', '<<', '&raquo;', '>>', '-']; // things to search for when replacing
    $repl = ['<', '>', ' ', ' ', ' ', ' ', ' ', '', '', '', '', '']; // things to replace with when replacing
    $skip = ['a', 'an', 'and', 'et', 'kai', 'of', 'on', 'the', 'to']; // words not considered keywords

    $in = str_replace($srch, $repl, strtolower($in)); // prepare string
    $in = preg_replace('/&.*?;/', '', $in); // get rid of HTML characters
    $in = preg_replace('/[^a-zA-Z0-9_<>\[\] ]/', '', $in); // get rid of irrelevant characters
    $words = preg_split('/\s+/', $in); // split into words

    foreach ($words as $word) { // loop through the words
      // remove brackets around words
      if (($word[0] == '[' || $word[strlen($word) - 1] == ']') && !preg_match('/^\[[0-9]{4}\]$/', $word))
        $word = str_replace(['[', ']'], '', $word);

      // convert new Strong's Numbers format to the old format
      if (preg_match('/^g[0-9]{1,4}$/', $word))
        $word = '<' . str_pad(intval(substr($word, 1)), 4, '0', STR_PAD_LEFT) . '>';
      elseif (preg_match('/^h[0-9]{1,4}$/', $word))
        $word = '[' . str_pad(intval(substr($word, 1)), 4, '0', STR_PAD_LEFT) . ']';

      // add new words that aren’t to be skipped
      if ($word && !in_array($word, $skip) && !in_array($word, $out))
        $out[] = $word;
    }
  }

  return $out;
}
