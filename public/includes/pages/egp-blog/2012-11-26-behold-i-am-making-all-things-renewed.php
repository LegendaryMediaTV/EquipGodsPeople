<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 Corinthians 3:10–15; Matthew 26:28; Galatians 6:15'],

  new BS_BiblePassage(['passage' => '2 Peter 3:10–13', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The word translated “destroyed” ([greekCode]luw[/greekCode] [[strongs id="g3089" /]], luo, pronounced [i]loo’-o[/i]) is the same word translated “loosed”, so symbolically here “released from bondage”. In [bible to="2 Peter 3:12"]verse 12[/bible] it talks about “burning,” which in the Greek is the word “puroo” ([greekCode]purow[/greekCode] [[strongs id="g4448" /]], [i]poo-ro’-o[/i]), where we get our word “pure” as in “purified by fire.”',
  ),

  new BS_Paragraph(
    null,
    'You may be asking “what about the new heaven and earth?” The word translated “new” here is “kainos” ([greekCode]kainov[/greekCode] [[strongs id="g2537" /]], [i]kahee-nos’[/i]) and literally means, “renewed, refreshed, or restored.” It seems “kainos” could be split into two parts, “kaio” ([greekCode]kaiw[/greekCode] [[strongs id="g2545" /]], [i]kah’-yo[/i], “to set on fire”) and “neos” ([greekCode]neov[/greekCode] [[strongs id="g3501" /]], [i]neh’-os[/i], “new”), to give you “made new by fire.”',
  ),

  new BS_BiblePassage([
    'passage' => '2 Corinthians 5:17',
    'version' => (object) [
      'abbreviation' => 'NASB',
      'title' => 'New American Standard Bible',
      'copyright' => 'Scripture quotations taken from the New American Standard Bible, © 1960, 1962, 1963, 1968, 1971, 1972, 1973, 1975, 1977, 1995 by The Lockman Foundation. Used by permission.'
    ],
    'verses' => [
      (object) [
        'number' => 17,
        'text' => 'Therefore if anyone is in Christ, he is a [renewed] creature; the old things passed away; behold, [renewed] things have come.',
      ],
    ],
  ]),

  new BS_BiblePassage([
    'passage' => 'Revelation 21:5',
    'version' => (object) [
      'abbreviation' => 'NASB',
      'title' => 'New American Standard Bible',
      'copyright' => 'Scripture quotations taken from the New American Standard Bible, © 1960, 1962, 1963, 1968, 1971, 1972, 1973, 1975, 1977, 1995 by The Lockman Foundation. Used by permission.'
    ],
    'verses' => [
      (object) [
        'number' => 5,
        'text' => 'And He who sits on the throne said, “Behold, [sc]I Am[/sc] making all things [renewed].” And He said, “Write, for these words are faithful and true.”',
      ],
    ],
  ]),
));
