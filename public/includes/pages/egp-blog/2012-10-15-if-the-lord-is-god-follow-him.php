<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 6:24; 1 Corinthians 6:12; 2 Peter 2:19; 2 Timothy 3:2–5'],

  new BS_BiblePassage(['passage' => 'Colossians 3:2–5', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'All sin is a form of idolatry. In sinning, you’re saying that God’s plans and desires for you and others aren’t good enough. Essentially, you are either placing someone, something, or your own desires in God’s place.',
  ),

  new BS_BiblePassage(['passage' => '1 Kings 18:21', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Jesus said it this way, “No one can serve two masters; for either he will hate the one and love the other, or he will be devoted to one and despise the other.” Paul also said, “All things are lawful for me, but I will not be mastered by anything,” and, “by what a man is overcome, by this he is enslaved.”',
  ),

  new BS_BiblePassage(['passage' => 'Joshua 24:15', 'version' => 'NASB']),
));
