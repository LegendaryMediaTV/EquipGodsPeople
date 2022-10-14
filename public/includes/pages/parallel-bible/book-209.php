<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Galatians is Paul’s letter to the church in Galatia.')
));
