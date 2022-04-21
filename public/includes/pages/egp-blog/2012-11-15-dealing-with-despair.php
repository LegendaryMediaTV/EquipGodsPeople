<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'When you feel oppressed by Satan, or when you sense a spirit of heaviness that inspires you to despair, then offer focused praise to the [sc]Lord[/sc] your God, the Holy One of Israel, who is enthroned on the praises of His people. Your praise will serve both to glorify the [sc]Lord[/sc] and to vex and oppress the oppressor of your soul…',
    ),

    new BS_Paragraph(
      null,
      'Exalt the [sc]Lord[/sc] your God; He is your praise; He is your God; He is the One who has done great things for you. “Holy, holy, holy, is the [sc]Lord[/sc] God Almighty, who was and is and is to come!”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://hebrew4christians.com/About_HFC/Site_News/Archive-2012/November/november.html'],

        'Hebrew for Christians, ',
        new BS_Citation(null, 'Overcoming Oppression…'),
      ),
    ),
  ),
));
