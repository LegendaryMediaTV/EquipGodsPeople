<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'James wrote this letter for Judeo-Christians. It covers many topics, including the struggle between faith and works.')
));
