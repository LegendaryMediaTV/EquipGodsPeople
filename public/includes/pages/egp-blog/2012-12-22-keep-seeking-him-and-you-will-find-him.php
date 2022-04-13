<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Jeremiah 29:11–14', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Many people quote only the first verse or two from this passage, but miss the blessing of the next couple verses. Seek Him…with all your heart…and you will find Him.',
  ),

  new BS_Paragraph(
    null,
    'It’s probably part of the inspiration for when Jesus said, “Continually seek first His kingdom and His righteousness, and all these things will be added to you.” in [bible to="Matthew 6:33" /]. And again in [bible to="Matthew 7:7–8" /], “Keep asking, and it will be given to you; keep seeking, and you will find; keep knocking and it will be opened to you. For everyone who asks receives, and he who seeks finds, and to him who knocks it will be opened.” (NASB, see footnotes about verb tenses)',
  ),
));
