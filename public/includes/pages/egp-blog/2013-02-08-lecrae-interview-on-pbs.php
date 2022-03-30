<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'While rap and hip-hop might not be many people’s forte, Lecrae is one of my favorite Christian artists. He always has solid theology and a gift for getting that out in a smooth (and sometimes funny) flow.',
  ),

  new BS_Paragraph(
    null,
    'The following is an interview that aired on PBS where he gave his testimony and how he approaches the ministry God has given him.',
  ),

  new BS_Embed(['youtube' => 'SV1rlT1SzSs', 'className' => 'mb-3']),

  new BS_Paragraph(
    null,
    'And in case you want to check out some of his music, here’s one of my favorites “After the Music Stops”:',
  ),

  new BS_Embed(['youtube' => '02n2jp68SsY']),
));
