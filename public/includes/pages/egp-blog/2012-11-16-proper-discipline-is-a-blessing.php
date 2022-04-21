<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Ecclesiastes 8:11', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'How true is this statement today?!? People walk around doing things without respect for others, or even themselves. No punishment…not even accountability…',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 3:13', 'version' => 'NKJV']),

  new BS_Paragraph(
    null,
    'While many believers today are afraid of admonishing one another, you can be assured that God won’t let our sinfulness slide for too long.',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 12:5–6', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'Unfortunately, our society has turned in such a way where most people don’t discipline their children. Perhaps it’s because they were disciplined too hard. Or, more likely, it’s just because they don’t want to be disciplined themselves! What most people don’t realize, is that proper discipline is a blessing.',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 12:7–11', 'version' => 'NLT']),
));
