<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Luke 8:18; Matthew 25:14–30; 1 Kings 17:10–16'],

  new BS_Paragraph(
    null,
    'Pretty much every time I ask God what He wants me to do, His answer is, “Be faithful where I currently have you, with what I’ve already given to you, and in what I’ve already asked of you.”',
  ),

  new BS_BiblePassage(['passage' => 'Luke 16:10–12', 'version' => 'NASB']),
));
