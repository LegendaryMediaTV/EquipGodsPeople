<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '2 Timothy 4:2–4; Matthew 5:13; Hebrews 4:12'],

  new BS_Paragraph(
    null,
    'It is as true in 2012 as it was 1520…',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'The ears of our generation have been made so delicate by the senseless multitude of flatterers that, as soon as we perceive that anything of ours is not approved of, we cry out that we are being bitterly assailed; and then we can repel the truth by no other pretense [a.k.a., any means possible], we escape by attributing bitterness, impatience, intemperance, to our adversaries. What would be the use of salt if it were not pungent, or of the edge of the sword if it did not slay?',
    ),

    new BS_BlockquoteFooter(
      null,

      '—Martin Luther, ',
      new BS_Citation(null, 'An Open Letter to Pope Leo X'),
      ', AD 1520',
    ),
  ),
));
