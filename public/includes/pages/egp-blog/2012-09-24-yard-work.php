<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Hebrews 12:1–2; John 15:1–2; 1 Corinthians 11:31; 1 Corinthians 15:46'],

  new BS_BiblePassage(['passage' => 'Genesis 1:17–18', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'We have a rather large stick pile in our back yard (started by the previous owners of the house but has grown over the past couple years) and bushes (which the house inspector said needed to be trimmed further away from the house) that had grown up to the gutters.',
  ),

  new BS_Paragraph(
    null,
    'So, I trimmed the bushes back to a managable size (wow…were they ugly after cutting them back), started whittling down the stick pile, time to trim the bushes again (look much better this time), worked some more on the sick pile, and now it’s almost time to trim the bushes again…',
  ),

  new BS_Paragraph(
    null,
    'In the midst of doing all this yard work (that never seems to go away), God revealed to me that there were spiritual connotations to what I was going through. We can have burdens from the past, but while it’s easy to blame others for them, it’s even easier to continue to pile more stuff on ourselves! At some point you have to stop piling more on, then start working on removing it. Often, it can’t all be done in one day, but you must stay strong and stay committed to finishing it.',
  ),

  new BS_Paragraph(
    null,
    'Also, when God prunes things from you (not necessarily bad things), it’s going to hurt and most likely you’re going to feel broken. But soon you will feel the lift from the excess weight removed, and grow back even more beautiful and fruitful, the way God intended.',
  ),
));
