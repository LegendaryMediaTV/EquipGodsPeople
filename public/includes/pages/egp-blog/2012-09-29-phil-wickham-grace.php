<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'vemzS9SlqeA'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'The sky is gray and the light is far [[bible to="Job 3:9" /]]' . PHP_EOL,
      'The sea is a rage within my heart [[bible to="Psalm 143:4" /]]' . PHP_EOL,
      'I turn my sight to the crashing waves [[bible to="2 Samuel 22:5–6" /]]' . PHP_EOL,
      'I cry in the night just to be saved [[bible to="Psalm 88:1–2" /]]',
    ),

    new BS_Paragraph(
      null,
      'I need Eyes to be my guide [[bible to="John 16:13" /]]' . PHP_EOL,
      'I need a Voice that’s louder than mine [[bible to="Psalm 29" /]]' . PHP_EOL,
      'I need Hope I, God need You! [[bible to="Hebrews 6:19–20" /]]' . PHP_EOL,
      '‘Cause I can’t do this alone! [[bible to="Philippians 4:13" /]]',
    ),

    new BS_Paragraph(
      null,
      'Grace I call Your Name [[bible to="Romans 10:13" /]]' . PHP_EOL,
      'Oh won’t Your smile fall over me [[bible to="Psalm 80:3" /]]' . PHP_EOL,
      'I’m cracked and dry on hands and knees [[bible to="Psalm 63:1" /]]' . PHP_EOL,
      'Oh sweet Grace rain down on me, I need You, Grace [[bible to="Isaiah 45:8" /]]',
    ),

    new BS_Paragraph(
      null,
      'I pray for dawn, a new day to live [[bible to="Job 7:4" /]]' . PHP_EOL,
      'I pray for mercy only Jesus gives [[bible to="Hebrews 4:14–16" /]]' . PHP_EOL,
      'Though darkness falls and a million cry [[bible to="Isaiah 8:21–22" /]]' . PHP_EOL,
      'I believe over all there’s a greater Light shining for us [[bible to="Luke 1:78–79" /]]',
    ),

    new BS_Paragraph(
      null,
      'Come down and save me!!! [[bible to="Psalm 31:2" /]]',
    ),
  ),
));
