<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Think of some things that cause stress in your life. When you come up with several, write them as if around a circle. When done, write “Jesus” in bold in the center of the circle. Focus your vision on the word “Jesus” and notice what happens to all the other words.',
  ),

  new BS_BiblePassage(['passage' => 'Luke 22:41–44', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Hebrews 12:1–4', 'version' => 'NLT']),

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Do you ever wonder whether people who have passed on watch those of us who are still here? How does that affect the choices you make?',
      'Describe a time in your life when you moved Christ from His primary position in your life. How did that affect your stress level?',
      'If you put that matter into His hands, describe the difference that made on your stress level.',
      'Christ’s view of the ultimate eternal goal helped Him endure the suffering He received. With the cross you bear, how can you gain endurance?',
      'How can you maintain a better focus on Christ and view things from an eternal perspective?',
    ],
  ]),

  new BS_Heading2(null, 'Helen Lemmel – “Turn Your Eyes upon Jesus” (1922)'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'O soul, are you weary and troubled?' . PHP_EOL,
      'No light in the darkness you see?' . PHP_EOL,
      'There’s a light for a look at the Savior,' . PHP_EOL,
      'And life more abundant and free!'
    ),

    new BS_Paragraph(
      null,
      'Turn your eyes upon Jesus,' . PHP_EOL,
      'Look full in His wonderful face,' . PHP_EOL,
      'And the things of earth will grow strangely dim,' . PHP_EOL,
      'In the light of His glory and grace.'
    ),

    new BS_Paragraph(
      null,
      'Through death into life everlasting' . PHP_EOL,
      'He passed, and we follow Him there;' . PHP_EOL,
      'Over us sin no more hath dominion—' . PHP_EOL,
      'For more than conquerors we are!'
    ),

    new BS_Paragraph(
      null,
      'His Word shall not fail you—He promised;' . PHP_EOL,
      'Believe Him, and all will be well:' . PHP_EOL,
      'Then go to a world that is dying,' . PHP_EOL,
      'His perfect salvation to tell!'
    ),
  ),
));
