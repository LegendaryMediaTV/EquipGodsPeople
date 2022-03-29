<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Many people’s thirst mechanism is so weak that they misinterpret thirst for hunger. This is not unlike us trying to satisfy the inherit thirst for the Living Water of God by gorging on things of this world.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Feasting on God is as foreign to most Americans as an empty stomach. Why can’t we fix our souls on the only goodness who can handle our cravings? Why do we chase the more mild flavors of money, food and sex?',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://relevantmagazine.com/faith/socially-acceptable-sin/'],

        'Jason Todd, ',
        new BS_Citation(null, 'The Socially Acceptable Sin'),
      ),
    ),
  ),

  new BS_Paragraph(
    null,
    'While many of these things may seem obvious to some, recent studies have proven that Facebook and Twitter can be more addictive than all of those (and even the Christian taboo of drinking and smoking).',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'One of the great uses of Twitter and Facebook will be to prove at the Last Day that prayerlessness was not from lack of time.'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://twitter.com/johnpiper/status/5027319857'],
        'John Piper'
      ),
    ),
  ),

  new BS_Paragraph(
    null,
    'Help keep earthly things in moderation by making sure you stay Spiritually hydrated with the Living Water of the Holy Spirit!',
  ),

  new BS_BiblePassage(['passage' => 'Jeremiah 2:11-13', 'version' => 'NLT']),
));
