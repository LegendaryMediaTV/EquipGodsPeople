<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,
  new BS_BiblePassage(['passage' => 'Hebrews 10:19–22', 'version' => 'NASB'])
));
