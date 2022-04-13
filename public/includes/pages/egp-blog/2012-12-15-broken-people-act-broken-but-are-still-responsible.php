<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 1:23; 2 Corinthians 4:3–4; 1 John 3:9–11; 2 Corinthians 11:13–15; John 10:10; Ephesians 6:11–13; Matthew 5:43–45'],

  new BS_Paragraph(
    null,
    'It pains me to see people commit senseless crimes, especially ones involving children. While we can say that “they’re in a better place this Christmas”, my heart goes out the families of these children. To be so close to Christmas…to go home and see their presents under the tree…a time of celebrating Emmanuel, “God with us” as a fragile child…there are no words for this level of pain.',
  ),

  new BS_Paragraph(
    null,
    'Satan is called “the god of this world” and those who aren’t saved are his children and do his bidding, which is to “appear as an angel of light” and to “steal, kill, and destroy.” Broken people act broken, but we are all still responsible for what we do, no matter the circumstance.',
  ),

  new BS_Paragraph(
    null,
    'Pray that God will use this to His Glory, drawing people to His comfort and salvation, showing them that He sent His Son so that we could be together with Him. Remember that we don’t war against flesh and blood and remember to love and pray for your enemies.',
  ),

  new BS_BiblePassage(['passage' => 'John 3:16–21', 'version' => 'NASB']),
));
