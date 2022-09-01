<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Heading2(null, 'Suitable helper'),

  new BS_BiblePassage(['passage' => 'Genesis 2:18–24', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The “helper suitable” spoken of in verse 18 can also be translated as a “helping counterpart” (cf., ',
    new BS_Citation(
      null,
      new BS_Link(
        ['to' => '/egp-blog/2004-04-03-marriage-1-gods-original-intent'],
        'Marriage 1: God’s Original Intent'
      )
    ),
    '). Joining together to become one flesh is a reference to the unity of the marriage team. Thus, God brings your counterpart, not to complete you, but to complement you.'
  ),

  new BS_Paragraph(
    null,
    'The word counterpart is defined as “someone or something resembling another,” but breaking down this word reveals even more about it.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Counter'),

  new BS_Paragraph(
    null,
    'The prefix of the word is “counter-”, which is defined as ”[strong]acting in response[/strong]; done in [strong]reciprocation[/strong] or [strong]exchange[/strong]; [strong]complementing[/strong]; [strong]opposite[/strong] in direction or position.”'
  ),

  new BS_DefinitionList([
    'items' => [
      'Reciprocate' => 'act of moving backward and forward alternately; give and receive mutually; make a return (of an emotion, response, etc) in kind',
      'Exchange' => 'giving and receiving in turn',
      'Duplicate' => 'made like or corresponding exactly to an original; growing or existing in pairs'
    ]
  ]),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Part'),

  new BS_Paragraph(
    null,
    'The word “part” is defined as “a [strong]portion of a whole[/strong]; a distinct piece or portion that [strong]fulfills a specific function[/strong] in the working of the whole; one’s proper share, as of obligation or performance (i.e., to do one’s part); [strong]role[/strong]; divide or break (something into parts, separate; keep or move apart; become divided or broken into parts; go away from each other; cease associating; depart.”'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'The Marriage Circle'),

  new BS_Paragraph(
    null,
    'Marriage is not 50-50, but 100%-100%. If you’re not fulfilling your role 100% as a spouse, then it creates a gap between the two halves. As the gaps increase in number and size, then the contacting surface area decreases, causing friction and strain, making the Marriage Circle easy to break apart.'
  ),

  new BS_Paragraph(
    null,
    'If a person is to be your counterpart, then that person will complement your personality. This doesn’t mean that you will be exactly alike or exact opposites, but you should be a healthy combination of those two and especially of the middle-ground area (i.e., similarities).'
  ),

  new BS_Paragraph(
    null,
    'The reason this balance is important is because the productivity of the relationship depends on your (plural) ability to work together. Our responsibility as Christians is to “move on to perfection” and glorify God. ([bible to="Hebrews 6:1" /]) If your personalities don’t complement each other, then your circle will not join together correctly. For example, if you are both hot-tempered then that part will always clash forcing the other parts (no matter how closely they are fit) to separate.'
  ),

  new BS_Paragraph(
    null,
    'Also, if you are both lacking in a quality or trait (e.g., ability to make a decision), then that will leave gaps between the two halves. Both of these cases, the frequency and magnitude of the gaps, cause separation and result in an easily broken circle.'
  ),

  new BS_Paragraph(
    null,
    'Am I saying that two hot-tempered people cannot remain married? No, I’m saying that you must reciprocate each other’s personalities by extending guidance and grace to prevent division.'
  ),
));
