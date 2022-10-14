<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Luke (sometimes called “The Gospel According to St. Luke”) is the 3[sup]rd[/sup] book of the [bible to="Gospels" /]. It is an “orderly account” of the birth, life, ministry, death, and resurrection of Jesus. It has the same author as [bible to="Acts" /], so it has a similar style and can easily be read back-to-back.'),
));
