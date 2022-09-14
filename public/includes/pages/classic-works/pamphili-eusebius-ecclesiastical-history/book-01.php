<?php
$html->add(new BS_Banner(
  null,

  'Book one of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering the pre-existence and divinity of Jesus Christ, the timeframe of Christ on Earth, and testimonies in regard to John the Baptist and Christ'
));

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_ListGroup([
    'title' => 'Table of Contents',
    'items' => array_map(
      function ($chapter) {
        $chapter->url = '#' . $chapter->_id;

        return $chapter;
      },

      $metadata->book->chapters
    )
  ]),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[0]->title,
      'subtitle' => $metadata->book->chapters[0]->subtitle,
      'id' => $metadata->book->chapters[0]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' It is my purpose to write an account of the successions of the holy apostles, as well as of the times which have elapsed from the days of our Saviour to our own; and to relate the many important events which are said to have occurred in the history of the Church; and to mention those who have governed and presided over the Church in the most prominent parishes, and those who in each generation have proclaimed the divine word either orally or in writing.',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' It is my purpose also to give the names and number and times of those who through love of innovation have run into the greatest errors, and, proclaiming themselves discoverers of knowledge falsely so-called [cf. ',
      new BS_BibleLink(['to' => '1 Timothy 6:20']),
      '], have like fierce wolves unmercifully devastated the flock of Christ.',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' It is my intention, moreover, to recount the misfortunes which immediately came upon the whole Jewish nation in consequence of their plots against our Saviour, and to record the ways and the times in which the divine word has been attacked by the Gentiles, and to describe the character of those who at various periods have contended for it in the face of blood and of tortures, as well as the confessions which have been made in our own days, and finally the gracious and kindly succor which our Saviour has afforded them all. Since I propose to write of all these things I shall commence my work with the beginning of the dispensation of our Saviour and Lord Jesus Christ.',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But at the outset I must crave for my work the indulgence of the wise, for I confess that it is beyond my power to produce a perfect and complete history, and since I am the first to enter upon the subject, I am attempting to traverse as it were a lonely and untrodden path. I pray that I may have God as my guide and the power of the ',
      new BS_SmallCaps(null, 'Lord'),
      ' as my aid, since I am unable to find even the bare footsteps of those who have traveled the way before me, except in brief fragments, in which some in one way, others in another, have transmitted to us particular accounts of the times in which they lived. From afar they raise their voices like torches, and they cry out, as from some lofty and conspicuous watch-tower, admonishing us where to walk and how to direct the course of our work steadily and safely.',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Having gathered therefore from the matters mentioned here and there by them whatever we consider important for the present work, and having plucked like flowers from a meadow the appropriate passages from ancient writers, we shall endeavor to embody the whole in an historical narrative, content if we preserve the memory of the successions of the apostles of our Saviour; if not indeed of all, yet of the most renowned of them in those churches which are the most noted, and which even to the present time are held in honor.',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' This work seems to me of especial importance because I know of no ecclesiastical writer who has devoted himself to this subject; and I hope that it will appear most useful to those who are fond of historical research.',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' I have already given an epitome of these things in the Chronological Canons which I have composed, but notwithstanding that, I have undertaken in the present work to write as full an account of them as I am able.',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' My work will begin, as I have said, with the dispensation of the Saviour Christ,—which is loftier and greater than human conception,—and with a discussion of his divinity;',
    ),
    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' for it is necessary, inasmuch as we derive even our name from Christ, for one who proposes to write a history of the Church to begin with the very origin of Christ’s dispensation, a dispensation more divine than many think.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[1]->title,
      'subtitle' => $metadata->book->chapters[1]->subtitle,
      'id' => $metadata->book->chapters[1]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Since in Christ there is a twofold nature, and the one—in so far as he is thought of as God—resembles the head of the body, while the other may be compared with the feet,—in so far as he, for the sake of our salvation, put on human nature with the same passions as our own,—the following work will be complete only if we begin with the chief and lordliest events of all his history. In this way will the antiquity and divinity of Christianity be shown to those who suppose it of recent and foreign origin, and imagine that it appeared only yesterday.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' No language is sufficient to express the origin and the worth, the being and the nature of Christ. Wherefore also the divine Spirit says in the prophecies, “Who shall declare his generation?” [',
      new BS_BibleLink(['to' => 'Isaiah 53:8']),
      ']',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For none knoweth the Father except the Son, neither can any one know the Son adequately except the Father alone who hath begotten him. [cf. ',
      new BS_BibleLink(['to' => 'Matthew 11:27']),
      '] For alone who beside the Father could clearly understand the Light which was before the world, the intellectual and essential Wisdom which existed before the ages, the living Word which was in the beginning with the Father and which was God, the first and only begotten of God which was before every creature and creation visible and invisible, the commander-in-chief of the rational and immortal host of heaven, the messenger of the great counsel, the executor of the Father’s unspoken will, the creator, with the Father, of all things, the second cause of the universe after the Father, the true and only-begotten Son of God, the Lord and God and King of all created things, the one who has received dominion and power, with divinity itself, and with might and honor from the Father; as it is said in regard to him in the mystical passages of Scripture which speak of his divinity: “In the beginning was the Word, and the Word was with God, and the Word was God.” [',
      new BS_BibleLink(['to' => 'John 1:1']),
      '] “All things were made by him; and without him was not anything made.” [',
      new BS_BibleLink(['to' => 'John 1:3']),
      ']',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' This, too, the great Moses teaches, when, as the most ancient of all the prophets, he describes under the influence of the divine Spirit the creation and arrangement of the universe. He declares that the maker of the world and the creator of all things yielded to Christ himself, and to none other than his own clearly divine and first-born Word, the making of inferior things, and communed with him respecting the creation of man. Says he: “For God said, Let us make man in our image and in our likeness.” [',
      new BS_BibleLink(['to' => 'Genesis 1:26']),
      ']',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And another of the prophets confirms this, speaking of God in his hymns as follows: “He spake and they were made; he commanded and they were created.” [',
      new BS_BibleLink(['to' => 'Psalm 33:9']),
      '] He here introduces the Father and Maker as Ruler of all, commanding with a kingly nod, and second to him the divine Word, none other than the one who is proclaimed by us, as carrying out the Father’s commands.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' All that are said to have excelled in righteousness and piety since the creation of man, the great servant Moses and before him in the first place Abraham and his children, and as many righteous men and prophets as afterward appeared, have contemplated him with the pure eyes of the mind, and have recognized him and offered to him the worship which is due him as Son of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But he, by no means neglectful of the reverence due to the Father, was appointed to teach the knowledge of the Father to them all. For instance, the ',
      new BS_SmallCaps(null, 'Lord'),
      ' God, it is said, appeared as a common man to Abraham while he was sitting at the oak of Mambre. [cf. ',
      new BS_BibleLink(['to' => 'Genesis 18:1']),
      '] And he, immediately failing down, although he saw a man with his eyes, nevertheless worshiped him as God, and sacrificed to him as ',
      new BS_SmallCaps(null, 'Lord'),
      ', and confessed that he was not ignorant of his identity when he uttered the words, “',
      new BS_SmallCaps(null, 'Lord'),
      ', the judge of all the earth, wilt thou not execute righteous judgment?” [',
      new BS_BibleLink(['to' => 'Genesis 18:25']),
      ']',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' For if it is unreasonable to suppose that the unbegotten and immutable essence of the almighty God was changed into the form of man or that it deceived the eyes of the beholders with the appearance of some created thing, and if it is unreasonable to suppose, on the other hand, that the Scripture should falsely invent such things, when the God and ',
      new BS_SmallCaps(null, 'Lord'),
      ' who judgeth all the earth and executeth judgment is seen in the form of a man, who else can be called, if it be not lawful to call him the first cause of all things, than his only pre-existent Word? Concerning whom it is said in the Psalms, “He sent his Word and healed them, and delivered them from their destructions.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Moses most clearly proclaims him second Lord after the Father, when he says, “The ',
      new BS_SmallCaps(null, 'Lord'),
      ' rained upon Sodom and Gomorrah brimstone and fire from the ',
      new BS_SmallCaps(null, 'Lord'),
      '.” [',
      new BS_BibleLink(['to' => 'Genesis 19:24']),
      '] The divine Scripture also calls him God, when he appeared again to Jacob in the form of a man, and said to Jacob, “Thy name shall be called no more Jacob, but Israel shall be thy name, because thou hast prevailed with God.” Wherefore also Jacob called the name of that place “Vision of God,” saying, “For I have seen God face to face, and my life is preserved.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Nor is it admissible to suppose that the theophanies recorded were appearances of subordinate angels and ministers of God, for whenever any of these appeared to men, the Scripture does not conceal the fact, but calls them by name not God nor ',
      new BS_SmallCaps(null, 'Lord'),
      ', but angels, as it is easy to prove by numberless testimonies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Joshua, also, the successor of Moses, calls him, as leader of the heavenly angels and archangels and of the supramundane powers, and as lieutenant of the Father, entrusted with the second rank of sovereignty and rule over all, “captain of the host of the ',
      new BS_SmallCaps(null, 'Lord'),
      '’s” although he saw him not otherwise than again in the form and appearance of a man.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' For it is written: “And it came to pass when Joshua was at Jericho that he looked and saw a man standing over against him with his sword drawn in his hand, and Joshua went unto him and said, Art thou for us or for our adversaries? And he said unto him, As captain of the host of the ',
      new BS_SmallCaps(null, 'Lord'),
      ' am I now come. And Joshua fell on his face to the earth and said unto him, Lord, what dost thou command thy servant? and the captain of the ',
      new BS_SmallCaps(null, 'Lord'),
      ' said unto Joshua, Loose thy shoe from off thy feet, for the place whereon thou standest is holy.” [',
      new BS_BibleLink(['to' => 'Joshua 5:13–15']),
      ']',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' You will perceive also from the same words that this was no other than he who talked with Moses. For the Scripture says in the same words and with reference to the same one, “When the ',
      new BS_SmallCaps(null, 'Lord'),
      ' saw that he drew near to see, the ',
      new BS_SmallCaps(null, 'Lord'),
      ' called to him out of the bush and said, Moses, Moses. And he said, What is it? And he said, Draw not nigh hither; loose thy shoe from off thy feet, for the place whereon thou standest is holy ground. And he said unto him, ',
      new BS_SmallCaps(null, 'I Am'),
      ' the God of thy fathers, the God of Abraham, and the God of Isaac, and the God of Jacob.” [',
      new BS_BibleLink(['to' => 'Exodus 3:4–6']),
      ']',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And that there is a certain substance which lived and subsisted before the world, and which ministered unto the Father and God of the universe for the formation of all created things, and which, is called the Word of God and Wisdom, we may learn, to quote other proofs in addition to those already cited, from the mouth of Wisdom herself, who reveals most clearly through Solomon the following mysteries concerning herself: “I, Wisdom, have dwelt with prudence and knowledge, and I have invoked understanding. Through me kings reign, and princes ordain righteousness. Through me the great are magnified, and through me sovereigns rule the earth.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' To which she adds: “The ',
      new BS_SmallCaps(null, 'Lord'),
      '  created me in the beginning of his ways, for his works; before the world he established me, in the beginning, before he made the earth, before he made the depths, before the mountains were settled, before all hills he begat me. When he prepared the heavens I was present with him, and when he established the fountains of the region under heaven I was with him, disposing. I was the one in whom he delighted; daily I rejoiced before him at all times when he was rejoicing at having completed the world.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' That the divine Word, therefore, pre-existed and appeared to some, if not to all, has thus been briefly shown by us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But why the Gospel was not preached in ancient times to all men and to all nations, as it is now, will appear from the following considerations. The life of the ancients was not of such a kind as to permit them to receive the all-wise and all-virtuous teaching of Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' For immediately in the beginning, after his original life of blessedness, the first man despised the command of God, and fell into this mortal and perishable state, and exchanged his former divinely inspired luxury for this curse-laden earth. His descendants having filled our earth, showed themselves much worse, with the exception of one here and there, and entered upon a certain brutal and insupportable mode of life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' They thought neither of city nor state, neither of arts nor sciences. They were ignorant even of the name of laws and of justice, of virtue and of philosophy. As nomads, they passed their lives in deserts, like wild and fierce beasts, destroying, by an excess of voluntary wickedness, the natural reason of man, and the seeds of thought and of culture implanted in the human soul. They gave themselves wholly over to all kinds of profanity, now seducing one another, now slaying one another, now eating human flesh, and now daring to wage war with the Gods and to undertake those battles of the giants celebrated by all; now planning to fortify earth against heaven, and in the madness of ungoverned pride to prepare an attack upon the very God of all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' On account of these things, when they conducted themselves thus, the all-seeing God sent down upon them floods and conflagrations as upon a wild forest spread over the whole earth. He cut them down with continuous famines and plagues, with wars, and with thunderbolts from heaven, as if to check some terrible and obstinate disease of souls with more severe punishments.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' Then, when the excess of wickedness had overwhelmed nearly all the race, like a deep fit of drunkenness, beclouding and darkening the minds of men, the first-born and first-created wisdom of God, the pre-existent Word himself, induced by his exceeding love for man, appeared to his servants, now in the form of angels, and again to one and another of those ancients who enjoyed the favor of God, in his own person as the saving power of God, not otherwise, however, than in the shape of man, because it was impossible to appear in any other way.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' And as by them the seeds of piety were sown among a multitude of men and the whole nation, descended from the Hebrews, devoted themselves persistently to the worship of God, he imparted to them through the prophet Moses, as to multitudes still corrupted by their ancient practices, images and symbols of a certain mystic Sabbath and of circumcision, and elements of other spiritual principles, but he did not grant them a complete knowledge of the mysteries themselves.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' But when their law became celebrated, and, like a sweet odor, was diffused among all men, as a result of their influence the dispositions of the majority of the heathen were softened by the lawgivers and philosophers who arose on every side, and their wild and savage brutality was changed into mildness, so that they enjoyed deep peace, friendship, and social intercourse. Then, finally, at the time of the origin of the Roman Empire, there appeared again to all men and nations throughout the world, who had been, as it were, previously assisted, and were now fitted to receive the knowledge of the Father, that same teacher of virtue, the minister of the Father in all good things, the divine and heavenly Word of God, in a human body not at all differing in substance from our own. He did and suffered the things which had been prophesied. For it had been foretold that one who was at the same time man and God should come and dwell in the world, should per form wonderful works, and should show himself a teacher to all nations of the piety of the Father. The marvelous nature of his birth, and his new teaching, and his wonderful works had also been foretold; so likewise the manner of his death, his resurrection from the dead, and, finally, his divine ascension into heaven.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' For instance, Daniel the prophet, under the influence of the divine Spirit, seeing his kingdom at the end of time, was inspired thus to describe the divine vision in language fitted to human comprehension: “For I beheld,” he says, “until thrones were placed, and the Ancient of Days did sit, whose garment was white as snow and the hair of his head like pure wool; his throne was a flame of fire and his wheels burning fire. A river of fire flowed before him. Thousand thousands ministered unto him, and ten thousand times ten thousand stood before him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' He appointed judgment, and the books were opened.” And again, “I saw,” says he, “and behold, one like the Son of man came with the clouds of heaven, and he hastened unto the Ancient of Days and was brought into his presence, and there was given him the dominion and the glory and the kingdom; and all peoples, tribes, and tongues serve him. His dominion is an everlasting dominion which shall not pass away, and his kingdom shall not be destroyed.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' It is clear that these words can refer to no one else than to our Saviour, the God Word who was in the beginning with God, and who was called the Son of man because of his final appearance in the flesh.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' But since we have collected in separate books as the selections from the prophets which relate to our Saviour Jesus Christ, and have arranged in a more logical form those things which have been revealed concerning him, what has been said will suffice for the present.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[2]->title,
      'subtitle' => $metadata->book->chapters[2]->subtitle,
      'id' => $metadata->book->chapters[2]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' It is now the proper place to show that the very name Jesus and also the name Christ were honored by the ancient prophets beloved of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Moses was the first to make known the name of Christ as a name especially august and glorious. When he delivered types and symbols of heavenly things, and mysterious images, in accordance with the oracle which said to him, “Look that thou make all things according to the pattern which was shown thee in the mount,” he consecrated a man high priest of God, in so far as that was possible, and him he called Christ. And thus to this dignity of the high priesthood, which in his opinion surpassed the most honorable position among men, he attached for the sake of honor and glory the name of Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He knew so well that in Christ was something divine. And the same one foreseeing, under the influence of the divine Spirit, the name Jesus, dignified it also with a certain distinguished privilege. For the name of Jesus, which had never been uttered among men before the time of Moses, he applied first and only to the one who he knew would receive after his death, again as a type and symbol, the supreme command.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' His successor, therefore, who had not hitherto borne the name Jesus, but had been called by another name, Auses, which had been given him by his parents, he now called Jesus, bestowing the name upon him as a gift of honor, far greater than any kingly diadem. For Jesus himself, the son of Nave, bore a resemblance to our Saviour in the fact that he alone, after Moses and after the completion of the symbolical worship which had been transmitted by him, succeeded to the government of the true and pure religion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Thus Moses bestowed the name of our Saviour, Jesus Christ, as a mark of the highest honor, upon the two men who in his time surpassed all the rest of the people in virtue and glory; namely, upon the high priest and upon his own successor in the government.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And the prophets that came after also clearly foretold Christ by name, predicting at the same time the plots which the Jewish people would form against him, and the calling of the nations through him. Jeremiah, for instance, speaks as follows: “The Spirit before our face, Christ the Lord, was taken in their destructions; of whom we said, under his shadow we shall live among the nations.” And David, in perplexity, says, “Why did the nations rage and the people imagine vain things? The kings of the earth set themselves in array, and the rulers were gathered together against the ',
      new BS_SmallCaps(null, 'Lord'),
      ' and against his Christ”; to which he adds, in the person of Christ himself, “The ',
      new BS_SmallCaps(null, 'Lord'),
      ' said unto me, Thou art my Son, this day have I begotten thee. Ask of me, and I will give thee the nations for thine inheritance, and the uttermost parts of the earth for thy possession.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And not only those who were honored with the high priesthood, and who for the sake of the symbol were anointed with especially prepared oil, were adorned with the name of Christ among the Hebrews, but also the kings whom the prophets anointed under the influence of the divine Spirit, and thus constituted, as it were, typical Christs. For they also bore in their own persons types of the royal and sovereign power of the true and only Christ, the divine Word who ruleth over all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And we have been told also that certain of the prophets themselves became, by the act of anointing, Christs in type, so that all these have reference to the true Christ, the divinely inspired and heavenly Word, who is the only high priest of all, and the only King of every creature, and the Father’s only supreme prophet of prophets.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And a proof of this is that no one of those who were of old symbolically anointed, whether priests, or kings, or prophets, possessed so great a power of inspired virtue as was exhibited by our Saviour and Lord Jesus, the true and only Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' None of them at least, however superior in dignity and honor they may have been for many generations among their own people, ever gave to their followers the name of Christians from their own typical name of Christ. Neither was divine honor ever rendered to any one of them by their subjects; nor after their death was the disposition of their followers such that they were ready to die for the one whom they honored. And never did so great a commotion arise among all the nations of the earth in respect to any one of that age; for the mere symbol could not act with such power among them as the truth itself which was exhibited by our Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' He, although he received no symbols and types of high priesthood from any one, although he was not born of a race of priests, although he was not elevated to a kingdom by military guards, although he was not a prophet like those of old, although he obtained no honor nor pre-eminence among the Jews, nevertheless was adorned by the Father with all, if not with the symbols, yet with the truth itself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And therefore, although he did not possess like honors with those whom we have mentioned, he is called Christ more than all of them. And as himself the true and only Christ of God, he has filled the whole earth with the truly august and sacred name of Christians, committing to his followers no longer types and images, but the uncovered virtues themselves, and a heavenly life in the very doctrines of truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And he was not anointed with oil prepared from material substances, but, as befits divinity, with the divine Spirit himself, by participation in the unbegotten deity of the Father. And this is taught also again by Isaiah, who exclaims, as if in the person of Christ himself, “The Spirit of the ',
      new BS_SmallCaps(null, 'Lord'),
      ' is upon me; therefore hath he anointed me. He hath sent me to preach the Gospel to the poor, to proclaim deliverance to captives, and recovery of sight to the blind.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And not only Isaiah, but also David addresses him, saying, “Thy throne, O God, is forever and ever. A scepter of equity is the scepter of thy kingdom. Thou hast loved righteousness and hast hated iniquity. Therefore God, thy God, hath anointed thee with the oil of gladness above thy fellows.” Here the Scripture calls him God in the first verse, in the second it honors him with a royal scepter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' Then a little farther on, after the divine and royal power, it represents him in the third place as having become Christ, being anointed not with oil made of material substances, but with the divine oil of gladness. It thus indicates his especial honor, far superior to and different from that of those who, as types, were of old anointed in a more material way.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' And elsewhere the same writer speaks of him as follows: “The ',
      new BS_SmallCaps(null, 'Lord'),
      ' said unto my Lord, Sit thou at my right hand until I make thine enemies thy footstool” [',
      new BS_BibleLink(['to' => 'Psalm 110:1']),
      ']; and, “Out of the womb, before the morning star, have I begotten thee. The ',
      new BS_SmallCaps(null, 'Lord'),
      ' hath sworn and he will not repent. Thou art a priest forever after the order of Melchizedec.” [',
      new BS_BibleLink(['to' => 'Psalm 110:3–4']),
      ']',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But this Melchizedec is introduced in the Holy Scriptures as a priest of the most high God, not consecrated by any anointing oil, especially prepared, and not even belonging by descent to the priesthood of the Jews. Wherefore after his order, but not after the order of the others, who received symbols and types, was our Saviour proclaimed, with an appeal to an oath, Christ and priest.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' History, therefore, does not relate that he was anointed corporeally by the Jews, nor that he belonged to the lineage of priests, but that he came into existence from God himself before the morning star, that is before the organization of the world, and that he obtained an immortal and undecaying priesthood for eternal ages.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' But it is a great and convincing proof of his incorporeal and divine unction that he alone of all those who have ever existed is even to the present day called Christ by all men throughout the world, and is confessed and witnessed to under this name, and is commemorated both by Greeks and Barbarians and even to this day is honored as a King by his followers throughout the world, and is admired as more than a prophet, and is glorified as the true and only high priest of God. And besides all this, as the pre-existent Word of God, called into being before all ages, he has received august honor from the Father, and is worshiped as God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' But most wonderful of all is the fact that we who have consecrated ourselves to him, honor him not only with our voices and with the sound of words, but also with complete elevation of soul, so that we choose to give testimony unto him rather than to preserve our own lives.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' I have of necessity prefaced my history with these matters in order that no one, judging from the date of his incarnation, may think that our Saviour and Lord Jesus, the Christ, has but recently come into being.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[3]->title,
      'subtitle' => $metadata->book->chapters[3]->subtitle,
      'id' => $metadata->book->chapters[3]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' But that no one may suppose that his doctrine is new and strange, as if it were framed by a man of recent origin, differing in no respect from other men, let us now briefly consider this point also.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' It is admitted that when in recent times the appearance of our Saviour Jesus Christ had become known to all men there immediately made its appearance a new nation; a nation confessedly not small, and not dwelling in some corner of the earth, but the most numerous and pious of all nations, indestructible and unconquerable, because it always receives assistance from God. This nation, thus suddenly appearing at the time appointed by the inscrutable counsel of God, is the one which has been honored by all with the name of Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' One of the prophets, when he saw beforehand with the eye of the Divine Spirit that which was to be, was so astonished at it that he cried out, “Who hath heard of such things, and who hath spoken thus? Hath the earth brought forth in one day, and hath a nation been born at once?” And the same prophet gives a hint also of the name by which the nation was to be called, when he says, “Those that serve me shall be called by a new name, which shall be blessed upon the earth.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But although it is clear that we are new and that this new name of Christians has really but recently been known among all nations, nevertheless our life and our conduct, with our doctrines of religion, have not been lately invented by us, but from the first creation of man, so to speak, have been established by the natural understanding of divinely favored men of old. That this is so we shall show in the following way.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' That the Hebrew nation is not new, but is universally honored on account of its antiquity, is known to all. The books and writings of this people contain accounts of ancient men, rare indeed and few in number, but nevertheless distinguished for piety and righteousness and every other virtue. Of these, some excellent men lived before the flood, others of the sons and descendants of Noah lived after it, among them Abraham, whom the Hebrews celebrate as their own founder and forefather.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' If any one should assert that all those who have enjoyed the testimony of righteousness, from Abraham himself back to the first man, were Christians in fact if not in name, he would not go beyond the truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' For that which the name indicates, that the Christian man, through the knowledge and the teaching of Christ, is distinguished for temperance and righteousness, for patience in life and manly virtue, and for a profession of piety toward the one and only God over all—all that was zealously practiced by them not less than by us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' They did not care about circumcision of the body, neither do we. They did not care about observing Sabbaths, nor do we. They did not avoid certain kinds of food, neither did they regard the other distinctions which Moses first delivered to their posterity to be observed as symbols; nor do Christians of the present day do such things. But they also clearly knew the very Christ of God; for it has already been shown that he appeared unto Abraham, that he imparted revelations to Isaac, that he talked with Jacob, that he held converse with Moses and with the prophets that came after.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Hence you will find those divinely favored men honored with the name of Christ, according to the passage which says of them, “Touch not my Christs, and do my prophets no harm.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' So that it is clearly necessary to consider that religion, which has lately been preached to all nations through the teaching of Christ, the first and most ancient of all religions, and the one discovered by those divinely favored men in the age of Abraham.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' If it is said that Abraham, a long time afterward, was given the command of circumcision, we reply that nevertheless before this it was declared that he had received the testimony of righteousness through faith; as the divine word says, “Abraham believed in God, and it was counted unto him for righteousness.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And indeed unto Abraham, who was thus before his circumcision a justified man, there was given by God, who revealed himself unto him (but this was Christ himself, the word of God), a prophecy in regard to those who in coming ages should be justified in the same way as he. The prophecy was in the following words: “And in thee shall all the tribes of the earth be blessed.” And again, “He shall become a nation great and numerous; and in him shall all the nations of the earth be blessed.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' It is permissible to understand this as fulfilled in us. For he, having renounced the superstition of his fathers, and the former error of his life, and having confessed the one God over all, and having worshiped him with deeds of virtue, and not with the service of the law which was afterward given by Moses, was justified by faith in Christ, the Word of God, who appeared unto him. To him, then, who was a man of this character, it was said that all the tribes and all the nations of the earth should be blessed in him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But that very religion of Abraham has reappeared at the present time, practiced in deeds, more efficacious than words, by Christians alone throughout the world.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' What then should prevent the confession that we who are of Christ practice one and the same mode of life and have one and the same religion as those divinely favored men of old? Whence it is evident that the perfect religion committed to us by the teaching of Christ is not new and strange, but, if the truth must be spoken, it is the first and the true religion. This may suffice for this subject.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[4]->title,
      'subtitle' => $metadata->book->chapters[4]->subtitle,
      'id' => $metadata->book->chapters[4]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' And now, after this necessary introduction to our proposed history of the Church, we can enter, so to speak, upon our journey, beginning with the appearance of our Saviour in the flesh. And we invoke God, the Father of the Word, and him, of whom we have been speaking, Jesus Christ himself our Saviour and Lord, the heavenly Word of God, as our aid and fellow-laborer in the narration of the truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' It was in the forty-second year of the reign of Augustus and the twenty-eighth after the subjugation of Egypt and the death of Antony and Cleopatra, with whom the dynasty of the Ptolemies in Egypt came to an end, that our Saviour and Lord Jesus Christ was born in Bethlehem of Judea, according to the prophecies which had been uttered concerning him. His birth took place during the first census, while Cyrenius was governor of Syria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Flavius Josephus, the most celebrated of Hebrew historians, also mentions this census, which was taken during Cyrenius’ term of office. In the same connection he gives an account of the uprising of the Galileans, which took place at that time, of which also Luke, among our writers, has made mention in the Acts, in the following words: “After this man rose up Judas of Galilee in the days of the taxing, and drew away a multitude after him: he also perished; and all, even as many as obeyed him, were dispersed.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The above-mentioned author, in the eighteenth book of his Antiquities, in agreement with these words, adds the following, which we quote exactly: “Cyrenius, a member of the senate, one who had held other offices and had passed through them all to the consulship, a man also of great dignity in other respects, came to Syria with a small retinue, being sent by Cæsar to be a judge of the nation and to make an assessment of their property.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And after a little he says: “But Judas, a Gaulonite, from a city called Gamala, taking with him Sadduchus, a Pharisee, urged the people to revolt, both of them saying that the taxation meant nothing else than downright slavery, and exhorting the nation to defend their liberty.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And in the second book of his History of the Jewish War, he writes as follows concerning the same man: “At this time a certain Galilean, whose name was Judas, persuaded his countrymen to revolt, declaring that they were cowards if they submitted to pay tribute to the Romans, and if they endured, besides God, masters who were mortal.” These things are recorded by Josephus.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[5]->title,
      'subtitle' => $metadata->book->chapters[5]->subtitle,
      'id' => $metadata->book->chapters[5]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' When Herod, the first ruler of foreign blood, became King, the prophecy of Moses received its fulfillment, according to which there should “not be wanting a prince of Judah, nor a ruler from his loins, until he come for whom it is reserved.” The latter, he also shows, was to be the expectation of the nations.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' This prediction remained unfulfilled so long as it was permitted them to live under rulers from their own nation, that is, from the time of Moses to the reign of Augustus. Under the latter, Herod, the first foreigner, was given the Kingdom of the Jews by the Romans. As Josephus relates, he was an Idumean on his father’s side and an Arabian on his mother’s. But Africanus, who was also no common writer, says that they who were more accurately informed about him report that he was a son of Antipater, and that the latter was the son of a certain Herod of Ascalon, one of the so-called servants of the temple of Apollo.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' This Antipater, having been taken a prisoner while a boy by Idumean robbers, lived with them, because his father, being a poor man, was unable to pay a ransom for him. Growing up in their practices he was afterward befriended by Hyrcanus, the high priest of the Jews. A son of his was that Herod who lived in the, times of our Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' When the Kingdom of the Jews had devolved upon such a man the expectation of the nations was, according to prophecy, already at the door. For with him their princes and governors, who had ruled in regular succession from the time of Moses came to an end.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Before their captivity and their transportation to Babylon they were ruled by Saul first and then by David, and before the kings leaders governed them who were called Judges, and who came after Moses and his successor Jesus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' After their return from Babylon they continued to have without interruption an aristocratic form of government, with an oligarchy. For the priests had the direction of affairs until Pompey, the Roman general, took Jerusalem by force, and defiled the holy places by entering the very innermost sanctuary of the temple. Aristobulus, who, by the right of ancient succession, had been up to that time both king and high priest, he sent with his children in chains to Rome; and gave to Hyrcanus, brother of Aristobulus, the high priesthood, while the whole nation of the Jews was made tributary to the Romans from that time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But Hyrcanus, who was the last of the regular line of high priests, was, very soon afterward taken prisoner by the Parthians, and Herod, the first foreigner, as I have already said, was made King of the Jewish nation by the Roman senate and by Augustus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Under him Christ appeared in bodily shape, and the expected Salvation of the nations and their calling followed in accordance with prophecy. From this time the princes and rulers of Judah, I mean of the Jewish nation, came to an end, and as a natural consequence the order of the high priesthood, which from ancient times had proceeded regularly in closest succession from generation to generation, was immediately thrown into confusion,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Of these things Josephus is also a witness, who shows that when Herod was made King by the Romans he no longer appointed the high priests from the ancient line, but gave the honor to certain obscure persons. A course similar to that of Herod in the appointment of the priests was pursued by his son Archelaus, and after him by the Romans, who took the government into their own hands.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' The same writer shows that Herod was the first that locked up the sacred garment of the high priest under his own seal and refused to permit the high priests to keep it for themselves. The same course was followed by Archelaus after him, and after Archelaus by the Romans.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' These things have been recorded by us in order to show that another prophecy has been fulfilled in the appearance of our Saviour Jesus Christ. For the Scripture, in the book of Daniel, having expressly mentioned a certain number of weeks until the coming of Christ, of which we have treated in other books, most clearly prophesies, that after the completion of those weeks the unction among the Jews should totally perish. And this, it has been clearly shown, was fulfilled at the time of the birth of our Saviour Jesus Christ. This has been necessarily premised by us as a proof of the correctness of the time.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[6]->title,
      'subtitle' => $metadata->book->chapters[6]->subtitle,
      'id' => $metadata->book->chapters[6]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Matthew and Luke in their gospels have given us the genealogy of Christ differently, and many suppose that they are at variance with one another. Since as a consequence every believer, in ignorance of the truth, has been zealous to invent some explanation which shall harmonize the two passages, permit us to subjoin the account of the matter which has come down to us, and which is given by Africanus, who was mentioned by us just above, in his epistle to Aristides, where he discusses the harmony of the gospel genealogies. After refuting the opinions of others as forced and deceptive, he gave the account which he had received from tradition in these words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “For whereas the names of the generations were reckoned in Israel either according to nature or according to law;—according to nature by the succession of legitimate offspring, and according to law whenever another raised up a child to the name of a brother dying childless; for because a clear hope of resurrection was not yet given they had a representation of the future promise by a kind of mortal resurrection, in order that the name of the one deceased might be perpetuated;—',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' whereas then some of those who are inserted in this genealogical table succeeded by natural descent, the son to the father, while others, though born of one father, were ascribed by name to another, mention was made of both of those who were progenitors in fact and of those who were so only in name.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Thus neither of the gospels is in error, for one reckons by nature, the other by law. For the line of descent from Solomon and that from Nathan were so involved, the one with the other, by the raising up of children to the childless and by second marriages, that the same persons are justly considered to belong at one time to one, at another time to another; that is, at one time to the reputed fathers, at another to the actual fathers. So that both these accounts are strictly true and come down to Joseph with considerable intricacy indeed, yet quite accurately.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But in order that what I have said may be made clear I shall explain the interchange of the generations. If we reckon the generations from David through Solomon, the third from the end is found to be Matthan, who begat Jacob the father of Joseph. But if, with Luke, we reckon them from Nathan the son of David, in like manner the third from the end is Melchi, whose son Eli was the father of Joseph. For Joseph was the son of Eli, the son of Melchi.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Joseph therefore being the object proposed to us, it must be shown how it is that each is recorded to be his father, both Jacob, who derived his descent from Solomon, and Eli, who derived his from Nathan; first how it is that these two, Jacob and Eli, were brothers, and then how it is that their fathers, Matthan and Melchi, although of different families, are declared to be grandfathers of Joseph.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Matthan and Melchi having married in succession the same woman, begat children who were uterine brothers, for the law did not prohibit a widow, whether such by divorce or by the death of her husband, from marrying another.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' By Estha then (for this was the woman’s name according to tradition) Matthan, a descendant of Solomon, first begat Jacob. And when Matthan was dead, Melchi, who traced his descent back to Nathan, being of the same tribe but of another family, married her as before said, and begat a son Eli.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Thus we shall find the two, Jacob and Eli, although belonging to different families, yet brethren by the same mother. Of these the one, Jacob, when his brother Eli had died childless, took the latter’s wife and begat by her a son Joseph, his own son by nature and in accordance with reason. Wherefore also it is written: ‘Jacob begat Joseph.’ But according to law he was the son of Eli, for Jacob, being the brother of the latter, raised up seed to him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Hence the genealogy traced through him will not be rendered void, which the evangelist Matthew in his enumeration gives thus: ‘Jacob begat Joseph.’ But Luke, on the other hand, says: ‘Who was the son, as was supposed’ (for this he also adds), ‘of Joseph, the son of Eli, the son of Melchi’; for he could not more clearly express the generation according to law. And the expression ‘he begat’ he has omitted in his genealogical table up to the end, tracing the genealogy back to Adam the son of God. This interpretation is neither incapable of proof nor is it an idle conjecture.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' For the relatives of our Lord according to the flesh, whether with the desire of boasting or simply wishing to state the fact, in either case truly, have banded down the following account: Some Idumean robbers, having attacked Ascalon, a city of Palestine, carried away from a temple of Apollo which stood near the walls, in addition to other booty, Antipater, son of a certain temple slave named Herod. And since the priest was not able to pay the ransom for his son, Antipater was brought up in the customs of the Idumeans, and afterward was befriended by Hyrcanus, the high priest of the Jews.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And having, been sent by Hyrcanus on an embassy to Pompey, and having restored to him the kingdom which had been invaded by his brother Aristobulus, he had the good fortune to be named procurator of Palestine. But Antipater having been slain by those who were envious of his great good fortune was succeeded by his son Herod, who was afterward, by a decree of the senate, made King of the Jews under Antony and Augustus. His sons were Herod and the other tetrarchs. These accounts agree also with those of the Greeks.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But as there had been kept in the archives up to that time the genealogies of the Hebrews as well as of those who traced their lineage back to proselytes, such as Achior the Ammonite and Ruth the Moabitess, and to those who were mingled with the Israelites and came out of Egypt with them, Herod, inasmuch as the lineage of the Israelites contributed nothing to his advantage, and since he was goaded with the consciousness of his own ignoble extraction, burned all the genealogical records, thinking that he might appear of noble origin if no one else were able, from the public registers, to trace back his lineage to the patriarchs or proselytes and to those mingled with them, who were called Georae.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' A few of the careful, however, having obtained private records of their own, either by remembering the names or by getting them in some other way from the registers, pride themselves on preserving the memory of their noble extraction. Among these are those already mentioned, called Desposyni, on account of their connection with the family of the Saviour. Coming from Nazara and Cochaba, villages of Judea, into other parts of the world, they drew the aforesaid genealogy from memory and from the book of daily records as faithfully as possible.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' Whether then the case stand thus or not no one could find a clearer explanation, according to my own opinion and that of every candid person. And let this suffice us, for, although we can urge no testimony in its support, we have nothing better or truer to offer. In any case the Gospel states the truth.” And at the end of the same epistle he adds these words: “Matthan, who was descended from Solomon, begat Jacob. And when Matthan was dead, Melchi, who was descended from Nathan begat Eli by the same woman. Eli and Jacob were thus uterine brothers. Eli having died childless, Jacob raised up seed to him, begetting Joseph, his own son by nature, but by law the son of Eli. Thus Joseph was the son of both.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' Thus far Africanus. And the lineage of Joseph being thus traced, Mary also is virtually shown to be of the same tribe with him, since, according to the law of Moses, inter-marriages between different tribes were not permitted. For the command is to marry one of the same family and lineage, so that the inheritance may not pass from tribe to tribe. This may suffice here.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[7]->title,
      'subtitle' => $metadata->book->chapters[7]->subtitle,
      'id' => $metadata->book->chapters[7]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' When Christ was born, according to the prophecies, in Bethlehem of Judea, at the time indicated, Herod was not a little disturbed by the enquiry of the magi who came from the east, asking where he who was born King of the Jews was to be found,—for they had seen his star, and this was their reason for taking so long a journey; for they earnestly desired to worship the infant as God,—for he imagined that his kingdom might be endangered; and he enquired therefore of the doctors of the law, who belonged to the Jewish nation, where they expected Christ to be born. When he learned that the prophecy of Micah announced that Bethlehem was to be his birthplace he commanded, in a single edict, all the male infants in Bethlehem, and all its borders, that were two years of age or less, according to the time which he had accurately ascertained from the magi, to be slain, supposing that Jesus, as was indeed likely, would share the same fate as the others of his own age.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But the child anticipated the snare, being carried into Egypt by his parents, who had learned from an angel that appeared unto them what was about to happen, These things are recorded by the Holy Scriptures in the Gospel.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' It is worth while, in addition to this, to observe the reward which Herod received for his daring crime against Christ and those of the same age. For immediately, without the least delay, the divine vengeance overtook him while he was still alive, and gave him a foretaste of what he was to receive after death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' It is not possible to relate here how he tarnished the supposed felicity of his reign by successive calamities in his family, by the murder of wife and children, and others of his nearest relatives and dearest friends. The account, which casts every other tragic drama into the shade, is detailed at length in the histories of Josephus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' How, immediately after his crime against our Saviour and the other infants, the punishment sent by God drove him on to his death, we can best learn from the words of that historian who, in the seventeenth book of his Antiquities of the Jews, writes as follows concerning his end:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' “But the disease of Herod grew more severe, God inflicting punishment for his crimes. For a slow fire burned in him which was not so apparent to those who touched him, but augmented his internal distress; for he had a terrible desire for food which it was not possible to resist. He was affected also with ulceration of the intestines, and with especially severe pains in the colon, while a watery and transparent humor settled about his feet.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' He suffered also from a similar trouble in his abdomen. Nay more, his privy member was putrefied and produced worms. He found also excessive difficulty in breathing, and it was particularly disagreeable because of the offensiveness of the odor and the rapidity of respiration.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' He had convulsions also in every limb, which gave him uncontrollable strength. It was said, indeed, by those who possessed the power of divination and wisdom to explain such events, that God had inflicted this punishment upon the King on account of his great impiety.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' The writer mentioned above recounts these things in the work referred to. And in the second book of his History he gives a similar account of the same Herod, which runs as follows: “The disease then seized upon his whole body and distracted it by various torments. For he had a slow fever, and the itching of the skin of his whole body was insupportable. He suffered also from continuous pains in his colon, and there were swellings on his feet like those of a person suffering from dropsy, while his abdomen was inflamed and his privy member so putrefied as to produce worms. Besides this he could breathe only in an upright posture, and then only with difficulty, and he had convulsions in all his limbs, so that the diviners said that his diseases were a punishment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' But he, although wrestling with such sufferings, nevertheless clung to life and hoped for safety, and devised methods of cure. For instance, crossing over Jordan he used the warm baths at Callirhoë, which flow into the Lake Asphaltites, but are themselves sweet enough to drink.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' His physicians here thought that they could warm his whole body again by means of heated oil. But when they had let him down into a tub filled with oil, his eyes became weak and turned up like the eyes of a dead person. But when his attendants raised an outcry, he recovered at the noise; but finally, despairing of a cure, he commanded about fifty drachms to be distributed among the soldiers, and great sums to be given to his generals and friends.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Then returning he came to Jericho, where, being seized with melancholy, he planned to commit an impious deed, as if challenging death itself. For, collecting from every town the most illustrious men of all Judea, he commanded that they be shut up in the so-called hippodrome.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And having summoned Salome, his sister, and her husband, Alexander, he said: ‘I know that the Jews will rejoice at my death. But I may be lamented by others and have a splendid funeral if you are willing to perform my commands. When I shall expire surround these men, who are now under guard, as quickly as possible with soldiers, and slay them, in order that all Judea and every house may weep for me even against their will.’”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And after a little Josephus says, “And again he was so tortured by want of food and by a convulsive cough that, overcome by his pains, he planned to anticipate his fate. Taking an apple he asked also for a knife, for he was accustomed to cut apples and eat them. Then looking round to see that there was no one to hinder, he raised his right hand as if to stab himself.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' In addition to these things the same writer records that he slew another of his own sons before his death, the third one slain by his command, and that immediately afterward he breathed his last, not without excessive pain.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' Such was the end of Herod, who suffered a just punishment for his slaughter of the children of Bethlehem, which was the result of his plots against our Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' After this an angel appeared in a dream to Joseph in Egypt and commanded him to go to Judea with the child and its mother, revealing to him that those who had sought the life of the child were dead. To this the evangelist adds, “But when he heard that Archelaus did reign in the room of his father Herod he was afraid to go thither; notwithstanding being warned of God in a dream he turned aside into the parts of Galilee.”',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[8]->title,
      'subtitle' => $metadata->book->chapters[8]->subtitle,
      'id' => $metadata->book->chapters[8]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' The historian already mentioned agrees with the evangelist in regard to the fact that Archelaus succeeded to the government after Herod. He records the manner in which he received the kingdom of the Jews by the will of his father Herod and by the decree of Cæsar Augustus, and how, after he had reigned ten years, he lost his kingdom, and his brothers Philip and Herod the younger, with Lysanias, still ruled their own tetrarchies. The same writer, in the eighteenth book of his Antiquities, says that about the twelfth year of the reign of Tiberius, who had succeeded to the empire after Augustus had ruled fifty-seven years, Pontius Pilate was entrusted with the government of Judea, and that he remained there ten full years, almost until the death of Tiberius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Accordingly the forgery of those who have recently given currency to acts against our Saviour is clearly proved. For the very date given in them shows the falsehood of their fabricators.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For the things which they have dared to say concerning the passion of the Saviour are put into the fourth consulship of Tiberius, which occurred in the seventh year of his reign; at which time it is plain that Pilate was not yet ruling in Judea, if the testimony of Josephus is to be believed, who clearly shows in the above-mentioned work that Pilate was made procurator of Judea by Tiberius in the twelfth year of his reign.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[9]->title,
      'subtitle' => $metadata->book->chapters[9]->subtitle,
      'id' => $metadata->book->chapters[9]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' It was in the fifteenth year of the reign of Tiberius, according to the evangelist, and in the fourth year of the governorship of Pontius Pilate, while Herod and Lysanias and Philip were ruling the rest of Judea, that our Saviour and Lord, Jesus the Christ of God, being about thirty years of age, came to John for baptism and began the promulgation of the Gospel.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The Divine Scripture says, moreover, that he passed the entire time of his ministry under the high priests Annas and Caiaphas, showing that in the time which belonged to the priesthood of those two men the whole period of his teaching was completed. Since he began his work during the high priesthood of Annas and taught until Caiaphas held the office, the entire time does not comprise quite four years.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For the rites of the law having been already abolished since that time, the customary usages in connection with the worship of God, according to which the high priest acquired his office by hereditary descent and held it for life, were also annulled and there were appointed to the high priesthood by the Roman governors now one and now another person who continued in office not more than one year.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Josephus relates that there were four high priests in succession from Annas to Caiaphas. Thus in the same book of the Antiquities he writes as follows: “Valerius Graters having put an end to the priesthood of Ananus appoints Ishmael, the son of Fabi, high priest. And having removed him after a little he appoints Eleazer, the son of Ananus the high priest, to the same office. And having removed him also at the end of a year he gives the high priesthood to Simon, the son of Camithus. But he likewise held the honor no more than a year, when Josephus, called also Caiaphas, succeeded him.” Accordingly the whole time of our Saviour’s ministry is shown to have been not quite four full years, four high priests, from Annas to the accession of Caiaphas, having held office a year each. The Gospel therefore has rightly indicated Caiaphas as the high priest under whom the Saviour suffered. From which also we can see that the time of our Saviour’s ministry does not disagree with the foregoing investigation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Our Saviour and Lord, not long after the beginning of his ministry, called the twelve apostles, and these alone of all his disciples he named apostles, as an especial honor. And again he appointed seventy others whom he sent out two by two before his face into every place and city whither he himself was about to come.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[10]->title,
      'subtitle' => $metadata->book->chapters[10]->subtitle,
      'id' => $metadata->book->chapters[10]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Not long after this John the Baptist was beheaded by the younger Herod, as is stated in the Gospels. Josephus also records the same fact, making mention of Herodias by name, and stating that, although she was the wife of his brother, Herod made her his own wife after divorcing his former lawful wife, who was the daughter of Aretas, king of Petra, and separating Herodias from her husband while he was still alive.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' It was on her account also that he slew John, and waged war with Aretas, because of the disgrace inflicted on the daughter of the latter. Josephus relates that in this war, when they came to battle, Herod’s entire army was destroyed, and that he suffered this calamity on account of his crime against John.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The same Josephus confesses in this account that John the Baptist was an exceedingly righteous man, and thus agrees with the things written of him in the Gospels. He records also that Herod lost his kingdom on account of the same Herodias, and that he was driven into banishment with her, and condemned to live at Vienne in Gaul.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' He relates these things in the eighteenth book of the Antiquities, where he writes of John in the following words: “It seemed to some of the Jews that the army of Herod was destroyed by God, who most justly avenged John called the Baptist.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For Herod slew him, a good man and one who exhorted the Jews to come and receive baptism, practicing virtue and exercising righteousness toward each other and toward God; for baptism would appear acceptable unto Him when they employed it, not for the remission of certain sins, but for the purification of the body, as the soul had been already purified in righteousness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And when others gathered about him (for they found much pleasure in listening to his words), Herod feared that his great influence might lead to some sedition, for they appeared ready to do whatever he might advise. He therefore considered it much better, before any new thing should be done under John’s influence, to anticipate it by slaying him, than to repent after revolution had come, and when he found himself in the midst of difficulties. On account of Herod’s suspicion John was sent in bonds to the above-mentioned citadel of Machæra, and there slain.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' After relating these things concerning John, he makes mention of our Saviour in the same work, in the following words: “And there lived at that time Jesus, a wise man, if indeed it be proper to call him a man. For he was a doer of wonderful works, and a teacher of such men as receive the truth in gladness. And he attached to himself many of the Jews, and many also of the Greeks. He was the Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' When Pilate, on the accusation of our principal men, condemned him to the cross, those who had loved him in the beginning did not cease loving him. For he appeared unto them again alive on the third day, the divine prophets having told these and countless other wonderful things concerning him. Moreover, the race of Christians, named after him, continues down to the present day.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Since an historian, who is one of the Hebrews themselves, has recorded in his work these things concerning John the Baptist and our Saviour, what excuse is there left for not convicting them of being destitute of all shame, who have forged the acts against them? But let this suffice here.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[11]->title,
      'subtitle' => $metadata->book->chapters[11]->subtitle,
      'id' => $metadata->book->chapters[11]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' The names of the apostles of our Saviour are known to every one from the Gospels. But there exists no catalogue of the seventy disciples. Barnabas, indeed, is said to have been one of them, of whom the Acts of the apostles makes mention in various places, and especially Paul in his Epistle to the Galatians. They say that Sosthenes also, who wrote to the Corinthians with Paul, was one of them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' This is the account of Clement in the fifth book of his Hypotyposes, in which he also says that Cephas was one of the seventy disciples, a man who bore the same name as the apostle Peter, and the one concerning whom Paul says, “When Cephas came to Antioch I withstood him to his face.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Matthias, also, who was numbered with the apostles in the place of Judas, and the one who was honored by being made a candidate with him, are like-wise said to have been deemed worthy of the same calling with the seventy. They say that Thaddeus also was one of them, concerning whom I shall presently relate an account which has come down to us. And upon examination you will find that our Saviour had more than seventy disciples, according to the testimony of Paul, who says that after his resurrection from the dead he appeared first to Cephas, then to the twelve, and after them to above five hundred brethren at once, of whom some had fallen asleep; but the majority were still living at the time he wrote.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Afterwards he says he appeared unto James, who was one of the so-called brethren of the Saviour. But, since in addition to these, there were many others who were called apostles, in imitation of the Twelve, as was Paul himself, he adds: “Afterward he appeared to all the apostles.” So much in regard to these persons. But the story concerning Thaddeus is as follows.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[12]->title,
      'subtitle' => $metadata->book->chapters[12]->subtitle,
      'id' => $metadata->book->chapters[12]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' The divinity of our Lord and Saviour Jesus Christ being noised abroad among all men on account of his wonder-working power, he attracted countless numbers from foreign countries lying far away from Judea, who had the opening of being cured of their diseases and of all kinds of sufferings.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For instance the King Abgarus, who ruled with great glory the nations beyond the Euphrates, being afflicted with a terrible disease which it was beyond the power of human skill to cure, when he heard of the name of Jesus, and of his miracles, which were attested by all with one accord sent a message to him by a courier and begged him to heal his disease.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But he did not at that time comply with his request; yet he deemed him worthy of a personal letter in which he said that he would send one of his disciples to cure his disease, and at the same time promised salvation to himself and all his house.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Not long afterward his promise was fulfilled. For after his resurrection from the dead and his ascent into heaven, Thomas, one of the twelve apostles, under divine impulse sent Thaddeus, who was also numbered among the seventy disciples of Christ, to Edessa, as a preacher and evangelist of the teaching of Christ. And all that our Saviour had promised received through him its fulfillment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' You have written evidence of these things taken from the archives of Edessa, which was at that time a royal city. For in the public registers there, which contain accounts of ancient times and the acts of Abgarus, these things have been found preserved down to the present time. But there is no better way than to hear the epistles themselves which we have taken from the archives and have literally translated from the Syriac language in the following manner.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Copy of an epistle written by Abgarus the ruler to Jesus tend sent to him at Jerusalem by Ananias the swift courier. “Abgarus, ruler Of Edessa, to Jesus the excellent Saviour who has appeared in the country of Jerusalem, greeting. I have heard the reports of thee and of thy cures as performed by thee without medicines or herbs. For it is said that thou makest the blind to see and the lame to walk, that thou cleansest lepers and castest out impure spirits and demons, and that thou healest those afflicted with lingering disease, and raisest the dead.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And having heard all these things concerning thee, I have concluded that one of two things must be true: either thou art God, and having come down from heaven thou doest these things, or else thou, who doest these things, art the Son of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' I have therefore written to thee to ask thee that thou wouldest take the trouble to come to me and heal the disease which I have. For I have heard that the Jews are murmuring against thee and are plotting to injure thee. But I have a very small yet noble city which is great enough for us both.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' The answer of Jesus to the ruler Abgarus by the courier Ananias. “Blessed art thou who hast believed in me without having seen me. For it is written concerning me, that they who have seen me will not believe in me, and that they who have not seen me will believe and be saved. But in regard to what thou hast written me, that I should come to thee, it is necessary for me to fulfill all things here for which I have been sent, and after I have fulfilled them thus to be taken up again to him that sent me. But after I have been taken up I will send to thee one of my disciples, that he may heal thy disease and give life to thee and thine.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' To these epistles there was added the following account in the Syriac language. “After the ascension of Jesus, Judas, who was also called Thomas, sent to him Thaddeus, an apostle, one of the Seventy. When he was come he lodged with Tobias, the son of Tobias. When the report of him got abroad, it was told Abgarus that an apostle of Jesus was come, as he had written him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Thaddeus began then in the power of God to heal every disease and infirmity, insomuch that all wondered. And when Abgarus heard of the great and wonderful things which he did and of the cures which he performed, he began to suspect that he was the one of whom Jesus had written him, saying, ‘After I have been taken up I will send to thee one of my disciples who will heal thee.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Therefore, summoning Tobias, with whom Thaddeus lodged, he said, I have heard that a certain man of power has come and is lodging in thy house. Bring him to me. And Tobias coming to Thaddeus said to him, The ruler Abgarus summoned me and told me to bring thee to him that thou mightest heal him. And Thaddeus said, I will go, for I have been sent to him with power.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Tobias therefore arose early on the following day, and taking Thaddeus came to Abgarus. And when he came, the nobles were present and stood about Abgarus. And immediately upon his entrance a great vision appeared to Abgarus in the countenance of the apostle Thaddeus. When Abgarus saw it he prostrated himself before Thaddeus, while all those who stood about were astonished; for they did not see the vision, which appeared to Abgarus alone.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' He then asked Thaddeus if he were in truth a disciple of Jesus the Son of God, who had said to him, ‘I will send thee one of my disciples, who shall heal thee and give thee life.’ And Thaddeus said, Because thou hast mightily believed in him that sent me, therefore have I been sent unto thee. And still further, if thou believest in him, the petitions of thy heart shall be granted thee as thou believest.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' And Abgarus said to him, So much have I believed in him that I wished to take an army and destroy those Jews who crucified him, had I not been deterred from it by reason of the dominion of the Romans. And Thaddeus said, Our Lord has fulfilled the will of his Father, and having fulfilled it has been taken up to his Father. And Abgarus said to him, I too have believed in him and in his Father.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' And Thaddeus said to him, Therefore I place my hand upon thee in his name. And when he had done it, immediately Abgarus was cured of the disease and of the suffering which he had.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' And Abgarus marvelled, that as he had heard concerning Jesus, so he had received in very deed through his disciple Thaddeus, who healed him without medicines and herbs, and not only him, but also Abdus the son of Abdus, who was afflicted with the gout; for he too came to him and fell at his feet, and having received a benediction by the imposition of his hands, he was healed. The same Thaddeus cured also many other inhabitants of the city, and did wonders and marvelous works, and preached the word of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' And afterward Abgarus said, Thou, O Thaddeus, doest these things with the power of God, and we marvel. But, in addition to these things, I pray thee to inform me in regard to the coming of Jesus, how he was born; and in regard to his power, by what power he performed those deeds of which I have heard.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' And Thaddeus said, Now indeed will I keep silence, since I have been sent to proclaim the word publicly. But tomorrow assemble for me all thy citizens, and I will preach in their presence and sow among them the word of God, concerning the coming of Jesus, how he was born; and concerning his mission, for what purpose he was sent by the Father; and concerning the power of his works, and the mysteries which he proclaimed in the world, and by what power he did these things; and concerning his new preaching, and his abasement and humiliation, and how he humbled himself, and died and debased his divinity and was crucified, and descended into Hades, and burst the bars which from eternity had not been broken, and raised the dead; for he descended alone, but rose with many, and thus ascended to his Father.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' Abgarus therefore commanded the citizens to assemble early in the morning to hear the preaching of Thaddeus, and afterward he ordered gold and silver to be given him. But he refused to take it, saying, If we have forsaken that which was our own, how shall we take that which is another’s? These things were done in the three hundred and fortieth year.” I have inserted them here in their proper place, translated from the Syriac literally, and I hope to good purpose.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
