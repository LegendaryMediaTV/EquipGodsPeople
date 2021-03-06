<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Luke 5:1–11; Romans 12:10–12; Psalm 37:16–17; 2 Corinthians 9:8; Proverbs 13:4'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“A POVERTY mindset looks at abundance as a means to DO LESS. That is not how KINGDOM ABUNDANCE works. Kingdom abundance actually means you’re about to work A LOT harder than you’ve EVER worked. So, just keep in mind, when you cry out for abundance, what that means is that you’re going to be REALLY busy for a VERY long time. … It means you’re about to BREAK your capacity. It will HURT. … THAT’s what Kingdom abundance is. It’s ALWAYS above your capacity.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.podcastics.com/podcast/episode/full-circle-93521/'],

        'Eric Johnson, Bethel Church, ',
        new BS_Citation(null, 'Full Circle'),
      ),
    ),
  )
));
