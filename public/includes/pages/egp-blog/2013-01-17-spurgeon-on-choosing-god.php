<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Nothing teaches us about the preciousness of the Creator as much as when we learn the emptiness of everything else.',
    ),

    new BS_BlockquoteFooter(
      null,
      '—C.H. Spurgeon'
    ),
  ),
));
