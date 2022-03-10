<?php
$testaments = egp_bibleTestaments();
// page_crash($testaments);

$books = egp_bibleBooks();
// page_crash($books);

$book = egp_documentViaID($books, $metadata->book);
// page_crash($book);

$versions = egp_bibleVersions();
// page_crash($versions);

$selectedVersions = egp_bibleVersionsSelected($versions);
// page_crash($selectedVersions);

$many = count($selectedVersions) > 2;

$passage = egp_biblePassage($metadata->title);
// page_crash($passage);

$html->add(new BS_Container(
  ['fluid' => true, 'className' => 'py-section'],

  // search form
  new BS_BibleSearchForm(['versions' => $versions]),

  // Bible book selector
  new BS_Division(
    ['className' => $many ? 'd-lg-flex' : 'd-md-flex'],

    implode('', array_map(
      function ($selectedVersion) use ($many, $passage) {
        return new BS_Division(
          ['className' => $many ? 'px-lg-2' : 'px-md-2'],

          new BS_BiblePassage([
            'passage' => $passage,
            'version' => $selectedVersion,
            'variant' => 'scripture',
          ])
        );
      },

      $selectedVersions
    ))
  ),

  new BS_Container(
    null,

    new BS_BiblePreviousNext([
      'books' => $books,
      '_id' => $metadata->_id,
      'className' => 'mt-element'
    ]),

    // chapter pagination
    new BS_BibleChapterPagination([
      'book' => $book,
      'chapter' => $metadata,
      'activeItem' => $metadata->_id,
      'className' => 'mt-4',
    ]),

    // book pagination
    new BS_Pagination([
      'items' => $books,
      'activeItem' => $metadata->book,
      'className' => 'mt-4',
    ]),
  ),
));
