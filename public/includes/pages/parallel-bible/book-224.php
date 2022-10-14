<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, '2 John is the 2[sup]nd[/sup] of three letters from the Apostle John.')
));
