<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Leviticus 19:18; Matthew 18:23–34; 1 Corinthians 7:21–23'],

  new BS_Paragraph(
    null,
    'Many people reading through the Bible have often wondered why it doesn’t speak out against slavery. In fact, it almost seems okay with it, even in the New Testament! As with many confusing Bible passages, cultural differences (and verses out of context) are the cause of confusion.',
  ),

  new BS_Paragraph(
    null,
    'Slavery in our time brings forth images of racism, kidnapping, and abuse. This type of slavery IS spoken against in the Bible, but not only under the umbrella of the great commandment, “love your neighbor as yourself.”',
  ),

  new BS_BiblePassage(['passage' => 'Exodus 21:16', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'So, what kind of slaves would exist then? Many slaves of that time were people who owed someone money and had to work it off (debt bondage) or had a work contract in exchange for room, board, and maybe travel (indentured servant). Even this kind of slavery lends itself to abuse, so Paul said, “You were bought with a price; do not become slaves of men.”',
  ),

  new BS_BiblePassage(['passage' => 'Romans 6:16–18', 'version' => 'NASB']),
));
