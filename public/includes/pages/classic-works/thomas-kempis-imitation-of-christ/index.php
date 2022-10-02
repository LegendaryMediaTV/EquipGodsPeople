<?php
// retrieve the table of contents for all books in the series
$toc = egp_tocImitationOfChrist();

$html->add(new BS_Banner(
  null,

  '“The Imitation of Christ” is a series of four devotional books written in the 15[sup]th[/sup] century and is considered an inspiration for the “What Would Jesus Do” movement.'
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
