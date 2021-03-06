<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 5:21–22; Proverbs 18:20–21; Romans 8:35–39; 1 John 5:4–5; Philippians 4:6–9; John 14:26–27; Romans 8:5–6'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“BITTERNESS is immature MURDER. … In other words, it’s just UNDEVELOPED. … ‘LIFE and DEATH is in the power of the TONGUE.’ Even people who don’t murder still speak UNKINDLY and release DEATH into a given situation. … SELF-CONDEMNATION and SELF-HATRED is immature SUICIDE. … It’s the reason we have to stay so far away from those kinds of patterns of thought. It’s not that I’m GOING TO go kill myself, it’s just that it’s ALREADY KILLING me. …'
    ),

    new BS_Paragraph(
      null,
      'ANXIETY is exalting another IDEAL over what He has PROMISED. I’m actually giving my HEART, my THOUGHTS to that which is INFERIOR to the word of the [sc]Lord[/sc]. … When you’re filled with ANXIETY and STRESS, the goal is SURVIVAL, not CREATIVE EXPRESSION. And the [sc]Lord[/sc] really DESIRES, LONGS, to express who He is through His people—His own NATURE, the way He FUNCTIONS, His BEAUTY, the GLORY, the CREATIVE—all that stuff FLOWS through a yielded believer when they are FREE from the issues of anxiety and stress … not just as SURVIVORS, not just to stay POSITIVE, … but as an OVERCOMER. … I’m talking about a PERCEPTION that comes when WE SEE what JESUS SEES; we see THE WAY He sees. …',
    ),

    new BS_Paragraph(
      null,
      'In the WORLD, peace is always the ABSENCE of something. It’s the absence of NOISE, or WAR, or CONFLICT. In the KINGDOM, you can be in the middle of ALL those and have PEACE, because peace is a PERSON. … It’s the ABIDING PRESENCE of the SPIRIT OF GOD in my life. I’m not saying I can DROP it or LEAVE it in the sense that He abandons me, but the FELT AWARENESS of Him gets LAID ASIDE. … So, I REPENT my way back, EMBRACE PEACE once again, and use that as my LIFESTYLE.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.podcastics.com/podcast/episode/a-lifestyle-of-peace-93498/'],

        'Bill Johnson, Bethel Church, ',
        new BS_Citation(null, 'A Lifestyle of Peace'),
      ),
    ),
  )
));
