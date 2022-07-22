<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Isaiah 60:1; Isaiah 26:19; Isaiah 60:2'],

  new BS_BiblePassage(['passage' => 'Ephesians 5:1–20', 'version' => 'NLT']),

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Growing up, who did you imitate? What did you imitate about them? Why did you imitate them?',
      'This passage says we are to imitate God by following Christ’s example of “walking in love.” In what ways can we live that out?',
      'Re-read [bible to="Ephesians 5:16–17" /] several times throughout the week, and meditate on its application in your life.',
    ],
  ]),
));
