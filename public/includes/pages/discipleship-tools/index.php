<?php
$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_SectionWithHeader(
    ['title' => 'Getting More from Your Bible', 'first' => true],

    new BS_Heading3(null, 'The Amplified Bible'),

    new BS_Paragraph(
      null,

      'You can find it at most any bookstore (',
      new BS_Link(['to' => 'https://www.mardel.com/'], 'Mardel'),
      ', ',
      new BS_Link(['to' => 'https://www.lifeway.com/'], 'Lifeway'),
      ', ',
      new BS_Link(
        ['to' => 'https://www.booksamillion.com/'],
        'Books-a-Million'
      ),
      ', ',
      new BS_Link(
        ['to' => 'https://www.barnesandnoble.com/'],
        'Barnes &amp; Noble'
      ),
      ', ',
      new BS_Link(['to' => 'https://www.amazon.com'], 'Amazon'),
      ').',
    ),

    new BS_List([
      'items' => [
        'expounds a lot on the definitions from the original texts',
        'provides several different possible renderings',
        'tons of footnotes for cross referencing and texts that influenced their rendering',
      ],
    ]),

    new BS_Paragraph(
      null,
      'It does seem a bit “wordy” for regular reading.'
    ),

    new BS_Paragraph(
      null,
      'The only thing that I’ve found so far that kind of bothered me about it is that it seems to present Christ as an angel…well “the Angel of the Lord.” Then again, the word angel just means “messenger” and Christ is the Message (i.e., the Word), but that’s a deep one… So, really, the only problem with them doing that is people present view of what an angel is (wings and a halo).'
    ),


    ////////////////////////////////////////////////////////////////////////

    new BS_Heading3(null, 'Comparative (or Parallel) Study Bible'),

    new BS_Paragraph(null, 'You can find these at most any bookstore'),

    new BS_Paragraph(null, 'Combinations include:'),

    new BS_List([
      'items' => [
        'KJV/NLT',
        'KJV/NIV (Great if your church uses both)',
        'NIV/NASB',
        'KJV/NIV/NLT/NASB (My personal favorite for studying when I’m on the go)',
        'KJV/AMP/NIV/NASB (My favorite before the one above came out…I really wish they had a KJV/NASB/NLT/AMP)',
      ],
    ]),

    ////////////////////////////////////////////////////////////////////////

    new BS_Heading3(null, 'Dictionary'),

    new BS_Paragraph(
      null,
      'Just your standard dictionary is one of the best (yes, I said best) Bible study tools. Webster’s is good; it gets most of its definitions from the Greek. (I believe Webster developed the Authorized Version of the KJV). I use a pocket dictionary from Funk &amp; Wagnalls.'
    ),
  ),

  ////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    ['title' => 'Going Deeper'],

    new BS_Heading3(null, 'KJV (or NASB) Greek and Hebrew Key Study Bible'),

    new BS_List([
      'items' => [
        'on key words (of their choice…let’s not go there, lol) it gives the Strong’s Number for it',
        'has Strong’s Lexicon in the back (mine was kind of a bad, shrunk copy of it, but you know…whatever)',
        'good study footnotes',
      ],
    ]),

    new BS_Paragraph(
      null,
      'As you can tell, I wasn’t too pleased with it because I knew there was better out there…but it’s a good beginner thing.'
    ),

    new BS_Paragraph(
      null,
      'The main thing that I didn’t like about it was the words I wanted to look up weren’t linked with the corresponding number.'
    ),
  ),

  ////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    ['title' => 'Advanced Study Techniques'],

    new BS_Heading3(null, 'Interlinear Greek New Testament'),

    new BS_Paragraph(
      null,
      'There are several of these available at Christian bookstores.'
    ),

    new BS_List([
      'items' => [
        'shows the Greek text',
        'under the text it gives their literal translation of that word',
        'usually has another translation(s) out to the side(s) for reference and/or comparison',
      ],
    ]),

    new BS_Paragraph(
      null,
      'I’d suggest only having one alternate translation because too many gets too hard to read/follow.'
    ),

    new BS_Paragraph(
      null,
      'At Christian bookstores (Lifeway, Scroll) I’ve seen NIV and an NIV/NASB, there’s also a KJV, but I’ve only found it online.'
    ),

    new BS_Paragraph(
      null,
      'The only thing about this is that I don’t like the Greek text that they used. It’s the same one that they used for the NIV, so it cuts out a lot…and isn’t very reliable. Also, an interlinear doesn’t help a whole lot unless you have a lexicon or know Greek.'
    ),

    ////////////////////////////////////////////////////////////////////////

    new BS_Heading3(null, 'Strong’s Concordance'),

    new BS_Paragraph(null, new BS_Italics(null, 'Concise')),

    new BS_List([
      'items' => [
        'cuts out the small words so you don’t have 100 pages of the word “the”, another 100 of the word “and”',
        'trims other “too frequent” words to the important verses (once again, their judgment) so you don’t have 30 pages of “Moses”',
      ],
    ]),

    new BS_Paragraph(
      null,
      'It’s limited to single words, only shows a fraction of the verse, but a good tool nonetheless.'
    ),

    new BS_Paragraph(null, new BS_Italics(null, 'Exhaustive')),

    new BS_List([
      'items' => [
        'has all the words (but it has alllllllll the words, lol)',
        'with links to the Strong’s Numbers',
      ],
    ]),

    new BS_Paragraph(
      null,
      'It’s limited to single words, only shows a fraction of the verse. So it’s better, but wordy. Also, includes Strong’s Definitions.'
    ),

    ////////////////////////////////////////////////////////////////////////

    new BS_Heading3(null, 'Lexicon of Greek/Hebrew definitions'),

    new BS_Paragraph(
      null,
      'Without going into the Encyclopedia Britannica editions (i.e., 20 volumes for hundreds of dollars)'
    ),

    new BS_Paragraph(
      null,
      new BS_Italics(null, 'Thayer’s Greek definitions')
    ),

    new BS_Paragraph(
      null,
      'I’ve yet to find a book version, but I have electronic ones so I haven’t looked too hard.'
    ),

    new BS_List([
      'items' => [
        'expounded definitions',
        'shows all places used in KJV and word how it was translated',
      ],
    ]),

    new BS_Paragraph(
      null,
      new BS_Italics(
        null,
        'Greek-English Lexicon of the New Testament and Other Early Christian Literature'
      )
    ),

    new BS_List([
      'items' => [
        'expounded definitions',
        implode('', [
          'shows definition, and the verses that each definition section applies (e.g., a. definition 1 ',
          new BS_BibleLink(['to' => 'Hebrews 6:13']),
          '; b. definition 2 ',
          new BS_BibleLink(['to' => 'Acts 2:7']),
          ', ',
          new BS_BibleLink(['to' => 'Romans 3:17']),
          ', etc.)',
        ]),
      ],
    ]),
  ),

  ////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    ['title' => 'Study Methods'],

    new BS_Paragraph(
      null,

      'The most important thing to do before picking up a book is pray. Ask the Holy Spirit to speak to you, because He reveals all things. (',
      new BS_BibleLink(['to' => '1 Corinthians 2:9–12']),
      ')',
    ),

    new BS_Paragraph(
      null,
      'Typically, I study using the following methods:'
    ),

    new BS_List([
      'items' => [
        implode('', [
          'time and computer/book resources are both available (best method):',
          new BS_List([
            'ordered' => true,
            'items' => [
              'look in the Greek/Hebrew',
              'reference words with lexicon(s) to get definitions',
              'reference words in the definitions to get an expounded definition that’s not just my preconceived definition of that word',
              'gather thoughts',
              'write them down',
            ],
          ]),
        ]),
        implode('', [
          'time but no Greek/lexicon, or not much time:',
          new BS_List([
            'ordered' => true,
            'items' => [
              'compare English translations',
              'gather thoughts',
              'write them down',
            ],
          ]),
        ]),
        implode('', [
          'reading, with light study:',
          new BS_List([
            'ordered' => true,
            'items' => [
              'read a trusted translation (usually a more of a meaning translation than a word translation)',
              'compare with word translation on quirky stuff',
              'pause and reflect',
            ],
          ]),
        ]),
      ],
    ]),
  ),
));
