<?php
$versions = egp_bibleVersions();
// page_crash($versions);

if ($_POST['search']) {
  // accommodate for submitted version changes
  egp_bibleVersionsSelected();

  // see if the search query is a Bible passage
  $passage = egp_biblePassage($_POST['search']);

  // Bible passage found, redirect accordingly
  if ($passage) {
    // page_crash($passage);
    header('Location: ' . ($passage->url ?: $passage->chapter->url));
    exit;
  }
}

$testaments = egp_bibleTestaments();
// page_crash($testaments);

$ranges = egp_bibleRanges();
// page_crash($ranges);

$books = egp_bibleBooks();
// page_crash($books);

$html->add(new BS_Container(
  ['fluid' => true, 'className' => 'py-section'],

  // search form
  new BS_BibleSearchForm(['versions' => $versions]),

  // Bible book selector
  new BS_Container(
    null,

    new BS_SectionWithHeader(
      ['title' => 'Books of the Bible'],

      new BS_Row(
        null,
        implode('', array_map(
          function ($testament) use ($ranges, $books) {
            return new BS_Col(
              ['sm' => true, 'className' => 'mb-3'],

              new BS_ListGroup(
                ['title' => new BS_Link(
                  ['to' => '/bible-search/' . $testament->_id],
                  $testament->title
                )],

                implode('', array_map(
                  function ($range) use ($books) {
                    return implode('', [
                      new BS_ListGroupItem(
                        [
                          'to' => '/bible-search/' . $range->_id,
                          'className' => 'lead bg-light'
                        ],
                        $range->title
                      ),

                      implode('', array_map(
                        function ($book) {
                          return new BS_ListGroupItem(['to' => $book->url], $book->title);
                        },

                        array_filter(
                          $books,
                          function ($book) use ($range) {
                            return array_search($book->_id, $range->books) !== false;
                          }
                        )
                      )),
                    ]);
                  },

                  array_filter(
                    $ranges,
                    function ($range) use ($testament) {
                      return $range->parent === $testament->_id;
                    }
                  )
                ))
              )
            );
          },

          $testaments
        ))
      ),
    ),

    new BS_BiblePreviousNext([
      'books' => $books,
      'className' => 'mt-element'
    ])
  ),
));
