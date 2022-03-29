<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'We’re not earning anything by fasting, we’re saying to God, He’s EVERYTHING to us, and He became that because of Jesus Christ and what He did for us. So, I invite you into a life of prayer and fasting that will deliver us, in some measure, from the creeping idolatries of our life and that will intensify our prayers. “Oh God, I love You…I need You…I want You above all things!”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.desiringgod.org/resource-library/books/a-hunger-for-god'],

        'John Piper ',
        new BS_Citation(null, 'A Hunger for God'),
      ),
    ),
  ),
));
