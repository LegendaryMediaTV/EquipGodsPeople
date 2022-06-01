<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 12:15; Matthew 18:13; Philippians 4:4; 1 Thessalonians 5:16–18'],

  new BS_Paragraph(
    null,
    'This is part three of the series on distractions: rejoicing. Be sure to check out yesterday’s post on weeping if you haven’t already.',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 7:29–31', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'People used to say, “don’t worry, be happy”, and rejoicing is much better than just being happy. So, you would think that when making a list of distractions, that rejoicing wouldn’t be on the list. In fact, we are commanded to “rejoice with those who rejoice”. On top of that, in a parable about God, Jesus said that, “He rejoices over [the lost sheep He found] more than over the ninety-nine which have not gone astray.”',
  ),

  new BS_Paragraph(
    null,
    'Once again, it’s about focus and moderation. We can find joy in things of this world (marriage, children, etc.), but we are to rejoice primarily in the things of God, more specifically, in God Himself. We must also be careful not let the things we rejoice in get in the way of our communication with God (therefore becoming an idol), which is why I think Paul followed “rejoice always” immediately with “pray without ceasing.” Even if we rejoice in the ministry God has given us going well, we must be careful that it doesn’t become the source of or joy. In [bible to="Luke 10:20" /], Jesus said, “Nevertheless do not rejoice in this, that the spirits are subject to you, but rejoice that your names are recorded in Heaven.”',
  ),

  new BS_BiblePassage(['passage' => 'John 16:22', 'version' => 'NASB']),
));
