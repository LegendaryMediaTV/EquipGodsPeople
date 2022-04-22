<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Job 1:21; Ecclesiastes 7:14; Philippians 4:11–13; Philippians 4:19',
    'youtube' => 'NL3NFhmxQxs'
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Blessed be Your Name in the land that is plentiful' . PHP_EOL,
      'Where Your streams of abundance flow, blessed be Your Name' . PHP_EOL,
      'Blessed be Your Name, when I’m found in the desert place' . PHP_EOL,
      'Though I walk through the wilderness, blessed be Your Name',
    ),

    new BS_Paragraph(
      null,
      'Every blessing You pour out I’ll turn back to praise' . PHP_EOL,
      'When the darkness closes in, [sc]Lord[/sc], still I will say' . PHP_EOL,
      'Blessed be the Name of the [sc]Lord[/sc], blessed be Your Name' . PHP_EOL,
      'Blessed be the Name of the [sc]Lord[/sc], blessed be Your glorious Name',
    ),

    new BS_Paragraph(
      null,
      'Blessed be Your Name when the sun’s shining down on me' . PHP_EOL,
      'When the world’s “all as it should be,” Blessed be Your Name' . PHP_EOL,
      'Blessed be Your Name on the road marked with suffering' . PHP_EOL,
      'Though there’s pain in the offering, blessed be Your Name',
    ),

    new BS_Paragraph(
      null,
      'You give and take away, You give and take away' . PHP_EOL,
      'My heart will choose to say, [sc]Lord[/sc], blessed be Your Name',
    ),
  ),
));
