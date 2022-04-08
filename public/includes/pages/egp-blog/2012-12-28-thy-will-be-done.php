<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'There are only two kinds of people in the end: those who say to God, “Thy will be done,” and those to whom God says, “Thy will be done.”'
    ),

    new BS_BlockquoteFooter(
      null,
      '—C.S. Lewis'
    ),
  ),

  new BS_BiblePassage(['passage' => 'Zechariah 7:11', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Ephesians 4:17–24', 'version' => 'NLT']),
));
