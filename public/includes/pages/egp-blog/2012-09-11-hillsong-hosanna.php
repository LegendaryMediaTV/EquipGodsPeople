<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Psalm 51:10; Ephesians 1:18; John 13:34; James 1:27; Matthew 25:37–40',
    'youtube' => 'hnMevXQutyE',
  ],

  new BS_Paragraph(
    null,
    'The only way for a hardened heart to be made soft again is for it to be shattered.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'I see the King of Glory' . PHP_EOL,
      'Coming on the clouds with fire' . PHP_EOL,
      'The whole earth shakes' . PHP_EOL,
      'I see His love and mercy' . PHP_EOL,
      'Washing over all our sin' . PHP_EOL,
      'The people sing',
    ),

    new BS_Paragraph(
      null,
      'Hosanna' . PHP_EOL,
      'Hosanna in the Highest',
    ),

    new BS_Paragraph(
      null,
      'I see a generation' . PHP_EOL,
      'Rising up to take their place' . PHP_EOL,
      'With selfless faith' . PHP_EOL,
      'Oh, I see a near revival' . PHP_EOL,
      'Oh, it is stirring as we pray and seek' . PHP_EOL,
      'We’re on our knees',
    ),

    new BS_Paragraph(
      null,
      'Heal my heart and make it clean' . PHP_EOL,
      'Open up my eyes to the things unseen' . PHP_EOL,
      'Show me how to love like You have loved me' . PHP_EOL,
      'Break my heart for what breaks Yours' . PHP_EOL,
      'Everything I am for Your Kingdom’s cause' . PHP_EOL,
      'As I walk from earth into eternity',
    ),
  ),
));
