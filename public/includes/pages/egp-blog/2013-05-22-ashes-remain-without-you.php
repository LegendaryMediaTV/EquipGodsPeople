<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'qQcF5XUmSVE'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Underneath the cold November sky' . PHP_EOL,
      'I wait for You' . PHP_EOL,
      'As the pages of my life roll by' . PHP_EOL,
      'I wait for You' . PHP_EOL,
      'I’m so desperate just to see Your face' . PHP_EOL,
      'Meet me in this broken place…',
    ),

    new BS_Paragraph(
      null,
      'Hold me now! I need to feel You' . PHP_EOL,
      'Show me how…to make it new again' . PHP_EOL,
      'There’s nowhere I can run to' . PHP_EOL,
      'And nothing I could ever do' . PHP_EOL,
      'I’m nowhere if I’m here…without You',
    ),

    new BS_Paragraph(
      null,
      'Even if You take it all away' . PHP_EOL,
      'I’ll wait for You' . PHP_EOL,
      'Even when the light begins to fade' . PHP_EOL,
      'I’ll wait for You' . PHP_EOL,
      'I’m so desperate calling out Your Name' . PHP_EOL,
      'Meet me in this broken place…',
    ),

    new BS_Paragraph(
      null,
      'I’m tired of running, and wrestling with these angels' . PHP_EOL,
      'I lay down my life and…I surrender',
    ),
  ),
));
