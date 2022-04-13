<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Proverbs 23:17–18'],

  new BS_Paragraph(
    null,
    'Every desire you have started out as a God-given desire, but many have been twisted and mangled as we’ve turned them from being fulfilled in God or fulfilled in God’s way to being band-aided with our own, sinful means and empty promises from Satan.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Life has no meaning without purpose. Just as every cause has an effect, so every desire has an implied goal or end, a possibility where the desire may be fulfilled… Some desires are used as means to an end (e.g., the desire to own a car is a means to the end of being able to travel), but there is a deeper desire that haunts the soul, an “end of ends,” impelling it to seek an eternal good, an abiding happiness, an everlasting sense of home. Apart from this hope, we have no reason to get out of bed each day, to go through the motions of living in this dark world… Apart from a sense of real purpose, life is a vain circle, a place of destruction and emptiness. To deny a sense of ultimate purpose is to deny God’s existence and to confess with Shakespeare that life is but “a tale told by an idiot full of sound and fury signifying nothing.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://hebrew4christians.com/About_HFC/Site_News/Archive-2012/December/december.html'],

        'Hebrew for Christians, ',
        new BS_Citation(null, 'A Future and a Hope…'),
      ),
    ),
  ),
));
