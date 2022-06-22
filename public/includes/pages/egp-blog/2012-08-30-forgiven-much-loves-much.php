<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Luke 7:33–50'],

  new BS_BiblePassage(['passage' => 'Luke 7:34, 36, 39', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'I have to admit, this passage makes me laugh. I mean, RIGHT after Jesus chews out the Pharisees for belittling Him for eating with “sinners”, a Pharisee decides to invite Him over to eat, and then, to top it off, belittles Him for a sinner coming over during the meal!',
  ),

  new BS_Paragraph(
    null,
    'Well, this is what Jesus had to say in verse [bible to="Luke 7:47"]47[/bible]: “For this reason I say to you, her sins, which are many, have been forgiven, for she loved much; but he who is forgiven little, loves little.”',
  ),

  new BS_Paragraph(
    null,
    'Jesus didn’t deny that she had MANY sins, but He surely didn’t deny HER for seeking Him! Let us all remember how much Jesus has forgiven us all our MANY sins!',
  ),
));
