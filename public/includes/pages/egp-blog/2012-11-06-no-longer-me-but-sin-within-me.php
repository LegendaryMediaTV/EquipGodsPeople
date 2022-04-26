<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 John 3:23–24; Hebrews 12:1–2'],

  new BS_BiblePassage(['passage' => 'Romans 7:15–20', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Twice in this passage, Paul said, “I am no longer the one doing it, but sin which dwells in me.” This seems like a cop-out statement, but we must remember what he said in the previous chapter.',
  ),

  new BS_BiblePassage(['passage' => 'Romans 6:1–2', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'While we certainly don’t want to purposely continue to live in sin simply because of God’s grace (as that is a sign of an unchanged heart), we will continue to sin until we are “set free from this body of death.”',
  ),

  new BS_BiblePassage(['passage' => 'Romans 7:22–25', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Once again, remember that this doesn’t excuse our sinful thoughts and actions, it simply explains why we don’t win every battle on this side of Glory. In the end, God is faithful and provides a way out each time we face temptation, so pray that He will show that to you and that you’ll have His strength and the willingness to take that route.',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 10:13', 'version' => 'NASB']),
));
