<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 5:8; Revelation 21:1; 2 Corinthians 3:7–11; Hebrews 9:19–28; Matthew 27:50–51'],

  new BS_Paragraph(
    null,
    'In reading [bible to="Exodus 34:28–35" /], we find that Moses went atop Mount Sinai to write down the Ten Commandments of the old covenant. Having spent 40 days face-to-face talking with God, “the skin of his face shone”, scaring everyone. After coaxing them to come closer, he told them “everything that the [sc]Lord[/sc] had spoken to him” and then put a veil over his face. He would remove the veil every time he spoke to God, tell the people what He said to him, and then put the veil back on.',
  ),

  new BS_Paragraph(
    null,
    'Being that the people were scared, you’d think that he’d put the veil on BEFORE speaking to the people, but instead he put it on AFTER. So…why?',
  ),

  new BS_BiblePassage(['passage' => '2 Corinthians 3:12–13', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'So, while it’s true that the “glory of his face” scared them and was so bright that they “couldn’t look intently” at his face, the real reason he veiled it was because that glory was fading and he didn’t want them to see that.',
  ),

  new BS_Paragraph(
    null,
    'While this may seem deceptive at first, it is actually symbolic. The truth is, the covenant of the Ten Commandments was never intended to last on its own. The sacrifices of the old covenant didn’t deal with the problem of sin. But even more so, while it’s true that, “until heaven and earth pass away, not the smallest letter or stroke shall pass from the Law until all is accomplished,” however, [bible to="Revelation 21:1"]Revelation[/bible] tells us that heaven and earth WILL pass away!',
  ),

  new BS_BiblePassage(['passage' => '2 Corinthians 3:14–16', 'version' => 'NASB']),
));
