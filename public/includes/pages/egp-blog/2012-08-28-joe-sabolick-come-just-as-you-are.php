<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'John 5:24; Ephesians 6:10; John 7:37–38; John 4:13–14'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Come just as you are' . PHP_EOL,
      'Hear the Spirit call' . PHP_EOL,
      'Come just as you are' . PHP_EOL,
      'Come and see' . PHP_EOL,
      'Come receive' . PHP_EOL,
      'Come and live forever',
    ),

    new BS_Paragraph(
      null,
      'Life everlasting' . PHP_EOL,
      'Strength for today' . PHP_EOL,
      'Taste the living water' . PHP_EOL,
      'And never thirst again' . PHP_EOL,
      'Come and see' . PHP_EOL,
      'Come receive' . PHP_EOL,
      'Come and live forever',
    ),

    new BS_Paragraph(
      null,
      'Come just as you are' . PHP_EOL,
      'Don’t you hear the Spirit call?' . PHP_EOL,
      'Come just as you are' . PHP_EOL,
      'Come and see' . PHP_EOL,
      'Christ My King' . PHP_EOL,
      'Come and live forever more',
    ),
  ),
));
