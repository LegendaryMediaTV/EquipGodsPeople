<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Job 15:14–16', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Ephesians 1:3–6', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Before even making us or even the world, God planned on sending His Beloved Son to save us…not based on our works (which apart from Christ are detestable in His sight), but on a Father’s kindness and His Son’s work on the cross, so that His Name will be glorified.',
  ),
));
