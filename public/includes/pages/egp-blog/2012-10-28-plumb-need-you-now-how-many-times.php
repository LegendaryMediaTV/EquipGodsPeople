<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => '9ylnx0NA9X4'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Well, everybody’s got a story to tell [[bible to="2 Corinthians 3:3" /]]' . PHP_EOL,
      'And everybody’s got a wound to be healed [[bible to="Matthew 5:44–45" /]]' . PHP_EOL,
      'I want to believe there’s beauty here [[bible to="Psalm 27:4" /]]' . PHP_EOL,
      'So, I guess you’re tired of holding on [[bible to="Psalm 73:23–24" /]]' . PHP_EOL,
      'I can’t let go, I can’t move on [[bible to="Psalm 55:4–6" /]]' . PHP_EOL,
      'I want to believe there’s meaning here [[bible to="Psalm 111:10" /]]',
    ),

    new BS_Paragraph(
      null,
      'How many times have You heard me cry out, “God please take this”? [[bible to="2 Corinthians 12:8–9" /]]' . PHP_EOL,
      'How many times have You given me strength to just keep breathing? [[bible to="Psalm 119:116" /]]' . PHP_EOL,
      'Oh I need You! God, I need You now! [[bible to="Psalm 86:1" /]]',
    ),

    new BS_Paragraph(
      null,
      'Standing on a road I didn’t plan [[bible to="Jeremiah 29:11" /]]' . PHP_EOL,
      'Wondering how I got to where I am [[bible to="Isaiah 55:9" /]]' . PHP_EOL,
      'I’m trying to hear that still small voice [[bible to="1 Kings 19:11–12" /]]' . PHP_EOL,
      'I’m trying to hear above the noise [[bible to="Psalm 93:3–4" /]]',
    ),

    new BS_Paragraph(
      null,
      'Though I walk, though I walk through the shadows [[bible to="Psalm 23:4" /]]' . PHP_EOL,
      'And I, I am so afraid [[bible to="Psalm 116:3–4" /]]' . PHP_EOL,
      'Please stay, please stay right beside me [[bible to="Psalm 16:8–9" /]]' . PHP_EOL,
      'With every single step I take [[bible to="Psalm 37:23" /]]',
    ),

    new BS_Paragraph(
      null,
      'How many times have You heard me cry out? [[bible to="Psalm 56:8–9" /]]' . PHP_EOL,
      'And how many times have You given me strength? [[bible to="Psalm 28:6–8" /]]',
    ),
  ),
));
