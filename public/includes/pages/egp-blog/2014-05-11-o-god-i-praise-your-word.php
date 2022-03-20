<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage([
    'passage' => 'Psalm 56:9-13',
    'version' => 'NLT',
  ]),
));
