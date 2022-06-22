<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'James 4:12; Matthew 18:15–17; Ephesians 4:15; Proverbs 27:17'],

  new BS_BiblePassage(['passage' => 'Matthew 7:4–5', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'I believe this is one of the most half-quoted and misused Scriptures as of late…by both believers and non-believers. Now, I realize that just a couple verses back in [bible to="Matthew 7:1"]verse 1[/bible] Jesus said, “Do not judge so that you will not be judged” and in [bible to="John 8:7" /] He said, “He who is without sin among you, let him be the first to throw a stone…”, but people have turned “don’t cast judgment” into, “YOU can’t say ANYTHING about ME until YOU are PERFECT.” Well, if that’s the case, then NONE of us can say ANYTHING to ANYONE this side of Glory!',
  ),

  new BS_Paragraph(
    null,
    'Jesus warns in [bible to="Matthew 7:2" /], “For in the way you judge, you will be judged; and by your standard of measure, it will be measured to you.” The plankeye passage isn’t about refraining from confronting someone about their sin, it’s about checking yourself for similar sin before calling someone else out, otherwise you will be called out even worse for your hypocrisy.',
  ),

  new BS_Paragraph(
    null,
    'There is One Judge, let Him judge…but, “if your brother sins, go and show him his fault in private,” … “speaking the truth in love.”',
  ),
));
