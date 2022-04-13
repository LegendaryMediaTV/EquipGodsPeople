<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => '1 John 2:19–20', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'This passage shows that those who haven’t truly accepted Christ as Lord will eventually fall away. They may make some sort of confession, have faithful attendance, or they may even hold an office at a church! But when life hits hard or persecution begins, the truth inside comes out. The threshing floor (tough times and persecution) breaks apart the wheat (believers) from the chaff (unbelievers), and strengthens Christ’s Body.',
  ),

  new BS_BiblePassage(['passage' => 'Matthew 3:12', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    '[bible to="1 John 2:20"]Verse 20[/bible] talks about knowing because “you have an Anointing.” This “Anointing” is the Holy Spirit at work within us.',
  ),

  new BS_BiblePassage(['passage' => 'Ephesians 1:13–14', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'At the moment of our conversion to accept Christ’s salvation, our eternity was sealed by the Holy Spirit. The word translated “pledge” here carries the connotation of “a down payment,” in that the blessings we have here and now thanks to the Holy Spirit are just the beginnings, glimpse, and a promise of the blessings of our future eternity in God’s glorious presence!',
  ),
));
