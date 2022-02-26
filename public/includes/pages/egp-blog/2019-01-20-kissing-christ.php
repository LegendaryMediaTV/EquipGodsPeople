<?php
$html->add(new BS_BlogEntryPage(
  [ 'metadata' => $metadata ],

  new BS_Blockquote(
    null,
    
    new BS_BiblePassage([
      'passage' => 'Matthew 10:37',
      'version' => 'NASB',
      'variant' => 'paragraph',
    ]),

    new BS_Paragraph(
      null,

      '“That word for ‘love’ there is not ‘',
      new BS_LexiconLink([ 'to' => 'G25' ], 'agape'),
      ',’ the word there is ‘',
      new BS_LexiconLink([ 'to' => 'G5368' ], 'phileo'),
      '.’ It’s this AFFECTION. It’s this PASSION. … That word is translated ‘KISS’ in some places. [So] ‘If you KISS your KID more than you KISS ME, you’re NOT WORTHY of Me. … You don’t get who [sc]I Am[/sc].’ Really?!?',
    ),

    new BS_Paragraph(
      null,
      'And He doesn’t lower the bar. He doesn’t say to the rich, young ruler, ‘Hey, just sell EVERYTHING.’ He’s like, ‘No.’ ‘Okay, HALF.’ He doesn’t do THAT. He just goes, ‘Do you understand My WORTH? When you get the TREASURE that [sc]I Am[/sc], you’ll leave EVERYTHING.’ …',
    ),

    new BS_Paragraph(
      null,
      'Did you take that to HEART? Because we’re very good in our gatherings to go, ‘Oh, that was VERY CONVICTING. Oh yeah, touched my HEART.’ Well, what’s actually gonna CHANGE? … I think that most of us, when we hear sermons, let’s just be honest, we listen and we think, … ‘Can I still KEEP things the way they are, or would this INTERRUPT things?’ … Something HAS to change. Some of you will hear this message and go, ‘ABSOLUTELY!’ … There’s people that AGREE with it, [but] the question is: Will you SUFFER to obey these things? Will you actually SACRIFICE?”'
    ),

    new BS_BlockquoteFooter(
      null,
      
      '—Francis Chan, ',
      new BS_Citation(null, 'Rethinking Church'),
    ),
  )
));
