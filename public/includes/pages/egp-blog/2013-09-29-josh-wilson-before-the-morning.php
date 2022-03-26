<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => '0JYGhQWgqq4'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Do you wonder why you have to' . PHP_EOL,
      'Feel the things that hurt you' . PHP_EOL,
      'If there’s a God who loves you' . PHP_EOL,
      'Where is He now?',
    ),

    new BS_Paragraph(
      null,
      'Maybe, there are things you can’t see' . PHP_EOL,
      'And all those things are happening' . PHP_EOL,
      'To bring a better ending' . PHP_EOL,
      'Some day, some how, you’ll see, you’ll see',
    ),

    new BS_Paragraph(
      null,
      'Would dare you, would you dare, to believe' . PHP_EOL,
      'That you still have a reason to sing' . PHP_EOL,
      '‘Cause the pain you’ve been feeling' . PHP_EOL,
      'Can’t compare to the joy that’s coming' . PHP_EOL,
      'So hold on, you got to wait for the Light' . PHP_EOL,
      'Press on, just fight the good fight' . PHP_EOL,
      'Because the pain you’ve been feeling' . PHP_EOL,
      'It’s just the dark before the morning',
    ),

    new BS_Paragraph(
      null,
      'My friend, you know how this all ends' . PHP_EOL,
      'And you know where you’re going' . PHP_EOL,
      'You just don’t know how you get there' . PHP_EOL,
      'So say a prayer',
    ),

    new BS_Paragraph(
      null,
      'And hold on, cause there’s good for who love God' . PHP_EOL,
      'But life is not a snapshot' . PHP_EOL,
      'It might take a little time' . PHP_EOL,
      'But you’ll see the bigger picture',
    ),

    new BS_Paragraph(
      null,
      'Once you feel the weight of glory' . PHP_EOL,
      'All your pain will fade to memory' . PHP_EOL,
      'Once you feel the weight of glory' . PHP_EOL,
      'All your pain will fade to memory' . PHP_EOL,
      'Memory, memory, yeah',
    ),
  ),
));
