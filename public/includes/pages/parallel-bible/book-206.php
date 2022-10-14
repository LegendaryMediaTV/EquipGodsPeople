<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Romans is the 1[sup]st[/sup] of the Paul’s letters to The Church.')
));
