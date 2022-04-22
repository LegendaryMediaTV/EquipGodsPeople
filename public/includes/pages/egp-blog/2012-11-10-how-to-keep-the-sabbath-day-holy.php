<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Mark 2:23–28; Colossians 2:16–17; Mark 2:23–28; 1 Corinthians 14:26',
    'youtube' => '1upfCmBy-kA',
  ],

  new BS_BiblePassage(['passage' => 'Romans 14:5–6', 'version' => 'NASB']),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'I think it is a matter of personal conscience …, but that doesn’t mean that it has no meaning and no biblical guidelines. …',
    ),

    new BS_Paragraph(
      null,
      'It appears in [bible to="Romans 14:5–6"]Romans 14[/bible] that there was a disagreement in the church. One celebrates one day and one counts all days alike. … Paul’s way of handling the disagreement was not to side with either one. … He said that one man keeps it to the Lord, another is free to the Lord, and let both honor the Lord. Now, that’s very significant, because I think that the people that give no thought to the Lord’s Day and don’t do anything to make it special are probably not making those decisions “to the Lord.” By and large they seem careless, not thoughtful in what they’re doing. …',
    ),

    new BS_Paragraph(
      null,
      'I think that the principle in the New Testament is that God ordains that one day in seven be restful. That’s a creation ordinance for our good, for our health. And so, one of the things we should do is do things on the Lord’s Day that refresh us for the His service, both intellectually, spiritually, and physically. So, if you sit at your desk all week, you should probably walk or ride a bike … If you work in the farm, breaking your back all week, which is what they did in the Old Testament, then sit down and take a LONG nap …',
    ),

    new BS_Paragraph(
      null,
      'The holy piece I think would be worship … set aside a day when a significant focus is on corporate worship. I think that’s implicit in the way the New Testament talks about the gathering of God’s people … Secondly, I would I think you would want to restrain certain secular involvements in such a way that you say something’s special about this day. It’s different from the other days because Christ is Lord and risen in a way I want to speak about in a unique way today. But I really don’t want to lay down rules for what that would be. …',
    ),

    new BS_Paragraph(
      null,
      'You need the rest one day a week and you need to find a way to say to the Lord, “I love You, and I reverence You, and I honor You” in a special way.',
    ),
  ),
));
