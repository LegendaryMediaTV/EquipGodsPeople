<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Deuteronomy 30:11–20', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'It’s interesting to me how many times it came up to love God (even in [bible to="Deuteronomy 30:10"]verse 10[/bible] before this)…and it was always paired with “obey”. What most people miss out on is that we obey BECAUSE we love, not obey TO be loved. And it’s when our hearts start to turn away from God to something else that disobedience creeps in.'
  ),

  new BS_Paragraph(
    null,
    'Choose God and therefore choose life, love, blessings, and liberty. Choose anything else and therefore choose death, hate, curses, and bondage.',
  ),
));
