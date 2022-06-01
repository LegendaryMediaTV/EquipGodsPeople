<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Ephesians 5:25–27; Isaiah 54:5–6; 1 Corinthians 7:25–27; 1 Corinthians 7:8–9'],

  new BS_BiblePassage(['passage' => '1 Corinthians 7:29–31', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The point of this passage is that it’s easy for the things of life to block our eyes from our eternal destination, so Paul addresses several of those things here. Today, I’m going to start out with the first on the list: marriage.',
  ),

  new BS_Paragraph(
    null,
    'Marriage is a vital part of spurring each other to growth in God, having and raising kids, and gives us insight into Christ’s relationship to the Church and the Father’s relationship to Israel. Marriage is a great thing, so why did it make this list of distractions?',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 7:32–34', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'So, if you’re married, stay married and let your marriage spur your growth toward God. If you’re single, focus on “the things of the Lord” and “how you can please the Lord.” If you desire to get married, look for someone that will spur your growth in Christ.',
  ),
));
