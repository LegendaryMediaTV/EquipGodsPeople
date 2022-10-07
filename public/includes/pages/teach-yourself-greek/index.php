<?php
$items = [
  [
    'title' => 'Greek Alphabet',
    'url' => '/teach-yourself-greek/greek-alphabet',
  ],
  [
    'title' => 'Pronunciation and Punctuation',
    'url' => '/teach-yourself-greek/pronunciation-and-punctuation',
  ],
];

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_Paragraph(
    null,
    'Are you ready to go deeper with your Bible studies? Do you want to go back to the original language of the New Testament and the Bible during the time of Jesus and the Apostles (the Septuagint)? Are you taking or thinking about taking a course on New Testament Greek? Teach yourself Greek online for free with this series of lessons!',
  ),

  new BS_Paragraph(
    null,
    'The language that the New Testament was written in is Koine Greek ([greekCode]koin/h[/greekCode], common) and was the common language of Jesus’s time. Latin and Aramaic were also widely used, but Koine Greek was considered the universal language. It is also worthy to note it has differences from classical Greek and modern Greek, but I imagine that since you are here, this probably won’t affect you too much.',
  ),

  new BS_Paragraph(
    null,
    '[strong][em]This section is a work in progress, so be sure to check back for updates![/em][/strong]',
  ),

  new BS_Paragraph(
    null,
    'Enough formalities, let’s get into the Greek!',
  ),

  new BS_ListGroup([
    'title' => 'Free Biblical Greek Lessons',
    'items' => $items,
  ]),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
