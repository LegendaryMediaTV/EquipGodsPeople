<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Heading2(null, 'Where does this concept come from?'),

  new BS_BiblePassage(['passage' => 'Revelation 1:4–5', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Revelation 3:1–2', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Revelation 4:4–5', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Revelation 5:6', 'version' => 'NLT']),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'What are the seven spirits?'),

  new BS_Heading3(null, 'I. Spirit of Truth'),

  new BS_BiblePassage(['passage' => 'John 15:26', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'John 16:13', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => '1 John 4:6', 'version' => 'NLT']),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'II. Spirit of Power'),

  new BS_BiblePassage(['passage' => '2 Timothy 1:7', 'version' => 'NLT']),


  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'III. Spirit of Love'),

  new BS_BiblePassage(['passage' => '2 Timothy 1:7', 'version' => 'NLT']),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'IV. Spirit of Self-Discipline'),

  new BS_BiblePassage(['passage' => '2 Timothy 1:7', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'The word translated as “self-discipline” here is the Greek word “sophronismos” ([strongs id="g4995" /]) and is from the base of “sozo” (to save/deliver/redeem) [[strongs id="g4982" /]] and “phren” (gut/mindset/instinct) [[strongs id="g5424" /]]. So, it could literally be translated as “The Spirit of Saved Mindsets/Instincts.” The Holy Spirit’s goal is not to make us rely on our own will/abilities/strength for discipline, but to rely on God to rescue our minds and reclaim our instincts, knitting them to Him.'
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'V. Spirit of Wisdom'),

  new BS_BiblePassage(['passage' => 'Deuteronomy 34:9', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Proverbs 1:23', 'version' => 'NLT']),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'VI. Spirit of Judgment'),

  new BS_BiblePassage(['passage' => 'Isaiah 4:4', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Isaiah 19:14', 'version' => 'NLT']),

  new BS_Paragraph(null, 'This spirit was sent to punish the Egyptians, thus, it is of the Spirit of Judgment.'),

  new BS_BiblePassage(['passage' => 'Isaiah 29:10', 'version' => 'NLT']),

  new BS_Paragraph(null, 'This spirit was sent to punish the enemies of Jerusalem, thus, it is the Spirit of Judgment.'),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'VII. Spirit of Life'),

  new BS_BiblePassage(['passage' => 'Revelation 11:11', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Zechariah 12:10', 'version' => 'NLT']),

  new BS_Paragraph(null, 'Christ died to give us eternal life.'),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'What is the effect of this Sevenfold Spirit in our lives?'),

  new BS_BiblePassage(['passage' => 'Galatians 5:22–23', 'version' => 'NLT']),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Love'),

  new BS_Paragraph(null, 'The quality of warm regard for and interest in another, esteem, affection, regard, love'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g26" /] – agape (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) brotherly love, affection, good will, love, benevolence' . PHP_EOL,
      '2) love feasts'
    ),
  ),

  new BS_Paragraph(
    null,
    'Unlike “phileo” ([strongs id="g5368" /]), which is more of a close friendship or adoration, “agape” ([strongs id="g26" /]) is a true/unconditional love.'
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Joy'),

  new BS_Paragraph(null, 'The experience of gladness, a person or thing that causes joy, joy'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g5479" /] – chara (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) joy, gladness' . PHP_EOL,
      '1a) the joy received from you' . PHP_EOL,
      '1b) the cause or occasion of joy' . PHP_EOL,
      '1b1) of persons who are one’s joy'
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Peace'),

  new BS_Paragraph(null, 'State of concord, peace, harmony, state of well-being'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g1515" /] – eirene (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) a state of national tranquillity' . PHP_EOL,
      '1a) exemption from the rage and havoc of war' . PHP_EOL,
      '2) peace between individuals, i.e., harmony, concord' . PHP_EOL,
      '3) security, safety, prosperity, felicity, (because peace and harmony make and keep things safe and prosperous)' . PHP_EOL,
      '4) of the Messiah’s peace' . PHP_EOL,
      '4a) the way that leads to peace (salvation)' . PHP_EOL,
      '5) of Christianity, the tranquil state of a soul assured of its salvation through Christ, and so fearing nothing from God and content with its earthly lot, of whatsoever sort that is' . PHP_EOL,
      '6) the blessed state of devout and upright men after death'
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Patience'),

  new BS_Paragraph(null, 'State of remaining tranquil while awaiting an outcome, patience, steadfastness, endurance, state of being able to bear up under provocation, forbearance'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g3115" /] – makrothumia (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) patience, endurance, constancy, steadfastness, perseverance' . PHP_EOL,
      '2) patience, forbearance, longsuffering, slowness in avenging wrongs'
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Kindness'),

  new BS_Paragraph(null, 'Upright in one’s relations with others, uprightness, the quality of being helpful or beneficial, goodness, kindness, generosity'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g5544" /] – chrestotes (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) moral goodness, integrity' . PHP_EOL,
      '2) benignity, kindness'
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Goodness'),

  new BS_Paragraph(null, 'Positive moral quality characterized especially by interest in the welfare of others, goodness, generosity'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g19" /] – agathosune (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) uprightness of heart and life, goodness, kindness'
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Faithfulness'),

  new BS_Paragraph(null, 'That which evokes trust and faith, faithfulness, reliability, fidelity, commitment, assurance, oath, troth, proof, pledge, state of believing on the basis of the reliability of the one trusted, trust, confidence, faith, that which is believed, body of faith/belief/teaching'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g4102" /] – pistis (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) conviction of the truth of anything, belief; in the NT of a conviction or belief respecting man’s relationship to God and divine things, generally with the included idea of trust and holy fervour born of faith and joined with it' . PHP_EOL,
      '1a) relating to God' . PHP_EOL,
      '1a1) the conviction that God exists and is the creator and ruler of all things, the provider and bestower of eternal salvation through Christ' . PHP_EOL,
      '1b) relating to Christ' . PHP_EOL,
      '1b1) a strong and welcome conviction or belief that Jesus is the Messiah, through whom we obtain eternal salvation in the kingdom of God' . PHP_EOL,
      '1c) the religious beliefs of Christians' . PHP_EOL,
      '1d) belief with the predominate idea of trust (or confidence) whether in God or in Christ, springing from faith in the same' . PHP_EOL,
      '2) fidelity, faithfulness' . PHP_EOL,
      '2a) the character of one who can be relied on'
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Meekness'),

  new BS_Paragraph(null, 'The quality of not being overly impressed by a sense of one’s self-importance, gentleness, humility, courtesy, considerateness, meekness'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g4236" /] – prautes (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) gentleness, mildness, meekness'
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////

  new BS_Heading3(null, 'Self-control'),

  new BS_Paragraph(null, 'Restraint of one’s emotions, impulses, or desires, self-control'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(null, new BS_Bold(null, '[strongs id="g1466" /] – egkrateia (Thayer’s Greek Definitions)')),

    new BS_Paragraph(
      null,
      '1) self-control (the virtue of one who masters his desires and passions, esp. his sensual appetites)'
    ),
  ),

  new BS_Paragraph(
    null,
    'The word translated as “self-control” here is the Greek word “egkrateia” ([strongs id="g1466" /]) and is from the base of “en” (in) [[strongs id="g1722" /]] and “kratos” (strength) [[strongs id="g2904" /]]. So, it could literally be translated as “inner strength.” Not unlike “self-discipline” above, the the Holy Spirit’s goal is not to make us rely on our own will/abilities/strength for controlling our actions, but to rely on God to provide divine strength in core of our being.'
  ),
));
