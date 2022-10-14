<?php
class BibleRangePage extends BS_Container {
  function render() {
    global $metadata;

    $this->properties['fluid'] = true;
    $this->properties['className'][] = 'py-section';

    $books = egp_bibleBooks();
    // page_crash($books);

    $versions = egp_bibleVersions();
    // page_crash($versions);

    $this->children = [
      // search form
      new BS_ParallelBibleForm(['versions' => $versions, 'search' => $metadata->title]),

      // Bible book selector
      new BS_Container(
        null,

        implode('', $this->children),

        new BS_List([
          'ordered' => true,
          'items' =>
          array_map(
            function ($book) {
              return new BS_Link(['to' => $book->url], $book->title);
            },

            array_filter(
              $books,

              function ($book) use ($metadata) {
                return array_search($book->_id, $metadata->books) !== false;
              }
            )
          )
        ]),

        new BS_BiblePreviousNext([
          'books' => $books,
          '_id' => $metadata->_id,
          'className' => 'mt-element'
        ]),

        // book pagination
        new BS_Pagination([
          'items' => $books,
          'className' => 'mt-4',
        ]),
      ),
    ];

    return parent::render();
  }
}
