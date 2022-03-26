<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'For those wondering about the lack of posts here lately, I’ve been working on a complete overhaul of the website. Apparently rehashing over 10 years of work takes a bit of time, lol. I’m hoping that this make-over will make things work more efficiently for those that use the website and possibly open doors to get the rights to have newer translations available on the site by looking more professional.'
  ),

  new BS_Paragraph(
    null,
    'Besides that, God has led me through an amazing journey of meditating on the Scriptures…specifically [bible to="Ephesians" /] and then [bible to="Romans" /] at this point.'
  ),

  new BS_BiblePassage(['passage' => 'Psalm 77:11', 'version' => 'NASB', 'variant' => 'paragraph']),

  new BS_Paragraph(
    null,
    'I believe God is possibly preparing me to work on a commentary and eventually a translation. We shall see, but until then I have enjoyed this time diving deeper in his scriptures and hope to share these insights with you all soon!'
  ),

  new BS_BiblePassage(['passage' => '2 Timothy 2:15', 'version' => 'NASB', 'variant' => 'paragraph']),
));
