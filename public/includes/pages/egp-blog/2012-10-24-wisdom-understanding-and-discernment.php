<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'James 1:5', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Proverbs 2:2–9', 'version' => 'NASB']),
));
