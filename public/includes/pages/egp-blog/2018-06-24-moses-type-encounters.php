<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Exodus 33:7–20'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“I just want to meet with God. I just want to be alone with His Word every morning. I want to meet with you God, like Moses met with you. I want it to just be You and me in that room, because there’s nothing like this. … We want you to have these Moses-type of encounters. And even in a greater way, I believe we’re promised this in the New Testament through His Spirit. …'
    ),

    new BS_Paragraph(
      null,
      '‘You have found favor in My sight and I know you by name.’ Is there anything you want more than that? … This is holy. Nothing on the earth compares to these kinds of things. This is sacred. This should be the desire of our lives. Everything else is common.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'http://mysolutionsmagazine.com/read-scripture-week-4/'],

        'Francis Chan, ',
        new BS_Citation(null, 'Read Scripture, Week 4'),
      ),
    ),
  )
));
