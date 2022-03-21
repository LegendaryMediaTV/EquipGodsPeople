<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'I don’t want my life to be explainable without the Holy Spirit. I want people to look at my life and know that I couldn’t be doing this by my own power. I want to live in such a way that I am desperate for Him to come through. …'
    ),

    new BS_Paragraph(
      null,
      'I don’t believe God wants me (or any of His children) to live in a way that makes sense from the world’s perspective, a way I know I can “manage.” I believe He is calling me—and all of us—to depend on Him for living in a way that cannot be mimicked or forged. He wants us to walk in step with His Spirit rather than depend solely on the raw talent and knowledge He’s given us. …'
    ),

    new BS_Paragraph(
      null,
      'God is not interested in numbers. He cares most about the faithfulness, not the size, of His bride. He cares whether people are lovers of Him. And while I might be able to get people into the doors of a church or auditorium if I tell enough jokes or use enough visuals, the fact remains that I cannot convince people to be obsessed with Jesus. Perhaps I can talk people into praying a prayer, but I cannot talk anyone into falling in love with Christ. I cannot make someone understand and accept the gift of grace. Only the Holy Spirit can do that. So by every measure that actually counts, I [i]need[/i] the Holy Spirit. Desperately.'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'http://www.amazon.com/Forgotten-God-Reversing-Tragic-Neglect/dp/1434767957/'],

        'Francis Chan with Danae Yankoski, ',
        new BS_Citation(null, 'Forgotten God: Reversing Our Tragic Neglect of the Holy Spirit'),
        ', chapter 7',
      ),
    ),
  ),
));
