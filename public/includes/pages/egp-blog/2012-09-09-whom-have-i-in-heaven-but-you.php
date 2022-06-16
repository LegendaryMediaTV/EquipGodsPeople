<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'I can never get enough of this passage…',
  ),


  new BS_BiblePassage(['passage' => 'Psalm 73:21–26', 'version' => 'NLT']),
));
