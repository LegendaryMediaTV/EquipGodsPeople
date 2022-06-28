<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'This is part three of the series on “The Renewal of a New Creation.” If you haven’t already, be sure to check out the last post in the series: “Go, Sin No More.”',
  ),

  new BS_Heading2(null, 'I. Out with the old, in with the new'),

  new BS_BiblePassage(['passage' => 'Ephesians 4:17–32', 'version' => 'NLT']),

  new BS_Heading2(null, 'II. Characteristics of the new life'),

  new BS_BiblePassage(['passage' => 'Colossians 3:12–17', 'version' => 'NLT']),

  new BS_Heading2(null, 'Questions'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'How easily do you control what you say?',
      'When have you benefited from thinking before speaking?',
      'In what ways are you willing to try to be more positive and less critical in what you say this week?',
      'How does your thought life affect your behavior?',
      'What in your life needs to be “put off” and what should you “put on” in its place?',
      'What inspires you about your opportunity to live a new life in Christ?',
      'In what way can you experience living the new life?',
    ],
  ]),
));
