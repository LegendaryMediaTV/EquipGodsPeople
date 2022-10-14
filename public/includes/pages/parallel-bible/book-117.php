<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Esther is the 12[sup]th[/sup] Historical Book.')
));
