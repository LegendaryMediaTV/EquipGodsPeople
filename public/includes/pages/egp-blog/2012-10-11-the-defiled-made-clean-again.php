<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 Timothy 4:2; John 7:38–39'],

  new BS_BiblePassage(['passage' => 'Psalm 18:25–26', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'At first glance, this may seem like God is putting on different faces for different people. In reality, it is saying that we see Him differently, depending on the condition of our mind and conscience.',
  ),

  new BS_BiblePassage(['passage' => 'Titus 1:15', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'Thank God that, though were defiled, we were made clean again!',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 10:21–22', 'version' => 'NLT']),
));
