<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 6:33; Philippians 4:11–13; Romans 8:28; Genesis 50:20'],

  new BS_Paragraph(
    null,
    'Being one of the most quoted verses in the Bible, you’ve probably heard (and maybe said) this verse many times over the years.',
  ),

  new BS_BiblePassage(['passage' => '1 Thessalonians 5:16–18', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'I don’t know about you, but I have always mentally split this verse into three parts: we are to find our joy in Christ, keep in constant contact with God, and whatever is happening is God’s will for for us, so be thankful! I don’t think there’s necessarily anything wrong with that interpretation, but the other day I felt the Spirit telling me there was another way to look at it.',
  ),

  new BS_Paragraph(
    null,
    'What if we look at it like this… “This is God’s will for you: in Christ Jesus you will always rejoice, be in constant communication with Him, and be thankful no matter the circumstance!”',
  ),

  new BS_Paragraph(
    null,
    'So if you’re wondering what God’s will is for your life, “seek first His Kingdom and His righteousness, and all these things will be added to you.”',
  ),
));
