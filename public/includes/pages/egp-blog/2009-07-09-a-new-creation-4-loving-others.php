<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'This is part four of the series on “The Renewal of a New Creation.” If you haven’t already, be sure to check out the last post in the series: “Living the New Life.”',
  ),

  new BS_Heading2(null, 'I. It is by our love that we are known'),

  new BS_BiblePassage(['passage' => 'John 13:34–35', 'version' => 'NLT']),

  new BS_Heading2(null, 'II. Love is the fulfillment of the Law'),

  new BS_BiblePassage(['passage' => 'Romans 13:8–10', 'version' => 'NLT']),

  new BS_Heading2(null, 'III. Love must be genuine'),

  new BS_BiblePassage(['passage' => 'Romans 12:9–21', 'version' => 'NLT']),

  new BS_Heading2(null, 'IV. Love is foremost and eternal'),

  new BS_BiblePassage(['passage' => '1 Corinthians 13:1–10, 13', 'version' => 'NLT']),

  new BS_Heading2(null, 'Questions'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Give an example of when someone has displayed genuine love for you. How did it make you feel?',
      'In [bible to="John 13" /], Christ told us to not only love our neighbors as ourselves, but to love them as He has loved us. What differences does that entail?',
      '[bible to="1 Corinthians 13" /] lists some characteristics of love. How does knowing that God loves you with that kind of love encourage you as a believer?',
      'In what way can you experience and express God’s love to other believers and the community?',
    ],
  ]),
));
