<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Luke 6:46–49', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The word “lord” means “one possessing great power; to exercise authority over, restrain, regulate, and direct.” Therefore, whatever rules over (i.e. controls) is lord. Money ([bible to="Luke 3:14" /]), career, possessions ([bible to="Mark 10:21–23" /]), loved ones ([bible to="Luke 9:59–62" /], [bible to="Luke 14:26" /]), time, fitness ([bible to="1 Timothy 4:8" /]), and religion ([bible to="Matthew 12:1–7" /]) are just a few examples of what can be lord of one’s life.',
  ),

  new BS_Paragraph(
    null,
    'In [bible to="Luke 6:46–49"]verse 46[/bible], Jesus asks how can someone call Him Lord, if that person does not do what He says. It is our responsibility as Christians to let Jesus be Lord of everything in our lives. [bible to="Colossians 3:17" /] states, “Whatever you do in word or deed, do all in the name of the Lord Jesus, giving thanks through Him to God the Father.” Thus, you should make a conscious effort to make all your words and actions Christ-centered.',
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
));
