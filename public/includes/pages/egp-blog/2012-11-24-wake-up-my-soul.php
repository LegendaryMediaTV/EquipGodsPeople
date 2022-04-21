<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,
  new BS_BiblePassage(['passage' => 'Psalm 108:1–6', 'version' => 'NLT'])
));
