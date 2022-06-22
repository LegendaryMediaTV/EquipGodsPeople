<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Luke 6:46; Matthew 7:21'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“But, Lord …” is an oxymoron isn’t it? It’s a contradiction in terms, because if Jesus is Lord, then we say, “Yes, Sir,” not, “But, Lord.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—Anne Graham Lotz, ',
      new BS_Citation(
        null,
        new BS_Link(
          ['to' => 'https://www.amazon.com/WHY-AnneGraham-Lotz/dp/0849908450/'],
          'Why? Trusting God When You Don’t Understand'
        )
      ),
    ),
  ),
));
