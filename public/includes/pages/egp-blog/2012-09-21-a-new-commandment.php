<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 22:35–40; John 15:13'],

  new BS_BiblePassage(['passage' => 'John 13:34–35', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'At first reading you might think, “New commandment? How is that ‘new’ compared to the two ‘greatest commandments’?” The two greatest commandments were to “love the [sc]Lord[/sc] your God with all your heart, and with all your soul, and with all your mind” and “love your neighbor as yourself.” This commandment is to “love one another, even as I have loved you.” So, the audience and the capacity are different.',
  ),

  new BS_Paragraph(
    null,
    'Whenever the term “one another” is used, it’s referring to being amongst group of people. It could be argued as to whether that group of people is other believers or just others in your life, but personally I think that it’s amongst believers, especially when looking at [bible to="1 John 3:16" /]. “We know love by this, that He laid down His life for us; and we ought to lay down our lives for the brethren.”',
  ),

  new BS_Paragraph(
    null,
    'The second part is not just to love them “as yourself,” but “as Jesus has loved us.” Later in this conversation, Jesus said, “Greater love has no one than this, that one lay down his life for his friends.” While dying for someone is the ultimate sacrifice, sometimes the harder thing is to set aside what you want (or think you deserve) for what others need.',
  ),

  new BS_BiblePassage(['passage' => 'Philippians 2:5–8', 'version' => 'NASB']),
));
