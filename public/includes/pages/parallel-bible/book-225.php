<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, '3 John is the 3[sup]rd[/sup] of three letters from the Apostle John.')
));
