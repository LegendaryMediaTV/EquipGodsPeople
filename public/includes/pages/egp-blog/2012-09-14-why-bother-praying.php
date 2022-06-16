<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'James 4:2; Hebrews 4:16'],

  new BS_Paragraph(
    null,
    'If you’re anything like me, you’ve probably argued with yourself about prayer…especially during a difficult situation. “I want to pray, but I don’t know God’s will in this situation. I’ll just pray for God’s will to be done then. But He knows what I’m thinking and He’ll do what He wants anyway, so why bother asking?” Let me assure you that this is just the Devil and his minions trying to trick you out of connecting with God. James even said, “You don’t have because you don’t ask.” And Paul said this…',
  ),

  new BS_BiblePassage(['passage' => 'Romans 8:26–27', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'So, as we are here stumbling for the right words and searching for God’s will, the Holy Spirit says, “There ARE no right words, just ASK…and I’ll take what you ask and put it in tune with God’s will.”',
  ),
));
