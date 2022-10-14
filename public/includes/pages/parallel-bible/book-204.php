<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'John (sometimes called “The Gospel According to St. John”) is the 4[sup]th[/sup] book of the [bible to="Gospels" /].'),
));
