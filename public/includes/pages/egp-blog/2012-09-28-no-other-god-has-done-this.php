<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 28:19–20; Hebrews 13:5; Acts 4:12'],

  new BS_Paragraph(
    null,
    'Many will remember from the Great Commission that Jesus said, “[sc]I Am[/sc] with you always, even to the end of the age.” And in Hebrews, we’re reminded that God said “I will never desert you, nor will I ever forsake you.” Check out this verse from Isaiah:',
  ),

  new BS_BiblePassage(['passage' => 'Isaiah 43:2', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'How about when Peter said this about Jesus: “there is salvation in no one else”?',
  ),

  new BS_BiblePassage(['passage' => 'Isaiah 43:11–13', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'Hallelujah and Amen!',
  ),
));
