<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'John 10:10; James 3:14–18; Romans 7:23; 1 Kings 19:11–12; 1 Corinthians 14:33'],

  new BS_Paragraph(
    null,
    'Satan and his minions pull us in every direction, the lost and broken world pulls us in every direction, our heart and mind (the flesh) pull us in every direction…but God is the “still, small voice” that beckons us to Him because He “isn’t a God of disorder, but peace!”',
  ),

  new BS_BiblePassage(['passage' => 'Psalm 119:133', 'version' => 'KJV']),
));
