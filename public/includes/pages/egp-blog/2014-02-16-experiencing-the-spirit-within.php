<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 8:14–18; Galatians 4:3–7; John 16:7–14'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Maybe you are reading this and are thinking, “Well, I just don’t experience that kind of intimacy with God … the Spirit in me never cries, ‘Abba, Father!’” If this is you, I don’t have a four-step guide to connecting with the Holy Spirit. I would, however, like to suggest two potential obstacles for you to consider: comfort and volume.'
    ),

    new BS_Paragraph(
      null,

      '[b]Comfort (Maybe Your Life Is Too Safe)[/b]' . PHP_EOL,
      'From my experience, I have felt closest to God when nearness to Him was a necessity. The Bible says that the Spirit comes through in situations where we would normally be afraid ([bible to="Luke 12:11–12" /]). … Jesus refers to the Holy Spirit as the “Helper” or “Comforter.” Let me ask you a simple question: Why would we need to experience the Comforter if our lives are already comfortable? …'
    ),

    new BS_Paragraph(
      null,

      '[b]Volume (Maybe Your Life Is Too Loud)[/b]' . PHP_EOL,
      'In the craziness of our world, it takes tremendous effort to find a quiet place. It takes time to quiet your mind and your heart before the Lord. It means turning off the music, the television, or your cell phone. … I don’t know exactly what it will look like for you to be still before the Lord. But I do know that no matter what your personality, it is a spiritual discipline to be still, to listen, and to cut out the distraction and din of our world. And as we practice this stillness, this waiting, this being, it is then that we can experience deep intimacy and relationship with the Holy Spirit.'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/Forgotten-God-Reversing-Tragic-Neglect/dp/1434767957/'],

        'Francis Chan with Danae Yankoski, ',
        new BS_Citation(null, 'Forgotten God: Reversing Our Tragic Neglect of the Holy Spirit'),
        ', chapter 5',
      ),
    ),
  ),
));
