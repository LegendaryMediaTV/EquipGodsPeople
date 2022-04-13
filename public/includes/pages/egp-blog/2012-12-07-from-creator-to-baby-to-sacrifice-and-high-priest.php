<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'From Creator to helpless Baby to Sacrifice and High Priest, so that we can spend eternity with God!'
  ),

  new BS_BiblePassage(['passage' => 'Colossians 1:16', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Philippians 2:5–8', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Hebrews 10:11–13', 'version' => 'NASB']),
));
