<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Psalm 62:5–6; Psalm 52:8; Matthew 1:21'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“Come close to Me, and rest in My Presence. [sc]I Am[/sc] all around you, closer than the very air you breathe. Trust Me with each breath you take.',
    ),

    new BS_Paragraph(
      null,
      'Your need for Me is as constant as your need for oxygen. So don’t neglect the discipline of practicing My Presence. Because your mind is easily distracted, you must keep coming back to Me again and again. Do not be discouraged by your tendency to wander off in tangents from your true Center in me. Simply keep making the needed adjustments to return to Me. Make these little corrections joyfully—trusting in My <em>unfailing Love</em>.'
    ),

    new BS_Paragraph(
      null,
      'Use My Name, ‘Jesus,’ to reconnect with Me. Whisper it, sing it, shout it—remembering what it means: ‘The [sc]Lord[/sc] saves.’ Embellish My Name with words of love and trust. Let your heart overflow with gratitude as you ponder all [sc]I Am[/sc] to you, all I have done for you. These practices draw you close to Me and help you rest in My Presence.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/Jesus-Today-Experience-Presence-Calling®/dp/1400320097/'],

        'Sarah Young, ',
        new BS_Citation(null, 'Jesus Today'),
        ', entry 53',
      ),
    ),
  )
));
