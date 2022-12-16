<?php
$html->add(new BS_Container(
  ['className' => 'py-section'],

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Introduction',
      'subtitle' => 'diving deeper',
      'id' => 'introduction',
    ],

    new BS_Paragraph(
      null,
      'Being that Greek has a whole different alphabet, it makes sense that it has different punctuation as well. We covered the alphabet in the last section, but let’s revisit it here in a bit more detail (including consonant clusters and diphthongs), continue with syllabification, then breathing and accent marks, and finally, punctuation.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Vowels',
      'subtitle' => 'speech sounds made with your mouth fairly open',
      'id' => 'vowels',
    ],

    new BS_Paragraph(
      null,
      'We’ll cover diphthongs and smooth and rough breathing marks later, but the standard pronunciation of Greek vowels are as follows:',
    ),

    new BS_List([
      'items' => [
        '“[greekCode]a[/greekCode]” (alpha) – short “a” sound (“ah”) like the “a” in “father”',
        '“[greekCode]e[/greekCode]” (epsilon) – short “e” sound (“eh”) like the “e” in “pet”',
        '“[greekCode]h[/greekCode]” (eta) – long “a” sound (“ay”) like the “e” in “obey”',
        '“[greekCode]i[/greekCode]” (iota) – short “i” sound (“ih”) like the “i” in “pit” when it follows a sigma ([greekCode]si[/greekCode]) or another iota ([greekCode]i+i[/greekCode]) OR long “e” sound (“ee”) like the “i” in “think” for all other occurrences',
        '“[greekCode]o[/greekCode]” (omicron) – short “o” sound (“aw”) like the “o” in “not”',
        '“[greekCode]u[/greekCode]” (upsilon) – “ooh” sound (“oo”) like the “oo” in “oops”',
        '“[greekCode]w[/greekCode]” (omega) – long “o” sound (“oh”) like the “o” in “open”',
      ]
    ]),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Diphthongs and Diaereses',
      'subtitle' => 'combining multiple vowels',
      'id' => 'diphthongs-and-diaereses',
    ],

    new BS_Paragraph(
      null,
      'A [strong]diphthong[/strong] is when two vowels ([greekCode]a[/greekCode], [greekCode]e[/greekCode], [greekCode]h[/greekCode], [greekCode]i[/greekCode], [greekCode]o[/greekCode], [greekCode]u[/greekCode], [greekCode]w[/greekCode]) are pronounced as one sound. In Greek, the second vowel must always be a close vowel, which is an iota ([greekCode]i[/greekCode]) or an upsilon ([greekCode]u[/greekCode]).',
    ),

    new BS_List([
      'items' => [
        '“[greekCode]ai[/greekCode]” – long “i” sound like the “ai” in “aisle” (e.g., “[greekCode]a(=ima[/greekCode]”, pronounced “[greekPronounce]a(=ima[/greekPronounce]”, means “blood” [[strongs id="g129" /]])',
        '“[greekCode]ei[/greekCode]” – “ay” sound like the “ei” in “weight” [though some scholars go with the German pronunciation of a long “i” sound like the “ei” in “height”] (e.g., “[greekCode]e)im/i[/greekCode]”, pronounced “[greekPronounce]e)im/i[/greekPronounce]”, means “I am” [[strongs id="g1510" /]])',
        '“[greekCode]oi[/greekCode]”, – “oy” sound like the “oi” in “soil” (e.g., “[greekCode]o)ik/ia[/greekCode]”, pronounced “[greekPronounce]o)ik/ia[/greekPronounce]”, and means “house” [[strongs id="g3614" /]])',
        '“[greekCode]ui[/greekCode]” – “wee” sound like the “ui” in “suite” (e.g., “[greekCode])orgui/a[/greekCode]”, pronounced “[greekPronounce])orgui/a[/greekPronounce]”, and means “a fathom” [[strongs id="g3712" /]])',
        '“[greekCode]au[/greekCode]” – “ow” sound like the “au” in “sauerkraut” (e.g., “[greekCode]ta/uta[/greekCode]”, pronounced “[greekPronounce]ta/uta[/greekPronounce]”, means “these things” [[strongs id="g5023" /]])',
        '“[greekCode]ou[/greekCode]” – “ooh” sound like the “ou” in “soup” (e.g., “[greekCode])ako/uw[/greekCode]”, pronounced “[egp_PronounceText language="greek" word=")ako/uw" /]”, means “to hear” [[strongs id="g191" /]])',
        '“[greekCode]eu[/greekCode]” or “[greekCode]hu[/greekCode]” – “yoo” sound like the “eu” is in “feud” [though some scholars go with the German pronunciation of an “oy” sound like the “oi” in “oil”] (e.g., “[greekCode]piste/uw[/greekCode]”, pronounced “[egp_PronounceText language="greek" word="piste/uw" /]”, means “to believe” [[strongs id="g4100" /]])',
      ]
    ]),

    new BS_Paragraph(
      null,
      'Some words which have two vowels together that would normally form a diphthong, but they should produce two distinct sounds instead have a [strong]diaeresis[/strong] (in Greek it is called a “[strong]dialytika[/strong]”) over the second vowel (e.g., “[greekCode]a+i[/greekCode]”), much like the English word “naïve.”',
    ),

    new BS_Paragraph(
      null,
      'An [strong]iota subscript[/strong], [strong]improper dipthong[/strong], or [strong]long dipthong[/strong] (in Greek it’s called “[strong]ypogegrammeni[/strong]” when on lower-case letters and “[strong]prosgegrammeni[/strong]” when on upper-case letters) is when an iota ([greekCode]i[/greekCode]) is written under the letters (i.e., a subscript) alpha ([greekCode]|a[/greekCode]), eta ([greekCode]|h[/greekCode]), and omega ([greekCode]|w[/greekCode]).  They usually are not pronounced or transliterated, but can affect the meaning of the word and otherwise serve more as an homage to the classical Greek era.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Consonants',
      'subtitle' => 'speech sounds made with your mouth fairly closed',
      'id' => 'consonants',
    ],

    new BS_Paragraph(
      null,
      'The consonants in the Greek alphabet (in order) are pronounced as follows:',
    ),

    new BS_List([
      'items' => [
        '“[greekCode]b[/greekCode]” (beta) – same as “b” in “bet”',
        '“[greekCode]g[/greekCode]” (gamma) – same as “g” in “get” OR “ng” in “ring” when it forms a gamma nasal (see below)',
        '“[greekCode]d[/greekCode]” (delta) – same as “d” in “dog”',
        '“[greekCode]z[/greekCode]” (zeta) – same as “z” in “maze” when starting the word OR a “dz” sound like the “ds” in “pads” when appearing anywhere else in the word',
        '“[greekCode]y[/greekCode]” (theta) – same as “th” in “think”',
        '“[greekCode]k[/greekCode]” (kappa) – same as “k” in “keep”',
        '“[greekCode]l[/greekCode]” (lambda) – same as “l” in “let”',
        '“[greekCode]m[/greekCode]” (mu) – same as “m” in “met”',
        '“[greekCode]n[/greekCode]” (nu) – same as “n” in “net”',
        '“[greekCode]x[/greekCode]” (xi) – “ks” sound like the “x” in “next”',
        '“[greekCode]p[/greekCode]” (pi) – same as “p” in “pet”',
        '“[greekCode]r[/greekCode]” (rho) – same as “rh” in “rhomboid” when starting the word OR the “r” in “rest” when appearing anywhere else in the word',
        '“[greekCode]s[/greekCode] / [greekCode]v[/greekCode]” (sigma) – same as “s” as in “set”',
        '“[greekCode]t[/greekCode]” (tau) – same as “t” as in “talk”',
        '“[greekCode]f[/greekCode]” (phi) – “f” sound like the “ph” in “phone”',
        '“[greekCode]c[/greekCode]” (chi) – “kh” sound like the “ch” in “chorus” with a slightly more pronounced “h”',
        '“[greekCode]q[/greekCode]” (psi) – same as “ps” in “oops”',
      ]
    ]),

    new BS_Paragraph(
      null,
      'Some of these consonants can be categorized as follows:',
    ),

    new BS_ResponsiveTable([
      'columns' => [
        ['_id' => 'type', 'name' => '', 'title' => 'Category'],
        [
          '_id' => 'voiceless',
          'name' => 'Voiceless [em](i.e., without voice box)[/em]',
          'title' => '',
        ],
        [
          '_id' => 'voice',
          'name' => 'Voice [em](i.e., using voice box)[/em]',
          'title' => '',
        ],
        [
          '_id' => 'aspirated',
          'name' => 'Aspirated [em](i.e., blowing air)[/em]',
          'title' => '',
        ],
      ],
      'items' => [
        [
          'type' => new BS_Bold(null, 'palatals/gutturals [em](i.e., made in the throat/palate)[/em]'),
          'voiceless' => new BS_Span(['title' => 'kappa'], '[greekCode]k[/greekCode]'),
          'voice' => new BS_Span(['title' => 'gamma'], '[greekCode]g[/greekCode]'),
          'aspirated' => new BS_Span(['title' => 'chi'], '[greekCode]c[/greekCode]'),
        ],

        [
          'type' => new BS_Bold(null, 'labials [em](i.e., made with the lips)[/em]'),
          'voiceless' => new BS_Span(['title' => 'pi'], '[greekCode]p[/greekCode]'),
          'voice' => new BS_Span(['title' => 'beta'], '[greekCode]b[/greekCode]'),
          'aspirated' => new BS_Span(['title' => 'phi'], '[greekCode]f[/greekCode]'),
        ],

        [
          'type' => new BS_Bold(null, 'dentals [em](i.e., tip of the tongue by the teeth)[/em]'),
          'voiceless' => new BS_Span(['title' => 'tau'], '[greekCode]t[/greekCode]'),
          'voice' => new BS_Span(['title' => 'delta'], '[greekCode]d[/greekCode]'),
          'aspirated' => new BS_Span(['title' => 'theta'], '[greekCode]y[/greekCode]'),
        ],
      ],
      'expand' => 'md',
      'className' => 'w-100',
      'rowClassName' => 'py-3 py-md-0',
      'colClassName' => 'py-md-2',
    ]),

    new BS_Paragraph(
      null,
      'The rest can be categorized as follows:',
    ),

    new BS_List([
      'items' => [
        '[strong]sibilants[/strong] [em](i.e., hissing sound)[/em] – [greekCode]z[/greekCode], [greekCode]x[/greekCode], [greekCode]s[/greekCode], [greekCode]q[/greekCode]',
        '[strong]liquids[/strong] [em](i.e., flowing or soft sound that rolls off the tongue)[/em] – [greekCode]l[/greekCode], [greekCode]m[/greekCode], [greekCode]n[/greekCode], [greekCode]r[/greekCode]',
      ]
    ]),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Consonant Clusters',
      'subtitle' => 'combining multiple consonants',
      'id' => 'consonant-clusters',
    ],

    new BS_Paragraph(
      null,
      'Not unlike diphthongs, a [strong]consonant cluster[/strong] is two more more consonants that may or may not form one sound.',
    ),

    new BS_Paragraph(
      null,
      'Most consonant clusters that form one sound are the same as the English equivalent:',
    ),

    new BS_List([
      'items' => [
        '[greekCode]bl[/greekCode] – “bl” as in “blood”',
        '[greekCode]br[/greekCode] – “br” as in “bread”',
        '[greekCode]gl[/greekCode] – “gl” as in “glory”',
        '[greekCode]gn[/greekCode] – “gn” as in “gnostic”',
        '[greekCode]gr[/greekCode] – “gr” as in “great”',
        '[greekCode]dr[/greekCode] – “dr” as in “drop”',
        '[greekCode]yr[/greekCode] – “thr” as in “throw”',
        '[greekCode]kl[/greekCode] – “kl” as the “cl” in “class”',
        '[greekCode]kr[/greekCode] – “kr” as the “cr” in “crow”',
        '[greekCode]kt[/greekCode] – “kt” as the “ct” in “duct”',
        '[greekCode]pl[/greekCode] – “pl” as in “plate”',
        '[greekCode]pn[/greekCode] – “pn” as in “pneumonia”',
        '[greekCode]pr[/greekCode] – “pr” as in “pray”',
        '[greekCode]sk[/greekCode] – “sk” as in “skate”',
        '[greekCode]sm[/greekCode] – “sm” as in “smear”',
        '[greekCode]sp[/greekCode] – “sp” as in “spell”',
        '[greekCode]spl[/greekCode] – “spl” as in “splash”',
        '[greekCode]st[/greekCode] – “st” as in “start”',
        '[greekCode]str[/greekCode] – “str” as in “strong”',
        '[greekCode]sf[/greekCode] – “sph” as in “sphere”',
        '[greekCode]sc[/greekCode] – “sch” as in “school”',
        '[greekCode]tr[/greekCode] – “tr” as in “train”',
        '[greekCode]fy[/greekCode] – “phth” as the“fth” in “fifth”',
        '[greekCode]fl[/greekCode] – “phl” as the “fl” as in “flood”',
        '[greekCode]fr[/greekCode] – “phr” as the “fr” as in “fray”',
        '[greekCode]cr[/greekCode] – “chr” as in “Christ”',
        '[greekCode]cl[/greekCode] – “chl” as in “chlorine”',
      ]
    ]),

    new BS_Paragraph(
      null,
      'The general rule is that if a Greek word starts with it, then it also forms one sound, so here are some that aren’t common to English:',
    ),

    new BS_List([
      'items' => [
        '[greekCode]bd[/greekCode] – “bd” as in “bdellium”',
        '[greekCode]yl[/greekCode] – “thl”',
        '[greekCode]yn[/greekCode] – “thn”',
        '[greekCode]kn[/greekCode] – “kn” as in “knife” with a slightly more pronounced “k”',
        '[greekCode]mn[/greekCode] – “mn” as in “mnemonic” with a slightly more pronounced “m”',
        '[greekCode]pt[/greekCode] – “pt” as in “pterodactyl” with a slightly more pronounced “p”',
        '[greekCode]sb[/greekCode] – “sb”',
        '[greekCode]sy[/greekCode] – “sth” as in “sthenic”',
        '[greekCode]skl[/greekCode] – “skl”',
        '[greekCode]sfr[/greekCode] – “sfr”',
        '[greekCode]cy[/greekCode] – “chth” as in “chthonic”',
      ]
    ]),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Gamma Nasal',
      'subtitle' => 'an “ng” sound',
      'id' => 'gamma-nasal',
    ],

    new BS_Paragraph(
      null,
      'Gamma ([greekCode]g[/greekCode]) usually has a hard “g” sound as in “get”, but sometimes it has an “ng” sound, called a “[strong]gamma nasal[/strong].” Gamma nasals occur when a gamma is immediately followed by one of the following letters:',
    ),

    new BS_List([
      'items' => [
        'another gamma (i.e., [greekCode]gg[/greekCode]), which has an “ng” sound (e.g., “[greekCode])/aggelov[/greekCode]”, pronounced “[greekPronounce])/aggelov[/greekPronounce]”, and means “angel/messenger” [[strongs id="g846" /]])',
        'a kappa (i.e., [greekCode]gk[/greekCode]), which has an “ngk” sound (e.g., “[greekCode])/agkura[/greekCode]”, pronounced “[greekPronounce])/agkura[/greekPronounce]”, and means “anchor” [[strongs id="g45" /]])',
        'a chi (i.e., [greekCode]gc[/greekCode]), which has an “ngch” sound (e.g., “[greekCode])el/egcw[/greekCode]”, pronounced “[greekPronounce])el/egcw[/greekPronounce]”, and means “to reprove or rebuke” [[strongs id="g1651" /]])',
        'a xi ([greekCode]gx[/greekCode]), which has an “ngx” sound (e.g., “[greekCode]l/arugx[/greekCode]”, “[greekPronounce]l/arugx[/greekPronounce]” (think “larynx”), and means “trumpet” [[strongs id="g2995" /]])',
      ]
    ]),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Breathing Marks',
      'subtitle' => 'smooth and rough sounds',
      'id' => 'breathing-marks',
    ],

    new BS_Paragraph(
      null,
      'The Greek language has two [strong]breathing marks[/strong]. These breathing marks appear on every word beginning with a vowel or rho (only rough breathing mark) and affect the pronunciation.',
    ),

    new BS_List([
      'items' => [
        'a [strong]smooth breathing mark[/strong] or in Greek it’s called a “[strong]psili[/strong]” ([greekCode])A[/greekCode]/[greekCode])a[/greekCode], [greekCode])E[/greekCode]/[greekCode])e[/greekCode], [greekCode])H[/greekCode]/[greekCode])h[/greekCode], [greekCode])I[/greekCode]/[greekCode])i[/greekCode], [greekCode])O[/greekCode]/[greekCode])o[/greekCode], only lower-case [greekCode])u[/greekCode], [greekCode])W[/greekCode]/[greekCode])w[/greekCode]) signifies that the letter should have it’s normal pronunciation (e.g., “[greekCode])ap/ostolov[/greekCode]”, pronounced “[greekPronounce])ap/ostolov[/greekPronounce]”, and means “apostle or sent one” [[strongs id="g652" /]])',
        'a [strong]rough breathing mark[/strong] or in Greek it’s called a “[strong]dasia[/strong]” ([greekCode](A[/greekCode]/[greekCode](a[/greekCode], [greekCode](E[/greekCode]/[greekCode](e[/greekCode], [greekCode](H[/greekCode]/[greekCode](h[/greekCode], [greekCode](I[/greekCode]/[greekCode](i[/greekCode], [greekCode](O[/greekCode]/[greekCode](o[/greekCode], [greekCode](R[/greekCode]/[greekCode](r[/greekCode], [greekCode](U[/greekCode]/[greekCode](u[/greekCode], [greekCode](W[/greekCode]/[greekCode](w[/greekCode]) signifies that the letter should begin with an “h” sound on vowels (e.g., “[greekCode](agiasm/ov[/greekCode]”, pronounced “[greekPronounce](agiasm/ov[/greekPronounce]”, and means “holiness” [[strongs id="g38" /]]) or a “rh” sound when beginning with rho (e.g., “[greekCode](r=w[/greekCode]”, pronounced “[greekPronounce](r=w[/greekPronounce]”)',
      ]
    ]),

    new BS_Paragraph(
      null,
      'If the word begins with a diphthong, the breathing mark goes over the second vowel of the diphthong instead of the first (e.g., “[greekCode]e)ik/wn[/greekCode]”, pronounced “[greekPronounce]e)ik/wn[/greekPronounce]”, and means “image/likeness/tatue” [[strongs id="g1504" /]]), though some texts put it over both vowels of the diphthong.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Syllabification',
      'subtitle' => 'breaking words into parts',
      'id' => 'syllabification',
    ],

    new BS_Paragraph(
      null,
      'Just like in English, Greek words are broken into [strong]syllables[/strong]. Fortunately, the rules for breaking Greek words into syllables are quite similar to the rules in English:',
    ),

    new BS_List([
      'items' => [
        'There can be only one vowel or diphthong per syllable, therefore two consecutive vowels that do not form a diphthong are split into two syllables, and there are as many syllables as there are vowels/dipthongs (e.g., “[greekCode])Ihso=uv[/greekCode]”, pronounced “[greekPronounce])Ihso=uv[/greekPronounce]”, and is the Greek name for “Jesus” [[strongs id="g2424" /]])',
        'Single consonants and consonant clusters (i.e., two or more consonants in a row) that form a single sound go with the following vowel’s syllable, unless it is at the end of the word, then it stays with the vowel (e.g., “[greekCode]a)ut\\ov[/greekCode]”, pronounced “[greekPronounce]a)ut\\ov[/greekPronounce]” not “[em]owt–aws’[/em]”, and means “him/her/it” [[strongs id="g846" /]])',
        'Double consonants and consonant clusters that don’t form a single sound are split so that the first consonant goes with the preceding vowel and the remaining consonant(s) go with the following vowel’s syllable (e.g., “[greekCode])/anyrwpov[/greekCode]”, pronounced “[greekPronounce])/anyrwpov[/greekPronounce]”, and means “a person” [[strongs id="g444" /]])',
        'Compound words (words made up of two or more distinct words) are split where they were joined (e.g., “[greekCode])ant/icristov[/greekCode]”, pronounced “[greekPronounce])ant/icristov[/greekPronounce]”, and means “antichrist” [[strongs id="g500" /]])',
      ]
    ]),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Accent Marks',
      'subtitle' => 'flagging the syllable to emphasize',
      'id' => 'accent-marks',
    ],

    new BS_Paragraph(
      null,
      'Almost every single Greek word has at least one of the three [strong]accent marks[/strong] and they only go over vowels on one of the last three syllables in a word: the “[strong]antepenult[/strong]” (third from last syllable), “[strong]penult[/strong]” (second from last syllable), and “[strong]ultima[/strong]” (last/only syllable).  Originally, the type of accent mark determined how you should change the pitch of your voice on that syllable, where the direction of pitch was signified by the shape of the accent mark. Later, however, (most likely by Koine Greek era) accent marks simply signified which syllable gets the emphasis.',
    ),

    new BS_List([
      'items' => [
        'an [strong]acute accent mark[/strong] or in Greek it’s called an “[strong]oxia[/strong]” ([greekCode]/A[/greekCode]/[greekCode]/a[/greekCode], [greekCode]/E[/greekCode]/[greekCode]/e[/greekCode], [greekCode]/H[/greekCode]/[greekCode]/h[/greekCode], [greekCode]/I[/greekCode]/[greekCode]/i[/greekCode], [greekCode]/O[/greekCode]/[greekCode]/o[/greekCode], [greekCode]/U[/greekCode]/[greekCode]/u[/greekCode], [greekCode]/W[/greekCode]/[greekCode]/w[/greekCode]) and can potentially occur on any of the last three syllables; it originally signified that the voice rose in pitch a bit on the accented syllable',
        'a [strong]grave accent mark[/strong] or in Greek it’s called a “[strong]varia[/strong]” ([greekCode]\\A[/greekCode]/[greekCode]\\a[/greekCode], [greekCode]\\E[/greekCode]/[greekCode]\\e[/greekCode], [greekCode]\\H[/greekCode]/[greekCode]\\h[/greekCode], [greekCode]\\I[/greekCode]/[greekCode]\\i[/greekCode], [greekCode]\\O[/greekCode]/[greekCode]\\o[/greekCode], [greekCode]\\U[/greekCode]/[greekCode]\\u[/greekCode], [greekCode]\\W[/greekCode]/[greekCode]\\w[/greekCode]) can only occur on the last syllable in a word; it originally signified that the voice dropped in pitch a bit on the accented syllable',
        'a [strong]circumflex[/strong] or in Greek it’s called a “[strong]perispomeni[/strong]”, can only occur on one of the last two syllables and will always be over a long vowel ([greekCode]=|a[/greekCode], [greekCode]=h[/greekCode], [greekCode]=w[/greekCode], and sometimes [greekCode]=a[/greekCode], [greekCode]=i[/greekCode], and [greekCode]=u[/greekCode]), originally signified that the voice rose and dropped in pitch on the accented syllable; in some texts it appears as a circumflex (ˆ), others an inverted breve ( ̑ ), and others still a tilde (~)',
      ]
    ]),

    new BS_Paragraph(
      null,
      'As far as the type and placement of the accent mark, this isn’t an exhaustive list, but here are a few guidelines:',
    ),

    new BS_List([
      'items' => [
        'nouns are retentive, meaning that the accent mark tries to stay on the same syllable (i.e., the antepenult, penult, or ultima syllable) as it’s lexical form, regardless of the noun’s form (basically, if it moves in the word, it will move to the right)',
        'verbs are recessive, meaning that the accent mark tries to “recede” forward (to the left) as far as possible, regardless of the verb’s form (but remember, it still must be one of the last three in the word)',
        'if the ultima is long (i.e., has a long vowel sound), the accent must be on the penult or ultima, if it’s on the penult then it must be acute, if on the ultima then it can be an acute or circumflex',
        'if the ultima is short (i.e., has a short vowel sound), and the penult is long and accented, the accent must be a circumflex',
        'if an acute accent mark is on the ultima syllable, it becomes a grave accent mark when followed by another word instead of punctuation (i.e., Greeks dropped their voices at the end of words, but raised it at the end of a clause or statement)',
        'If the accent mark is on a syllable that contains a diphthong, the accent mark goes over the second vowel in the diphthong (e.g., “[greekCode]e)uy/ewv[/greekCode]”, pronounced “[greekPronounce]e)uy/ewv[/greekPronounce]”, means “immediately” [[strongs id="g2112" /]]), though some texts put it over both vowels of the diphthong',
      ]
    ]),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Punctuation',
      'subtitle' => 'separating sentences and their elements',
      'id' => 'punctuation',
    ],

    new BS_Paragraph(
      null,
      'The Greek language has five basic punctuation marks. While they may sometimes look different than their English counterparts, their function is identical:',
    ),

    new BS_List([
      'items' => [
        'a Greek [strong]comma[/strong] (i.e., soft break or pause), looks like an English comma (e.g., “[greekCode]Ye/ov,[/greekCode]”)',
        'a[strong] period[/strong] (i.e., hard break or end of a sentence), looks like an English period (e.g., “[greekCode]Ye/ov.[/greekCode]”)',
        'a [strong]colon[/strong] or[strong] semi-colon[/strong] (i.e., intermediate break, conjunction of sentences), looks like a period above the line or the top dot of a colon (e.g., “[greekCode]Ye/ov;[/greekCode]”)',
        'a[strong] question mark[/strong] (i.e., a question is being asked), looks like an English semi-colon (e.g., “[greekCode]Ye/ov?[/greekCode]”)',
        'an [strong]apostrophe[/strong] in Greek signifies dropped or “elided” letters (e.g., in English where “it’s” is a contraction of “it is”); in Greek this occurs if the final letter of a preposition is a vowel and the next words begins with a vowel (e.g., “[greekCode]d/ia[/greekCode] + [greekCode])auto=u[/greekCode]” becomes “[greekCode]d/i’ )auto=u[/greekCode]”)',
      ]
    ]),

    new BS_Paragraph(
      null,
      'You may have noticed that there are no quotation marks or exclamation points. The lack of quotation marks has caused debate among scholars about where the quotation ends and the author’s narration begins (e.g., [bible to="John 3" /]); however, exclamation points are handled via the verb tense (which will be covered in later chapters). Also, Greek doesn’t use apostrophes to signify possession or ownership (i.e., “the boy’s dog”), but instead uses noun inflection (which will be covered in later chapters).',
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
      'Click the links below each number to verify your answers.',
    ),

    new BS_List(
      ['ordered' => true],

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'What are the two types of breathing marks and what is their impact on the pronunciation of the word?'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-1', 'name' => 'answer'],
            '1) smooth breathing mark (or psili), means the beginning vowel has it’s normal pronunciation' . PHP_EOL,
            '2) rough breathing mark (or dasia), makes the word start with an “h” sound',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'When is the diaeresis (or dialytika) used?'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-2', 'name' => 'answer'],
            'a diaeresis is used when a word has two vowels that would normally form a diphthong should be pronounced separately; it is placed over the second vowel',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'What is a gamma nasal and how is it pronounced?'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-3', 'name' => 'answer'],
            'when a gamma is followed by another gamma, a kappa, a chi, or a xi and is therefore pronounced with an “ng” sound',
          ),
        ),
      ),

      new BS_ListItem(
        null,
        new BS_Paragraph(
          null,
          'What are the three types of accent marks?'
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-4', 'name' => 'answer'],
            '1) acute (or oxia)' . PHP_EOL,
            '2) grave (or varia)' . PHP_EOL,
            '3) circumflex (or perispomeni)',
          ),
        ),
      ),

      new BS_ListItem(
        null,

        new BS_Paragraph(
          null,
          'Determine the syllabification and pronunciation for the following Greek words:'
        ),

        new BS_List([
          'items' => [
            '[greekCode])adelf/ov[/greekCode] (brother)',
            '[greekCode]Farisa=iov[/greekCode] (Pharisee)',
            '[greekCode]l/egw[/greekCode] (I say)',
            '[greekCode]P/etrov[/greekCode] (Peter)',
            '[greekCode])am/hn[/greekCode] (truly)',
            '[greekCode]k/osmov[/greekCode] (universe)',
            '[greekCode]ka/i[/greekCode] (and)',
            '[greekCode])eg/w[/greekCode] (I/me)',
            '[greekCode]s/abbaton[/greekCode] (Sabbath)',
            '[greekCode]graf/h[/greekCode] (a writing/scripture)',
            '[greekCode]Ye/ov[/greekCode] (God)',
            '[greekCode])/anyrwpov[/greekCode] (person)',
            '[greekCode]kard/ia[/greekCode] (heart)',
            '[greekCode]l/ogov[/greekCode] (word/speech)',
            '[greekCode])/aggelov[/greekCode] (angel/messenger)',
            '[greekCode]Crist/ov[/greekCode] (Christ/Anointed)',
            '[greekCode]pne=uma[/greekCode] (spirit/wind/breath)',
            '[greekCode])ako/uw[/greekCode] (I hear/listen)',
            '[greekCode]k/uriov[/greekCode] (lord/master)',
            '[greekCode]prof/hthv[/greekCode] (prophet)',
            '[greekCode])/ecw[/greekCode] (I hold/have)',
          ]
        ]),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-5', 'name' => 'answer'],
            '[greekPronounce])adelf/ov, Farisa=iov, l/egw, P/etrov, )am/hn, k/osmov, ka/i, )eg/w, s/abbaton, graf/h, Ye/ov, )/anyrwpov, kard/ia, l/ogov, )/aggelov, Crist/ov, pne=uma, )ako/uw, k/uriov, prof/hthv, )/ecw[/greekPronounce]',
          ),
        ),
      ),

      new BS_ListItem(
        null,

        new BS_Paragraph(
          null,
          'Read the Greek version of the following Scripture aloud, then transliterate it:'
        ),

        new BS_BiblePassage([
          'passage' => 'John 1:1–5',
          'variant' => 'scripture',
          'version' => (object) [
            'abbreviation' => 'punctuated Greek',
          ],
          'verses' => [
            (object) [
              'number' => 1,
              'text' => '[greekCode])En )arc|=h )=hn (o l/ogov, ka\\i (o l/ogov )=hn pr\\ov t\\on Ye/on, ka\\i Ye\\ov )=hn (o l/ogov.[/greekCode]',
            ],
            (object) [
              'number' => 2,
              'text' => '[greekCode]o(=utov )=hn )en )arc=|h pr\\ov t\\on Ye/on.[/greekCode]',
            ],
            (object) [
              'number' => 3,
              'text' => '[greekCode]p/anta di’ a)uto=u )eg/eneto, ka\\i cwr\\iv a)uto=u )eg/eneto o)ud\\e (\\en (\\o g/egonen.[/greekCode]',
            ],
            (object) [
              'number' => 4,
              'text' => '[greekCode])en a)ut|=w zw\\h )=hn, ka\\i (h zw\\h )=hn t\\o f=wv t=wn )anyr/wpwn;[/greekCode]',
            ],
            (object) [
              'number' => 5,
              'text' => '[greekCode]ka\\i t\\o f=wv )en t|=h skot/i|a fa/inei, ka\\i (h skot/ia a)ut\\o o)u kat/elaben.[/greekCode]',
            ],
          ],
        ]),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-6a', 'name' => 'phonetic answer'],

            new BS_BiblePassage([
              'passage' => 'John 1:1–5',
              'variant' => 'scripture',
              'version' => (object) [
                'abbreviation' => 'Greek phonetic pronunciation',
              ],
              'verses' => [
                (object) [
                  'number' => 1,
                  'text' => '[greekPronounce])En )arc|=h )=hn (o l/ogov, ka\\i (o l/ogov )=hn pr\\ov t\\on Ye/on, ka\\i Ye\\ov )=hn (o l/ogov.[/greekPronounce]',
                ],
                (object) [
                  'number' => 2,
                  'text' => '[greekPronounce]o(=utov )=hn )en )arc=|h pr\\ov t\\on Ye/on.[/greekPronounce]',
                ],
                (object) [
                  'number' => 3,
                  'text' => '[greekPronounce]p/anta di’ a)uto=u )eg/eneto, ka\\i cwr\\iv a)uto=u )eg/eneto o)ud\\e (\\en (\\o g/egonen.[/greekPronounce]',
                ],
                (object) [
                  'number' => 4,
                  'text' => '[greekPronounce])en a)ut|=w zw\\h )=hn, ka\\i (h zw\\h )=hn t\\o f=wv t=wn )anyr/wpwn;[/greekPronounce]',
                ],
                (object) [
                  'number' => 5,
                  'text' => '[greekPronounce]ka\\i t\\o f=wv )en t|=h skot/i|a fa/inei, ka\\i (h skot/ia a)ut\\o o)u kat/elaben.[/greekPronounce]',
                ],
              ],
            ]),
          ),
        ),

        new BS_Blockquote(
          null,
          new BS_Collapse(
            ['id' => 'homework-6b', 'name' => 'transliteration answer'],

            new BS_BiblePassage([
              'passage' => 'John 1:1–5',
              'variant' => 'scripture',
              'version' => (object) [
                'abbreviation' => 'transliterated Greek',
              ],
              'verses' => [
                (object) [
                  'number' => 1,
                  'text' => 'En arche en ho logos, kai ho logos en pros ton Theon, kai Theos en ho logos.',
                ],
                (object) [
                  'number' => 2,
                  'text' => 'Houtos en en arche pros ton Theon.',
                ],
                (object) [
                  'number' => 3,
                  'text' => 'Panta di autou egeneto, kai choris autou egeneto oude hen ho gegonen.',
                ],
                (object) [
                  'number' => 4,
                  'text' => 'En auto zoe en, kai he zoe en, kai he zoe en to phos ton anthropon.',
                ],
                (object) [
                  'number' => 5,
                  'text' => 'Kai to phos en te skotia phainei, kai he skotia auto ou katelaben.',
                ],
              ],
            ]),
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
