<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'aZRQ5MKQA8w'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'You stood before creation' . PHP_EOL,
      'Eternity in Your hand' . PHP_EOL,
      'You spoke the Earth into motion' . PHP_EOL,
      'My soul now to stand'
    ),

    new BS_Paragraph(
      null,
      'You stood before my failure' . PHP_EOL,
      'And carried the cross for my shame' . PHP_EOL,
      'My sin weighed upon Your shoulders' . PHP_EOL,
      'My soul now to stand'
    ),

    new BS_Paragraph(
      null,
      'So what could I say?' . PHP_EOL,
      'And what could I do?' . PHP_EOL,
      'But offer this heart, Oh God' . PHP_EOL,
      'Completely to You!'
    ),

    new BS_Paragraph(
      null,
      'So I’ll walk upon salvation' . PHP_EOL,
      'Your Spirit alive in me' . PHP_EOL,
      'This life to declare Your promise' . PHP_EOL,
      'My soul now to stand'
    ),

    new BS_Paragraph(
      null,
      'I’ll stand…' . PHP_EOL,
      'With arms high and heart abandoned' . PHP_EOL,
      'In awe of the One who gave it all' . PHP_EOL,
      'I’ll stand…' . PHP_EOL,
      'My soul [sc]Lord[/sc] to You surrendered' . PHP_EOL,
      'All I am is Yours!',
    ),
  ),
));
