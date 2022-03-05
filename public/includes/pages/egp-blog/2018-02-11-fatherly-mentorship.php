<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,

    'Growing up, Moses didn’t seem to have much of a father figure. The only mention of his real father was that he was a Levite, that he “took as his wife a Levite woman” (which may or may not imply he simply slept with her), and he’s never mentioned again. [',
    new BS_BibleLink(['to' => 'Exodus 2:1']),
    '] His mother nursed him, but Pharaoh’s daughter raised him. Then the only thing we hear about Pharaoh during the first part of his life is that he wanted to kill Moses.',
  ),

  new BS_Paragraph(
    null,
    'Later, when Jethro found out that Moses saved his daughters, he took him in (i.e., care), eventually let him marry his daughter (i.e., deep love), and had him care for his livestock (i.e., responsibility). When God called Moses to go back to Egypt, Jethro simply said, “Go in peace” (i.e., acknowledgment).'
  ),

  new BS_Paragraph(
    null,

    'After God freed and saved the Israelites multiple times, they constantly criticized Moses, despite them SEEING God’s power firsthand. However, Jethro–a Midianite priest, not a Hebrew one–after only HEARING about what happened, said, “Now I know that the [sc]Lord[/sc] is greater than all gods” (i.e., affirmation). [',
    new BS_BibleLink(['to' => 'Exodus 18:11']),
    '] On top of that, he instantly brought a burnt offering and sacrifices to God, then gathered Moses, Aaron, and the Israelite elders to feast in God’s presence (i.e., establishment).',
  ),

  new BS_Paragraph(
    null,
    'The next day, Jethro told Moses that he was taking on too much and then gave him a pattern for delegating responsibilities but still keeping order (i.e., admonishment). He reminded Moses that you can easily drown in the constant barrage of problems and complaints, but that God called him to be a great leader and to leave a legacy (i.e., encouragement).'
  ),

  new BS_Paragraph(
    null,
    'Finally, Moses “let” Jethro go back home, implying that Jethro knew he needed to leave (i.e., gave him room to grow). Moses did as Jethro recommended and this freed him to go up on Mount Sinai to talk with God, to see God’s Glory, to receive His instructions for life and worship, and much, much more!'
  ),
));
