<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Philippians 3:20; Colossians 3:17; Colossians 3:23; Ephesians 2:12–13'],

  new BS_BiblePassage(['passage' => '2 Corinthians 5:20', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'An ambassador is a diplomatic representative of a foreign government or country often appointed for a temporary assignment. “Our citizenship is in Heaven” and everything we do represents Christ to this foreign land we are in. Be diplomatic and don’t forget that we too were once “strangers to the covenants of promise, having no hope and without God in the world. But now…brought near by the blood of Christ.”',
  ),
));
