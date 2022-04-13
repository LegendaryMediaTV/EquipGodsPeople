<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'John 21:15–17', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'If you’ve ever been to many church-related things or read much Christian literature, you’ve undoubtedly heard about the word “agape” ([i]ag-ah’-pay[/i], [greek]αγαπη[/greek] [[strongs id="g26" /]]). For those that haven’t heard about agape, it’s usually translated “love”, but carries the connotation of, “to love dearly or cherish” like a mother’s unconditional love for her child (e.g., “I love my wife”). Some of the words translated as “love” here are the Greek word “agapao” ([i]ag-ap-ah’-o[/i], [greek]αγαπαω[/greek] [[strongs id="g25" /]]), which is the verb form of the noun “agape.”',
  ),

  new BS_Paragraph(
    null,
    'The other word translated “love” here is “phileo” ([i]fil-eh’-o[/i], [greek]φιλεω[/greek] [[strongs id="g5368" /]]), which carries the connotation of “to like, to approve, to condone” like a close friend or relative (e.g., “I love photography”). This word is also translated “kiss”, which was the way people often greeted each other in the time and culture of Jesus (and was Judas’s signal to the guards when he betrayed Jesus). Strong’s compared agapao to phileo, saying “the former being chiefly of the heart and the latter of the head.”',
  ),

  new BS_Paragraph(
    null,
    'Let’s look at it again, with the Greek meanings in mind. “So when they had finished breakfast, Jesus said to Simon Peter, ‘Simon, son of John, do you dearly and unconditionally love Me more than these?’ He said to Him, ‘Yes, Lord; You know that I like You alot.’ He said to him, ‘Tend [feed and pasture] My young lambs.’ He said to him again a second time, ‘Simon, son of John, do you dearly and unconditionally love Me?’ He said to Him, ‘Yes, Lord; You know that I like You alot.’ He said to him, ‘Shepherd [guide and protect] My sheep.’ He said to him the third time, ‘Simon, son of John, do you just like Me alot?’ Peter was grieved because He said to him the third time, ‘Do you just like Me alot?’ And he said to Him, ‘Lord, You know all things; You know that I like You alot You.’ Jesus said to him, ‘Tend [feed and pasture] My sheep.’”',
  ),

  new BS_Paragraph(
    null,
    'Jesus questioned Peter’s love for Him the same number of times that Peter denied Him right before the crucifixion, but the point here isn’t that He asked him three times as much as how He asked him. In the end, Jesus’s questioning led Peter to admit that his love for Him still hadn’t developed beyond being a close friend at that time.',
  ),

  new BS_Paragraph(
    null,
    'This important lesson later led Peter to write about the Christian progression in [bible to="2 Peter 1:5–7" /], “Now for this very reason also, applying all diligence, in your faith supply moral excellence, and in your moral excellence, knowledge, and in your knowledge, self-control, and in your self-control, perseverance, and in your perseverance, godliness, and in your godliness, brotherly kindness (‘philadelphia’, which has the same root as ‘phileo’), and in your brotherly kindness, love (‘agape’).”',
  ),
));
