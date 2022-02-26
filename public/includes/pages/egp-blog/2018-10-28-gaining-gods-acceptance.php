<?php
$html->add(new BS_BlogEntryPage(
  [ 'metadata' => $metadata ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“Our ACCEPTANCE by the Father was determined at the CROSS and is therefore not based on how well WE are doing on any particular day. Our ability to come BOLDLY before the throne of grace must NEVER be measured by how GOOD or BAD we have been but by the blood of JESUS. Coming on ANY other basis is an AFFRONT to the sacrifice HE made for us on the cross. The cross ALONE has gained our approval from God.'
    ),

    new BS_Paragraph(
      null,
      'TRUE ministry, then, is NOT done in order to GAIN God’s approval; it comes from a position of HAVING His approval, because of the CROSS. Our obedience comes from BEING in Him, not in order to ACHIEVE a position. We love HIM because HE first loved us. We now labor because we LOVE Him, and we LONG to see Him receive the reward of HIS sacrifice. There is a VAST DIFFERENCE between trying to please God because we LOVE HIM and trying to please Him in order to gain HIS ACCEPTANCE. The former is WORSHIP; the latter is still the SELF-SEEKING pursuit of SELF-RIGHTEOUSNESS.”'
    ),

    new BS_BlockquoteFooter(
      null,
      
      '—',
      new BS_Link(
        [ 'to' => 'https://www.amazon.com/There-Trees-Garden-Divine-Destiny/dp/1929371551/' ],

        'Rick Joyner, ',
        new BS_Citation(null, 'There Were Two Trees in the Garden'),
        ', chapter 13',
      ),
    ),
  )
));
