<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => '1 Timothy 1:5–20', 'version' => 'NLT']),

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'What do you think is the importance of having a clear conscience when it comes to “loving one another,” as mentioned in verse five?',
      'You’ve heard the cliché, “Let your conscience be your guide.” In light of this passage and [bible to="Titus 1:15" /], how accurate is this statement?',
      'Read [bible to="1 Corinthians 4:4" /]. What do you think Paul is trying to get across here?',
      'Re-read [bible to="1 Timothy 1:5, 19" /] and meditate on it over the next week, thinking about how you can better apply it to your life.',
    ],
  ]),
));
