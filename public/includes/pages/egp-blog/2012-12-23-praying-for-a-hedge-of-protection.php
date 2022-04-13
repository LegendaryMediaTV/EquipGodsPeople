<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'James 1:2–3, 13–14'],

  new BS_BiblePassage(['passage' => 'Job 1:6–12', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'In some Christian circles, when someone is facing some sort of adversity (especially if it’s deemed a spiritual attack), you’ll hear the prayer that God will “put a hedge of protection” around them or even their house. While it doesn’t expressly say that “Job prayed for a hedge of protection,” it does say that he was “blameless, upright, fearing God, and turning away from evil” ([bible to="Job 1:1" /]) and that he would “consecrate” his children by “rising up early in the morning and offering burnt offerings” continually just in case they MIGHT have “sinned and cursed God in their hearts” ([bible to="Job 1:5" /]). So, undoubtedly he was a devout and prayerful person who cared deeply about His children’s spiritual protection.',
  ),

  new BS_Paragraph(
    null,
    'The word translated “hedge” here isn’t simply some bushes about the house, but carries more the idea of a fence made of intertwined branches (see “suwk” [[strongs id="h7753" /]] and “sowk” [[strongs id="h7754" /]]). In fact, this same word is used in [bible to="Hosea 2:6" /], when it says, “…I will fence her in with thornbushes…” (NLT) Though in the “hedge of protection”, it’s Satan and his minions being fenced out.',
  ),

  new BS_Paragraph(
    null,
    'This passage, however does beg the question: Why God would seemingly recommend Job out of the blue to be tormented by Satan when he was praying for protection? Well, first of all, God can do whatever He wants. Secondly, it was said of Job that he feared God, but Satan said, “Does Job fear God for nothing?”, meaning that he was quite blessed and his faith had never truly been tested. Also, I think we get a bit of insight from Paul’s letter to the Ephesians.',
  ),

  new BS_BiblePassage(['passage' => 'Ephesians 3:8–12', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Sometimes we forget that things happen in the physical realm because of what’s going on in the spiritual realm. In this case, I think God was teaching Satan a lesson more so than Job.',
  ),
));
