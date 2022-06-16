<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Ephesians 4:11–13; 1 Timothy 1:5'],

  new BS_Paragraph(
    null,
    'This ministry exists to “equip God’s people.” Not to fill our heads with knowledge, “but the goal of our instruction is love from a pure heart and a good conscience and a sincere faith.” Because “knowledge makes arrogant, but love edifies.” My hope and prayer is that these devotionals will churn your heart for God, encourage you to open your Bible, and help you to mature as dedicated disciples of Christ.',
  ),

  new BS_BiblePassage(['passage' => 'Ephesians 4:14–15', 'version' => 'NLT']),
));
