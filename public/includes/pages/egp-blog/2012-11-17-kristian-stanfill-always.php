<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'N7ltcijkLKs'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'My foes are many, they rise against me [[bible to="Psalm 3:1–4" /]]' . PHP_EOL,
      'But I will hold my ground [[bible to="Ephesians 6:10–11" /]]' . PHP_EOL,
      'I will not fear the war, I will not fear the storm [[bible to="Psalm 27:1–3" /]]' . PHP_EOL,
      'My help is on the way, my help is on the way [[bible to="2 Kings 6:15–17" /]]'
    ),

    new BS_Paragraph(
      null,
      'Oh, my God, He will not delay [[bible to="Deuteronomy 4:7" /]]' . PHP_EOL,
      'My refuge and strength always [[bible to="Psalm 61:1–4" /]]' . PHP_EOL,
      'I will not fear, His promise is true [[bible to="Psalm 18:30–31" /]]' . PHP_EOL,
      'My God will come through always, always [[bible to="Romans 8:35–39" /]]'
    ),

    new BS_Paragraph(
      null,
      'Troubles surround me, chaos abounding [[bible to="Psalm 40:11–13" /]]' . PHP_EOL,
      'My soul will rest in You [[bible to="Psalm 32:7" /]]' . PHP_EOL,
      'I will not fear the war, I will not fear the storm [[bible to="Psalm 46:1–3" /]]' . PHP_EOL,
      'My help is on the way, my help is on the way [[bible to="Daniel 10:12–13" /]]'
    ),

    new BS_Paragraph(
      null,
      'I lift my eyes up, my help comes from the [sc]Lord[/sc] [[bible to="Psalm 121:1–3" /]]' . PHP_EOL,
      'From You [sc]Lord[/sc], from You [sc]Lord[/sc] [[bible to="2 Samuel 22:7–19" /]]',
    ),
  ),
));
