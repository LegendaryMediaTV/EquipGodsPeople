<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 26:49; John 19:2–3; Philippians 2:17–18'],

  new BS_Paragraph(
    null,
    'The Greek word translated “[strongs id="g5463"]hail[/strongs]” is the same word that’s translated as “[strongs id="g5463"]rejoice[/strongs].” While it wasn’t uncommon to use it as a greeting, it does make some verses very sobering.',
  ),

  new BS_Paragraph(
    null,
    'For example, Judas led a mob to Jesus, then said, “Rejoice, Rabbi!” … and betrayed Him over to them with a kiss. Also, shortly after being scourged, the Roman soldiers crowned Jesus with thorns, gave Him a reed as scepter, put a robe on His open wounds, mockingly knelt down before Him, said, “Rejoice, King of the Jews!” … then continued to abuse Him and crucify Him.',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 12:2–4', 'version' => 'NASB']),
));
