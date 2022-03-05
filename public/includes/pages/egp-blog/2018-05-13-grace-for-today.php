<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => '2 Corinthians 12:7–9', 'version' => 'NASB']),

  new BS_Paragraph(
    null,

    'While most of the time, we think of grace as simply, “not getting the punishment that is deserved” (i.e., just a synonym for mercy), it’s really best defined as “getting favor or kindness that is not deserved”. Looking closer at the word translated “sufficient” (',
    new BS_LexiconLink(
      ['to' => 'G714'],

      'G714 ',
      new BS_Italics(null, 'arkeo'),
    ),
    '), we see that it literally means, “to raise a barrier; to ward off; to give an advantage.”',
  ),

  new BS_Paragraph(
    null,
    'Though it will be rough as you face various torments—be they woes of living in a fallen world (e.g., pain and death) or messengers of Satan himself—you have the advantage! God’s high regard for you as His child is like a fortress around you. It doesn’t remove us from battle, but it wards off the greatest of evils.'
  ),

  new BS_Paragraph(
    null,
    'At the same time, it is sufficient grace. This means that it is enough strength and undeserved favor for that day, or even that moment. However, if you try to take on tomorrow, you’re in danger of stepping outside of His protective barrier.'
  ),
));
