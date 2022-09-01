<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Ephesians 5:22–33', 'version' => 'NKJV']),

  new BS_Heading2(null, 'A man you can trust; A woman you can appoint'),

  new BS_Lead(null, '22. Wives, [strong]submit[/strong] to your own husbands, as to the Lord'),

  new BS_Paragraph(
    null,
    'The word translated as “submit” is the Greek word “hupotasso” ([strongs id="g5293" /]). It is a compound word made up of two parts:'
  ),

  new BS_DefinitionList([
    'items' => [
      'hupo ([strongs id="g5259" /])' => 'under; figuratively: around, by',
      'tasso ([strongs id="g5021" /])' => 'to order, assign; figuratively: to ordain, appoint'
    ]
  ]),

  new BS_Paragraph(
    null,
    'So, literally it means “to put under orders,” much like the military where you do your part in order to make things work (including suggestions), but still ultimately “under orders” of the leader. The idea here isn’t a dictatorship by any means, but where the leader takes full ownership and responsibility. Ultimately, no matter how things went down, the husband will be the first one to answer to God for actions and outcomes. ([bible to="Genesis 3:9–11" /])'
  ),

  new BS_Lead(
    null,
    '23–24. For the husband is [strong]head[/strong] of the wife … therefore, just as the church is [strong]subject[/strong] [hupotasso] to Christ, so let the wives be to their own husbands in [strong]everything[/strong]'
  ),

  new BS_Paragraph(
    null,
    'Women must marry guys whose leadership they trust because they must follow it in everything. This is not to say that they cannot contribute (i.e., not have any say-so), but the husband’s word is final. This is why it is so important that she must trust his leadership before marriage, and that he trusts her willingness to follow him even when she doesn’t totally agree.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'A man who will protect; A woman worth risking yourself'),

  new BS_Lead(null, '23c. He Himself being the [strong]Savior[/strong] of the Body'),

  new BS_Paragraph(
    null,
    'The word translated as “savior” ([strongs id="g4990" /]) literally means “a savior, rescuer, deliverer, redeemer” and carries the idea of a protector willing to greatly sacrifice in order to provide safety and security for others.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'A man who loving with the ultimate love; A woman deserving ultimate love'),

  new BS_Lead(null, 'Husbands, [strong]love[/strong] your wives, just as Christ also [strong]loved[/strong] the church'),

  new BS_Paragraph(null, 'The word translated as “love” his is the Greek word “agape.” There are four Greek words for love:'),

  new BS_DefinitionList([
    'items' => [
      'agape ([strongs id="g26" /])' => 'true/unconditional love',
      'phileo ([strongs id="g5368" /])' => 'love (like a close friend); adore',
      new BS_Link(['to' => 'https://en.wikipedia.org/wiki/Storge'], 'storge') . ' (not in NT)' => 'familial love; companionship',
      new BS_Link(['to' => 'https://en.wikipedia.org/wiki/Eros_(concept)'], 'eros') . ' (not in NT)' => 'passionate/erotic love',
    ]
  ]),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'A man willing to die for you; A woman worth dying for'),

  new BS_Lead(null, '25c. And [strong]gave Himself up[/strong] for her'),

  new BS_Paragraph(
    null,
    'The word translated as “gave up” ([strongs id="g3860" /]) literally means “to hand over, deliver, relinquish.” The idea here is that the husband hands himself over to his wife, even being willing to relinquishing desires and sometimes even needs for her wellbeing.'
  ),

  new BS_Lead(null, '26. That He might [strong]sanctify[/strong] and [strong]cleanse[/strong] her with the washing of water by the word'),

  new BS_Paragraph(
    null,
    'The word “sanctify” ([strongs id="g37" /]) means “to make holy,” i.e., “to set apart as special, purify, consecrate.”'
  ),

  new BS_Paragraph(
    null,
    'The phrase “washing [[strongs id="g3067" /]] of water by the word [[strongs id="g4487" /]]” is literally “a water bath in a spoken word.” The idea is that the words he says are a personal message to her that wash her soul, freeing her heart from the dirt of the world.'
  ),

  new BS_Lead(null, '27. That He might present her to Himself a [strong]glorious church[/strong], not having [strong]spot[/strong] or [strong]wrinkle[/strong] or any such thing, but that she should be [strong]holy[/strong] and [strong]without blemish[/strong]'),

  new BS_Paragraph(null, 'Him dying for her is not in vain, but for her sanctity and purification.'),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Someone you can love as yourself'),

  new BS_Lead(null, '28a, 29a. So husbands ought to [strong]love[/strong] their own wives as their own bodies … [he] [strong]nourishes[/strong] and [strong]cherishes[/strong] it'),

  new BS_Paragraph(
    null,
    'The word translated as “love” ([strongs id="g25" /]) is the verb form of “agape” ([strongs id="g26" /]). It’s not simply providing food, but providing nutrients essential for growth and development. Although directed toward husbands, it applies to wives as well.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Someone you are willing to become [em]one[/em] with'),

  new BS_Lead(
    null,
    'For this reason a man shall [strong]leave[/strong] his father and mother and be [strong]joined[/strong] to his wife, and the two shall become [strong]one flesh[/strong]'
  ),

  new BS_Paragraph(
    null,
    'The significance of being “one flesh” is that you are the other person. What the other person is doing, you are doing. What you are doing, the other person is doing. So, you must trust the other person enough to become accountable for his/her actions.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'A woman who respects you, a man who is respectable'),

  new BS_Lead(null, '33b. Let the wife see that she [strong]respects[/strong] her husband'),

  new BS_Paragraph(
    null,
    'The word translated as “respect” ([strongs id="g5399" /]) can alse be translated “venerate,” which means, “to feel profound respect for, often mingled with awe and affection.”'
  ),
));
