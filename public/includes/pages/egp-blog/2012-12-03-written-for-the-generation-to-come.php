<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Ever since I saw this verse, I’ve thought of it as one of the main reasons we have the Bible.',
  ),

  new BS_BiblePassage(['passage' => 'Psalm 102:18', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'And it leads right into this verse…',
  ),

  new BS_BiblePassage(['passage' => 'John 20:28–29', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'As much as we’ve all wished we could have seen some of the stuff recorded in the Bible, we are blessed all the more for not seeing it and still believing. But praise God that He still speaks and does mighty things!',
  ),
));
