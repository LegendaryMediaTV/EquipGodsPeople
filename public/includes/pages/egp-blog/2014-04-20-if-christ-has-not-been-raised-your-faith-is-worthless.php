<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Some people say that if you live your life as a Christian and it ends up being false, then at least you spent you’re life as a good person. But Paul offers a different perspective.'
  ),

  new BS_BiblePassage([
    'passage' => '1 Corinthians 15:16-28',
    'version' => 'NASB',
  ]),
));
