<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '2 Timothy 2:24–26; Mark 1:17; Romans 5:8–9; Galatians 6:1'],

  new BS_BiblePassage(['passage' => 'Jude 1:21–23', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Have mercy on some, who are doubting… We are to be merciful to all, but specifically here it says to be merciful to those doubting. The word translated “doubting” here ([greekCode]diakrinw[/greekCode] [[strongs id="g1252" /]], diakrino, dee-ak-ree’-no) actually carries more the connotation of “sorting things out”. You could argue whether this is referring to those struggling with their faith or those who show an interest in the things of God, but haven’t made a profession because they are still “sorting things out.” Either way, be merciful with them. There was a time when you too had to choose between the natural way and God’s ways, being angry and condescending will just drive them away.',
  ),

  new BS_Paragraph(
    null,
    'Save others, snatching them out of the fire… If the Holy Spirit is working on someone and they’re ready for Jesus, catch that fish before it drifts off!',
  ),

  new BS_Paragraph(
    null,
    'On some, have mercy with fear, hating even the garment polluted by the flesh… This verse is where we get the phrase, “love the sinner, but hate the sin.” Lost people are going to act like lost people, by making unbiblical choices. These days, people mistake tolerance for acceptance, but we are supposed to accept the person while not condoning their sins. At the same time, we are to be careful that we don’t fall into the same sins they’re dealing with.',
  ),
));
