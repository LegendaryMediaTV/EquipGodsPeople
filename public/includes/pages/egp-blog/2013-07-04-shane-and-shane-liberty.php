<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => '2 Peter 2:19; Galatians 5:13; Galatians 5:1',
    'youtube' => 'MipmxHPbZF8',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'The [sc]Lord[/sc] is the Spirit' . PHP_EOL,
      'Where the Spirit of The [sc]Lord[/sc] is, now' . PHP_EOL,
      'There is liberty' . PHP_EOL,
      'And the Spirit lives inside of me' . PHP_EOL,
      'Where the Spirit of The [sc]Lord[/sc] is, now' . PHP_EOL,
      'There is liberty, there is liberty,' . PHP_EOL,
      'There is liberty',
    ),

    new BS_Paragraph(
      null,
      'For freedom You set me free' . PHP_EOL,
      'And yes, I am free indeed' . PHP_EOL,
      'You rewrote my name' . PHP_EOL,
      'And shackled my shame' . PHP_EOL,
      'You opened my eyes to see' . PHP_EOL,
      'I am free',
    ),

    new BS_Paragraph(
      null,
      'When the spirit of the world' . PHP_EOL,
      'Comes to kill me and enslave me I will say' . PHP_EOL,
      'There is liberty' . PHP_EOL,
      'For the chains of sin that once entangled me' . PHP_EOL,
      'Have been broken, now I’m singing ‘cause I’m free' . PHP_EOL,
      'There is liberty, there is liberty,' . PHP_EOL,
      'There is liberty',
    ),

    new BS_Paragraph(
      null,
      'The storm rolled in' . PHP_EOL,
      'It was dark in the land' . PHP_EOL,
      'As the Son of Man' . PHP_EOL,
      'Was crucified' . PHP_EOL,
      'You don’t take His life' . PHP_EOL,
      'He laid it down' . PHP_EOL,
      'He paid the price' . PHP_EOL,
      'And shed His blood' . PHP_EOL,
      'It is done!' . PHP_EOL,
      'The veil is torn, He has won' . PHP_EOL,
      'And I am free, and I am free' . PHP_EOL,
      'And I am free, I am free',
    ),
  ),
));
