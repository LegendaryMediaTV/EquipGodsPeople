<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => '2 Peter 1:2–3', 'version' => 'TPT'])
));
