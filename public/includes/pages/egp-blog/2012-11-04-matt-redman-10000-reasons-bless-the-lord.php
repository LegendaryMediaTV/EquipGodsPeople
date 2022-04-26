<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'DXDGE_lRI0E'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Bless the [sc]Lord[/sc] oh my soul, oh my soul [[bible to="Psalm 103:1" /]]' . PHP_EOL,
      'Worship His holy Name [[bible to="Psalm 86:9" /]]' . PHP_EOL,
      'Sing like never before, oh my soul [[bible to="Psalm 66:4" /]]' . PHP_EOL,
      'I’ll worship Your holy Name [[bible to="Psalm 138:2" /]]',
    ),

    new BS_Paragraph(
      null,
      'The sun comes up, it’s a new day dawning [[bible to="Lamentations 3:22–23" /]]' . PHP_EOL,
      'It’s time to sing your song again [[bible to="Psalm 59:16" /]]' . PHP_EOL,
      'What ever may pass and whatever lies before me [[bible to="Philippians 4:11–13" /]]' . PHP_EOL,
      'Let me be singing when the evening comes [[bible to="1 Chronicles 23:30" /]]',
    ),

    new BS_Paragraph(
      null,
      'You’re rich in love and You’re slow to anger [[bible to="Psalm 103:8" /]]' . PHP_EOL,
      'Your Name is great and Your heart is kind [[bible to="Psalm 115:1" /]]' . PHP_EOL,
      'For all your goodness I will keep on singing [[bible to="Psalm 30:4" /]]' . PHP_EOL,
      '10,000 reasons for my heart to find [[bible to="Psalm 86:12" /]]',
    ),

    new BS_Paragraph(
      null,
      'And on that day when my strength is failing [[bible to="Psalm 73:26" /]]' . PHP_EOL,
      'The end draws near and my time has come [[bible to="Psalm 116:1–2" /]]' . PHP_EOL,
      'Still my soul will sing Your praise unending [[bible to="Psalm 30:12" /]]' . PHP_EOL,
      '10,000 years and then forever more [[bible to="Psalm 145:2" /]]',
    ),
  ),
));
