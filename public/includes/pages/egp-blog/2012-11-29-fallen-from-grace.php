<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '2 Corinthians 1:22; Ephesians 1:13; Ephesians 4:30; Hebrews 6:17–20'],

  new BS_Paragraph(
    null,
    'Many people like to use the term “fallen from grace” to refer to those who have “fallen away from God” by becoming “willfully disobedient” or “committing the unforgivable sin.” So what does “fallen from grace” really mean?',
  ),

  new BS_BiblePassage(['passage' => 'Galatians 5:4–5', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Looking at this statement in context, we find that we “fall from grace” when we try to find our salvation in keeping the Law of the old covenant (i.e., the Ten Commandments).',
  ),

  new BS_Paragraph(
    null,
    'So, we see in verse five that, “we through the Spirit, by faith, are waiting for the hope of righteousness.” While some have interpreted this as saying, “when it’s all over, I hope I’m still worthy to be saved,” it is saying something else.',
  ),

  new BS_Paragraph(
    null,
    '“Through the Spirit” is a reference to the Holy Spirit being the “pledge” of our salvation and our salvation being “sealed” with the Holy Spirit “for the day of redemption.”',
  ),

  new BS_Paragraph(
    null,
    'So then comes the last part, “waiting for the hope of righteousness.” Look at [bible to="Acts 24:15" /], “having a hope in God, which these men cherish themselves, that there shall certainly be a resurrection of both the righteous and the wicked.” So, the “hope” is that God will perform what He promised.',
  ),

  new BS_Paragraph(
    null,
    'But you might have noticed that I skipped “by faith.” While it is a reference to our faith in Christ for salvation, we must understand what faith is.',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 11:1', 'version' => 'NASB']),
));
