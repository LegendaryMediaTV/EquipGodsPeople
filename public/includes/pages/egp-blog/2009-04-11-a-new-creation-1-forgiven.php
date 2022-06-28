<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'This is part one of the series on “The Renewal of a New Creation.” Be sure to check out the upcoming posts in the series.',
  ),

  new BS_Heading2(null, 'I. We are forgiven by God through Christ'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'A pitiful, sickly, and self-centered kind of prayer and a determined effort and selfish desire to be right with God are never found in the New Testament. The fact that I am trying to be right with God is actually a sign that I am rebelling against the atonement by the Cross of Christ. I pray, “Lord, I will purify my heart if You will answer my prayer-I will walk rightly before You if You will help me.” But I cannot make myself right with God; I cannot make my life perfect. I can only be right with God if I accept the atonement of the Lord Jesus Christ as an absolute gift. Am I humble enough to accept it? I have to surrender all my rights and demands, and cease from every self-effort. I must leave myself completely alone in His hands, and then I can begin to pour my life out in the priestly work of intercession. There is a great deal of prayer that comes from actual disbelief in the atonement. Jesus is not just beginning to save us-He has already saved us completely. It is an accomplished fact, and it is an insult to Him for us to ask Him to do what He has already done.',
    ),

    new BS_BlockquoteFooter(
      null,

      '—Oswald Chambers, ',
      new BS_Citation(
        null,
        new BS_Link(
          ['to' => 'https://www.amazon.com/My-Utmost-His-Highest-Updated-ebook/dp/B0049U4WA6/'],
          'My Utmost for His Highest: Special Updated Edition'
        )
      ),
      ', June 20',
      new BS_Superscript(null, 'th'),
      ' entry',
    ),
  ),

  new BS_Heading2(null, 'II. We are forgiven so we can experience the deepest dimensions of Christ’s love'),

  new BS_BiblePassage(['passage' => 'Ephesians 3:14–21', 'version' => 'NLT']),

  new BS_Heading2(null, 'III. We are forgiven so we can express Christ’s love so that others will know they can experience His love too'),

  new BS_BiblePassage(['passage' => '1 Timothy 1:12–17', 'version' => 'NLT']),

  new BS_Heading2(null, 'Questions'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Have you ever felt like something from your past was/is unforgivable?',
      'How did/does this feeling of unforgiveness hinder your spiritual growth?',
      'How has God shown you more about His love through this experience?',
      'Have you ever had a trial in your life where God later used what you learned to minister to someone else?',
      'Do you think your ministry to this person would have been as effective without that experience?',
      'How can you experience and express God’s forgiveness and love for both believers and the community?',
    ],
  ]),
));
