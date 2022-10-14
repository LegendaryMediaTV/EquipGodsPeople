<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Jude wrote this letter for all believers.')
));
