<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Revelation 3:1–3; John 15:1–9',
    'youtube' => 'Akk6MiuvZWA',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“This is what threw me over the edge: I realized I USED TO love Jesus more than I do RIGHT NOW. What the heck am I DOING then? How did I get THERE? I didn’t EVER want to make a statement like THAT! But all the PRESSURE, the INSECURITIES, the LIES of trying to match up to THIS person, to THAT person, and to answer to ALL these people, and I just forgot to stay CONNECTED to Him.'
    ),

    new BS_Paragraph(
      null,

      'And I heard these words from the [sc]Lord[/sc] from ',
      new BS_BibleLink(['to' => 'Revelation 3']),
      ': ‘Strengthen what REMAINS and is about to DIE.’ … You have this great REPUTATION, but you’re DEAD, but there’s SOMETHING that remains. Strengthen what REMAINS and is ABOUT to die. … That was not a word of CONDEMNATION … it was this word of ENCOURAGEMENT from my LORD, the SHEPHERD. … It was just God saying, ‘You know what, Francis? It’s STILL in there. I KNOW you love Me. I KNOW you’re My prophet. I KNOW you’ll say whatever I tell you to say. THAT’S still in you. It REMAINS, just BUILD it back up again.’ …',
    ),

    new BS_Paragraph(
      null,
      'The more ARROGANT I get and the more I PRETEND I’m something I’m not, the less FRUIT that comes out of my life. … Let’s just ABIDE in Him. And let’s GET REAL with one another.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—Francis Chan, ',
      new BS_Citation(null, 'I Am the True Vine'),
      ' (Oxygen, Sydney)',
    ),
  )
));
