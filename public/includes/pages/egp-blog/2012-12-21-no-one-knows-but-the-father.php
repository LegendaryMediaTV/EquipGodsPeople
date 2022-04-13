<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Matthew 24:35–39', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Calendar anomalies aside, if the angels don’t know the end of this age and even the Son doesn’t know, do you honestly think that a human would? The bigger point is that you need to be ready. You’re not guaranteed another minute, but when you know where you’re going, it doesn’t matter when.',
  ),

  new BS_BiblePassage(['passage' => 'James 4:13', 'version' => 'NASB']),
));
