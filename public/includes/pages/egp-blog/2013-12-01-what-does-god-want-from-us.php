<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Psalm 50:16-23', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'While many treat the Old Testament like God had a bad day and then in the New Testament He changed His mind, the truth is that the core message never changed. God doesn’t want people to pretend to obey Him. He doesn’t want people to praise Him with their mouths and curse Him in their hearts ([bible to="Isaiah 29:13" /], [bible to="Mark 7:6-7" /]). He doesn’t want people to do as they please and then hope that their “good deeds” and “sacrifices” will balance it out in the end…that’s karma, not Christ ([bible to="Isaiah 64:6-8" /]).',
  ),

  new BS_Paragraph(
    null,
    'To this day, people want to pick and choose which of God’s laws and Christ’s messages apply, while throwing the rest away. They think that just because God doesn’t explicitly rebuke them right here and now, that they are in the right or that He doesn’t mind. But, the message is still the same…repent and He will show you the Way to His Salvation. We must recognize that our way of doing things doesn’t work.',
  ),

  new BS_BiblePassage(['passage' => 'Proverbs 14:12', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'People think, “Well, if God is love and Jesus preached love, then He’ll accept me (and everyone else) in the end with open arms.” But, quite possibly the most sobering part of this passage is where it says to those who ignore Him, “I will tear you apart, and no one will help you.” It literally says “no one will deliver you” or “there will be no Deliverer for you.” He wants a changed heart and mind, but even in that you could argue that He brings about the major changes in mindset and desires and that He just wants us to have the initial change from our selfish ways to wanting Him and what He wants and the rest of the change is part of our journey with Him.',
  ),

  new BS_BiblePassage(['passage' => 'Psalm 51:15-17', 'version' => 'NLT']),
));
