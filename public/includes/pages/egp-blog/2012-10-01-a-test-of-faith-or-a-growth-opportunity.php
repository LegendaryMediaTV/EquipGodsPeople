<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Mark 4:15; 2 Timothy 2:25–26; Ephesians 6:10–17; Romans 5:3–5; James 1:2–5'],

  new BS_Paragraph(
    null,
    'If you’ve been a Christian for any length of time, you’ve undoubtedly come across unbelievers that have all the questions to test your faith. While it’s easy to write them off as “un-ready soil”, remember that it’s our responsibility to throw the seed in hopes that they “may come to their senses and escape from the snare of the devil, having been held captive by him to do his will.”',
  ),

  new BS_BiblePassage(['passage' => '1 Peter 3:14–15', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'But then comes the question of what to say. Not all are Bible scholars and Satan has millenia of practice setting traps for the God’s people.',
  ),

  new BS_BiblePassage(['passage' => 'Matthew 10:19–20', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'So, put on God’s armor, pray (both before and during) that the words you say are God’s and not your own, and use it as an opportunity to grow in your faith.',
  ),
));
