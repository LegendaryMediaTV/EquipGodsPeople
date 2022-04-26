<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'The iris of our eyes automatically adjust when going from lighter and darker areas. In cameras you have to set several settings to get a proper exposure and adjust them anytime something changes. Cameras do have an automatic mode, but it’s not always accurate…making pictures over or under exposed.',
  ),

  new BS_Paragraph(
    null,
    'The same goes with the color temperature of light. Different types of light gives off different colors. Typical house lights have a yellowish-orange light, non-sunset daylight varies around blue. In cameras you have to set the light type or color temperature to help the camera see it the way your eye interprets it automatically. Once again there’s an automatic mode that’s not always accurate…leaving pictures blue or orangey looking.',
  ),

  new BS_Paragraph(
    null,
    'So as I use cameras and think about how much has had to go into them, I’m reminded of something David said the Psalms.',
  ),

  new BS_BiblePassage(['passage' => 'Psalm 139:14', 'version' => 'NASB']),
));
