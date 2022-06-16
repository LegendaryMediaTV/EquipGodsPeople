<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 Corinthians 15:46; Galatians 3:23–25; Romans 7:12; Romans 8:3–4'],

  new BS_Paragraph(
    null,

    'One of my favorite books outside of the Bible is ',
    new BS_Link(
      ['to' => 'https://www.amazon.com/There-Trees-Garden-Divine-Destiny/dp/1929371551/'],
      '“There Were Two Trees in the Garden” by Rick Joyner',
    ),
    '. In midst of the garden of Eden there were two trees: the Tree of the Knowledge of Good and Evil, and the Tree of Life. The premise of the book is “first in the natural, then the spiritual”, so that the Tree of the Knowledge of Good and Evil is symbolic of living by the Law and the Tree of Life is symbolic of living by the Spirit.',
  ),

  new BS_BiblePassage(['passage' => '2 Corinthians 3:5–6', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'What many people don’t understand is that the intention of the Law was never to BRING salvation, but to prove that we NEED salvation! “The Law is holy, and the commandment is holy and righteous and good”, but “what the Law could not do, weak as it was through the flesh, God did: sending His own Son in the likeness of sinful flesh and as an offering for sin, He condemned sin in the flesh, so that the requirement of the Law might be fulfilled in us, who do not walk according to the flesh but according to the Spirit.”',
  ),
));
