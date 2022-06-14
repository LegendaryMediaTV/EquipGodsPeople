<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Proverbs 14:12; John 14:6; Ephesians 4:14–15; Hebrews 4:9–11'],

  new BS_BiblePassage(['passage' => 'Judges 21:25', 'version' => 'NASB']),


  new BS_Paragraph(
    null,
    'In this age of relative truth (i.e., “what’s true for you isn’t necessarily true for me”), people are doing whatever they think is right by their own standards. While we do have rulers, many of us have ignored the King of Truth.',
  ),

  new BS_Paragraph(
    null,
    'At the same time, we have many who will tell us how to do things, but few step up to fill the parental or mentor role in people’s lives, leaving many churches as mere “spiritual nurseries.” Paul put it this way in [bible to="1 Corinthians 4:15–16" /], “For though you might have ten thousand instructors in Christ, yet you do not have many fathers; for in Christ Jesus I have begotten you through the gospel. Therefore I urge you, imitate me.” (NKJV)',
  ),

  new BS_Paragraph(
    null,
    'Often times there are justified desires that God puts in our hearts, but we place our timing to fulfill those desires over God’s timing. However, one day our “eyes,” desires, and timing will be fully aligned with God’s.',
  ),

  new BS_BiblePassage(['passage' => 'Deuteronomy 12:8–9', 'version' => 'NASB']),
));
