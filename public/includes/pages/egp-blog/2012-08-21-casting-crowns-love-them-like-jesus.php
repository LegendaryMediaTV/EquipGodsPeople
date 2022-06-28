<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'John 15:12; Matthew 11:30',
    'youtube' => 'viYe589KIcw',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'The love of her life is drifting away' . PHP_EOL,
      'They’re losing the fight for another day' . PHP_EOL,
      'The life that she’s known is falling apart' . PHP_EOL,
      'A fatherless home, a child’s broken heart',
    ),

    new BS_Paragraph(
      null,
      'You’re holding her hand, you’re straining for words' . PHP_EOL,
      'You trying to make sense of it all' . PHP_EOL,
      'She’s desperate for hope, darkness clouding her view' . PHP_EOL,
      'She’s looking to you',
    ),

    new BS_Paragraph(
      null,
      'Just love her like Jesus, carry her to Him' . PHP_EOL,
      'His yoke is easy, His burden is light' . PHP_EOL,
      'You don’t need the answers to all of life’s questions' . PHP_EOL,
      'Just know that He loves her and stay by her side' . PHP_EOL,
      'Love her like Jesus, love her like Jesus',
    ),

    new BS_Paragraph(
      null,
      'The gifts lie in wait, in a room painted blue' . PHP_EOL,
      'Little blessing from Heaven would be there soon' . PHP_EOL,
      'Hope fades in the night, blue skies turn to gray' . PHP_EOL,
      'As the little one slips away',
    ),

    new BS_Paragraph(
      null,
      'You’re holding their hand, you’re straining for words' . PHP_EOL,
      'You’re trying to make sense of it all' . PHP_EOL,
      'They’re desperate for hope, darkness clouding their view' . PHP_EOL,
      'They’re looking to you',
    ),

    new BS_Paragraph(
      null,
      'Just love them like Jesus, carry them to Him' . PHP_EOL,
      'His yoke is easy, His burden is light' . PHP_EOL,
      'You don’t need the answers to all of life’s questions' . PHP_EOL,
      'Just know that He loves them and stay by their side' . PHP_EOL,
      'Love them like Jesus',
    ),

    new BS_Paragraph(
      null,
      'Lord of All Creation holds our lives in His hands' . PHP_EOL,
      'The God of All the Nations holds our lives in His hands' . PHP_EOL,
      'The Rock of Our Salvation holds our lives in His hands' . PHP_EOL,
      'He cares for them just as He cares for you',
    ),

    new BS_Paragraph(
      null,
      'So love them like Jesus, love them like Jesus' . PHP_EOL,
      'You don’t need the answers to all of life’s questions' . PHP_EOL,
      'Just know that He loves them and stay by their side' . PHP_EOL,
      'Love them like Jesus, love them like Jesus',
    ),
  ),
));
