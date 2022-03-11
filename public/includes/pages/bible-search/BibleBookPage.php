<?php
class BibleBookPage extends BS_Container {
  function render() {
    global $db, $metadata;

    $this->properties['fluid'] = true;
    $this->properties['className'][] = 'py-section';

    $books = egp_bibleBooks();
    // page_crash($books);

    $versions = egp_bibleVersions();
    // page_crash($versions);

    $chapterOne = $db->document('bible-chapters', $metadata->chapters[0]);
    // page_crash($chapterOne);

    $this->children = [
      // search form
      new BS_BibleSearchForm(['versions' => $versions, 'search' => $metadata->title]),

      // Bible book selector
      new BS_Container(
        null,

        implode('', $this->children),

        new BS_BiblePreviousNext([
          'books' => $books,
          '_id' => $metadata->_id,
          'className' => 'mt-element'
        ]),

        // chapter pagination
        new BS_BibleChapterPagination([
          'book' => $metadata,
          'chapter' => $chapterOne,
          'activeItem' => $metadata->_id,
          'className' => 'mt-4',
        ]),

        // book pagination
        new BS_Pagination([
          'items' => $books,
          'activeItem' => $metadata->_id,
          'className' => 'mt-4',
        ]),
      ),
    ];

    return parent::render();
  }
}
