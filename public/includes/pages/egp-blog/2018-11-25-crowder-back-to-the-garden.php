<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'NeOyFxjkqKY'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,

      'I was born to be royal [[bible to="1 Peter 2:9–10" /]]' . PHP_EOL,
      'I was made to be free [[bible to="Galatians 5:1" /]]' . PHP_EOL,
      'But I was torn from the garden [[bible to="Genesis 3:23–24" /]]' . PHP_EOL,
      'When that devil lied to me [[bible to="John 8:44" /]]',
    ),

    new BS_Paragraph(
      null,

      'I was formed from the soil [[bible to="Genesis 2:7" /]]' . PHP_EOL,
      'I got dirt inside of me [[bible to="Proverbs 30:12–14" /]; [bible to="Ezekiel 24:12–14" /]]' . PHP_EOL,
      'But I was born to be royal [[bible to="Isaiah 62:3–4" /]; [bible to="Revelation 1:5–6" /]]' . PHP_EOL,
      'I was made for glory [[bible to="Isaiah 43:7" /]; [bible to="Romans 8:29–30" /]]',
    ),

    new BS_Paragraph(
      null,

      'Take me back to the garden [[bible to="Ezekiel 36:33–36" /]]' . PHP_EOL,
      'Take me back and walk with me [[bible to="2 Corinthians 6:16–18" /]]' . PHP_EOL,
      'For Your presence I am longing [[bible to="Psalm 16:8–11" /]]' . PHP_EOL,
      'Take me back! God, take me back! [[bible to="Jeremiah 24:6–7" /]; [bible to="Zechariah 1:3–6" /]]',
    ),

    new BS_Paragraph(
      null,

      'Take me down to the river' . PHP_EOL,
      'Down to Eden’s crystal streams [[bible to="Revelation 22:1–4" /]]' . PHP_EOL,
      'Where every sin can be forgiven [[bible to="Romans 3:23–26" /]]' . PHP_EOL,
      'Holy Ghost come set me free [[bible to="John 16:7–14" /]]',
    ),

    new BS_Paragraph(
      null,
      'Take me back! Back to Your Kingdom come! [[bible to="Luke 11:2–4" /]]',
    ),
  )
));
