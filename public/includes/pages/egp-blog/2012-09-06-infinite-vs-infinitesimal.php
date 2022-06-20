<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Genesis 1; Genesis 2:1–3'],

  new BS_BiblePassage(['passage' => 'Genesis 1:1', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'It’s so easy to get lost in the scale of things. Okay, God created the heavens and the earth, awesome! But what that means is that He created every star and galaxy in the universe. Current scientific estimates say that there are around 300 sextillion stars in the known universe, so that’s 300,000,000,000,000,000,000,000. Our sun, being just one of them, and not the largest by any means…and this estimate grows each year (having tripled in just the past couple years).',
  ),

  new BS_Paragraph(
    null,
    'There are roughly 60 sextillion air molecules in a cubic meter of air, so that’s 60,000,000,000,000,000,000,000. A molecule is 2+ atoms, atoms can be broken down into quarks, and we’ll probably soon discover that it goes further than that.',
  ),

  new BS_Paragraph(
    null,
    'It doesn’t matter how many people agree against Him, God’s truths are the truth! We may get lost in our own little world, on our own little world, in or own little solar system, in our own little galaxy (one of 80–100 billion galaxies)…thinking that we know it all.',
  ),


  new BS_BiblePassage(['passage' => 'Isaiah 66:1–2', 'version' => 'NASB']),

  new BS_Paragraph(
    null,

    'Be sure to check out this ',
    new BS_Link(
      ['to' => "https://htwins.net/scale2/"],
      'awesome interactive scale'
    ),
    '.',
  ),
));
