<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, '2 Timothy is Paul’s 2[sup]nd[/sup] letter to his protégé, Timothy.')
));
