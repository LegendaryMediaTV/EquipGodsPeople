<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Exodus 5:1–2', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'In the “Word of Promise” audio Bible, they had Pharaoh’s character say these lines sarcastically, almost like, “Oh REALLY?!?” It was funny to me, but I imagine that it was accurate. Often times in Egyptian culture, the pharaohs were considered gods (or at least the personification of them), so this mortal man before him talking about an invisible God…the God of his slaves…there was a reason he didn’t feel threatened.'
  ),

  new BS_Paragraph(
    null,
    'In [bible to="Exodus 4" /], God told Moses that Pharaoh wouldn’t listen to him when told to release the Israelites, but He didn’t tell him that just how hard Pharaoh’s heart would be against them. In the proceeding verses, Pharaoh puts an impossible workload on the Israelites for Moses even asking for their temporary release, making Moses doubt his calling.'
  ),

  new BS_Paragraph(
    null,
    'Know this…when God puts a calling on your life, the Devil will do everything he can to discourage you and stop you, but if God says it will happen, you can count on it! Don’t expect the road to be easy, just rewarding.',
  ),
));
