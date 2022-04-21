<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => '1 Chronicles 29:10–13',
    'youtube' => 'C9yWgU8SZa8',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'I wanna be close, close to Your side [[bible to="Psalm 16:8–9" /]]' . PHP_EOL,
      'So Heaven is real and death is a lie [[bible to="2 Corinthians 5:1–4" /]]' . PHP_EOL,
      'I want to hear voices of angels above, singing as one [[bible to="Revelation 19:1–3" /]]',
    ),

    new BS_Paragraph(
      null,
      'Hallelujah, holy, holy; God Almighty, the Great [sc]I Am[/sc] [[bible to="Isaiah 6:2–3" /]]' . PHP_EOL,
      'Who is worthy, none beside Thee [[bible to="Revelation 5:1–5" /]]' . PHP_EOL,
      'God Almighty, the Great [sc]I Am[/sc] [[bible to="Exodus 3:14" /]]',
    ),

    new BS_Paragraph(
      null,
      'I wanna be near, near to Your heart [[bible to="Acts 13:22" /]]' . PHP_EOL,
      'Loving the world and hating the dark [[bible to="John 3:16–21" /]]' . PHP_EOL,
      'I want to see dry bones living again, singing as one [[bible to="Revelation 19:4–7" /]]',
    ),

    new BS_Paragraph(
      null,
      'The mountains shake before You [[bible to="Nahum 1:3–5" /]]' . PHP_EOL,
      'The demons run and flee at the mention of Your Name [[bible to="Acts 16:16–18" /]]' . PHP_EOL,
      'King of Majesty [[bible to="1 Chronicles 29:10–13" /]]' . PHP_EOL,
      'There is no power in Hell [[bible to="Matthew 16:18" /]]' . PHP_EOL,
      'Or any who can stand [[bible to="2 Chronicles 20:5–6" /]]' . PHP_EOL,
      'Before the power and the presence of the Great [sc]I Am[/sc] [[bible to="Philippians 2:9–11" /]]',
    ),
  ),
));
