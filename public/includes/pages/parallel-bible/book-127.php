<?php
require_once('BibleBookPage.php');

$html->add(new BibleBookPage(
  null,

  new BS_Paragraph(null, 'Daniel is the 5[sup]th[/sup] of the Major Prophets. It includes some of the life of Daniel and many prophecies about the end times.')
));
