<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Acts 16:30–34; Luke 6:46–49; Luke 14:26–33; Luke 18:18–27'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Most people just want to know what God can do for them rather than desiring to know Him. When we present the gospel, we try to answer one question: How do I keep from going to hell? After that question is answered, we stop asking questions about God. With the American church being so concerned about converts, we don’t take the time to present the God-centered universe to people. We don’t try to dig deep into the truth of God. Our belief in God needs to involve an accurate understanding of who He is and the implications of that for our lives.',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/Crazy-Love-Overwhelmed-Relentless-God/dp/1434705943/'],

        'Francis Chan with Danae Yankoski, ',
        new BS_Citation(null, 'Crazy Love: Overwhelmed by a Relentless God'),
      ),
    ),
  )
));
