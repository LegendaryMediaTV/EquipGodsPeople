<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Heading2(null, 'I. Unbelievers are under the unbearable yoke of the Law'),

  new BS_BiblePassage(['passage' => 'Acts 15:4–11', 'version' => 'NASB']),

  new BS_Heading2(null, 'II. Believers are under Christ’s yoke, which is easy and His burden is light'),

  new BS_BiblePassage(['passage' => 'Matthew 11:27–30', 'version' => 'NLT']),

  new BS_Heading2(null, 'III. You are to shoulder your cross daily'),

  new BS_BiblePassage(['passage' => 'Luke 9:23–27', 'version' => 'NLT']),

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Describe a time recently when you felt overburdened.',
      'How did God prove Himself faithful in that situation?',
      'Describe a time when you gave your situation to God and felt a great burden lifted.',
      'What was people’s response to the way you handled the situation?',
      'How can you experience and express the ease of Christ’s yoke to other believers and the community?',
    ],
  ]),
));
