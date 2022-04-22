<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Ephesians 5:22–33'],

  new BS_Paragraph(
    null,
    'Several times, while praying about what to write for this daily devotional, I’m told, “you must serve your wife, before you can serve Mine.” So many times in today’s world, church leaders and laypeople neglect their families and household responsibilities.',
  ),

  new BS_Paragraph(
    null,
    'If you’re married, serve your spouse today, while keeping in mind that Christ loves you both more than you could ever love each other. If you’re not married, serve someone (friend, family, stranger) and remember that God loves you both more than anyone ever can.',
  ),
));
