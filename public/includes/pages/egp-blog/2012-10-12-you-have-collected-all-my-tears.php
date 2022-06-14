<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Isaiah 53:3; Psalm 126:5; Revelation 20:12; John 1:14; Romans 8:31'],

  new BS_BiblePassage(['passage' => 'Psalm 56:8–11', 'version' => 'NLT']),
));
