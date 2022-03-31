<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Philippians 3:12-16', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Many people have the idea that when people become believers, that they are supposed to have obtained perfection. Perhaps this is because many of those who claim to have Christ carry that air about them (it’s only a matter of time before the truth comes out), or perhaps it’s so they can find any fault in them and therefore discount Christianity. Even some believers doubt their own faith when they mess up or don’t have it all figured out.',
  ),

  new BS_Paragraph(
    null,
    'Paul, who wrote most of the New Testament books, says here that he hasn’t “laid hold” of perfection yet. But just because he hasn’t reached it yet (nor can we this side of the resurrection), he doesn’t just give up and say, “this is the best I can give.” Instead, he lets go of the things that were important to him in the past (self-righteousness, other’s approval, etc; see [bible to="Philippians 3:7–8" /]) and “presses on toward the goal” which is the higher calling of Christ. ([bible to="Colossians 3:1–2" /])',
  ),

  new BS_Paragraph(
    null,
    'The word translated “attitude” ([greekCode]fronew[/greekCode] phroneo [[strongs id="g5426" /]], pronounced [i]fron-eh’-o[/i]), means “to set one’s mind on.” So, what this last statement is saying is, “All us ‘perfect’ people need to set our minds on living out what God has already given us, and if our minds are set on something else, He will let us know.” Therefore, be faithful in what God has given you, listen for His voice, and obey what He says, in order to stay on track.',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 9:25-27', 'version' => 'NASB']),
));
