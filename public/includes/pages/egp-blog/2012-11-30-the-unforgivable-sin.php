<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Many people feel that they can’t come (back) to Christ because they’ve “committed the unforgivable sin.” People think that this sin is undefined or is one of the many sins they have done. This is a lie from Satan. So where does the concept of “unforgivable sin” come from?',
  ),

  new BS_Paragraph(
    null,
    'Jesus said in [bible to="Mark 3:28–29" /], “Truly I say to you, all sins shall be forgiven the sons of men, and whatever blasphemies they utter; but whoever blasphemes against the Holy Spirit never has forgiveness, but is guilty of an eternal sin.” (NASB) So, “blaspheming the Holy Spirit” is an unforgivable and eternal sin…but what does that even mean? The answer is given in Hebrews.',
  ),

  new BS_BiblePassage(['passage' => 'Hebrews 10:26–29', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'While the first part might at first sound like apostacy (falling away from God after receiving Christ), it’s not. What it’s saying is what Paul said in [bible to="Acts 4:12" /], “There is salvation in no one else; for there is no other Name under heaven that has been given among men by which we must be saved.” Search as you may, and believe what you want, but there is no salvation apart from Christ.',
  ),

  new BS_BiblePassage(['passage' => 'John 14:6', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The second part of this passage is where we get to the “blaspheming the Holy Spirit.” By choosing to refuse the Holy Spirit’s call to repent of your old ways and turn to Christ…the only One who can make you clean before the Father…the only One who can wash away EVERY stain with His holy blood…you “insult the Spirit of Grace.”',
  ),

  new BS_BiblePassage(['passage' => 'Philippians 2:9–11', 'version' => 'NASB']),
));
