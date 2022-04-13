<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Matthew 2:11', 'version' => 'NASB', 'variant' => 'paragraph']),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Melchior: “Gold for the King of Kings.”' . PHP_EOL,
      'Balthasar: “Frankincense for the Priest of Priests.”' . PHP_EOL,
      'Gaspar: “Myrrh for the One who must sacrifice.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/Nativity-Story-Blu-ray-Keisha-Castle-Hughes/dp/B00A2LKVQK/'],

        'The Three Wise Men, ',
        new BS_Citation(null, 'The Nativity Story'),
      ),
    ),
  ),

  new BS_BiblePassage(['passage' => 'Isaiah 60:6', 'version' => 'NASB', 'variant' => 'paragraph']),
));
