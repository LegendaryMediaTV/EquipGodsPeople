<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 Corinthians 1:25–31'],

  new BS_Paragraph(
    null,
    'Anyone who thinks that Christians are dumb obviously have never read works from John Piper, Hank Hanegraaff (Bible Answer Man), Charles Stanley, Wayne Grudem, C.S. Lewis, A.W. Tozer, Martin Luther, Irenaeus, John Foxe, Eusebius Pamphili, or The Bible (Hebrews and Romans come to mind specifically).',

    new BS_BiblePassage(['passage' => '2 Peter 3:15–16', 'version' => 'NLT']),
  ),
));
