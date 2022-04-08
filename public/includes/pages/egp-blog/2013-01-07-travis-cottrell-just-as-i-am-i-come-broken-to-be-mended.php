<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Titus 3:3–7',
    'youtube' => '460vFWX3ccs',
  ],

  new BS_Paragraph(
    null,

    new BS_Paragraph(
      null,
      'Just as I am, without one plea' . PHP_EOL,
      'But that Thy blood was shed for me' . PHP_EOL,
      'And that Thou bidst me come to Thee' . PHP_EOL,
      'O Lamb of God, I come, I come'
    ),

    new BS_Paragraph(
      null,
      'Just as I am, and waiting not' . PHP_EOL,
      'To rid my soul of one dark blot' . PHP_EOL,
      'To Thee whose blood can cleanse each spot' . PHP_EOL,
      'O Lamb of God, I come, I come'
    ),

    new BS_Paragraph(
      null,
      'I come broken to be mended' . PHP_EOL,
      'I come wounded to be healed' . PHP_EOL,
      'I come desperate to be rescued' . PHP_EOL,
      'I come empty to be filled' . PHP_EOL,
      'I come guilty to be pardoned' . PHP_EOL,
      'By the blood of Christ the Lamb' . PHP_EOL,
      'And I’m welcomed with open arms' . PHP_EOL,
      'Praise God, just as I am'
    ),

    new BS_Paragraph(
      null,
      'Just as I am, I would be lost' . PHP_EOL,
      'But mercy and grace my freedom bought' . PHP_EOL,
      'And now to glory in Your cross' . PHP_EOL,
      'Oh Lamb of God I come, I come'
    ),

    new BS_Paragraph(
      null,
      'Praise God, just as I am',
    ),
  ),
));
