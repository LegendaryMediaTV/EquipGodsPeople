<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Ecclesiastes 3:11',
    'youtube' => 'ep0vghlpIfE',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'The lights go out all around me' . PHP_EOL,
      'One last candle to keep out the night' . PHP_EOL,
      'And then the darkness surrounds me' . PHP_EOL,
      'I know I’m alive but I feel like I’ve died' . PHP_EOL,
      'And all that’s left is to accept that it’s over' . PHP_EOL,
      'My dreams ran like sand through the fists that I made' . PHP_EOL,
      'I try to keep warm but I just grow colder' . PHP_EOL,
      'I feel like I’m slipping away'
    ),

    new BS_Paragraph(
      null,
      'After all this has passed, I still will remain' . PHP_EOL,
      'After I’ve cried my last, there’ll be beauty from pain' . PHP_EOL,
      'Though it won’t be today, someday I’ll hope again' . PHP_EOL,
      'And there’ll be beauty from pain' . PHP_EOL,
      'You will bring beauty from my pain'
    ),

    new BS_Paragraph(
      null,
      'My whole world is the pain inside me' . PHP_EOL,
      'The best I can do is just get through the day' . PHP_EOL,
      'When life before is only a memory' . PHP_EOL,
      'I’ll wonder why God lets me walk through this place' . PHP_EOL,
      'And though I can’t understand why this happened' . PHP_EOL,
      'I know that I will when I look back someday' . PHP_EOL,
      'And see how you’ve brought beauty from ashes' . PHP_EOL,
      'And made me as gold purified through these flames'
    ),

    new BS_Paragraph(
      null,
      'Here I am at the end of me (at the end of me)' . PHP_EOL,
      'Tryin’ to hold to what I can’t see (to what I can’t see)' . PHP_EOL,
      'I forgot how to hope' . PHP_EOL,
      'This night’s been so long' . PHP_EOL,
      'I cling to Your promise' . PHP_EOL,
      'There will be a dawn',
    ),
  ),
));
