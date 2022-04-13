<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Revelation 21:3–5',
    'youtube' => 'XVMhNkIlYFg',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'You’re in a better place, I’ve heard a thousand times' . PHP_EOL,
      'And at least a thousand times I’ve rejoiced for you' . PHP_EOL,
      'But the reason why I’m broken, the reason why I cry' . PHP_EOL,
      'Is how long must I wait to be with you',
    ),

    new BS_Paragraph(
      null,
      'I close my eyes and I see your face' . PHP_EOL,
      'If home’s where my heart is then I’m out of place' . PHP_EOL,
      'Lord, won’t You give me strength to make it through somehow' . PHP_EOL,
      'I’ve never been more homesick than now',
    ),

    new BS_Paragraph(
      null,
      'Help me Lord ‘cause I don’t understand Your ways' . PHP_EOL,
      'The reason why I wonder if I’ll ever know' . PHP_EOL,
      'But, even if You showed me, the hurt would be the same' . PHP_EOL,
      '‘Cause I’m still here so far away from home',
    ),

    new BS_Paragraph(
      null,
      'In Christ, there are no goodbyes' . PHP_EOL,
      'And in Christ, there is no end' . PHP_EOL,
      'So I’ll hold onto Jesus with all that I have' . PHP_EOL,
      'To see you again…to see you again!',
    ),
  ),
));
