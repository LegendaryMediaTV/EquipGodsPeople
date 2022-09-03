<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Heading2(null, 'God’s Original Intent'),

  new BS_BiblePassage(['passage' => 'Genesis 1:26–27', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'This passage show that God made [strong]both[/strong] Adam and Eve on the sixth day. Funny note: Adam didn’t make it a day without having Eve.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Why was Eve created?'),

  new BS_BiblePassage(['passage' => 'Genesis 2:18–20', 'version' => 'NASB']),

  new BS_Lead(null, '18a. God stated that it’s “not good for the man to be [strong]alone[/strong].”'),

  new BS_Paragraph(
    null,
    'The word translated “alone” ([strongs id="h905" /]) literally means “separated, implying a part of the body.” It comes from another Hebrew word ([strongs id="h909" /]) that means “divided or solitary.”'
  ),

  new BS_Lead(null, '18b. So He stated that He “will make a helper suitable for him.”'),

  new BS_Paragraph(
    null,
    'The word translated “helper” ([strongs id="h5828" /], ‘ezer) comes from another Hebrew word ([strongs id="h5826" /]) that means “to surround, as in protect, aid, help, succor,” where succor means “help or render relief to someone in danger or distress.”'
  ),

  new BS_Paragraph(
    null,
    'The word translated “suitable” ([strongs id="h5048" /], neged) can also be translated “counterpart or mate.”'
  ),

  new BS_Lead(null, '19-20. Companions but no counterpart'),

  new BS_Paragraph(
    null,
    'God created the [strong]animals of the field[/strong] (i.e., land animals) and [strong]birds of the sky[/strong], but Adam still didn’t have a [strong]counterpart[/strong] (‘ezer neged). So, why create animals before a counterpart? God was probably stating his foreknowledge of Adam’s need and then created the animals so Adam could see them as couples and lead him to realize what he was missing, and in turn, realize how special Eve was.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'How was Eve created?'),

  new BS_BiblePassage(['passage' => 'Genesis 2:21–22', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The word translated “deep sleep” ([strongs id="h8639" /]) can also be translated “lethargic,” which means “excessive drowsiness or abnormally deep sleep.” This is much like the modern anaesthetics used in surgeries.'
  ),

  new BS_Paragraph(
    null,
    'The footnote for the NIV says it could be translated that God “took one of a piece of his side.” So, why do different translations say somewhat different parts? Literally it says “And He took [em]one[/em] from his side, and closed up the flesh [em]underneath[/em].” The Hebrew word for “side” used here ([strongs id="h6763" /]) can be translated “rib or side.” It comes from another Hebrew word ([strongs id="h6760" /]) which means “curve” (i.e., like a rib has a curve to it).'
  ),

  new BS_Paragraph(
    null,
    'The word translated “fashioned” here ([strongs id="h1129" /]) literally means “to build.”'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Why use a piece of Adam?'),

  new BS_Paragraph(
    null,
    'The rib, as most parts, contains DNA; God could have easily altered the DNA to make a female, a process similar to cloning. Ribs, being cartilage, regenerate, meaning Adam would grow his rib back in time. It signifies the need of companionship and symbolizes the roles in a relationship.'
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“The Eternal was bringing into being not only another individual, but a new one, totally different, with another sex. Someone has said that ‘woman was taken not from man’s head to rule over him, nor from his feet to be trampled upon, but from his side, under his arm, to be protected, and closest his heart, to be loved.’ She is also represented in the story of creation as wholly dependent upon her husband and not complete without him. Similarly, man is never fully complete without the woman. It is God’s will that it should be so. Since woman was formed from man’s side, she is bound to him. He is obligated to give her the full protection and devoted shielding of his arm. The two beings make up a complete whole, the crown of creation.” (Pfeiffer, 5–6)'
    ),

    new BS_BlockquoteFooter(
      null,
      new BS_Link(
        ['to' => 'https://www.amazon.com/Wycliffe-Bible-Commentary-Charles-Pfeiffer/dp/0802496954/'],
        new BS_Citation(null, 'The Wycliffe Bible Commentary')
      ),
      ' (1962)',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'How does this process of creation affect us?'),

  new BS_BiblePassage(['passage' => 'Genesis 2:22–24', 'version' => 'NASB']),

  new BS_Lead(null, '22b. The first marriage'),

  new BS_Paragraph(
    null,
    'After Eve was created, God [strong]brought[/strong] her to Adam, making the first [strong]marriage[/strong]. God, being the Father, gave His daughter, Eve, to Adam in the same sense that an earthly father gives someone his daughter’s hand in marriage. Adam needed a companion, and God provided one.'
  ),

  new BS_Lead(null, '23a. Flesh and bone'),

  new BS_Paragraph(
    null,
    'In awe of the creation, Adam declared, “This is bone of [strong]my[/strong] bones and flesh of [strong]my[/strong] flesh.” Adam reiterates the usage of bone [strong]and[/strong] flesh here; therefore, the “piece of side” most likely included both.'
  ),

  new BS_Lead(null, '23b. He then calls her [em]woman[/em] because she is from [em]man[/em]'),

  new BS_Paragraph(
    null,
    'The Hebrew word for “woman/wife” ([strongs id="h802" /], ‘ishshaw, pronounced “ish-shaw’”) and the Hebrew word for “man” ([strongs id="h376" /], ‘iysh, pronounced “eesh”) sound very similar to each other.'
  ),

  new BS_Paragraph(
    null,
    'The ”-shah” is a feminine ending, much like the ”-a” in Spanish, thus signifying gender. The words we use for gender today originated in Middle English, being “man” and “woman”. In that time, “woe” was spelled “wo”, thus making it “woe to man”, where woe is defined as “overwhelming sorrow or grief, great trouble or disaster.” It’s sad how relationships have changed so much from their original intent that this point of view would be taken and accepted.'
  ),

  new BS_Lead(null, '24. Leave and cleave'),

  new BS_Paragraph(
    null,
    'This, all together, signifies that a man should [strong]leave[/strong] his parents, [strong]cleave[/strong] to his wife, and become [strong]one flesh[/strong]. So, make sure the one you unite with is worthy enough to become one flesh with.'
  ),
));
