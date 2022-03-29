<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Often in church we talk about Christ’s death. The beauty of Easter is that it reminds us of the resurrection. Anyone can die for what they believe in or stand for, but only Christ had the power to lay down His life and pick it back up again! ([bible to="John 10:18" /]) Happy Resurrection Sunday, my brothers and sisters!',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 15:13-17', 'version' => 'NASB']),
));
