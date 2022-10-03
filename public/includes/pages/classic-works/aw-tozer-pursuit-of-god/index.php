<?php
// retrieve the table of contents for all books in the series
$toc = egp_tocPursuitOfGod();

$html->add(new BS_Banner(
  null,

  '“The Pursuit of God” is a devotional book written in 1948, emphasizing the closeness of God and how to draw close to Him.'
));

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_ListGroup([
    'title' => 'Chapters of the Book',
    'items' => $toc,
    'size' => 'lg'
  ]),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Introduction',
      'id' => 'introduction',
    ],

    new BS_Blockquote(
      null,

      new BS_Paragraph(
        null,
        'Here is a masterly study of the inner life by a heart thirsting after God, eager to grasp at least the outskirts of His ways, the abyss of His love for sinners, and the height of His unapproachable majesty—and it was written by a busy pastor in Chicago! Who could imagine David writing the [bible to="Psalm 23"]twenty-third Psalm[/bible] on South Halsted Street, or a medieval mystic finding inspiration in a small study on the second floor of a frame house on the vast, flat checkerboard of endless streets—Where cross the crowded ways of life—Where sound the cries of race and clan, In haunts of wretchedness and need, On shadowed threshold dark with fears, And paths where hide the lures of greed… But even as Dr. Frank Mason North, of New York, says in his immortal poem, so Mr. Tozer says in this book: “[i]Above the noise of selfish strife we hear Thy voice, O Son of Man.[/i]” My acquaintance with the author is limited to brief visits and loving fellowship in his church. There I discovered a self-made scholar, an omnivorous reader with a remarkable library of theological and devotional books, and one who seemed to burn the midnight oil in pursuit of God. His book is the result of long meditation and much prayer. It is not a collection of sermons. It does not deal with the pulpit and the pew but with the soul a thirst for God.',
      ),

      new BS_Paragraph(
        null,
        'The chapters could be summarized in Moses’ prayer, “[i]Show me thy glory,[/i]” or Paul’s exclamation, “[i]O the depth of the riches both of the wisdom and knowledge of God![/i]” It is theology not of the head but of the heart. There is deep insight, sobriety of style, and a catholicity of outlook that is refreshing. The author has few quotations but he knows the saints and mystics of the centuries—Augustine, Nicholas of Cusa, Thomas à Kempis, von Hagel, Finney, Wesley and many more. The ten chapters are heart searching and the prayers at the close of each are for the closet, not pulpit. [strong]I felt the nearness of God while reading them[/strong]. Here is a book for every pastor, missionary, and devout Christian. It deals with the deep things of God and the riches of His grace. Above all, it has the keynote of sincerity and humility.',
      ),

      new BS_BlockquoteFooter(
        null,
        '—Samuel M. Zwemer',
      ),
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => 'Preface',
      'id' => 'preface',
    ],

    new BS_Blockquote(
      null,

      new BS_Paragraph(
        null,
        'In this hour of all-but-universal darkness one cheering gleam appears: within the fold of conservative Christianity there are to be found increasing numbers of persons whose religious lives are marked by a growing hunger after God Himself. They are eager for spiritual realities and will not be put off with words, nor will they be content with correct “interpretations” of truth. They are athirst for God, and they will not be satisfied till they have drunk deep at the Fountain of Living Water. This is the only real harbinger of revival which I have been able to detect anywhere on the religious horizon. It may be the cloud the size of a man’s hand for which a few saints here and there have been looking. It can result in a resurrection of life for many souls and a recapture of that radiant wonder which should accompany faith in Christ, that wonder which has all but fled the Church of God in our day. But this hunger must be recognized by our religious leaders.',
      ),

      new BS_Paragraph(
        null,
        'Current evangelicalism has (to change the figure) laid the altar and divided the sacrifice into parts, but now seems satisfied to count the stones and rearrange the pieces with never a care that there is not a sign of fire upon the top of lofty Carmel. [[bible to="1 Kings 18"]See 1 Kings 18 for the allusions[/bible]] But God be thanked that there are a few who care. They are those who, while they love the altar and delight in the sacrifice, are yet unable to reconcile themselves to the continued absence of fire. They desire God above all. They are athirst to taste for themselves the “piercing sweetness” of the love of Christ about Whom all the holy prophets did write and the psalmists did sing.',
      ),

      new BS_Paragraph(
        null,
        'There is today no lack of Bible teachers to set forth correctly the principles of the doctrines of Christ, but too many of these seem satisfied to teach the fundamentals of the faith year after year, strangely unaware that there is in their ministry no manifest Presence, nor anything unusual in their personal lives. They minister constantly to believers who feel within their breasts a longing which their teaching simply does not satisfy. I trust I speak in charity, but the lack in our pulpits is real. Milton’s terrible sentence applies to our day as accurately as it did to his: “The hungry sheep look up, and are not fed.”',
      ),

      new BS_Paragraph(
        null,
        'It is a solemn thing, and no small scandal in the Kingdom, to see God’s children starving while actually seated at the Father’s table. The truth of Wesley’s words is established before our eyes: “Orthodoxy, or right opinion, is, at best, a very slender part of religion. Though right tempers cannot subsist without right opinions, yet right opinions may subsist without right tempers. There may be a right opinion of God without either love or one right temper toward Him. Satan is proof of this.”',
      ),

      new BS_Paragraph(
        null,
        'Thanks to our splendid Bible societies and to other effective agencies for the dissemination of the Word, there are today many millions of people who hold “right opinions,” probably more than ever before in the history of the Church. Yet I wonder if there was ever a time when true spiritual worship was ever a time when true spiritual worship was at a lower ebb. To great sections of the Church the art of worship has been lost entirely, and in its place has come that strange and foreign thing called the “program.” This word has been borrowed from the stage and applied with sad wisdom to the type of public service which now passes for worship among us.',
      ),

      new BS_Paragraph(
        null,
        'Sound Bible exposition is an imperative [strong]must [/strong]in the Church of the living God. Without it no church can be a New Testament church in any strict meaning of that term. But exposition may be carried on in such way as to leave the hearers devoid of any true spiritual nourishment whatever. For it is not mere words that nourish the soul, but God Himself, and unless and until the hearers find God in personal experience, they are not the better for having heard the truth. The Bible is not an end in itself, but a means to bring men to an intimate and satisfying knowledge of God, that they may enter into Him, that they may delight in His Presence, may taste and know the inner sweetness of the very God Himself in the core and center of their hearts.',
      ),

      new BS_Paragraph(
        null,
        'This book is a modest attempt to aid God’s hungry children so to find Him. Nothing here is new except in the sense that it is a discovery which my own heart has made of spiritual realities most delightful and wonderful to me. Others before me have gone much farther into these holy mysteries than I have done, but if my fire is not large it is yet real, and there may be those who can light their candle at its flame.',
      ),

      new BS_BlockquoteFooter(
        null,
        '—A.W. Tozer' . PHP_EOL,
        'Chicago, Ill. June 16, 1948.',
      ),
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => ['url' => '/classic-works', 'title' => 'Classic Works'],
    'next' => ['url' => $toc[0]->url, 'title' => $toc[0]->subtitle . ' – ' . $toc[0]->title],
    'className' => 'mt-5'
  ]),
));
