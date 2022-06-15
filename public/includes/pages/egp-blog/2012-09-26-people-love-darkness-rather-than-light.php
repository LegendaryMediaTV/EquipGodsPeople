<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 6:6; Hebrews 4:13'],

  new BS_Paragraph(
    null,
    'Since I work on computers all day, I work with my office light off (it’s easier on my eyes). When I step out of my office into the well lit areas, I almost always notice how dirty my glasses are. I often wonder how I could function with them being so dirty and how I didn’t notice beforehand.',
  ),

  new BS_BiblePassage(['passage' => 'John 3:19–21', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'People with dirt (sin) in their lives gravitate away from the Light (Jesus) and those who bring light, fearing that their dirtiness will be seen. In the darkness of this world, the dirt isn’t as easy to see. We compare ourselves to others in the dark, both seeing them as dirtier than ourselves and not truly seeing the dirtiness of both of us. How quickly we forget that we are no longer slaves to sin.',
  ),

  new BS_BiblePassage(['passage' => 'Colossians 1:13–14', 'version' => 'NASB']),
));
