<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'This is part two of the series on “The Renewal of a New Creation.” If you haven’t already, be sure to check out the last post in the series: “Forgiven.”',
  ),

  new BS_Heading2(null, 'Introduction'),

  new BS_Paragraph(
    null,
    'Have you ever felt powerless to sin? Have you wondered why you keep on sinning?'
  ),

  new BS_Heading2(null, 'I. We are not to sin'),

  new BS_Paragraph(
    null,
    '[bible to="John 5" /] records Jesus healing a paralytic man in Bethesda. After healing the man, Jesus said, “Now you are well; so stop sinning, or something even worse may happen to you.” ([bible to="John 5:14" /], NLT)'
  ),

  new BS_Paragraph(
    null,
    'Also, after the accusers of an adulterous woman left, Jesus’ message to her was quite simple:'
  ),

  new BS_BiblePassage(['passage' => 'John 8:10–11', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => '1 John 3:4–11', 'version' => 'NLT']),

  new BS_Heading2(null, 'II. We have been granted victory over sin'),

  new BS_BiblePassage(['passage' => '1 John 5:1–5', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => '1 John 5:18–21', 'version' => 'NLT']),

  new BS_Heading2(null, 'III. The temptations will continue, but we don’t have to give in'),

  new BS_BiblePassage(['passage' => '1 Corinthians 10:12–13', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'James 4:7–10', 'version' => 'NLT']),

  new BS_Heading2(null, 'IV. Yet we continue to sin'),

  new BS_BiblePassage(['passage' => 'Romans 7:15–25', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'Romans 8:9–14', 'version' => 'NLT']),

  new BS_Heading2(null, 'V. But perfection is still to be our goal'),

  new BS_BiblePassage(['passage' => '1 Peter 4:1–5', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'John 3:8', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Philippians 3:8–14', 'version' => 'NLT']),

  new BS_Heading2(null, 'Conclusion'),

  new BS_Paragraph(
    null,
    'Whenever you’re feeling temptation, follow these steps to victory:'
  ),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Thank God for having already given you the victory. ([bible to="1 John 5:4" /])',
      'Listen to the Holy Spirit’s guiding voice. ([bible to="Galatians 5:25" /])',
      'Look for the way out that God has promised you. ([bible to="1 Corinthians 10:13" /])',
      'Combat the temptation with related Scripture. ([bible to="Matthew 4:4–10" /])',
      'Tell the Devil to “Go away!” ([bible to="Matthew 4:10" /])',
      'Ask God to renew your mind to His will. ([bible to="Romans 12:2" /])',
    ],
  ]),

  new BS_BiblePassage(['passage' => 'Psalm 51:12–13', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'Psalm 19:12–14', 'version' => 'NLT']),
));
