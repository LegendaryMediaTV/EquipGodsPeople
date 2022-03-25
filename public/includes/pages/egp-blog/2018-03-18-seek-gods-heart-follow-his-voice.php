<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Exodus 15:26; Exodus 19:5–6; Deuteronomy 13:4, 18; Deuteronomy 15:4–6; Deuteronomy 26:16–19; Deuteronomy 28:1–2, 15, 45, 62; Deuteronomy 30:2–3, 8–10, 17–20'],

  new BS_Paragraph(
    null,

    'It can easily feel like the “',
    new BS_BibleLink(['to' => 'Books of the Law']),
    '” (specifically, ',
    new BS_BibleLink(['to' => 'Exodus']),
    '–',
    new BS_BibleLink(['to' => 'Deuteronomy']),
    ') are simply chock full of antiquated and inapplicable laws and commandments. However, God doesn’t change. [',
    new BS_BibleLink(['to' => 'Malachi 3:6']),
    '] And yet, Christ fulfilled the law for us and freed us from it. [',
    new BS_BibleLink(['to' => 'Galatians 3:10–13']),
    '] So, as we read in the Old Testament, we must remember that God is still showing us what love and holiness look like. It is a picture of God Himself.',
  ),

  new BS_Paragraph(
    null,

    'With God, it’s always been about seeking His heart with yours, and hearing and following His voice. This is true even for the people in the Old Testament. God has always and will always bring it back to these core values.',
  ),

  new BS_BiblePassage(['passage' => 'Deuteronomy 4:29–31', 'version' => 'NASB']),
));
