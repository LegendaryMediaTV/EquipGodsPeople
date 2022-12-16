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

    new BS_ResponsiveTable([
      'columns' => [
        ['_id' => 'name', 'name' => 'Greek Name / Transliteration'],
        ['_id' => 'letter', 'name' => 'Letter Pronunciation'],
        ['_id' => 'greek', 'name' => 'Greek Upper-case / Lower-case'],
        ['_id' => 'translit', 'name' => 'Letter Translit.', 'title' => 'Letter Transliteration'],
        ['_id' => 'pronun', 'name' => 'Pronunciation'],
      ],
      'items' => [
        [
          'name' => '[greekCode])/alfa[/greekCode] / alpha',
          'letter' => '[greekPronounce])/alfa[/greekPronounce]',
          'greek' => '[greekCode]A[/greekCode] / [greekCode]a[/greekCode]',
          'translit' => 'a',
          'pronun' => 'short “a” as in “father”',
        ],

        [
          'name' => '[greekCode]b=hta[/greekCode] / beta',
          'letter' => '[greekPronounce]b=hta[/greekPronounce]',
          'greek' => '[greekCode]B[/greekCode] / [greekCode]b[/greekCode]',
          'translit' => 'b',
          'pronun' => '“b” as in “bet”',
        ],

        [
          'name' => '[greekCode]g/amma[/greekCode] / gamma',
          'letter' => '[greekPronounce]g/amma[/greekPronounce]',
          'greek' => '[greekCode]G[/greekCode] / [greekCode]g[/greekCode]',
          'translit' => 'g',
          'pronun' => '“g” as in “get” OR “ng” as in “ring” (gamma nasal)',
        ],

        [
          'name' => '[greekCode]d/elta[/greekCode] / delta',
          'letter' => '[greekPronounce]d/elta[/greekPronounce]',
          'greek' => '[greekCode]D[/greekCode] / [greekCode]d[/greekCode]',
          'translit' => 'd',
          'pronun' => '“d” as in “dog”',
        ],

        [
          'name' => '[greekCode])\\eqil/on[/greekCode] / epsilon',
          'letter' => '[greekPronounce])\\eqil/on[/greekPronounce]',
          'greek' => '[greekCode]E[/greekCode] / [greekCode]e[/greekCode]',
          'translit' => 'e',
          'pronun' => 'short “e” as in “pet”',
        ],

        [
          'name' => '[greekCode]z=hta[/greekCode] / zeta',
          'letter' => '[greekPronounce]z=hta[/greekPronounce]',
          'greek' => '[greekCode]Z[/greekCode] / [greekCode]Z[/greekCode]',
          'translit' => 'z',
          'pronun' => '“z” as in “maze” (beginning of word) OR “dz” (everywhere else)',
        ],

        [
          'name' => '[greekCode])=hta[/greekCode] / eta',
          'letter' => '[greekPronounce])=hta[/greekPronounce]',
          'greek' => '[greekCode]H[/greekCode] / [greekCode]h[/greekCode]',
          'translit' => 'ē',
          'pronun' => 'long “a” as the “e” in “obey”',
        ],

        [
          'name' => '[greekCode]y=hta[/greekCode] / theta',
          'letter' => '[greekPronounce]y=hta[/greekPronounce]',
          'greek' => '[greekCode]Y[/greekCode] / [greekCode]y[/greekCode]',
          'translit' => 'th',
          'pronun' => '“th” as in “think”',
        ],

        [
          'name' => '[greekCode])i=wta[/greekCode] / iota',
          'letter' => '[greekPronounce])i=wta[/greekPronounce]',
          'greek' => '[greekCode]I[/greekCode] / [greekCode]i[/greekCode]',
          'translit' => 'i',
          'pronun' => 'short “i” OR long “e” as “i” in “intrigue”',
        ],

        [
          'name' => '[greekCode]k/appa[/greekCode] / kappa',
          'letter' => '[greekPronounce]k/appa[/greekPronounce]',
          'greek' => '[greekCode]K[/greekCode] / [greekCode]k[/greekCode]',
          'translit' => 'k',
          'pronun' => '“k” as in “keep”',
        ],

        [
          'name' => '[greekCode]l/ambda[/greekCode] / lambda',
          'letter' => '[greekPronounce]l/ambda[/greekPronounce]',
          'greek' => '[greekCode]L[/greekCode] / [greekCode]l[/greekCode]',
          'translit' => 'l',
          'pronun' => '“l” in “let”',
        ],

        [
          'name' => '[greekCode]m=u[/greekCode] / mu',
          'letter' => '[greekPronounce]m=u[/greekPronounce]',
          'greek' => '[greekCode]M[/greekCode] / [greekCode]m[/greekCode]',
          'translit' => 'm',
          'pronun' => '“m” as in “met”',
        ],

        [
          'name' => '[greekCode]n=u[/greekCode] / nu',
          'letter' => '[greekPronounce]n=u[/greekPronounce]',
          'greek' => '[greekCode]N[/greekCode] / [greekCode]n[/greekCode]',
          'translit' => 'n',
          'pronun' => '“n” as in “net”',
        ],

        [
          'name' => '[greekCode]x=i[/greekCode] / xi',
          'letter' => '[greekPronounce]x=i[/greekPronounce]',
          'greek' => '[greekCode]X[/greekCode] / [greekCode]x[/greekCode]',
          'translit' => 'x',
          'pronun' => '“x” as in “next”',
        ],

        [
          'name' => '[greekCode])\\omikr/on[/greekCode] / omicron',
          'letter' => '[greekPronounce])\\omikr/on[/greekPronounce]',
          'greek' => '[greekCode]O[/greekCode] / [greekCode]o[/greekCode]',
          'translit' => 'o',
          'pronun' => 'short “o” as in “not”',
        ],

        [
          'name' => '[greekCode]p=i[/greekCode] / pi',
          'letter' => '[greekPronounce]p=i[/greekPronounce]',
          'greek' => '[greekCode]P[/greekCode] / [greekCode]p[/greekCode]',
          'translit' => 'p',
          'pronun' => '“p” as in “pet”',
        ],

        [
          'name' => '[greekCode](r=w[/greekCode] / rho',
          'letter' => '[greekPronounce](r=w[/greekPronounce]',
          'greek' => '[greekCode]R[/greekCode] / [greekCode]r[/greekCode]',
          'translit' => 'r',
          'pronun' => '“r” as in “rest”',
        ],

        [
          'name' => '[greekCode]s/igma[/greekCode] / sigma',
          'letter' => '[greekPronounce]s/igma[/greekPronounce]',
          'greek' => '[greekCode]S[/greekCode] / [greekCode]s[/greekCode] / [greekCode]v[/greekCode] (final form)',
          'translit' => 's',
          'pronun' => '“s” as in “set”',
        ],

        [
          'name' => '[greekCode]ta=u[/greekCode] / tau',
          'letter' => '[greekPronounce]ta=u[/greekPronounce]',
          'greek' => '[greekCode]T[/greekCode] / [greekCode]t[/greekCode]',
          'translit' => 't',
          'pronun' => '“t” as in “talk”',
        ],

        [
          'name' => '[greekCode])=uqil/on[/greekCode] / upsilon',
          'letter' => '[greekPronounce])=uqil/on[/greekPronounce]',
          'greek' => '[greekCode]U[/greekCode] / [greekCode]u[/greekCode]',
          'translit' => 'u / y',
          'pronun' => '“u” as in “rude” OR “y” in “mysterious”',
        ],

        [
          'name' => '[greekCode]f=i[/greekCode] / phi',
          'letter' => '[greekPronounce]f=i[/greekPronounce]',
          'greek' => '[greekCode]F[/greekCode] / [greekCode]f[/greekCode]',
          'translit' => 'ph',
          'pronun' => '“ph” as in “phone”',
        ],

        [
          'name' => '[greekCode]c=i[/greekCode] / chi',
          'letter' => '[greekPronounce]c=i[/greekPronounce]',
          'greek' => '[greekCode]C[/greekCode] / [greekCode]c[/greekCode]',
          'translit' => 'ch',
          'pronun' => '“ch” as in “chorus” with more pronounced “h”',
        ],

        [
          'name' => '[greekCode]q=i[/greekCode] / psi',
          'letter' => '[greekPronounce]q=i[/greekPronounce]',
          'greek' => '[greekCode]Q[/greekCode] / [greekCode]q[/greekCode]',
          'translit' => 'ps',
          'pronun' => '“ps” as in “oops”',
        ],

        [
          'name' => '[greekCode])=wm/ega[/greekCode] / omega',
          'letter' => '[greekPronounce])=wm/ega[/greekPronounce]',
          'greek' => '[greekCode]W[/greekCode] / [greekCode]w[/greekCode]',
          'translit' => 'ō',
          'pronun' => 'long “o” as in “open”',
        ],
      ],
      'expand' => 'md',
      'className' => 'w-100',
      'rowClassName' => 'py-3 py-md-0',
      'colClassName' => 'py-md-2',
    ]),
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
