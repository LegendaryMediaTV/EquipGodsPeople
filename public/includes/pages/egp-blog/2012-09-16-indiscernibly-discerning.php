<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 7:6; 1 Corinthians 1:18; John 14:26; John 3:8; Romans 10:14'],

  new BS_BiblePassage(['passage' => '1 Corinthians 2:14–15', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The word translated “appraise” here literally means “discerned or examined”. What the first verse of this passage is saying is that spiritual things can only be understood by those with the Holy Spirit. I think this is what Jesus meant when He said, “don’t throw your pearls before swine.”',
  ),

  new BS_Paragraph(
    null,
    'The second verse of this passage is an echo of what Jesus told his disciples in the upper room and what Jesus told Nicodemus early in His ministry. The Holy Spirit will teach us all things and help us discern the spiritual aspects of all things. Yet, while we have been given understanding and discernment, we will not be understandable when we walk in the Spirit.',
  ),

  new BS_Paragraph(
    null,
    'All this is not to say that we aren’t supposed to be witnessing to people, but …',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 1:21', 'version' => 'NLT']),
));
