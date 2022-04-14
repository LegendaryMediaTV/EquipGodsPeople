<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Hebrews 13:20; 1 Peter 2:25; Revelation 7:14; Isaiah 53:5'],

  new BS_Paragraph(
    null,
    'If you’re like me and wonder how the symbols of Christmas came to be Christmas tradition and what they actually have to do with Christ, you should check out [i]Stories Behind the Great Traditions of Christmas[/i] by Ace Collins. You might even pick up some traditions you didn’t know about.',
  ),

  new BS_Paragraph(
    null,
    'Here’s a neat tidbit to get you interested. Candy canes are usually white with red stripes. The cane shape itself is symbolic of the Shepherd’s staff, the white is symbolic of purity, the red is symbolic of Christ’s blood, and as for the stripes, in Isaiah, it says “by his stripes we are healed.” All that from a piece of minty candy…',
  ),

  new BS_Paragraph(
    null,
    'This excellent little book is an easy read and is great for helping keep Christ in CHRISTmas, by giving you reminders of God’s love through His Son, rather than getting caught up in the commerce of the season.',
  ),

  new BS_Paragraph(
    null,
    new BS_Link(
      ['to' => 'https://www.amazon.com/Stories-Behind-Great-Traditions-Christmas/dp/0310601495/'],
      'Buy [i]Stories Behind the Great Traditions of Christmas[/i] by Ace Collins on Amazon'
    ),
  ),
));
