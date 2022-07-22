<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Luke 12:22–34', 'version' => 'NLT']),

  new BS_Heading3(null, 'Asking the Right Question'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Instead of asking “Why ',
      new BS_Emphasis(
        null,
        'should'
      ),
      ' I give this away?” do You want me to ask, “Why ',
      new BS_Emphasis(
        null,
        'shouldn’t'
      ),
      ' I give this away?” Should I put the burden of proof on ',
      new BS_Emphasis(
        null,
        'keeping'
      ),
      ' rather than on giving? When money comes in, should giving rather than keeping be my default, the rule not the exception? Unless there’s a compelling reason to keep, should I ',
      new BS_Emphasis(
        null,
        'normally'
      ),
      ' give?”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—Randy Alcorn, ',
      new BS_Citation(
        null,
        new BS_Link(
          ['to' => 'https://www.epm.org/resources/2010/Jan/26/generous-giving-40-questions-ask-god/'],
          'Generous Giving: 40 Questions to Ask God'
        )
      ),
    ),
  ),

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'What would you say “real life” is measured by? Read Luke 12:15 and James 2:12. How does this affect your previous answer?',
      'Discuss your thoughts on the Randy Alcorn quote.',
      'Luke 12:48 says, “Much is required from those to whom much is given, and much more is required from those to whom much more is given.” Comparing your economic status to that of the rest of the world, which category do you feel you fall in? How should that affect your giving from now on?',
      'Love is the desire to meet someone’s needs, and giving is a prime example of that. With that in mind, read Romans 13:8–10 several times throughout the week, and meditate on its application in your life.',
    ],
  ]),
));
