<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Proverbs 18:20–21', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Proverbs 15:4', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'James 3:4–6', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Matthew 15:11', 'version' => 'NASB']),
));
