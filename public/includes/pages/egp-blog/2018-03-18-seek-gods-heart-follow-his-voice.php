<?php
$html->add(new BS_BlogEntryPage(
  ['metadata' => $metadata],

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
    '] So, as we read in the ',
    new BS_BibleLink(['to' => 'Old Testament']),
    ', we must remember that God is still showing us what love and holiness look like. It is a picture of God Himself.',
  ),

  new BS_Paragraph(
    null,

    'With God, it’s always been about seeking His heart with yours, and hearing and following His voice. This is true even for the people in the ',
    new BS_BibleLink(['to' => 'Old Testament']),
    '. God has always and will always bring it back to these core values.',
  ),

  new BS_BiblePassage(['passage' => 'Deuteronomy 4:29–31', 'version' => 'NASB']),
));
