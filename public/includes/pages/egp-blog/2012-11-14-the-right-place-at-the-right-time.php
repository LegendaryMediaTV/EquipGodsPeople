<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Two seemingly unrelated verses that are very much relatedâ€¦',
  ),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 9:11', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 11:4', 'version' => 'NLT']),
));
