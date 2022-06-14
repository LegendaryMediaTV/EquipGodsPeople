<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'P5AkNqLuVgY'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Looked down from a broken sky, traced out by the city lights' . PHP_EOL,
      'My world from a mile high, best seat in the house tonight [[bible to="Psalm 119:37" /]]' . PHP_EOL,
      'Touched down on the cold black top, hold on for the sudden stop' . PHP_EOL,
      'Breathe in the familiar shock, of confusion and chaos [[bible to="James 3:16" /]]',
    ),

    new BS_Paragraph(
      null,
      'All those people going somewhere, why have I never cared? [[bible to="Galatians 6:2" /]]',
    ),

    new BS_Paragraph(
      null,
      'Give me Your eyes for just one second, give me Your eyes so I can see' . PHP_EOL,
      'Everything that I keep missing, give me Your love for humanity [[bible to="James 1:27" /]]' . PHP_EOL,
      'Give me Your arms for the brokenhearted, the ones that are far beyond my reach' . PHP_EOL,
      'Give me Your heart for the ones forgotten, give me Your eyes so I can see [[bible to="Matthew 25:35–40" /]]',
    ),

    new BS_Paragraph(
      null,
      'Step out on a busy street, see a girl and our eyes meet' . PHP_EOL,
      'Does her best to smile at me, to hide what’s underneath [[bible to="Romans 15:1" /]]' . PHP_EOL,
      'There’s a man just to her right, black suit and a bright red tie' . PHP_EOL,
      'Too ashamed to tell his wife, he’s out of work, he’s buying time [[bible to="Romans 12:15" /]]',
    ),

    new BS_Paragraph(
      null,
      'I’ve been there a million times, a couple of million eyes just moving past me by' . PHP_EOL,
      'I swear I never thought that I was wrong [[bible to="James 4:17" /]]' . PHP_EOL,
      'Well, I want a second glance, so give me a second chance' . PHP_EOL,
      'To see the way You see the people all alone [[bible to="Hebrews 12:2" /]]',
    ),
  ),
));
