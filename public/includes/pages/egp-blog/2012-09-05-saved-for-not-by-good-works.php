<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 11:6; James 2:26; James 2:24; Matthew 5:16; Matthew 6:1–4; Matthew 7:17–20'],

  new BS_BiblePassage(['passage' => 'Ephesians 2:8–10', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'We are not saved BY good works, but FOR good works. If it was by works, then “grace is no longer grace.” Yet, James tells us that “faith without works is dead” and that we are “justified by works and not by faith alone.” So what’s the deal?',
  ),

  new BS_Paragraph(
    null,

    new BS_Link(['to' => 'https://dictionary.reference.com/browse/justify'], 'Justification'),
    ' is defined as “to show (an act, claim, statement, etc.) to be just or right; to show a satisfactory reason or excuse for something done.” So, while we are not saved or “made right with God” BY our works, they SHOW that we are saved. That being said, we are not to do good works so that people will see them and glorify us, but so that people will see them and glorify God!',
  ),
));
