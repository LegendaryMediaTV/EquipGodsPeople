<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'In several of his recent sermons, John Piper has been sharing a mnemonic that he has lived by in his Christian walk. This device can be used as a guideline before, during, and after any situation. While this may not be an exact quote, as his expansion of the five keywords changes, here’s a summary of the concept:'
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,

      'Admit you need God [[bible to="John 15:5" /]]' . PHP_EOL,
      'Pray for His help [[bible to="Psalm 50:15" /]]' . PHP_EOL,
      'Trust in His promises [[bible to="2 Chronicles 20:20" /]]' . PHP_EOL,
      'Act with His guidance [[bible to="Philippians 2:12–13" /]]' . PHP_EOL,
      'Thank Him in all things [[bible to="Psalm 106:1" /]]',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.desiringgod.org/labs/practical-steps-to-walk-by-faith'],

        'John Piper, ',
        new BS_Citation(null, 'Practical Steps to Walk by Faith'),
      ),
    ),
  ),
));
