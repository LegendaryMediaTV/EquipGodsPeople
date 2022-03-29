<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Our culture has accepted two huge lies. The first is that if you disagree with someone’s lifestyle, you must fear or hate them. The second is that to love someone means you agree with everything they believe or do. Both are nonsense. You don’t have to compromise convictions to be compassionate.',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.christianpost.com/news/exclusive-rick-warren-flat-out-wrong-that-muslims-christians-view-god-the-same-70767/'],

        'Rick Warren, ',
        new BS_Citation(null, 'Muslims, Evangelism & Missions'),
      ),
    ),
  ),
));
