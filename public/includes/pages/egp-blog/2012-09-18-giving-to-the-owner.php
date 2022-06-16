<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Genesis 1:27; Genesis 9:6; Colossians 3:10; Romans 8:29; Romans 13:7–8'],

  new BS_BiblePassage(['passage' => 'Luke 20:22–25', 'version' => 'NKJV']),

  new BS_Paragraph(
    null,
    'Not unlike today, the money of that time had a governmental ruler’s picture on it. Jesus was saying that the money belonged to Caesar because it had his picture or “image” on it. People were created in God’s image…we belong to Him! So, if the government wants a portion of our money, let them have it, because what’s more important is that we give our lives to God!',
  ),

  new BS_Paragraph(
    null,
    'Also, the worth of money is determined by whose picture is on it and what is inscribed upon it.',
  ),

  new BS_BiblePassage(['passage' => '2 Corinthians 3:3', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'So next time you feel worthless, remember that you are stamped with the True King’s image and have an inscription from Christ by the Spirit.',
  ),
));
