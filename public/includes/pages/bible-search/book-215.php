<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, '1 Timothy is Paul’s 1[sup]st[/sup] letter to his protégé, Timothy.')
));
