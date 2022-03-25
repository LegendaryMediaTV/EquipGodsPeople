<?php
$languages = egp_languages();

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_Nav([
    'tabs' => true,
    'items' => egp_languages(),
    'className' => 'h4 mb-5'
  ]),

  new BS_Paragraph(
    null,

    'Dr. James Strong (1822-1894) was the professor of Exegetical Theology at Drew Theological Seminary and oversaw the creation of ' .
      new BS_Link(
        ['to' => 'http://en.wikipedia.org/wiki/Strong%27s_Concordance'],
        'Strong’s Exhaustive Concordance of the Bible'
      ) .
      '. This was published in 1890 and linked every word in the King James Version back to the word in the original language' .
      ' using a unique numbering system referred to as Strong’s Numbers.',
  ),

  new BS_Paragraph(
    null,

    'Strong’s Numbers have become a vital tool for Bible scholars, lay-leaders, and Bible enthusiasts alike.' .
      ' It provides a way of doing a deeper Bible study without having to know a non-English language.'
  ),

  // new BS_Preformatted([ 'item' => $languages ]),

  new BS_Row(
    null,

    ...array_map(
      function ($language) {
        return new BS_Col(
          ['md' => true, 'className' => 'mt-4'],
          new BS_LexiconLetterSelector(['language' => $language])
        );
      },
      $languages
    )
  ),
));
