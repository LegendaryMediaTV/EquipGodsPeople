<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Psalm 63:8', 'version' => 'ASV', 'variant' => 'paragraph']),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'O God, I have tasted Thy goodness, and it has both satisfied me and made me thirsty for more. I am painfully conscious of my need of further grace. I am ashamed of my lack of desire. O God, the Triune God, I want to want Thee; I long to be filled with longing; I thirst to be made more thirsty still.',
    ),

    new BS_Paragraph(
      null,
      'Show me Thy glory, I pray Thee, that so I may know Thee indeed. Begin in mercy a new work of love within me. Say to my soul, “Rise up, my love, my fair one, and come away.” Then give me grace to rise and follow Thee up from this misty lowland where I have wandered so long. In Jesus’ name, Amen.',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => '/classic-works/aw-tozer-pursuit-of-god/chapter-01-following-hard-after-god'],

        'A.W. Tozer, ',
        new BS_Citation(null, 'The Pursuit of God'),
        ', chapter 1',
      ),
    ),

  ),
));
