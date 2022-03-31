<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => '2 Corinthians 5:6–9', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'I’m sure you’ve all heard [bible to="2 Corinthians 5:6–9"]verse 7[/bible] before, but what you may not know is that the word translated “sight” ([greekCode]eidov[/greekCode] [[strongs id="g1491" /]] eidos, pronounced i’-dos), literally means “appearance or form.” So, what this verse is really saying, is that true Christians walk by faith (in God, through Christ, by the Holy Spirit), not by appearance (i.e., simply “looking like a Christian” by doing things Christians supposedly do). True Christians aim to please God, not other people.',
  ),

  new BS_BiblePassage(['passage' => '2 Timothy 3:1–7', 'version' => 'NASB']),
));
