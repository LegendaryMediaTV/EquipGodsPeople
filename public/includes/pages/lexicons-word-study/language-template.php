<?php
$languages = egp_languages();
$languageCount = count($languages);
for ($languageIndex = 0; $languageIndex < $languageCount; $languageIndex++) {
  if ($languages[$languageIndex]->_id === $metadata->_id) break;
}

$html->add(new BS_Container(
  [ 'className' => 'py-section' ],

  new BS_Nav([
    'tabs' => true,
    'items' => json_decode(json_encode($languages), true),
    'activeItem' => $metadata->_id,
    'className' => 'h4 mb-5',
  ]),

  implode('', $metadata->_id === 'hebrew'
    ? [
      new BS_Paragraph(
        null,
      
        'The Old Testament (a.k.a., “Hebrew Bible” was written primarily in ',
        new BS_Link(
          [ 'to' => 'https://en.wikipedia.org/wiki/Hebrew_language' ],
          'Hebrew'
        ),
        ', but there are portions that were written in ',
        new BS_Link(
          [ 'to' => 'https://en.wikipedia.org/wiki/Biblical_Aramaic' ],
          'Aramaic'
        ),
        '. It was translated into ',
        new BS_Link(
          [ 'to' => 'https://en.wikipedia.org/wiki/Koine_Greek' ],
          'Koine Greek'
        ),
        ' between the 3',
        new BS_Superscript(null, 'rd'),
        ' and 1',
        new BS_Superscript(null, 'st'),
        ' centuries BC. This translation is referred to as the ',
        new BS_Link(
          [ 'to' => 'http://en.wikipedia.org/wiki/Septuagint' ],
          'Septuagint (LXX)'
        ),
        ' because it is said to have been translated by seventy (70) Jewish scholars.',
      ),

      new BS_Paragraph(
        null,
        'Hebrew words and phrases are read from right to left. So, [hebrewCode]ab[/hebrewCode], would be read as ',
        '[hebrewCode]a[/hebrewCode] (a) and then [hebrewCode]b[/hebrewCode] (b), so “ab” ([strongs id="H1" /]).'
      ),
    ]
    : [
      new BS_Paragraph(
        null,

        'The New Testament was written primarily in ',
        new BS_Link(
          [ 'to' => 'https://en.wikipedia.org/wiki/Koine_Greek' ],
          'Koine Greek'
        ),
        ' (the predominant language of the time, known by most people), but there are portions that were written in ',
        new BS_Link(
          [ 'to' => 'https://en.wikipedia.org/wiki/Biblical_Aramaic' ],
          'Aramaic'
        ),
        ' (the primary language of the Jews in Jesus’s time), and ',
        new BS_Link([ 'to' => 'https://en.wikipedia.org/wiki/Latin' ], 'Latin'),
        ' (the official language of the Roman empire).',
      ),

      new BS_Paragraph(
        null,
        
        'Because it would have been the primary language of Jesus and his disciples, some scholars believe that some (if not all) ',
        'of the New Testament books were written completely in Aramaic. The Aramaic version of the New Testament is called the ',
        new BS_Link(
          [ 'to' => 'http://en.wikipedia.org/wiki/Peshitta' ],
          'Peshitta'
        ),
        '. However, most of the time when the New Testament speakers and writers quoted the Old Testament, they quoted the ',
        'the Greek version of the Old Testament, called the ',
        new BS_Link(
          [ 'to' => 'http://en.wikipedia.org/wiki/Septuagint' ],
          'Septuagint (LXX)'
        ),
        ', so they undoubtedly could have considered writing in Greek for uniformity sake (though you could argue that the ',
        'New Testament authors were writing for people and not with the intention of making an overall book).',
      ),

      new BS_Paragraph(
        null,

        'Personally, I think that it’s quite possible that some of the New Testament books and letters were originally written ',
        'in Aramaic (such as [bible to="Matthew" /]) and were soon translated into Koine Greek so that the Victorious News could ',
        'reach a wider audience, or even vice versa. At the very least, there is still harmony between the Greek and Aramaic ',
        'versions and both offer insights into the first century times and culture.',
      ),
    ]
  ),

  new BS_LexiconLetterSelector([ 'language' => $languages[$languageIndex] ])
));

// $html->add(new BS_Preformatted([ 'item' => $metadata ]));
$html->add(new BS_Preformatted([ 'item' => $languages[$languageIndex] ]));
