<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'All these recent tragedies prove that people under Satan’s controlling power will use whatever they can to do his bidding…',
  ),

  new BS_BiblePassage(['passage' => 'John 10:10', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => 'John 8:44', 'version' => 'NASB']),

  new BS_BiblePassage(['passage' => '1 John 3:7-11', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Push back the darkness by praying not only for those hurt by these senseless tragedies, but also for those so deceived by Satan they cause them.',
  ),
));
