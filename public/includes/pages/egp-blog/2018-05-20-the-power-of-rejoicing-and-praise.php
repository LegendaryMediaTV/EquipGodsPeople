<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Philippians 4:4–7; 1 Thessalonians 5:16–18; Isaiah 42:10–13'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“Sometimes God allows us to be moved to a place of great internal CONTENTION and TURMOIL to bring about answers. It’s not that He CAN’T answer the easy prayer, it’s that He’s trying to DEVELOP something in us. STRENGTH is formed in us when there is a great PASSION, great ZEAL, great BOLDNESS. …'
    ),

    new BS_Paragraph(
      null,
      'So, my role is to stay HUMBLE and TENDER, to stay RESPONSIVE. Because whenever He speaks, He will create in me the ABILITY to do what He just COMMANDED me to do. And that is the marked difference between LAW and GRACE. … In grace He EMPOWERS. …'
    ),

    new BS_Paragraph(
      null,
      'If you want joy, REJOICE. Don’t rejoice because you HAVE joy. Rejoice to GET joy. … Some of those situations [you’re facing], all they need is a SONG. Some of the odds that seem so stacked AGAINST you—some of the circumstances that seem to be the most IMPOSSIBLE—they are no match for a SONG. They are no match for that yielded song of surrender that acknowledges the beauty of HOLINESS, the beauty of His WONDER, the beauty of His NATURE, His HISTORY with the people of God. And He’s no different today than He was then. And there’s that SONG, there’s that DECREE, there’s that SHOUT and the [sc]Lord[/sc] says He stirs Himself up and brings about VICTORY.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.podcastics.com/podcast/episode/warfare-101-93517/'],

        'Bill Johnson, Bethel Church, ',
        new BS_Citation(null, 'Warfare 101'),
      ),
    ),
  )
));
