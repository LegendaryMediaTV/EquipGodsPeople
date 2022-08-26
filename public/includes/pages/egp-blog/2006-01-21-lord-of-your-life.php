<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Hebrews 6:1–2'],

  new BS_BiblePassage(['passage' => 'Luke 6:46–49', 'version' => 'NASB']),

  new BS_Heading2(null, 'What is Lord?'),

  new BS_Paragraph(
    null,
    'The word “lord” means “one possessing great power; to exercise authority over, restrain, regulate, and direct.” Therefore, whatever rules over (i.e. controls) is lord. Money ([bible to="Luke 3:14" /]), career, possessions ([bible to="Mark 10:21–23" /]), loved ones ([bible to="Luke 9:59–62" /]; [bible to="Luke 14:26" /]), time, fitness ([bible to="1 Timothy 4:8" /]), and religion ([bible to="Matthew 12:1–7" /]) are just a few examples of what can be lord of one’s life.',
  ),

  new BS_Paragraph(
    null,

    'In [bible to="Luke 6:46"]verse 46[/bible], Jesus asks how can someone call Him Lord, if that person does not do what He says. It is our responsibility as Christians to let Jesus be Lord of [strong][em]everything[/em][/strong] in our lives. [bible to="Colossians 3:17" /] states, “Whatever you do in word or deed, do [strong][em]all[/em][/strong] in the name of the Lord Jesus, giving thanks through Him to God the Father.” Thus, you should make a conscious effort to make all your words and actions Christ-centered.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'It is true that we are not Jesus, we are just His representatives. The question is NOT “What would Jesus do?” But rather, what are we going to do in His NAME, i.e. His PLACE?',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/Foundations-A-Discipleship-Textbook-Tool/dp/1449703119/'],

        'Dr. James Ross, ',
        new BS_Citation(null, 'Foundations: A Discipleship Textbook and Tool'),
      ),
    ),
  ),

  new BS_Heading2(null, 'A Call to Action'),

  new BS_Paragraph(
    null,
    'The significance here is that hearing Christ’s commands is not enough, but [strong][em]doing[/em][/strong] them is what counts. The word translated as “do” in [bible to="Colossians 3:17" /] and [bible to="Luke 6:46" /], and as “acts” in [bible to="Luke 6:47"]verse 47[/bible] comes from the Greek word “poieo,” [strongs id="g4160" /] which means “to make or build; to do, bring forth, or produce.” This is why His parable of building a house is a perfect example of His message here.',
  ),

  new BS_Paragraph(
    null,
    'We must “dig deep,” past the sand ([bible to="Matthew 7:26" /]) in order to get a good foundation. This sand is likened unto the thorns in the parable of the sower in that it represents cares, riches, and pleasures of this life. ([bible to="Luke 8:14" /]). It symbolizes the iniquity that separates us from close communion with God; each grain represents the things in our life that we do not turn over to Christ’s Lordship. The world we live in is full of self-reliance, self-dependence, and self-control. We become enthralled with “I can do all things” and leave off the “through Christ.” ([bible to="Philippians 4:13" /]) The foundational Rock spoken of here is Christ ([bible to="1 Corinthians 10:4" /]; [bible to="Matthew 16:18" /]).',
  ),
));
