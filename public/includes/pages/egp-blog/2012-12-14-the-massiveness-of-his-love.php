<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,
  new BS_BiblePassage(['passage' => 'Ephesians 3:14–21', 'version' => 'NLT']),
));
