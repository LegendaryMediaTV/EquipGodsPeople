<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Luke 3:11; Matthew 7:9–10; Acts 3:6'],

  new BS_BiblePassage(['passage' => 'Matthew 5:42', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'This may seem like it’s saying, “give whatever is asked of you to whomever asks it”, but it’s not. If you really think about it, this isn’t even how God works. He is not a vending machine and neither are we. So what is he saying here?',
  ),

  new BS_Paragraph(
    null,
    'Shortly before this, John the Baptist/Baptizer said this, “The man who has two tunics is to share with him who has none; and he who has food is to do likewise.” This establishes that there is first a need.',
  ),

  new BS_Paragraph(
    null,
    'The crafty would say, “well it doesn’t say WHAT to give them.” Jesus had to say this, “Or what man is there among you who, when his son asks for a loaf, will give him a stone? Or if he asks for a fish, he will not give him a snake, will he?”',
  ),

  new BS_Paragraph(
    null,
    'The bottom line is that you are to do/give whatever God leads you to do/give, so always ask Him first. But as a baseline of what we find in Scripture, if you have more than you need and you see someone in need (especially if they ask for it), then give it to them. But at the same, if you don’t have to give them a car if their needs would be met with a ride.',
  ),
));
