<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '2 Corinthians 13:4; Revelation 21:1–5'],

  new BS_Paragraph(
    null,
    'Many only preach or witness about the blood and the death of Christ. As important as this is, there is more to the Good News than Christ dying in our place.',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 15:16–19', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'What this passage is saying is that, if faith in Christ is only good for making it through this life, then Christianity is worthless and Christians live pitiful lives. In his next letter to the Corinthians Paul said, “For we also are weak in [Christ], yet we will live with Him because of the power of God directed toward you.”',
  ),

  new BS_Paragraph(
    null,
    'So, live this life in a way that would be pitiful if Christianity weren’t true, praise God that Christ died in our place, but more than just getting to live, thank God that we will get to live in His presence for eternity!',
  ),
));
