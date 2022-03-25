<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'YHA3pPjEQdw'],

  new BS_Paragraph(
    null,
    'Here is a wonderful worship song that represents a conversation between God and us about savoring Him:'
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,

      'Put down your paper plate' . PHP_EOL,
      'Come to the table made' . PHP_EOL,
      'Deep blue china' . PHP_EOL,
      'Found on the table by the wine, so fine' . PHP_EOL,
      'Well, it brings out flavor' . PHP_EOL,
      'Like You bring out color in life',
    ),

    new BS_Paragraph(
      null,

      'Oh! I miss You so!' . PHP_EOL,
      'The feel of forever' . PHP_EOL,
      'Oh! That taste I know,' . PHP_EOL,
      'It hurts to remember.',
    ),

    new BS_Paragraph(
      null,

      'Unfortunately high' . PHP_EOL,
      'Ironically dissatisfied' . PHP_EOL,
      'I miss You' . PHP_EOL,
      'I. Miss. You.',
    ),

    new BS_Paragraph(
      null,

      'I had a fleeting thought this morning' . PHP_EOL,
      'And I mentioned You today' . PHP_EOL,
      'It breaks my heart, just to know You in part' . PHP_EOL,
      'Not to be with You where You are',
    ),
  ),
));
