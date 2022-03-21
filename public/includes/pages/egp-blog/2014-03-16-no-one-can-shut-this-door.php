<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Revelation 3:7-8', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'While the following message is somewhat personalized, the concept behind it is true for anything that God is in:',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'New Beginnings, God has opened a door. No one’s gonna close this door. No one CAN shut this door. If Jesus opens this door, NO ONE can shut…this…door… You see, when Jesus does a work, NOTHING stops it and by His GRACE He is doing a work here at New Beginnings. And critics, who judge what we do or how we do it, THEY’RE not gonna shut this door. And the downturn in the economy and our annual budget constraints … THEY’RE not gonna shut this door. And the people that complain about all that’s wrong with our church and don’t bother to serve and help us get it right, THEY’RE not gonna shut this door. And the culture that surrounds this church of complacency—where people want to act like Christians but not really know Jesus Christ—THEY’RE not gonna shut this door. And it doesn’t matter who our elected official is in Washington, in Austin, or right here in our city, THEY’RE not gonna shut this door. Because Jesus says, “Behold, I have set before you an open door which NO ONE can shut.” Now, if THAT doesn’t motivate you to worship, your wood is WET!'
    ),

    new BS_BlockquoteFooter(
      null,

      '—Connor Bales, ',
      new BS_Link(
        ['to' => 'http://www.nbbctx.org/'],
        'New Beginnings Baptist Church',
      ),
      ', ',
      new BS_Citation(null, 'Dear Church: Part 8 - Open Door'),
    ),
  ),
));
