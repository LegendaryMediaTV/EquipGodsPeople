<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 6:11; John 6:48–52; Exodus 16:4'],

  new BS_BiblePassage(['passage' => 'Mark 1:35', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'I’m not a morning person at all, so it’s been an interesting challenge getting up and working out these devotionals before work. I’ve tried getting them done ahead of time, but God keeps emphasizing “daily bread”. It’s not that there’s anything wrong with preparing ahead of time; I’m sure He’s just keeping me humble, LOL!',
  ),

  new BS_Paragraph(
    null,
    'So, while I’m tempted to hit the snooze button and fall back asleep instead of spending quiet time with God, I am reminded of this verse:',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 4:15', 'version' => 'NASB']),
));
