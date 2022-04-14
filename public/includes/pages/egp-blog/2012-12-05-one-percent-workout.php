<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Arnold Schwarzenegger (“actor”, Terminator, Governator) recently started a campaign for fitness called the 1% workout. Basically, 1% of your day is 15 minutes, so he’s saying that it’s better to give a single percentage of your time to your physical fitness than it is to not do anything about it.',
  ),

  new BS_Paragraph(
    null,
    'While physical fitness is important, [bible to="1 Timothy 4:8" /] says, “Physical exercise has some value, but spiritual exercise is much more important, for it promises a reward in both this life and the next.” (NLT)',
  ),

  new BS_Paragraph(
    null,
    'Ironically, you can read through the entire Bible in a year in about 15 minutes per day. Granted, it’s not about volume, it’s about change, but some people need a “structured workout.”',
  ),

  new BS_Paragraph(
    null,
    'So, don’t neglect exercise, but be sure to carve out a portion of your day for alone time with God.',
  ),

  new BS_Paragraph(
    null,
    new BS_Link(['to' => '/bible-reading-plans/whole-bible-canonically-in-a-year'], 'Click here for a reading plan for read the Bible in a year.'),
  ),
));
