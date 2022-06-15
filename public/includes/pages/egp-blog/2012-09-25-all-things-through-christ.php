<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Mark 16:17–18; Matthew 14:28–29; Matthew 21:21; Acts 12:7–11; Matthew 4:6–7'],

  new BS_BiblePassage(['passage' => 'Philippians 4:13', 'version' => 'NKJV']),

  new BS_Paragraph(
    null,
    'Many people who read this think, “I can do whatever I want since I have Jesus.” The word translated “strengthen” ([strongs id="g1743" /], endunadmoo, en-doo-am-o’-o) literally means “empower”. So what this verse is really saying is that “I can do anything that Christ empowers me to do.”',
  ),

  new BS_Paragraph(
    null,
    'So, if it be God’s will, Christ will empower you to survive poison, bring healing, walk on water, move a mountain, be invisible… But don’t go jumping off a building just because someone challenged you, even Jesus didn’t do that!',
  ),
));
