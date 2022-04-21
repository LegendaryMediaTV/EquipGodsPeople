<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'As we dive face-first into the busiest time of year, don’t forget to step away from the busyness and into your prayer closet for some quiet time with God.',

    new BS_BiblePassage(['passage' => 'Mark 1:35', 'version' => 'NASB']),

    new BS_BiblePassage(['passage' => 'Matthew 6:6', 'version' => 'NASB']),
  ),
));
