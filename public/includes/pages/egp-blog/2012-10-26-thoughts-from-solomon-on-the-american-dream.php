<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(null, 'Some thoughts from Solomon on “The American Dream”…'),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 2:1–11', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 4:4–6', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 5:10–11', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 6:9', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 11:9', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 12:13–14', 'version' => 'NLT']),
));
