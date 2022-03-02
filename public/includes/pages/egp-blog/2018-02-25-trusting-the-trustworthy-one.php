<?php
$html->add(new BS_BlogEntryPage(
  ['metadata' => $metadata],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“There’s an unusual, seamless connection between three subjects in scripture: FEAR, WORSHIP, and TRUST. … What you FEAR will influence what you WORSHIP and what you WORSHIP will be proven by what you TRUST. Worship isn’t MERELY an act, a song, kneeling, raising hands, or whatever. It is kind of like two-part epoxy. It’s the second part that PROVES and ESTABLISHES the what REAL worship is in our HEART OF HEARTS, and that is TRUST. …'
    ),

    new BS_Paragraph(
      null,
      'The Bible says that He looks for WORSHIPERS … because we always BECOME like whatever we WORSHIP. … It means that it ALL has to be in accordance to what GOD SAYS, and what HE THINKS, and what HE has PURPOSED for my life.”'
    ),

    new BS_BiblePassage(['passage' => 'Proverbs 3:5–6', 'version' => 'NASB']),

    new BS_Paragraph(
      null,
      '“‘TRUST the [sc]Lord[/sc]’. Why? Because you become HEARING, PERCEIVING, sensitive to TOUCH. You become LIKE Him in your capacity and ability to live LIFE. … ‘All your HEART’ is a place of ABSOLUTE surrender. … Your THOUGHT LIFE is the offspring of who you COMMUNE with. … ‘In ALL your ways ACKNOWLEDGE Him.’ … This word means, ‘to come to KNOW in an EXPERIENTIAL and/or INTIMATE way.’ … God is actually giving [us] the invitation to come to know Him in all the different ways of our life. … It means I have to SET MY HEART to KNOW Him Who is [sc]Lord[/sc] over THAT [specific] expression of life. … That ENCOUNTER transforms who we ARE and what we’re CAPABLE OF doing.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'http://podcasts.ibethel.org/en/podcasts/trusting-the-trustworthy-one'],

        'Bill Johnson, Bethel Church, ',
        new BS_Citation(null, 'Trusting the Trustworthy One'),
      ),
    ),
  )
));
