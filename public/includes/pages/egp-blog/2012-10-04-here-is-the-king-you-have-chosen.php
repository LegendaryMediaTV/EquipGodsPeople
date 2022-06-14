<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Colossians 1:16; Colossians 2:9–10; Ephesians 1:19–21; Titus 3:1'],

  new BS_Paragraph(
    null,
    'Many people don’t like their current ruler, and those who are fortunate enough to have the ability to vote often feel like they are “picking the lesser of two evils”.',
  ),

  new BS_BiblePassage(['passage' => 'Romans 13:1', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'In [bible to="1 Samuel 8:5" /], we read that the elders of Israel said to Samuel (the judge God appointed over them), “appoint a king for us to judge us like all the nations.” In the proceeding verses we read that God heard their request, but had Samuel warn them of the problems that would incur, ending with a very somber warning.',
  ),

  new BS_BiblePassage(['passage' => '1 Samuel 8:18–20', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'How often do we try to place our responsibilities on the government’s shoulders? Ironically, we freak out whenever they get used to “taking care of things for us”. While those who have the ability to vote may not like the options, they are the ones we have chosen by our actions.',
  ),

  new BS_BiblePassage(['passage' => '1 Samuel 12:13–14, 25', 'version' => 'NASB']),
));
