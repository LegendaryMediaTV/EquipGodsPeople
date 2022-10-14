<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Matthew (sometimes called “The Gospel According to St. Matthew”) is the first book of the New Testament and is the 1[sup]st[/sup] book of the [bible to="Gospels" /]. Matthew was written for Hebrews (and quite possible originally written in Aramaic) and provides as a transition from the Old Testament style of writing and background into the New Testament, which is probably why it was chosen to go first.'),
));
