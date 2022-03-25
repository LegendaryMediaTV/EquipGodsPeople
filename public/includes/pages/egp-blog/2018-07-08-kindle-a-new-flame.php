<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Isaiah 41:13; Isaiah 43:19; Luke 24:32; Matthew 5:14–16; Matthew 11:28; Matthew 25:1–13; 2 Timothy 2:21'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“I have placed My hand upon you. The same hand that brings anointing also applies pressure. So do not resist My work in you. It is a good work to refine and strengthen, change and renew. A new thing I will do in you, a new flame I will kindle. I am preparing a vessel for this flame. A lamp for that light, one that is not tinted and does not obstruct the light. I will give you rest, my child, so fear not; lean upon Me as we travel swiftly to this new place.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/CONTROL-LOVING-BEVERE-LISA-2008-04-01/dp/B01N7NU27F/'],

        'Lisa Bevere, ',
        new BS_Citation(null, 'Out of Control and Loving It'),
        'chapter 6 journal excerpt',
      ),
    ),
  )
));
