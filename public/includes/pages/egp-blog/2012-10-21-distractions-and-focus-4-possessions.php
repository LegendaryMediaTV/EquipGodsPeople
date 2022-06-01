<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Acts 17:26–27; Ecclesiastes 5:10–12'],

  new BS_Paragraph(
    null,
    'This is part four of the series on distractions: buy but do not possess.',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 7:29–31', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Even in the secular world it’s a common saying, that “the things you own end up owning you.” Clever marketing combined with the desire to have the latest and greatest make buying things nearly irresistible. For some it’s a cellphone or computer, others it’s a weapon, others still it’s a car, house, washing machine, camera…',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'What is it, then, that this desire and this inability proclaim to us, but that there was once in man a true happiness of which there now remain to him only the mark and empty trace, which he in vain tries to fill from all his surroundings, seeking from things absent the help he does not obtain in things present? But these are all inadequate, because the infinite abyss can only be filled by an infinite and immutable object, that is to say, only by God Himself.',
    ),

    new BS_BlockquoteFooter(
      null,

      '—Blaise Pascal, ',
      new BS_Citation(null, 'Pensées, section VII, published 1669'),
    ),
  ),

  new BS_BiblePassage(['passage' => 'Matthew 6:19–24', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'In [bible to="Matthew 6:22–23"]verses 22 and 23[/bible], it seems that Jesus went from talking about not storing up wealth, to eyes, and then back to wealth again. In the Jewish culture of Jesus’ day, to say that someone had a “good/clear eye”, it meant that they were generous, and to say that they they had a “bad eye” meant that they were stingy. In essence, He was saying that stinginess leads to a great inner darkness.',
  ),

  new BS_BiblePassage(['passage' => 'Acts 2:44–45', 'version' => 'NASB']),
));
