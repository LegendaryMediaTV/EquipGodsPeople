<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 Corinthians 1:17–18; 1 Peter 3:15; 2 Timothy 2:23–26'],

  new BS_BiblePassage(['passage' => '1 Corinthians 2:1–5', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'All too often today, Believers intentionally start debates with non-believers over hot topics (homosexuality, abortion, etc.), perhaps hoping that they will “win them over to Christ” by “winning” the debate. But Paul says that if he won people over with wise words, it would “make the cross of Christ void [i.e., ‘pointless’]. For the word of the cross is foolishness to those who are perishing, but to us who are being saved it is the power of God.”',
  ),

  new BS_Paragraph(
    null,
    'That is not to say that we are to be ignorant. On the contrary, we are to always be “ready to make a defense to everyone who asks you to give an account for the hope that is in you, yet with gentleness and reverence.” Defend in love when asked, so that “they may come to their senses and escape from the snare of the devil, having been held captive by him to do his will.”',
  ),
));
