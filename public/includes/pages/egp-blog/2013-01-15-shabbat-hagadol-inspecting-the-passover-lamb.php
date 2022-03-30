<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'God asked the Israelites to be willing to sacrifice their lives for the sake of their redemption (mesirat HaShem). When God asked the people to obtain a lamb, lead it through the streets, bring it to their homes, and to keep it for four days before finally slaughtering it and dabbing its blood on the doorposts of their homes, he asked them to venture out in faith, risking their lives, because the Egyptians regarded the lamb as a “god.” Moreover, the blood on the doorposts clearly identified them as people of faith living in the midst of a hostile and fearful world. As Yeshua said, “If anyone would come after me, let him deny himself and take up his cross and follow me” ([bible to="Matthew 16:24"]Matt. 16:24[/bible]).',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.hebrew4christians.com/Holidays/Spring_Holidays/Shabbat_HaGadol/shabbat_hagadol.html'],

        'Hebrew for Christians, ',
        new BS_Citation(null, 'Shabbat HaGadol'),
      ),
    ),
  ),

  new BS_Paragraph(
    null,
    'I think they also had to bring the lamb in for four days because people would get attached to it and it would feel like more of a sacrifice than a scapegoat. It’s also symbolic of Christ coming to stay with with us before being sacrificed on the cross. Read [bible to="Exodus 12" /] for the full story.',
  ),
));
