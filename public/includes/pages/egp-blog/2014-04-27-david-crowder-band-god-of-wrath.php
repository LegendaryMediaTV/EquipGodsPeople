<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => '0gg4ErOtoW4'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,

      'God of wrath, God of love [[bible to="Colossians 3:4–7" /], [bible to="2 Corinthians 13:11" /]]' . PHP_EOL,
      'God of Earth and God above [[bible to="Deuteronomy 10:12–14" /]]' . PHP_EOL,
      'God of hope, God of peace [[bible to="Romans 15:13" /]]' . PHP_EOL,
      'God of you and God of me [[bible to="Isaiah 37:16" /]]'
    ),

    new BS_Paragraph(
      null,

      'God of day, God of night [[bible to="Psalm 42:8" /]]' . PHP_EOL,
      'God the Just and God the Light [[bible to="2 Thessalonians 1:5–10" /], [bible to="Isaiah 60:19–20" /]]' . PHP_EOL,
      'God of the strong, God of the weak [[bible to="1 Corinthians 1:25–29" /]]' . PHP_EOL,
      'God of you and God of me [[bible to="Ephesians 4:4–6" /]]'
    ),

    new BS_Paragraph(
      null,

      '[b]Chorus:[/b]' . PHP_EOL,
      'My love for You, my heart for You' . PHP_EOL,
      'My life for You, all I am for You [[bible to="Mark 12:28–31" /]]'
    ),

    new BS_Paragraph(
      null,

      '[b]Bridge:[/b]' . PHP_EOL,
      'Blood through my veins for You [[bible to="Revelation 12:11" /]]' . PHP_EOL,
      'I give my world to You [[bible to="Colossians 3:17" /]]' . PHP_EOL,
      'All I am and all I have, I lay it down for You [[bible to="Romans 12:1–2" /]]' . PHP_EOL,
      'Dancing ‘round with You, spinning ‘round with You [[bible to="2 Samuel 6:14" /]]' . PHP_EOL,
      'Laughing loud with You [[bible to="Psalm 47:1" /]]'
    ),
  ),
));
