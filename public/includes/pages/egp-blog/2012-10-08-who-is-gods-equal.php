<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Often, amazing verses get overshadowed by more popular ones.',
  ),

  new BS_BiblePassage(['passage' => 'Isaiah 40:25–31', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'Also, be sure to get the ',
    new BS_Link(['to' => 'https://www.facebook.com/YouVersion'], 'YouVersion Bible App'),
    ' if you have a smart phone or tablet device. They have a “verse of the day” widget that is great, many translations you can read and search, reading plans, and more!',
  ),
));
