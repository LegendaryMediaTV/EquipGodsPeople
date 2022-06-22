<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 6:33; 1 Corinthians 14:33; John 14:27'],

  new BS_Paragraph(
    null,
    'The tendency in this world is to be frustrated with how things are going, seek God, see Him move, and then to repeat exact same actions we did when He moved that one time.',
  ),

  new BS_BiblePassage(['passage' => 'John 3:8', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'God is orderly, but He wants us to continue to seek and worship HIM, not how we may have gotten to Him once before. Listen to and obey the Holy Spirit’s guiding voice (which will never conflict with Scripture). If you’re following Him, people won’t understand how you got here or where you’re headed to next, but that won’t matter because you’ll have peace that’s not of this world.',
  ),
));
