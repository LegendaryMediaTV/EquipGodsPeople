<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Psalm 19:1–2; Genesis 1; Hebrews 1:3; John 15:18–21; Isaiah 44:19'],

  new BS_BiblePassage(['passage' => 'Romans 1:20', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'If you want to believe that 14 billion years ago the universe was in a hot, dense state, then it exploded/expanded…fine…but how did the hot, dense universe get there? In addition to that, most of the parables Jesus used to describe His Father’s Kingdom were using nature. Even further still, many other truths are revealed by Creation, like the moon shining the sun’s light at night is symbolic of the Son reflecting the Father’s Glory.',
  ),

  new BS_BiblePassage(['passage' => 'Romans 1:21', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'People have a tendency to establish in their minds what God should be like and then chastise Him for not living up to THEIR standard. They also do the same thing to His children.',
  ),

  new BS_BiblePassage(['passage' => 'Romans 1:25', 'version' => 'NLT']),
));
