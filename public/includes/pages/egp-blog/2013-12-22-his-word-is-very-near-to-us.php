<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Thanks be to God for loving us enough to send His Son down to teach us and die in our places, giving us the choice between eternal life and death, so that in choosing Him, His Word is very near to us…in our mouth and in our hearts!',
  ),

  new BS_BiblePassage(['passage' => 'Deuteronomy 30:11-20', 'version' => 'NASB']),
));
