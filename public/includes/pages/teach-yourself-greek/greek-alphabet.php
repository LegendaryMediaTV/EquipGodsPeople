<?php
$html->add(new BS_Container(
  ['className' => 'py-section'],

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Letters',
      'subtitle' => 'order, proununciation, and transliteration',
      'id' => 'letters',
    ],

    new BS_Paragraph(
      null,
      'The following chart shows the name of Greek letter in Greek and English, the upper-case and lower-case Greek letters, their transliteration (i.e., the English equivalent), and their basic pronunciation (more in the next chapter).',
    ),

    new BS_Paragraph(
      null,
      'The following chart shows the name of Greek letter in Greek and English, the upper-case and lower-case Greek letters, their transliteration (i.e., the English equivalent), and their basic pronunciation (more in the next chapter).',
    ),

    new BS_Table(
      null,
      new BS_TableBody(
        null,
        new BS_TableRow(
          null,
          new BS_TableCellHeader(null, 'Greek Name / Transliteration'),
          new BS_TableCellHeader(null, 'Letter Pronunciation'),
          new BS_TableCellHeader(null, 'Greek Upper-case / Lower-case'),
          new BS_TableCellHeader(null, 'Letter Translit.'),
          new BS_TableCellHeader(null, 'Pronunciation'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode])/alfa[/greekCode] / alpha'),
          new BS_TableCellData(null, '[greekPronounce])/alfa[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]A[/greekCode] / [greekCode]a[/greekCode]'),
          new BS_TableCellData(null, 'a'),
          new BS_TableCellData(null, 'short “a” as in “father”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]b=hta[/greekCode] / beta'),
          new BS_TableCellData(null, '[greekPronounce]b=hta[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]B[/greekCode] / [greekCode]b[/greekCode]'),
          new BS_TableCellData(null, 'b'),
          new BS_TableCellData(null, '“b” as in “bet”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]g/amma[/greekCode] / gamma'),
          new BS_TableCellData(null, '[greekPronounce]g/amma[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]G[/greekCode] / [greekCode]g[/greekCode]'),
          new BS_TableCellData(null, 'g'),
          new BS_TableCellData(null, '“g” as in “get” OR “ng” as in “ring” (gamma nasal)'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]d/elta[/greekCode] / delta'),
          new BS_TableCellData(null, '[greekPronounce]d/elta[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]D[/greekCode] / [greekCode]d[/greekCode]'),
          new BS_TableCellData(null, 'd'),
          new BS_TableCellData(null, '“d” as in “dog”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode])\\eqil/on[/greekCode] / epsilon'),
          new BS_TableCellData(null, '[greekPronounce])\\eqil/on[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]E[/greekCode] / [greekCode]e[/greekCode]'),
          new BS_TableCellData(null, 'e'),
          new BS_TableCellData(null, 'short “e” as in “pet”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]z=hta[/greekCode] / zeta'),
          new BS_TableCellData(null, '[greekPronounce]z=hta[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]Z[/greekCode] / [greekCode]Z[/greekCode]'),
          new BS_TableCellData(null, 'z'),
          new BS_TableCellData(null, '“z” as in “maze” (beginning of word) OR “dz” (everywhere else)'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode])=hta[/greekCode] / eta'),
          new BS_TableCellData(null, '[greekPronounce])=hta[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]H[/greekCode] / [greekCode]h[/greekCode]'),
          new BS_TableCellData(null, 'ē'),
          new BS_TableCellData(null, 'long “a” as the “e” in “obey”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]y=hta[/greekCode] / theta'),
          new BS_TableCellData(null, '[greekPronounce]y=hta[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]Y[/greekCode] / [greekCode]y[/greekCode]'),
          new BS_TableCellData(null, 'th'),
          new BS_TableCellData(null, '“th” as in “think”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode])i=wta[/greekCode] / iota'),
          new BS_TableCellData(null, '[greekPronounce])i=wta[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]I[/greekCode] / [greekCode]i[/greekCode]'),
          new BS_TableCellData(null, 'i'),
          new BS_TableCellData(null, 'short “i” OR long “e” as “i” in “intrigue”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]k/appa[/greekCode] / kappa'),
          new BS_TableCellData(null, '[greekPronounce]k/appa[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]K[/greekCode] / [greekCode]k[/greekCode]'),
          new BS_TableCellData(null, 'k'),
          new BS_TableCellData(null, '“k” as in “keep”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]l/ambda[/greekCode] / lambda'),
          new BS_TableCellData(null, '[greekPronounce]l/ambda[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]L[/greekCode] / [greekCode]l[/greekCode]'),
          new BS_TableCellData(null, 'l'),
          new BS_TableCellData(null, '“l” in “let”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]m=u[/greekCode] / mu'),
          new BS_TableCellData(null, '[greekPronounce]m=u[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]M[/greekCode] / [greekCode]m[/greekCode]'),
          new BS_TableCellData(null, 'm'),
          new BS_TableCellData(null, '“m” as in “met”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]n=u[/greekCode] / nu'),
          new BS_TableCellData(null, '[greekPronounce]n=u[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]N[/greekCode] / [greekCode]n[/greekCode]'),
          new BS_TableCellData(null, 'n'),
          new BS_TableCellData(null, '“n” as in “net”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]x=i[/greekCode] / xi'),
          new BS_TableCellData(null, '[greekPronounce]x=i[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]X[/greekCode] / [greekCode]x[/greekCode]'),
          new BS_TableCellData(null, 'x'),
          new BS_TableCellData(null, '“x” as in “next”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode])\\omikr/on[/greekCode] / omicron'),
          new BS_TableCellData(null, '[greekPronounce])\\omikr/on[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]O[/greekCode] / [greekCode]o[/greekCode]'),
          new BS_TableCellData(null, 'o'),
          new BS_TableCellData(null, 'short “o” as in “not”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]p=i[/greekCode] / pi'),
          new BS_TableCellData(null, '[greekPronounce]p=i[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]P[/greekCode] / [greekCode]p[/greekCode]'),
          new BS_TableCellData(null, 'p'),
          new BS_TableCellData(null, '“p” as in “pet”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode](r=w[/greekCode] / rho'),
          new BS_TableCellData(null, '[greekPronounce](r=w[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]R[/greekCode] / [greekCode]r[/greekCode]'),
          new BS_TableCellData(null, 'r'),
          new BS_TableCellData(null, '“r” as in “rest”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]s/igma[/greekCode] / sigma'),
          new BS_TableCellData(null, '[greekPronounce]s/igma[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]S[/greekCode] / [greekCode]s[/greekCode] / [greekCode]v[/greekCode] (final form)'),
          new BS_TableCellData(null, 's'),
          new BS_TableCellData(null, '“s” as in “set”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]ta=u[/greekCode] / tau'),
          new BS_TableCellData(null, '[greekPronounce]ta=u[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]T[/greekCode] / [greekCode]t[/greekCode]'),
          new BS_TableCellData(null, 't'),
          new BS_TableCellData(null, '“t” as in “talk”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode])=uqil/on[/greekCode] / upsilon'),
          new BS_TableCellData(null, '[greekPronounce])=uqil/on[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]U[/greekCode] / [greekCode]u[/greekCode]'),
          new BS_TableCellData(null, 'u / y'),
          new BS_TableCellData(null, '“u” as in “rude” OR “y” in “mysterious”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]f=i[/greekCode] / phi'),
          new BS_TableCellData(null, '[greekPronounce]f=i[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]F[/greekCode] / [greekCode]f[/greekCode]'),
          new BS_TableCellData(null, 'ph'),
          new BS_TableCellData(null, '“ph” as in “phone”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]c=i[/greekCode] / chi'),
          new BS_TableCellData(null, '[greekPronounce]c=i[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]C[/greekCode] / [greekCode]c[/greekCode]'),
          new BS_TableCellData(null, 'ch'),
          new BS_TableCellData(null, '“ch” as in “chorus” with more pronounced “h”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode]q=i[/greekCode] / psi'),
          new BS_TableCellData(null, '[greekPronounce]q=i[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]Q[/greekCode] / [greekCode]q[/greekCode]'),
          new BS_TableCellData(null, 'ps'),
          new BS_TableCellData(null, '“ps” as in “oops”'),
        ),

        new BS_TableRow(
          null,
          new BS_TableCellData(null, '[greekCode])=wm/ega[/greekCode] / omega'),
          new BS_TableCellData(null, '[greekPronounce])=wm/ega[/greekPronounce]'),
          new BS_TableCellData(null, '[greekCode]W[/greekCode] / [greekCode]w[/greekCode]'),
          new BS_TableCellData(null, 'ō'),
          new BS_TableCellData(null, 'long “o” as in “open”'),
        ),
      ),
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Origin of Casing and Punctuation',
      'subtitle' => 'increasing readability over time',
      'id' => 'casing-and-punctuation',
    ],

    new BS_Paragraph(
      null,
      'Originally, the Septuagint and Greek New Testament were written in all capital letters with no punctuation…not even spaces! Imagine reading that for an extended period of time!',
    ),

    new BS_BiblePassage([
      'passage' => 'John 1:1',
      'version' => (object) [
        'abbreviation' => 'original Greek',
      ],
      'verses' => [
        (object) [
          'number' => 1,
          'text' => '[greekCode]ENARCHHNOLOGOSKAIOLOGOSHNPROSTONYEONKAIYEONHNOLOGOS[/greekCode]',
        ],
      ],
    ]),

    new BS_Paragraph(
      null,
      'Though it existed during Christ’s time, cursive Greek was popularized around the 9th century A.D., having spaces and and all lower-case (except for the capitalization of proper names, the first word in a quotation, and the first word in a paragraph). They also added accent marks and breathing marks to help distinguish the pronunciation (and sometimes even the translation) of the words, plus they added other basic punctuation.',
    ),

    new BS_BiblePassage([
      'passage' => 'John 1:1',
      'version' => (object) [
        'abbreviation' => 'punctuated Greek',
      ],
      'verses' => [
        (object) [
          'number' => 1,
          'text' => '[greekCode])En )arc|=h )=hn (o l/ogov, ka\\i (o l/ogov )=hn pr\\ov t\\on Ye/on, ka\\i Ye\\ov )=hn (o l/ogov.[/greekCode]',
        ],
      ],
    ]),

    new BS_Paragraph(
      null,
      'However, due to previous limitations of computers, many Greek resources today have everything in lower-case and often don’t include the various accents and punctuation marks.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Transliteration',
      'subtitle' => 'writing the words with English letters',
      'id' => 'transliteration',
    ],

    new BS_Paragraph(
      null,
      'As you saw above, Koine Greek has twenty-four letters in its alphabet. Each of these letters can be converted or “[strong]transliterated[/strong]” into English characters and often look similar to their English counterparts. For example, the Greek word “[greekCode])Ad/am[/greekCode]” [[strongs id="g76" /]] can be transliterated into English as “Adam”. Most often, it is a letter for a letter, but sometimes the Greek letter transliterates into two English characters (e.g., “[greekCode]f[/greekCode]” to “ph”).',
    ),

    new BS_Paragraph(
      null,
      'You may have noticed that sigma is the only letter that has a “[strong]final form[/strong].” What this means is, when writing sigma in lower-case, most of the time it appears it’s normal form, “[greekCode]s[/greekCode]”, except when it appears as the end of a word, you use the “final form,” which is “[greekCode]v[/greekCode]”. For example, in the Greek word for “apostle”, it has both forms of sigma: “[greekCode])ap/ostolov[/greekCode]” [[strongs id="g652" /]] (apostolos). Sigma, whether final form or not, is always transliterated as an “s”.',
    ),

    new BS_Paragraph(
      null,
      'Some Greek resources will show words in their native Greek characters, while others will show them transliterated into English, while others still will show them in both. To get the most out of learning Greek, you will want to learn it both ways, but learning the transliterated version is often sufficient for those not wanting to dive too deeply into Greek.',
    ),

    new BS_BiblePassage([
      'passage' => 'John 1:1',
      'version' => (object) [
        'abbreviation' => 'transliterated Greek',
      ],
      'verses' => [
        (object) [
          'number' => 1,
          'text' => 'En arche en ho logos, kai ho logos en pros ton Theon, kai Theos en ho logos.',
        ],
      ],
    ]),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Helpful Similarities and Confusing Differences',
      'subtitle' => 'comparing and contrasting Greek and English alphabets',
      'id' => 'similarities-and-differences',
    ],

    new BS_Paragraph(
      null,
      'As you might have noticed, the order of the Greek alphabet is similar to the English alphabet and some of the letters are quite similar, if not identical in looks and usage: [greekCode]a[/greekCode], [greekCode]b[/greekCode], [greekCode]d[/greekCode], [greekCode]e[/greekCode], [greekCode]i[/greekCode], [greekCode]k[/greekCode], [greekCode]o[/greekCode], [greekCode]t[/greekCode].',
    ),

    new BS_Paragraph(
      null,
      'That being said, be careful not to confuse the following letters: “[greekCode]h[/greekCode]” (eta) with “n”, “[greekCode]n[/greekCode]” (nu) with “v”, “[greekCode]x[/greekCode]” (xi) with “e”, “[greekCode]r[/greekCode]” (rho) with “p”, “[greekCode]c[/greekCode]” (chi) with “x”, or “[greekCode]w[/greekCode]” (omega) with “w”.',
    ),

    new BS_Paragraph(
      null,
      'Greek has [strong]consonants[/strong] and [strong]vowels[/strong] ([greekCode]a[/greekCode], [greekCode]e[/greekCode], [greekCode]h[/greekCode], [greekCode]i[/greekCode], [greekCode]o[/greekCode], [greekCode]u[/greekCode], [greekCode]w[/greekCode]). These consonants and vowels work similarly to English, in that most words have at least one vowel and that there are usually only one to three consonants in a row before there’s a vowel.',
    ),

    new BS_Paragraph(
      null,
      'Also, we’ll talk more about pronunciation in the next chapter, but it’s worthy to note here that alpha ([greekCode]a[/greekCode]) and iota ([greekCode]i[/greekCode]) both have long and short forms. In English, this refers more to the sound, where the long form sounds like the name of the letter (e.g., a long form of “a” sounds like the letter “a”, like in “ape”, while the short form sounds like “ahh”, like in “father” or “ah”, like in “cat”). However, in Greek, the long form and short form of a vowel refers to the length of the sound. For example, alpha can have the longer “ahh” or a shorter “ah” sound of the “a” in “father” and iota can have the shorter “ih” sound or longer “ee” sound as the letter “i” does both in the word “intrigue”.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Anomalies, Discrepancies, and Dead Languages',
      'subtitle' => 'different teachers teach different variations',
      'id' => 'anomalies-and-discrepancies',
    ],

    new BS_Paragraph(
      null,
      'Being that this is an over two thousand year old version of Greek, there are differing views on the pronunciation of words and even the letters themselves. For example, some people always pronounce zeta ([greekCode]z[/greekCode]) as a “z” sound. Also, if you look at Strong’s pronunciation and syllabification, it’s often quite different. So, which is “right”? Well, answers to these and more will probably have to be answered on the other side of Glory. Until then, pick a direction and swim.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Homework',
      'subtitle' => 'practice makes perfect',
      'id' => 'homework',
    ],

    new BS_Paragraph(
      null,
      'Me talking about all this stuff doesn’t do you a whole lot of good unless you do what you can to retain it. Here are some questions and exercises to help you remember what we covered today. Now, no cheating…you’ve got to at least try before looking at the answers.',
    ),

    new BS_List(
      ['ordered' => true],

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'Write out each letter of the lower-case Greek alphabet in on a piece of paper in alphabetical order, saying it aloud each time, repeat several times.'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-1', 'name' => 'answer'],
            '[greekCode]a[/greekCode] “alpha”, [greekCode]b[/greekCode] “beta”, [greekCode]g[/greekCode] “gamma”, [greekCode]d[/greekCode] “delta”, [greekCode]e[/greekCode] “epsilon”, [greekCode]z[/greekCode] “zeta”, [greekCode]h[/greekCode] “eta”, [greekCode]y[/greekCode] “theta”, [greekCode]i[/greekCode] “iota”, [greekCode]k[/greekCode] “kappa”, [greekCode]l[/greekCode] “lambda”, [greekCode]m[/greekCode] “mu”, [greekCode]n[/greekCode], “nu”, [greekCode]x[/greekCode] “xi”, [greekCode]o[/greekCode] “omicron”, [greekCode]p[/greekCode] “pi”, [greekCode]r[/greekCode] “rho”, [greekCode]s[/greekCode] / [greekCode]v[/greekCode] “sigma”, [greekCode]t[/greekCode] “tau”, [greekCode]u[/greekCode] “upsilon”, [greekCode]f[/greekCode] “phi”, [greekCode]c[/greekCode] “chi”, [greekCode]q[/greekCode] “psi”, [greekCode]w[/greekCode] “omega”',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'Repeat #1 with the the upper-case Greek alphabet.'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-2', 'name' => 'answer'],
            '[greekCode]A[/greekCode] “alpha”, [greekCode]B[/greekCode] “beta”, [greekCode]G[/greekCode] “gamma”, [greekCode]D[/greekCode] “delta”, [greekCode]E[/greekCode] “epsilon”, [greekCode]Z[/greekCode] “zeta”, [greekCode]H[/greekCode] “eta”, [greekCode]Y[/greekCode] “theta”, [greekCode]I[/greekCode] “iota”, [greekCode]K[/greekCode] “kappa”, [greekCode]L[/greekCode] “lambda”, [greekCode]M[/greekCode] “mu”, [greekCode]N[/greekCode], “nu”, [greekCode]X[/greekCode] “xi”, [greekCode]O[/greekCode] “omicron”, [greekCode]P[/greekCode] “pi”, [greekCode]R[/greekCode] “rho”, [greekCode]S[/greekCode] “sigma”, [greekCode]T[/greekCode] “tau”, [greekCode]U[/greekCode] “upsilon”, [greekCode]F[/greekCode] “phi”, [greekCode]C[/greekCode] “chi”, [greekCode]Q[/greekCode] “psi”, [greekCode]W[/greekCode] “omega”',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'What are the two forms of sigma, and when do you find them?'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-3', 'name' => 'answer'],
            '1) “normal form”, which is is the default form' . PHP_EOL,
            '2) "final form", which only occurs when a lower-case sigma is at the end of a word',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'What are the seven Greek vowels?'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-4', 'name' => 'answer'],
            '[greekCode]a[/greekCode] “alpha”, [greekCode]e[/greekCode] “epsilon”, [greekCode]h[/greekCode] “eta”, [greekCode]i[/greekCode] “iota”, [greekCode]o[/greekCode] “omicron”, [greekCode]u[/greekCode] “upsilon”, [greekCode]w[/greekCode] “omega”',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'What does “transliterate” mean?'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-5', 'name' => 'answer'],
            'to convert from the letters or characters of one language to another’s, such as from Greek letters to English letters',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          '[strong]The following words are NOT Greek, but are English words written using Greek characters[/strong]; what are the words?'
        ),

        new BS_List(['items' => [
          '[greekCode]dad[/greekCode]',
          '[greekCode]kid[/greekCode]',
          '[greekCode]dotv[/greekCode]',
          '[greekCode]ying[/greekCode]',
          '[greekCode]ball[/greekCode]',
          '[greekCode]sparkv[/greekCode]',
          '[greekCode]pet[/greekCode]',
          '[greekCode]rabbit[/greekCode]',
          '[greekCode]karrot[/greekCode]',
          '[greekCode]cemist[/greekCode]',
          '[greekCode]bwt[/greekCode]',
          '[greekCode]wbh[/greekCode]',
          '[greekCode]fwn[/greekCode]',
          '[greekCode]uq[/greekCode]',
          '[greekCode]axiv[/greekCode]',
          '[greekCode]zibra[/greekCode]',
        ]]),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-6', 'name' => 'answer'],
            'dad, kid, dots, thing, ball, sparks, pet, rabbit, carrot, chemist, boat, obey, phone, oops, axis, zebra',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'The following are names written in Greek; what are they in English?'
        ),

        new BS_List(['items' => [
          '[greekCode])Aar/wn[/greekCode]',
          '[greekCode](/Abel[/greekCode]',
          '[greekCode](/Anna[/greekCode]',
          '[greekCode]Barnab=av[/greekCode]',
          '[greekCode]Ze/uv[/greekCode]',
          '[greekCode]Mesopotam/ia[/greekCode]',
          '[greekCode](Rac/hl[/greekCode]',
          '[greekCode](Reb/ekka[/greekCode]',
          '[greekCode]S/ilav[/greekCode]',
        ]]),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-7', 'name' => 'answer'],
            'Aaron, Abel, Anna, Barnabas, Zeus, Mesopotamia, Rachel, Rebecca, Silas',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'The following are names written in Greek that have different pronunciations or endings than their English counterparts; what are they in English?'
        ),

        new BS_List(['items' => [
          '[greekCode])Abra/am[/greekCode]',
          '[greekCode])Ihso=uv[/greekCode]',
          '[greekCode])Isa/ak[/greekCode]',
          '[greekCode]Mar/ia[/greekCode]',
          '[greekCode]M=arkov[/greekCode]',
          '[greekCode]Mess/iav[/greekCode]',
          '[greekCode]P/etrov[/greekCode]',
          '[greekCode]S/imwn[/greekCode]',
          '[greekCode]Solom/wn[/greekCode]',
          '[greekCode]Fara/w[/greekCode]',
          '[greekCode]Crist/ov[/greekCode]',
        ]]),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-8', 'name' => 'answer'],
            'Abraham, Jesus, Isaac, Maria, Messiah, Peter, Simon, Solomon, Pharaoh, Christ',
          ),
        ),
      ),
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
