<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Hebrews 6:17–20; Psalm 55:16–19; Psalm 25:4–6; 2 Corinthians 12:7–10; Daniel 3:17–18; Isaiah 55:8–9; Acts 7:48–50',
    'youtube' => 'SiYAUNJPrMU',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Sometimes all we have to hold on to' . PHP_EOL,
      'Is what we know is true of who You are' . PHP_EOL,
      'So when the heartache hits like a hurricane' . PHP_EOL,
      'That could never change who You are' . PHP_EOL,
      'And we trust in who You are',
    ),

    new BS_Paragraph(
      null,
      'Even if the healing doesn’t come' . PHP_EOL,
      'And life falls apart' . PHP_EOL,
      'And dreams are still undone' . PHP_EOL,
      'You are God You are good' . PHP_EOL,
      'Forever faithful One' . PHP_EOL,
      'Even if the healing…even if the healing doesn’t come',
    ),

    new BS_Paragraph(
      null,
      '[sc]Lord[/sc] we know your ways are not our ways' . PHP_EOL,
      'So we set our faith in who You are' . PHP_EOL,
      'Even though You reign high above us' . PHP_EOL,
      'You tenderly love us' . PHP_EOL,
      'We know Your heart' . PHP_EOL,
      'And we rest in who You are',
    ),

    new BS_Paragraph(
      null,
      'You’re still the Great and Mighty One' . PHP_EOL,
      'We trust You always' . PHP_EOL,
      'You’re working all things for our good' . PHP_EOL,
      'We’ll sing your praise',
    ),

    new BS_Paragraph(
      null,
      'You are God and we will bless You' . PHP_EOL,
      'As the Good and Faithful One' . PHP_EOL,
      'You are God and we will bless You' . PHP_EOL,
      'Even if the healing doesn’t come' . PHP_EOL,
      'Even if the healing doesn’t come',
    ),
  ),
));
