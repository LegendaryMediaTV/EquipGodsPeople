<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'I am found, I am Yours!' . PHP_EOL .
        'I am loved, I’m made pure!' . PHP_EOL .
        'I have life, I can breathe!' . PHP_EOL .
        'I am healed, I am free!',
    ),

    new BS_Paragraph(
      null,
      'You are strong, You are sure' . PHP_EOL .
        'You are Life, You endure' . PHP_EOL .
        'You are good, always true' . PHP_EOL .
        'You are Light breaking through',
    ),

    new BS_Paragraph(
      null,
      'You are more than enough' . PHP_EOL .
        'You are here, You are Love' . PHP_EOL .
        'You are hope, You are Grace' . PHP_EOL .
        'You’re all I have, You’re everything!',
    ),

    new BS_Paragraph(
      null,
      'Here’s my heart, [sc]Lord[/sc]' . PHP_EOL .
        'Speak what is true' . PHP_EOL .
        'Here’s my life, [sc]Lord[/sc]' . PHP_EOL .
        'Speak what is true',
    ),
  ),
));
