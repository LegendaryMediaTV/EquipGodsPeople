<?php
$html->add(new BS_BlogEntryPage(
  [ 'metadata' => $metadata ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      
      'You are all [', new BS_BibleLink([ 'to' => 'Psalm 40:17' ]), ']' . PHP_EOL,
      'Big and small [', new BS_BibleLink([ 'to' => 'Ephesians 4:6' ]), ']' . PHP_EOL,
      'Beautiful [', new BS_BibleLink([ 'to' => 'Psalm 27:4' ]), ']' . PHP_EOL,
      'And wonderful [', new BS_BibleLink([ 'to' => 'Psalm 40:5' ]), ']' . PHP_EOL,
      'To trust in grace through faith [', new BS_BibleLink([ 'to' => 'Romans 5:1–2' ]), ']' . PHP_EOL,
      'But I’m asking to taste [', new BS_BibleLink([ 'to' => 'Psalm 34:8' ]), ']',
    ),

    new BS_Paragraph(
      null,

      'For dark is light to You [', new BS_BibleLink([ 'to' => 'Psalm 139:11–12' ]), ']' . PHP_EOL,
      'Depths are height to You [', new BS_BibleLink([ 'to' => 'Psalm 139:7–8' ]), ']' . PHP_EOL,
      'Far is near [', new BS_BibleLink([ 'to' => 'Psalm 139:9–10' ]), ']' . PHP_EOL,
      'But, [sc]Lord[/sc], I need to hear from You [', new BS_BibleLink([ 'to' => 'Psalm 32:8–9' ]), ']',
    ),

    new BS_Paragraph(
      null,
      
      'Be near, O God [', new BS_BibleLink([ 'to' => 'James 4:8' ]), ']' . PHP_EOL,
      'Be near, O God, of us [', new BS_BibleLink([ 'to' => 'Hebrews 11:6' ]), ']' . PHP_EOL,
      'Your nearness is to us our good [', new BS_BibleLink([ 'to' => 'Psalm 73:28' ]), ']',
    ),

    new BS_Paragraph(
      null,

      'Your fullness is mine [', new BS_BibleLink([ 'to' => 'Ephesians 3:18–20' ]), ']' . PHP_EOL,
      'Revelation divine [', new BS_BibleLink([ 'to' => 'Luke 2:30–32' ]), ']' . PHP_EOL,
      'But, o, to taste [', new BS_BibleLink([ 'to' => 'Psalm 119:103' ]), ']' . PHP_EOL,
      'To know much more than a page [', new BS_BibleLink([ 'to' => 'John 5:37–40' ]), ']' . PHP_EOL,
      'To feel Your embrace [', new BS_BibleLink([ 'to' => 'Song of Solomon 8:2–3' ]), ']',
    ),
  )
));
