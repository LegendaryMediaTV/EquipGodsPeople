<?php
require_once('BibleRangePage.php');

$html->add(new BibleRangePage(
  null,

  new BS_Paragraph(null, 'The historical books of the Bible contain:')
));
