<?php
$html->add(new BS_BlogEntryPage(
  [ 'metadata' => $metadata ],

  new BS_BiblePassage([ 'passage' => 'Deuteronomy 4:9, 31', 'version' => 'ESV' ]),

  new BS_Paragraph(
    null,

    'In this passage, both the word “take care” and “keep” literally mean “put a hedge around” (see ',
    new BS_LexiconLink([ 'to' => 'H8104' ], 'Hebrew lexicon entry H8104'),
    '). Also, while the word translated “soul” is the usual word for soul, it means “vitality” or “life breath” (see ',
    new BS_LexiconLink([ 'to' => 'H5315' ], 'Hebrew lexicon entry H5315'),
    '), so you can think of it as the essence of who you really are. Finally, the word translated “merciful” literally means “full of compassion” (see ',
    new BS_LexiconLink([ 'to' => 'H7349' ], 'Hebrew lexicon entry H7349'),
    ').',
  ),

  new BS_Paragraph(
    null,
    'So, you could paraphrase the passage like this:'
  ),

  new BS_BiblePassage(
    [
      'passage' => 'Deuteronomy 4:9, 31',
      'version' => (object) [ 'abbreviation' => 'paraphrase' ],
      'verses' => [
        (object) [
          'number' => 9,
          'text' => '“Make it a point to protect who you REALLY are. Don’t forget what God has shown you. Treasure it in your heart for your whole life, so that you can tell it to your kids and grandkids.',
        ],
        (object) [
          'number' => 31,
          'text' => 'Because Yahweh, YOUR God, is full of compassion. He WILL NOT abandon you to the enemy. He WILL NOT let you be destroyed. He WILL NOT forget His commitment, because His promises span generations!”',
        ],
      ],
    ]
  ),
));
