<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Ephesians 6:12; Genesis 50:20; Psalm 18:16–19'],

  new BS_BiblePassage(['passage' => 'Romans 8:28', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'In the trenches of life, this verse often comes up. Sometimes it offers comfort, other times it just begs the question, “HOW?!?” You plead for God to intervene in the way only He can, but things continue to crumble around you.',
  ),

  new BS_BiblePassage(['passage' => 'Psalm 55:17–18', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'Remember that “our struggle is not against flesh and blood, but against the rulers, against the powers, against the world forces of this darkness, against the spiritual forces of wickedness in the heavenly places.” May we face those adversaries and boldly say, “As for you, you meant evil against me, but God meant it for good.”',
  ),

  new BS_BiblePassage(['passage' => 'Romans 16:20', 'version' => 'NLT']),
));
