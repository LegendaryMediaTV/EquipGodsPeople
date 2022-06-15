<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'PSD3evrAb4Y'],

  new BS_Paragraph(
    null,
    'This whole video is great, be sure to check it out!',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Learning how to become a magician, I’ve developed a skepticism. … If I was going to believe in this God, if I was going to believe in the Bible, if I was going to acknowledge who ultimately the Bible points to, which is Jesus, if I was going to acknowledge all those things… I asked God, I said, “God, I need You to make this REAL to me. I need to You to make this SO real to me. I need you to take me back behind the curtain.” Sometimes when you pray prayers you don’t exp…you don’t WANT them to be answered. Mine was getting ready to be answered…',
    ),

    new BS_BlockquoteFooter(
      null,

      '—Jim Munroe, ',
      new BS_Citation(null, 'I Am Second'),
    ),
  ),
));
