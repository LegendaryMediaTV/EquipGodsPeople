<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 8:14–18; Mark 10:13–16; 2 Corinthians 1:18–20; Matthew 6:31–34; Matthew 17:20; Luke 1:30–38'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“PROMISES are the invitation of God into a RELATIONAL journey where TOGETHER we labor to see things happen in the earth that reveal His NATURE. … His DESIRE is to work through sons and daughters. Why? Because … it takes a CHILD to reveal the nature of a FATHER. … He’s revealed for WHO HE IS through your answers to PRAYER. …'
    ),

    new BS_Paragraph(
      null,
      'Promises don’t make ME God. I don’t DICTATE to Him what He’s to do. But He does INVITE me into a relationship where I have INFLUENCE on what happens. … The invitation is for us to believe the IMPOSSIBLE. … Before you EVER believed a promise, He ALREADY said ‘yes’. … The Father DECREES a promise, but He waits for a CO-LABORER, the one who says ‘AMEN,’ the one who comes into alignment with His HEART.'
    ),

    new BS_Paragraph(
      null,
      '‘Well,’ people say, ‘MY prayers just AREN’T getting answered.’ Then CHANGE the way YOU pray. Or, ‘He doesn’t talk to ME about what’s in MY heart.’ Well, talk to HIM about what’s in HIS. Discover what it means to ‘seek first HIS Kingdom and ALL these things will be ADDED.’ Go to HIS agenda first and see how He BLESSES yours, and see how He CHANGES yours. … You get ALONE with God until you get BREAKTHROUGH. It’s not COMPLICATED, but it is CHALLENGING. …'
    ),

    new BS_Paragraph(
      null,
      'You’ve got to be driven by a GOD-SIZED dream. If you’re driven by a dream that YOU could accomplish on your own, it’s NOT a God-dream. In fact, let me take it a step farther. If you’re not OVERWHELMED by what He has ASSIGNED for you to do, you’ve not HEARD what He has to say. Because HIS assignment is so OVERWHELMING, that it compels us to TRUST.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.podcastics.com/podcast/episode/promises-fulfilled-93484/'],

        'Bill Johnson, Bethel Church, ',
        new BS_Citation(null, 'Promises Fulfilled'),
      ),
    ),
  )
));
