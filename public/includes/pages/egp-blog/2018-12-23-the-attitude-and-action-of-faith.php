<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“You have to adopt a posture of BELIEVING and then, where appropriate, you have to ACT in accordance to what you believe. Because Scripture says, ‘FAITH without WORKS’—without appropriate ACTS—‘is DEAD.’ …'
    ),

    new BS_Paragraph(
      null,
      'It is not enough JUST to have faith; you have to have FAITH and PATIENCE. When you’ve located the PROMISE, when you’ve met the CONDITIONS, you have to HOLD ON in an attitude of faith or trust UNTIL the promise is fulfilled. … That’s a TEST of whether you REALLY have faith. …'
    ),

    new BS_Paragraph(
      null,
      'There’s a TIME LAG. You DO the will of God, you MEET the conditions, and then you HOLD ON. You DON’T GIVE UP. And in DUE COURSE—in God’s SOVEREIGNTY—the promise is COMPLETELY FULFILLED. It’s very important to maintain that ATTITUDE of faith and to ACT accordingly.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://itunes.apple.com/us/podcast/derek-prince-legacy-radio-international/id1345041114?mt=2&i=1000418595255'],

        'Derek Prince, ',
        new BS_Citation(null, 'God’s Abundance, part 6'),
      ),
    ),
  )
));
