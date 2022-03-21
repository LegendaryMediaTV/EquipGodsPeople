<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'In a series of public rebukes directly against the Pharisees, Jesus said the following:',
  ),

  new BS_BiblePassage([
    'passage' => 'Matthew 23:27-28',
    'version' => 'NASB',
  ]),

  new BS_Paragraph(
    null,
    'As many know from this text and others, the Pharisees were very focused on appearing righteous before others ([bible to="Matthew 15:7-9" /], [bible to="Matthew 23" /]) and often banked their salvation on being a descendant of Moses and Abraham. ([bible to="John 5:44-47" /], [bible to="John 8:33-45" /]) In this passage, Jesus said that their hypocrisy made them like “whitewashed tombs” where they appeared beautiful but were full of all sorts of uncleanness.'
  ),

  new BS_Paragraph(
    null,
    'Another interesting thing about this comparison is that there was a Jewish tradition of whitewashing the tombs, but it wasn’t merely to make them look nicer. It actually served as a warning to the Jews that if they touched the tombs or anything in them that it would make them unclean (cf. Thayer’s Greek Definitions [[strongs id="g2867" /]]). So, while the Pharisees were hiding their unrighteousness behind a facade of self-righteousness in order to appear clean, Jesus was also saying that facade should serve as a warning to others of their uncleanness! However, we must always be careful not to “shovel” these checks to others. Instead, we must examine ourselves to see if we are hiding our uncleanness with a facade.'
  ),

  new BS_Paragraph(
    null,
    'The root of the Pharisees’ problem (and all of us, really) was primarily with the uncleanness inside, which is something that only God can purify. Fortunately, we are never too far gone for Him to cleanse us…turning us from whitewashed to washed white!',
  ),


  new BS_BiblePassage([
    'passage' => 'Isaiah 1:18',
    'version' => 'NLT',
  ]),
));
