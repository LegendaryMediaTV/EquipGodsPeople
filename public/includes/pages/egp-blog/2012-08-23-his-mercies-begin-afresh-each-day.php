<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Lamentations 3:18–32', 'version' => 'NLT']),
));
