<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'I’m thoroughly convinced that Jesus didn’t come to make bad people good, He came to make dead people alive.',
    ),

    new BS_BlockquoteFooter(
      null,
      '—Tim Hawkins',
    ),
  ),
));
