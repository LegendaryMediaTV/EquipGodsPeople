<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Psalm 46:10', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'I always hear this passage as, “be still, and know that I Am God” (KJV/NIV) and the New Living Translation says, “be silent, and know that I Am God.” So, which is it?',
  ),

  new BS_Paragraph(
    null,
    'The Hebrew word there ([strongs id="h7503" /], raphah, raw-faw’) means “to slacken”. It’s also translated throughout the Bible as “leave alone”, “be idle”, “abandon”, “fail”, and “be weak”. With such a versatile word, pehaps God means it all…',
  ),

  new BS_Blockquote(
    null,
    '“Stop being so busy, stop trying to fix everything yourself, stop talking for a minute, leave whatever you’re worrying about alone for a while, you don’t always have to succeed, and you don’t always have to be strong… Why? Because [sc]I Am[/sc] God!”',
  ),

  new BS_Paragraph(
    null,
    '[bible to="Deuteronomy 31:6" /] uses that same word, saying, “Be strong and courageous, do not be afraid or tremble, for the [sc]Lord[/sc] your God is the One who goes with you. He will not fail [raphah] you or forsake you.”',
  ),

  new BS_Paragraph(
    null,
    'So, we can stop, rest, be silent, fail, and be weak, because God goes with us and He will never stop, never rest, never stop beckoning us, never abandon us, never fail us, and never stop being our strong tower!',
  ),
));
