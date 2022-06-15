<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 8:28; John 14:21; Colossians 2:2–3; Ephesians 1:17'],

  new BS_BiblePassage(['passage' => 'John 14:15', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'At first glance, this will seem like a very controlling statement, like youthful peer pressure or a controlling spouse. It is not saying, “If you REALLY loved me, you would do this for ME.” Instead, it’s saying, “When you truly love, these are the things you’ll be doing.” But also, in truly loving Christ, you realize that He has your best interests in mind and will trust Him in whatever He asks of you.',
  ),

  new BS_Paragraph(
    null,
    'A little further down, we read, “He who has My commandments and keeps them is the one who loves Me; and he who loves Me will be loved by My Father, and I will love him and will disclose Myself to him.”',
  ),

  new BS_Paragraph(
    null,
    'Not unlike marriage or close friendships, as we get more in harmony with Christ, He will open Himself up to us more, revealing things that aren’t revealed to just anyone.',
  ),
));
