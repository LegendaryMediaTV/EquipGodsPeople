<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Proverbs 4:23–27; 1 Corinthians 10:12–14',
    'youtube' => 'QASREBVDsLk'
  ],

  new BS_Paragraph(
    null,
    'This song has always hit home for me. Most people don’t just make a 90° turn from going the right direction, it’s the little choices you make daily that veer you off the path. You don’t always get to choose what you see or hear, but you choose what you look at, listen to, and absorb.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Be careful little eyes what you see' . PHP_EOL,
      'It’s the second glance that ties your hands' . PHP_EOL,
      'As darkness pulls the strings' . PHP_EOL,
      'Be careful little feet where you go' . PHP_EOL,
      'For it’s the little feet behind you that are sure to follow'
    ),

    new BS_Paragraph(
      null,
      'It’s a slow fade when you give yourself away' . PHP_EOL,
      'It’s a slow fade when black and white have turned to gray' . PHP_EOL,
      'Thoughts invade, choices are made, a price will be paid' . PHP_EOL,
      'When you give yourself away' . PHP_EOL,
      'People never crumble in a day' . PHP_EOL,
      'It’s a slow fade, it’s a slow fade'
    ),

    new BS_Paragraph(
      null,
      'Be careful little ears what you hear' . PHP_EOL,
      'When flattery leads to compromise, the end is always near' . PHP_EOL,
      'Be careful little lips what you say' . PHP_EOL,
      'For empty words and promises lead broken hearts astray'
    ),

    new BS_Paragraph(
      null,
      'The journey from your mind to your hands' . PHP_EOL,
      'Is shorter than you’re thinking' . PHP_EOL,
      'Be careful if you think you stand' . PHP_EOL,
      'You just might be sinking'
    ),

    new BS_Paragraph(
      null,
      'Daddies never crumble in a day' . PHP_EOL,
      'Families never crumble in a day',
    ),
  ),
));
