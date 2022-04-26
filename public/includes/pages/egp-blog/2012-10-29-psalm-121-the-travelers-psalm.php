<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'As I venture out over the next day or two on a work trip, I thought it might be nice to share “The Travelers’ Psalm”',
  ),

  new BS_BiblePassage(['passage' => 'Psalm 121', 'version' => 'NLT']),
));
