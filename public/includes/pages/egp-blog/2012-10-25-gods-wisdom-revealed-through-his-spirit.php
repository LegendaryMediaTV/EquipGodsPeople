<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Isaiah 64:4; 1 Corinthians 6:19; John 16:13–14'],

  new BS_BiblePassage(['passage' => '1 Corinthians 2:7–12', 'version' => 'NLT']),
));
