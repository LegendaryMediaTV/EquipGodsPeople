<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'The biggest reasons married couples go to counseling, end up in adulterous relationships, and/or end up getting divorced is that the woman doesn’t feel loved or understood and the man doesn’t feel respected.',
  ),

  new BS_BiblePassage(['passage' => 'Ephesians 5:25–26', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Ephesians 5:33', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => '1 Peter 3:7', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'If you’re married, do these things to the best of your ability and pray that God will help you do them even better! If you’re single and desire to get married, look for these qualities…you’re worth it!',
  ),
));
