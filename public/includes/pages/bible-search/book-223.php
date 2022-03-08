<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, '1 John is the 1[sup]st[/sup] of three letters from the Apostle John.')
));
