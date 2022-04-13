<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Some time ago, I’d started writing a song. At the time, my grandmother was in the hospital on her death bed and my wife was at one of her lowest points from chronic Lyme disease. In that part of my life, God was teaching me a hard lesson: that we pray to and praise the All-Knowing, All-Powerful, Ever-Present, Sovereign God no matter the circumstance and no matter the outcome.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '[sc]Lord[/sc], bring your healing' . PHP_EOL,
      'To her today (or “him”, “us”, or “Unto this place”)' . PHP_EOL,
      'We know You have the power' . PHP_EOL,
      'We know You have the grace' . PHP_EOL,
      'But we know that You’re sovereign' . PHP_EOL,
      'And that’s why we pray…' . PHP_EOL,
      '“[sc]Lord[/sc], bring your healing today…”',
    ),

    new BS_Paragraph(
      null,
      'Not my will, but Yours be done,' . PHP_EOL,
      'By the power of the Only Begotten Son!' . PHP_EOL,
      'To the glory of your Name, oh God' . PHP_EOL,
      'Holy Father let your Kingdom come!' . PHP_EOL,
      'And, [sc]Lord[/sc], bring your healing today…',
    ),
  ),
));
