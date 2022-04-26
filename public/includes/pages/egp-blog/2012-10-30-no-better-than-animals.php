<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Luke 15:11–24; 1 Corinthians 10:12; Galatians 6:1; 2 Peter 2:20–22'],

  new BS_Paragraph(
    null,
    'People in general like to think of themselves as “evolved”. We think that we are better than animals and each other. We think that we know what’s best for ourselves (and each other).',
  ),

  new BS_BiblePassage(['passage' => 'Ecclesiastes 3:17–18', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'This passage literally says that God allows people to continue in their sinful ways “so that He can make it clear to them.”'
  ),

  new BS_Paragraph(
    null,
    'Even the prodigal son had this realization when he hit his low point. Jesus said, “The boy became so hungry that even the pods he was feeding the pigs looked good to him. But no one gave him anything. When he finally came to his senses, he said to himself, ‘At home even the hired men have food enough to spare, and here I am, dying of hunger!’” After squandering all his money on things that wouldn’t last, he became dependent on what people would give him.',
  ),

  new BS_Paragraph(
    null,
    'Believers must be careful also. Paul warns us, “If you think you are standing strong, be careful, for you, too, may fall into the same sin.” And again, “Dear brothers and sisters, if another Christian is overcome by some sin, you who are godly should gently and humbly help that person back onto the right path. And be careful not to fall into the same temptation yourself.” The enemy will strike you when you are weakest…be prepared (armored up, prayed up, and immersed in God’s Word).',
  ),
));
