<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage([
    'passage' => 'Isaiah 44:6',
    'version' => (object) [
      'abbreviation' => 'NASB',
      'title' => 'New American Standard Bible',
      'copyright' => 'Scripture quotations taken from the New American Standard Bible, © 1960, 1962, 1963, 1968, 1971, 1972, 1973, 1975, 1977, 1995 by The Lockman Foundation. Used by permission.'
    ],
    'verses' => [
      (object) [
        'number' => 6,
        'text' => 'Thus says the [sc]Lord[/sc], the King of Israel and his Redeemer, the [sc]Lord[/sc] of hosts: “[sc]I Am[/sc] the First and [sc]I Am[/sc] the Last, and there is no God besides Me.”',
      ],
    ],
  ]),

  new BS_BiblePassage([
    'passage' => 'Revelation 22:12–13',
    'version' => (object) [
      'abbreviation' => 'NASB',
      'title' => 'New American Standard Bible',
      'copyright' => 'Scripture quotations taken from the New American Standard Bible, © 1960, 1962, 1963, 1968, 1971, 1972, 1973, 1975, 1977, 1995 by The Lockman Foundation. Used by permission.'
    ],
    'verses' => [
      (object) [
        'number' => 12,
        'text' => '“Behold, [sc]I Am[/sc] coming quickly, and My reward is with Me, to render to every man according to what he has done.',
      ],
      (object) [
        'number' => 13,
        'text' => '[sc]I Am[/sc] the Alpha and the Omega, the First and the Last, the Beginning and the End.”',
      ],
    ],
  ]),
));
