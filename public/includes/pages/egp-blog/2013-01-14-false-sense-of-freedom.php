<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Hebrews 2:14–15', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Satan exaggerates the limitations of God’s guidelines and promises limitless freedom, but anyone who has fallen prey to his schemes realizes that once you give in, the chains of bondage tighten, leaving you in a much worse state than before. By that time, most are so heavily deceived that they don’t even realize this is the case. But this is why Jesus came…to set the captives free! And “if the Son makes you free, you will be free indeed.” ([bible to="John 8:36" /])',
  ),

  new BS_BiblePassage(['passage' => 'Luke 4:18–19', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'But when Jesus made this quote about Himself in Luke from Isaiah, He only quoted the first half. While it’s not unusual for Satan to deceptively half quote scripture in order to try to steer people the wrong way ([bible to="Luke 4:9-12" /], [bible to="Psalm 91:11-13" /]), Jesus only quoted the first part because that was the part He was fulfilling that day. The rest of the passage was a prophecy of His second coming… ([bible to="Revelation 21:4" /])',
  ),

  new BS_Paragraph(
    null,
    '[bible to="Isaiah 61:2–3"]Isaiah 61:2b–3[/bible] (NASB) “…and the day of vengeance of our God; to comfort all who mourn, to grant those who mourn in Zion, giving them a garland instead of ashes, the oil of gladness instead of mourning, the mantle of praise instead of a spirit of fainting. So they will be called oaks of righteousness, the planting of the [sc]Lord[/sc], that He may be glorified.”',
  ),
));
