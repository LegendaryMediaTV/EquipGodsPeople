<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => '5iY_tmektJc'],

  new BS_Paragraph(
    null,
    'While I don’t know the full context of the original sermon referenced in the video by Matt Chandler, may we never turn the Victorious News (Gospel) into moralistic dont’s and do’s. Jesus always wants the broken, downtrodden, and those deceived by sin…otherwise He wouldn’t want anybody, because we ALL are all of those things.',
  ),

  new BS_BiblePassage(['passage' => 'John 10:10', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Now, this doesn’t mean that we are to forgo moralism all together or that there isn’t a time or place for preaching it, but typically the order of things is to catch the fish and THEN clean it. ([egp_BibleLink verse="Matthew 4:19" \/], [egp_BibleLink verse="John 8:3-11" \/])',
  ),

  new BS_Paragraph(
    null,
    'If people think it’s all about “being a good person,” then they’ll deceptively compare themselves to other people…the thief will say “at least I haven’t murdered,” the murderer will say, “at least I never ______,” etc.',
  ),

  new BS_BiblePassage(['passage' => 'Romans 3:20-24', 'version' => 'NLT']),
));
