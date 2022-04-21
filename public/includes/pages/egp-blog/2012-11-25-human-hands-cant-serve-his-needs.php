<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,
  new BS_BiblePassage(['passage' => 'Acts 17:24–28', 'version' => 'NLT'])
));
