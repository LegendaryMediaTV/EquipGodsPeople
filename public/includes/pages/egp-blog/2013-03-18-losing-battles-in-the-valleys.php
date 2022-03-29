<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'I have the tendency to overthink things, overdo things, burnout, neglect, rinse, and repeat… I imagine that part of this is from the inherent desire to be like God that Satan has tempted us with from the beginning. I’m thankful to serve a God who has the capacity to oversee all of His creation, from the universe as a whole, to me as an individual (of which the universe does NOT revolve around), down to the “God particle” (of which I’m sure they’ll find later to be made up of even smaller parts, as has happened many times before).',
  ),

  new BS_Paragraph(
    null,
    'When we’re facing a “losing battle,” we are to praise God no matter the outcome. God knows, God cares, God is faithful, God is just, God is merciful, God is sovereign, and God is [sc]The Great I Am[/sc]!',
  ),

  new BS_Paragraph(
    null,
    'When you’re in one of life’s many valleys, remember:',
  ),

  new BS_BiblePassage(['passage' => 'Psalm 121', 'version' => 'NLT']),
));
