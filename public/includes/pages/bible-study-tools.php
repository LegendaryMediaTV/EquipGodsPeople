<?php
$items = [
  (object)[
    '_id' => 'bible-search',
    'title' => 'Bible Search',
    'subtitle' => 'search and compare multiple versions of the Bible',
    'url' => '/bible-study-tools/bible-search',
    'description' => implode(
      '',
      [
        new BS_Paragraph(
          null,
          'Type the word segment, word(s), or phrase you want to search for and it will search for [em]every occurrence[/em] of it in the first translation and also break your search request into keywords and use those to [em]search over 15 different translations[/em], displaying the [em]entire verse[/em] (as opposed to a couple surrounding words, like most other concordances). Then it pulls up the resultant verses in each of the subsidiary versions for [em]instant parallel comparison[/em].'
        ),
        new BS_Paragraph(
          null,
          'Also, all the verses are linked to the ',
          new BS_Link(['to' => '/bible-study-tools/parallel-bible'], 'Parallel Bible'),
          ' section, so that you can click the verse and [em]see it with the context of its entire chapter[/em] in a separate window!',
        ),
      ]
    ),
  ],

  (object)[
    '_id' => 'parallel-bible',
    'title' => 'Parallel Bible',
    'subtitle' => 'read and compare multiple versions of the Bible',
    'url' => '/bible-study-tools/parallel-bible',
    'description' => new BS_Paragraph(
      null,
      'Select the book/chapter/verse that you want to see, and which translations you want to see it in (up to seven at a time). It will then pull up the [em]entire chapter[/em] with [em]each translation side-by-side[/em], bolding the selected verses.'
    ),
  ],

  (object)[
    '_id' => 'bible-concordance',
    'title' => 'Bible Concordance',
    'subtitle' => 'strict keyword search of the Bible',
    'url' => '/bible-study-tools/bible-concordance',
    'description' => implode(
      '',
      [
        new BS_Paragraph(
          null,
          'Type the you want to search for and it will search for [em]related keywords across 15 different translations[/em]. Then it pulls up the resultant verses.'
        ),
        new BS_Paragraph(
          null,
          'Also, all the verses are linked to the ',
          new BS_Link(['to' => '/bible-study-tools/parallel-bible'], 'Parallel Bible'),
          ' section, so that you can click the verse and [em]see it with the context of its entire chapter[/em] in a separate window!',
        ),
      ]
    ),
  ],
];

$html->add(new BS_Container(
  ['className' => 'py-section'],

  ...array_map(
    function ($item) {
      return new BS_SectionWithHeader(
        [
          'id' => $item->_id,
          'title' => new BS_Link(['to' => $item->url], $item->title),
          'subtitle' => $item->subtitle,
        ],

        null,
        $item->description,

        new BS_Paragraph(
          null,

          new BS_Link(
            ['to' => $item->url],

            $item->title,
            new BS_Icon(['name' => 'fa-solid fa-caret-right']),
          ),
        ),
      );
    },
    $items
  )
));
