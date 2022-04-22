<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => '9xPzTSpbYmk'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'You are not a god created by human hands [[bible to="2 Kings 19:17–19" /]]' . PHP_EOL,
      'You are not a god dependent on any mortal man [[bible to="Acts 7:48–50" /]]' . PHP_EOL,
      'You are not a god in need of anything we can give [[bible to="Acts 17:24–25" /]]' . PHP_EOL,
      'By Your plan, that’s just the way it is [[bible to="Psalm 115:3–8" /]]',
    ),

    new BS_Paragraph(
      null,
      'You are God alone, from before time began [[bible to="Genesis 1:1–5" /]]' . PHP_EOL,
      'You were on Your throne, You are God alone [[bible to="Psalm 93:1–2" /]]' . PHP_EOL,
      'And right now, in the good times and bad' . PHP_EOL,
      'You are on Your throne, You are God alone [[bible to="Isaiah 45:5–7" /]]',
    ),

    new BS_Paragraph(
      null,
      'You’re the only God whose power none can contend [[bible to="1 Samuel 2:6–10" /]]' . PHP_EOL,
      'You’re the only God whose Name and praise will never end [[bible to="Psalm 145:21" /]]' . PHP_EOL,
      'You’re the only God who’s worthy of everything we can give [[bible to="Isaiah 40:12–18" /]]' . PHP_EOL,
      'You are God, and that’s just the way it is [[bible to="Revelation 4:11" /]]',
    ),

    new BS_Paragraph(
      null,
      'Unchangeable [[bible to="Hebrews 6:17–20" /]]' . PHP_EOL,
      'Unshakable [[bible to="Hebrews 12:26–29" /]]' . PHP_EOL,
      'Unstoppable [[bible to="Romans 8:35–39" /]]' . PHP_EOL,
      'That’s what You are [[bible to="2 Corinthians 9:8" /]]',
    ),
  ),
));
