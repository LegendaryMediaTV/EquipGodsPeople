<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'This is a beautifully shot video about making it a point to take time out of the day God has given you to pull away from everything and spend time talking with and worshiping Him. To some that is in your room, others it is on a walk, others it’s at a mountain or beach…find yours…and go there…unplug…and spend time with the Father and Creator!',
  ),

  new BS_Paragraph(
    null,
    '[bible to="Luke 5:16" /] (NKJV) “So He [Jesus] Himself often withdrew into the wilderness and prayed.”',
  ),

  new BS_Embed(['vimeo' => '38775602', 'className' => 'mb-3']),

  new BS_Paragraph(
    null,
    'Another great video by them with a poem inspired by John Bunyan ([i]Pilgrim’s Progress[/i]), called [i]Pater Noster[/i] (Latin for “Our Father”).',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Who would true valour see,' . PHP_EOL,
      'Let him come hither;' . PHP_EOL,
      'One here will constant be,' . PHP_EOL,
      'Come wind, come weather' . PHP_EOL,
      'There’s no discouragement' . PHP_EOL,
      'Shall make him once relent' . PHP_EOL,
      'His first avowed intent' . PHP_EOL,
      'To be a pilgrim.',
    ),

    new BS_Paragraph(
      null,
      'Whoso beset him round' . PHP_EOL,
      'With dismal stories' . PHP_EOL,
      'Do but themselves confound;' . PHP_EOL,
      'His strength the more is.' . PHP_EOL,
      'No lion can him fright,' . PHP_EOL,
      'He’ll with a giant fight,' . PHP_EOL,
      'He will have a right' . PHP_EOL,
      'To be a pilgrim.',
    ),

    new BS_Paragraph(
      null,
      'Hobgoblin nor foul fiend' . PHP_EOL,
      'Can daunt his spirit,' . PHP_EOL,
      'He knows he at the end' . PHP_EOL,
      'Shall life inherit.' . PHP_EOL,
      'Then fancies fly away,' . PHP_EOL,
      'He’ll fear not what men say,' . PHP_EOL,
      'He’ll labor night and day' . PHP_EOL,
      'To be a pilgrim.',
    ),
  ),

  new BS_Embed(['vimeo' => '65384446']),
));
