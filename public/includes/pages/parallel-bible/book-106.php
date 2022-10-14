<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Joshua is the 1[sup]st[/sup] Historical Book and it covers the life of Joshua.')
));
