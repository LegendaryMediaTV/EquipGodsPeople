<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Matthew 6:21; Psalm 19:7–11; Colossians 3:1–5',
    'youtube' => 'JkSAMTp5leQ',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“I think many believers know how to enjoy pizza, … football, … friends, … sex. And you put that word ‘enjoy’ or ‘delight’ or ‘be satisfied’ onto God and they just shrug. … ‘I don’t relate to God that way. I DO stuff because He says to DO stuff.’ … God is to be TREASURED, God is to be ENJOYED, more than His GIFTS, in PROSPERITY and POVERTY, in HEALTH and DISEASE, in LIFE and DEATH. … The ENJOYMENT of God is the enjoyment of a PERSON, NOT the enjoyment of a THING, or an IDEA, or a PATTERN of actions. … Those things are NOT God and they’re not the ENDPOINT of our joy, but you would NEVER be joyful in God without THINGS, without IDEAS, and without ACTIONS on His part. …'
    ),

    new BS_Paragraph(
      null,
      'We know something of the SWEETNESS of His friendship, because we’ve tasted HONEY. That’s WHY honey EXISTS. … Honey EXISTS to help you KNOW God. We know something of His SUSTAINING RICHNESS because we’ve eaten BREAD when we are hungry. … We know something of the WARMTH of God’s AFFECTIONS because we remember being held by our MOTHER. We know something of the PERSONAL DEPTHS and EXQUISITE INTENSITY of person-to-person PLEASURE because we have felt SEXUAL DESIRE. That’s what sex is FOR: to KNOW God, TASTE God. And we know something of His WORTH because we have coveted GOLD, and even our SINS bear witness to His WORTH. …'
    ),

    new BS_Paragraph(
      null,
      'God’s creation, ALL of it, is DESIGNED by God as a SIGN and a FORETASTE of what it’s like to ENJOY God Himself. … These are NOT God, but they are His GIFTS. And if our enjoyment TERMINATES on them, we are IDOLATERS. We are to move INTO and THROUGH the gifts to HIM. And THEY taste the way HE tastes.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.desiringgod.org/messages/what-is-it-like-to-enjoy-god'],

        'John Piper, ',
        new BS_Citation(null, 'What Is It Like to Enjoy God?'),
        ', (Passion 2018)',
      ),
    ),
  )
));
