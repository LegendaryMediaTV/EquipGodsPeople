<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 12:2; 1 Peter 1:2; Psalm 103:12'],

  new BS_Paragraph(
    null,
    'God keeps reminding me of His holiness. His sovereignty says, “I can do whatever I want,” but His holiness says, “whatever I do is the right thing, regardless of whether or not you agree.”',
  ),

  new BS_BiblePassage(['passage' => '1 Peter 1:13–16', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Many people have enough trouble comprehending being called “saints”, but here we’re called to be “holy”? Interestingly enough, the word translated “saints” when referring to believers is the same Greek word translated as “holy”.',
  ),

  new BS_Paragraph(
    null,
    'This is not to say that we are to be holy and without sin of our own accord, but while before we were conformed to our own desires, the Father calls us to be transformed to His holiness “by the sanctifying work of the Spirit, to obey Jesus Christ and be sprinkled with His blood,” so that, “as far as the east is from the west, so far has He removed our transgressions from us.”',
  ),
));
