<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Mark 10:34–45; Luke 22:41–42; John 16:23–24'],

  new BS_Paragraph(
    null,
    'I listen to ',
    new BS_Link(['to' => 'https://www.amazon.com/s?k=the+word+of+promise'], 'The Word of Promise NKJV Audio Bible'),
    ' (which I highly recommend BTW) on my way to work and a verse came on that made me bust out laughing.',
  ),

  new BS_BiblePassage(['passage' => 'Mark 10:35', 'version' => 'NKJV']),

  new BS_Paragraph(
    null,
    'Perhaps it made me laugh because in the verse before, He’d just finished telling them about how He was going to be betrayed, condemned, mocked, scourged, spat upon, and killed. Segue from that to: “Jesus, do whatever we want…”',
  ),

  new BS_Paragraph(
    null,
    'I understand that we, “have not because we ask not” ([bible to="James 4:2" /]) and that Jesus said, “whatever things you ask in prayer, believing, you will receive” ([bible to="John 14:13" /]), but let’s turn that prayer from “we want YOU to do whatever WE ask” to “not my will, but YOURS” and “make me want what YOU want.”',
  ),
));
