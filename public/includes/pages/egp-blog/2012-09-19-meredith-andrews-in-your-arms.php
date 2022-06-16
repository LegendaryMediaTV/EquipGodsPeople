<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'xtB9sctwH-A'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'I’m turning the world off, embracing the silence [[bible to="Psalm 62:1" /]]' . PHP_EOL,
      'Walking away from all the voices that are screaming in my ear [[bible to="Psalm 46:10" /]]'
    ),

    new BS_Paragraph(
      null,
      'I’ve been too caught up, I’ve been so stressed out [[bible to="Matthew 6:31–34" /]]' . PHP_EOL,
      'All of the noise replaced the whisper that used to be so clear [[bible to="1 Kings 19:11–12" /]]'
    ),

    new BS_Paragraph(
      null,
      'So I close every door, put my face back on the floor [[bible to="Matthew 6:6" /]]'
    ),

    new BS_Paragraph(
      null,
      'And I’m in Your arms, where I belong [[bible to="Isaiah 41:10" /]]' . PHP_EOL,
      'There’s no other place for me, than right where You are [[bible to="John 15:5" /]]' . PHP_EOL,
      'Some things just don’t change when I call Your Name [[bible to="Luke 15:20" /]]' . PHP_EOL,
      'You never hesitate to wrap me in endless Grace when I’m in Your arms [[bible to="Hebrews 4:16" /]]'
    ),

    new BS_Paragraph(
      null,
      'I’m letting my fears go, giving You control [[bible to="Philippians 4:6" /]]' . PHP_EOL,
      'For You are the one who holds me closer in my soul’s darkest night [[bible to="Psalm 139:11–12" /]]'
    ),

    new BS_Paragraph(
      null,
      'Everything I see is so temporary [[bible to="2 Corinthians 4:18" /]]' . PHP_EOL,
      'So help me to run the race before me with eternity in sight [[bible to="Hebrews 12:1–2" /]]'
    ),

    new BS_Paragraph(
      null,
      'To sit at Your feet, at Your table of mercy [[bible to="Matthew 15:27" /]]' . PHP_EOL,
      'To gaze on Your beauty, my Lord [[bible to="Psalm 27:4" /]]' . PHP_EOL,
      'To drink from Your well [[bible to="John 4:13–14" /]]' . PHP_EOL,
      'And be changed by Your Glory [[bible to="2 Corinthians 3:18" /]]' . PHP_EOL,
      'How could I ask for more? Jesus, how could I ask for more? [[bible to="Philippians 4:12–13" /]]',
    ),
  ),
));
