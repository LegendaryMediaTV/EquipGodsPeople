<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage([
    'passage' => 'Deuteronomy 29:29',
    'version' => 'NLT',
  ]),

  new BS_Paragraph(
    null,
    'It’s so easy to get caught up in theological debates about things that have little to no direct Biblical answers. These conversations can be a healthy part of your Spiritual relationship and development, however, sometimes we need to realize that there are things we can’t know about God on this side of Gory and just be overwhelmed by His infiniteness.'
  ),

  new BS_BiblePassage([
    'passage' => 'John 17:3',
    'version' => 'NASB',
  ]),

  new BS_Paragraph(
    null,
    'The word translated “may know” is in the present tense (action is currently happening) and subjunctive mood (action is hypothetical/unlikely). This is to say that even given all of eternity with God, we still wouldn’t come to the point of fully knowing Him! Revel in that.'
  ),

  new BS_Paragraph(
    null,
    'The second part of the verse from Deuteronomy states that, even though there are many unknowable things about God, there are things that He does make clear through Scripture and we are responsible for them.'
  ),
));
