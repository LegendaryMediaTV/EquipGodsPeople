<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Ephesians is Paul’s letter to the church in Ephesus.')
));
