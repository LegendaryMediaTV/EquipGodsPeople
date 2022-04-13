<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'yi2C3PATcmQ'],

  new BS_Paragraph(
    null,
    'Jericho March is taking it to the stage with this completely original Christian rock song entitled “Where’s Your Faith?” They unashamedly bring the Gospel to the world and challenge believers to check what they’re truly placing their faith in.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'You say, “We need survival!” Always asking for revival' . PHP_EOL,
      'I say, “Check your vitals!” Why do you keep on dying?' . PHP_EOL,
      'Materialistic idols… Hearts and lives are prone to idle' . PHP_EOL,
      'When relationships are most vital, I’ve only one thing to say…',
    ),

    new BS_Paragraph(
      null,
      'Where’s your faith?!? Is it in God, things, or people?' . PHP_EOL,
      'Where’s your faith?!? Are you putting it in your steeple?' . PHP_EOL,
      'Where’s your faith?!? Where’s your faith?!?!?!?!',
    ),

    new BS_Paragraph(
      null,
      'You’re focusing on the dont’s and do’s' . PHP_EOL,
      'But there’s a line between counseling and abuse' . PHP_EOL,
      'Thinking good works are salvation dues' . PHP_EOL,
      'Your love’s grown cold because of fast food, garage doors, and drive-thru’s' . PHP_EOL,
      'You’re missing out on heavenly hues' . PHP_EOL,
      'Let Jesus’ love flow through you, so you can answer Him when He says…',
    ),

    new BS_Paragraph(
      null,
      'So open up your mind, open up your heart' . PHP_EOL,
      'Let the Spirit flow…flow right through you!!!' . PHP_EOL,
      'So lose this life you’ve made, you must die to truly live' . PHP_EOL,
      'Live the life that God has made just for you',
    ),
  ),
));
