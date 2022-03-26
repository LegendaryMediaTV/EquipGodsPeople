<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'OP2sFaVqg_c'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Open our eyes' . PHP_EOL,
      'To see the things that make Your heart cry' . PHP_EOL,
      'To be the church that You would desire' . PHP_EOL,
      'Your Light to be seen',
    ),

    new BS_Paragraph(
      null,
      'Break down our pride' . PHP_EOL,
      'And all the walls we’ve built up inside' . PHP_EOL,
      'Our earthly crowns and all our desires' . PHP_EOL,
      'We lay at Your feet',
    ),

    new BS_Paragraph(
      null,
      'So let hope rise and darkness tremble' . PHP_EOL,
      'In Your Holy Light' . PHP_EOL,
      'That every eye will see Jesus our God' . PHP_EOL,
      'Great and mighty to be praised',
    ),

    new BS_Paragraph(
      null,
      'God of all days' . PHP_EOL,
      'Glorious in all of Your ways' . PHP_EOL,
      'The majesty the wonder and grace' . PHP_EOL,
      'In the Light of Your Name',
    ),

    new BS_Paragraph(
      null,
      'With everything, with everything' . PHP_EOL,
      'We will shout for Your glory' . PHP_EOL,
      'With everything, with everything' . PHP_EOL,
      'We will shout forth Your praise',
    ),

    new BS_Paragraph(
      null,
      'Our hearts they cry, “Be glorified!”' . PHP_EOL,
      'Be lifted high above all names' . PHP_EOL,
      'For You our King, with everything' . PHP_EOL,
      'We will shout forth Your praise',
    ),
  ),
));
