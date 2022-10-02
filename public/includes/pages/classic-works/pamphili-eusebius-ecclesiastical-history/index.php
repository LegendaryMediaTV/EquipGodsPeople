<?php
// retrieve the table of contents for all books in the series
$toc = egp_tocEcclesiasticalHistory();

$html->add(new BS_Banner(
  null,

  '“The Ecclesiastical History of Eusebius Pamphilus, Bishop of Cæsarea, in Palestine”—or simply “Church History”—is a series of ten books that contain the history of early Christianity from the 1',
  new BS_Superscript(null, 'st'),
  ' century (basically where Acts and the Epistles left off) to the 4',
  new BS_Superscript(null, 'th'),
  ' century (when it was written).'
));

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_ListGroup([
    'title' => 'Books in the Series',
    'items' => $toc,
    'size' => 'lg'
  ]),

  implode('', array_map(
    function ($book) {
      return new BS_SectionWithHeader(
        [
          '_id' => $book->_id,
          'title' => new BS_Link(['to' => $book->url], $book->title),
          'subtitle' => $book->subtitle,
        ],

        new BS_ListGroup([
          'title' => 'Table of Contents',
          'items' => array_map(
            function ($chapter) use ($book) {
              $chapter->url = $book->url . '#' . $chapter->_id;

              return $chapter;
            },

            $book->chapters
          )
        ])
      );
    },

    $toc
  )),

  new BS_PreviousNext([
    'previous' => ['url' => '/classic-works', 'title' => 'Classic Works'],
    'next' => ['url' => $toc[0]->url, 'title' => $toc[0]->subtitle . ' – ' . $toc[0]->title],
    'className' => 'mt-5'
  ]),
));
