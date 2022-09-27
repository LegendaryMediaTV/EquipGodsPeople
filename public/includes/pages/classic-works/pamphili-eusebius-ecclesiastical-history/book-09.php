<?php
$html->add(new BS_Banner(
  null,

  'Book nine of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering more persecutions, martyrdoms, and relief'
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
      ' The imperial edict of recantation, which has been quoted above, was posted in all parts of Asia and in the adjoining provinces. After this had been done, Maximinus, the tyrant in the East—a most impious man, if there ever was one, and most hostile to the religion of the God of the universe—being by no means satisfied with its contents, instead of sending the above-quoted decree to the governors under him, gave them verbal commands to relax the war against us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For since he could not in any other way oppose the decision of his superiors, keeping the law which had been already issued secret, and taking care that it might not be made known in the district under him, he gave an unwritten order to his governors that they should relax the persecution against us. They communicated the command to each other in writing.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Sabinus, at least, who was honored with the highest official rank among them, communicated the will of the emperor to the provincial governors in a Latin epistle, the translation of which is as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “With continuous and most devoted earnestness their Majesties, our most divine masters, the emperors, formerly directed the minds of all men to follow the holy and correct course of life, that those also who seemed to live in a manner foreign to that of the Romans, should render the worship due to the immortal gods. But the obstinacy and most unconquerable determination of some went so far that they could neither be turned back from their purpose by the just reason of the command, nor be intimidated by the impending punishment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Since therefore it has come to pass that by such conduct many have brought themselves into danger, their Majesties, our most powerful masters, the emperors, in the exalted nobility of piety, esteeming it foreign to their Majesties’ purpose to bring men into so great danger for such a cause, have commanded their devoted servant, myself, to write to thy wisdom, that if any Christian be found engaging in the worship of his own people, thou shouldst abstain from molesting and endangering him, and shouldst not suppose it necessary to punish any one on this pretext. For it has been proved by the experience of so long a time that they can in no way be persuaded to abandon such obstinate conduct.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Therefore it should be thy care to write to the curators and magistrates and district overseers of every city, that they may know that it is not necessary for them to give further attention to this matter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Thereupon the rulers of the provinces, thinking that the purpose of the things which were written was truly made known to them, declared the imperial will to the curators and magistrates and prefects of the various districts in writing. But they did not limit themselves to writing, but sought more quickly to accomplish the supposed will of the emperor in deeds also. Those whom they had imprisoned on account of their confession of the Deity, they set at liberty, and they released those of them who had been sent to the mines for punishment; for they erroneously supposed that this was the true will of the emperor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And when these things had thus been done, immediately, like a light shining forth in a dark night, one could see in every city congregations gathered and assemblies thronged, and meetings held according to their custom. And every one of the unbelieving heathen was not a little astonished at these things, wondering at so marvelous a transformation, and exclaiming that the God of the Christians was great and alone true.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And some of our people, who had faithfully and bravely sustained the conflict of persecution, again became frank and bold toward all; but as many as had been diseased in the faith and had been shaken in their souls by the tempest, strove eagerly for healing, beseeching and imploring the strong to stretch out to them a saving hand, and supplicating God to be merciful unto them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Then also the noble athletes of religion who had been set free from their sufferings in the mines returned to their own homes. Happily and joyfully they passed through every city, full of unspeakable pleasure and of a boldness which cannot be expressed in words.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Great crowds of men pursued their journey along the highways and through the market-places, praising God with hymns and psalms. And you might have seen those who a little while before had been driven in bonds from their native countries under a most cruel sentence, returning with bright and joyful faces to their own firesides; so that even they who had formerly thirsted for our blood, when they saw the unexpected wonder, congratulated us on what had taken place.',
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
      ' But the tyrant who, as we have said, ruled over the districts of the Orient, a thorough hater of the good and an enemy of every virtuous person, as he was, could no longer bear this; and indeed he did not permit matters to go on in this way quite six months. Devising all possible means of destroying the peace, he first attempted to restrain us, under a pretext, from meeting in the cemeteries.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Then through the agency of some wicked men he sent an embassy to himself against us, inciting the citizens of Antioch to ask from him as a very great favor that he would by no means permit any of the Christians to dwell in their country; and others were secretly induced to do the same thing. The author of all this in Antioch was Theotecnus, a violent and wicked man, who was an impostor, and whose character was foreign to his name. He appears to have been the curator of the city.',
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
      ' After this man had carried on all kinds of war against us and had caused our people to be diligently hunted up in their retreats, as if they were unholy thieves, and had devised every sort of slander and accusation against us, and become the cause of death to vast numbers, he finally erected a statue of Jupiter Philius with certain juggleries and magic rites. And after inventing unholy forms of initiation and ill-omened mysteries in connection with it, and abominable means of purification, he exhibited his jugglery, by oracles which he pretended to utter, even to the emperor; and through a flattery which was pleasing to the ruler he aroused the demon against the Christians and said that the god had given command to expel the Christians as his enemies beyond the confines of the city and the neighboring districts.',
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
      ' The fact that this man, who took the lead in this matter, had succeeded in his purpose was an incitement to all the other officials in the cities under the same government to prepare a similar memorial. And the governors of the provinces perceiving that this was agreeable to the emperor suggested to their subjects that they should do the same.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And as the tyrant by a rescript declared himself well pleased with their measures, persecution was kindled anew against us. Priests for the images were then appointed in the cities, and besides them high priests by Maximinus himself. The latter were taken from among those who were most distinguished in public life and had gained celebrity in all the offices which they had filled; and who were imbued, moreover, with great zeal for the service of those whom they worshiped.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Indeed, the extraordinary superstition of the emperor, to speak in brief, led all his subjects, both rulers and private citizens, for the sake of gratifying him, to do everything against us, supposing that they could best show their gratitude to him for the benefits which they had received from him, by plotting murder against us and exhibiting toward us any new signs of malignity.',
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
      ' Having therefore forged Acts of Pilate and our Saviour full of every kind of blasphemy against Christ, they sent them with the emperor’s approval to the whole of the empire subject to him, with written commands that they should be openly posted to the view of all in every place, both in country and city, and that the schoolmasters should give them to their scholars, instead of their customary lessons, to be studied and learned by heart.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' While these things were taking place, another military commander, whom the Romans call Dux, seized some infamous women in the market-place at Damascus in Phœnicia, and by threatening to inflict tortures upon them compelled them to make a written declaration that they had once been Christians and that they were acquainted with their impious deeds—that in their very churches they committed licentious acts; and they uttered as many other slanders against our religion as he wished them to. Having taken down their words in writing, he communicated them to the emperor, who commanded that these documents also should be published in every place and city.',
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
      ' Not long afterward, however, this military commander became his own murderer and paid the penalty for his wickedness. But we were obliged again to endure exile and severe persecutions, and the governors in every province were once more terribly stirred up against us; so that even some of those illustrious in the Divine Word were seized and had sentence of death pronounced upon them without mercy. Three of them in the city of Emesa in Phœnicia, having confessed that they were Christians, were thrown as food to the wild beasts. Among them was a bishop Silvanus, a very old man, who had filled his office full forty years.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' At about the same time Peter also, who presided most illustriously over the parishes in Alexandria, a divine example of a bishop on account of the excellence of his life and his study of the sacred Scriptures, being seized for no cause and quite unexpectedly, was, as if by command of Maxi-minus, immediately and without explanation, beheaded. With him also many other bishops of Egypt suffered the same fate.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And Lucian, a presbyter of the parish at Antioch, and a most excellent man in every respect, temperate in life and famed for his learning in sacred things, was brought to the city of Nicomedia, where at that time the emperor happened to be staying, and after delivering before the ruler an apology for the doctrine which he professed, was committed to prison and put to death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Such trials were brought upon us in a brief time by Maximinus, the enemy of virtue, so that this persecution which was stirred up against us seemed far more cruel than the former.',
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
      ' The memorials against us and copies of the imperial edicts issued in reply to them were engraved and set up on brazen pillars in the midst of the cities,—a course which had never been followed elsewhere. The children in the schools had daily in their mouths the names of Jesus and Pilate, and the Acts which had been forged in wanton insolence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' It appears to me necessary to insert here this document of Maximinus which was posted on pillars, in order that there may be made manifest at the same time the boastful and haughty arrogance of the God-hating man, and the sleepless evil-hating divine vengeance upon the impious, which followed close upon him, and under whose pressure he not long afterward took the opposite course in respect to us and confirmed it by written laws. The rescript is in the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Copy of a translation of the rescript of Maximinus in answer to the memorials against us, taken from the pillar in Tyre. “Now at length the feeble power of the human mind has become able to shake off and to scatter every dark mist of error, which before this besieged the senses of men, who were more miserable than impious, and enveloped them in dark and destructive ignorance; and to perceive that it is governed and established by the beneficent providence of the immortal gods.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' It passes belief how grateful, how pleasing and how agreeable it is to us, that you have given a most decided proof of your pious resolution; for even before this it was known to every one how much regard and reverence you were paying to the immortal gods, exhibiting not a faith of bare and empty words, but continued and wonderful exampies of illustrious deeds.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Wherefore your city may justly be called a seat and dwelling of the immortal gods. At least, it appears by many signs that it flourishes because of the presence of the celestial gods.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Behold, therefore, your city, regardless of all private advantages, and omitting its former petitions in its own behalf, when it perceived that the adherents of that execrable vanity were again beginning to spread, and to start the greatest conflagration—like a neglected and extinguished funeral pile when its brands are rekindled,—immediately resorted to our piety as to a metropolis of all religiousness, asking some remedy and aid.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' It is evident that the gods have given you this saving mind on account of your faith and piety. “Accordingly that supreme and mightiest Jove, who presides over your illustrious city, who preserves your ancestral gods, your wives and children, your hearths and homes from every destructive pest, has infused into your souls this wholesome resolve; showing and proving how excellent and glorious and salutary it is to observe with the becoming reverence the worship and sacred rites of the immortal gods.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' For who can be found so ignorant or so devoid of all understanding as not to perceive that it is due to the kindly care of the gods that the earth does not refuse the seed sown in it, nor disappoint the hope of the husbandmen with vain expectation; that impious war is not inevitably fixed upon earth, and wasted bodies dragged down to death under the influence of a corrupted atmosphere; that the sea is not swollen and raised on high by blasts of intemperate winds; that unexpected hurricanes do not burst forth and stir up the destructive tempest; moreover, that the earth, the nourisher and mother of all, is not shaken from its lowest depths with a terrible tremor, and that the mountains upon it do not sink into the opening chasms. No one is ignorant that all these, and evils still worse than these, have oftentimes happened hitherto.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And all these misfortunes have taken place on account of the destructive error of the empty vanity of those impious men, when it prevailed in their souls, and, we may almost say, weighed down the whole world with shame.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' After other words he adds: “Let them look at the standing crops already flourishing with waving heads in the broad fields, and at the meadows glittering with plants and flowers, in response to abundant rains and the restored mildness and softness of the atmosphere.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Finally, let all rejoice that the might of the most powerful and terrible Mars has been propitiated by our piety, our sacrifices, and our veneration; and let them on this account enjoy firm and tranquil peace and quiet; and let as many as have wholly abandoned that blind error and delusion and have returned to a right and sound mind rejoice the more, as those who have been rescued from an unexpected storm or severe disease and are to reap the fruits of I pleasure for the rest of their life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But if they still persist in their execrable vanity, let them, as you have desired, be driven far away from your city and territory, that thus, in accordance with your praiseworthy zeal in this matter, your city, being freed from every pollution and impiety, may, according to its native disposition, attend to the sacred rites of the immortal gods with becoming reverence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But that ye may know how acceptable to us your request respecting this matter has been, and how ready our mind is to confer benefits voluntarily, without memorials and petitions, we permit your devotion to ask whatever great gift ye may desire in return for this your pious disposition.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And now ask that this may be done and that ye may receive it; for ye shall obtain it without delay. This, being granted to your city, shall furnish for all time an evidence of reverent piety toward the immortal gods, and of the fact that you have obtained from our benevolence merited prizes for this choice of yours; and it shall be shown to your children and children’s children.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' This was published against us in all the provinces, depriving us of every hope of good, at least from men; so that, according to that divine utterance, “If it were possible, even the elect would have stumbled” at these things.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' And now indeed, when the hope of most of us was almost extinct, suddenly while those who were to execute against us the above decree had in some places scarcely finished their journey, God, the defender of his own Church, exhibited his heavenly interposition in our behalf, well-nigh stopping the tyrant’s boasting against us.',
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
      ' The customary rains and showers of the winter season ceased to fall in their wonted abundance upon the earth and an unexpected famine made its appearance, and in addition to this a pestilence, and another severe disease consisting of an ulcer, which on account of its fiery appearance was appropriately called a carbuncle. This, spreading over the whole body, greatly endangered the lives of those who suffered from it; but as it chiefly attacked the eyes, it deprived multitudes of men, women, and children of their sight.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In addition to this the tyrant was compelled to go to war with the Armenians, who had been from ancient times friends and allies of the Romans. As they were also Christians and zealous in their piety toward the Deity, the enemy of God had attempted to compel them to sacrifice to idols and demons, and had thus made friends foes, and allies enemies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' All these things suddenly took place at one and the same time, and refuted the tyrant’s empty vaunt against the Deity. For he had boasted that, because of his zeal for idols and his hostility against us, neither famine nor pestilence nor war had happened in his time. These things, therefore, coming upon him at once and together, furnished a prelude also of his own destruction.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' He himself with his forces was defeated in the war with the Armenians, and the rest of the inhabitants of the cities under him were terribly afflicted with famine and pestilence, so that one measure of wheat was sold for twenty-five hundred Attic drachms.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Those who died in the cities were innumerable, and those who died in the country and villages were still more. So that the tax lists which formerly included a great rural population were almost entirely wiped out; nearly all being speedily destroyed by famine and pestilence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Some, therefore, desired to dispose of their most precious things to those who were better supplied, in return for the smallest morsel of food, and others, selling their possessions little by little, fell into the last extremity of want. Some, chewing wisps of hay and recklessly eating noxious herbs, undermined and mined their constitutions.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And some of the high-born women in the cities, driven by want to shameful extremities, went forth into the market-places to beg, giving evidence of their former liberal culture by the modesty of their appearance and the decency of their apparel.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Some, wasted away like ghosts and at the very point of death, stumbled and tottered here and there, and too weak to stand fell down in the middle of the streets; lying stretched out at full length they begged that a small morsel of food might be given them, and with their last gasp they cried out Hunger! having strength only for this most painful cry.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But others, who seemed to be better supplied, astonished at the multitude of the beggars, after giving away large quantities, finally became hard and relentless, expecting that they themselves also would soon suffer the same calamities as those who begged. So that in the midst of the market-places and lanes, dead and naked bodies lay unburied for many days, presenting the most lamentable spectacle to those that beheld them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Some also became food for dogs, on which account the survivors began to kill the dogs, lest they should become mad and should go to devouring men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' But still worse was the pestilence which consumed entire houses and families, and especially those whom the famine was not able to destroy because of their abundance of food. Thus men of wealth, rulers and governors and multitudes in office, as if left by the famine on purpose for the pestilence, suffered swift and speedy death. Every place therefore was full of lamentation; in every lane and market-place and street there was nothing else to be seen or heard than tears, with the customary instruments and the voices of the mourners.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' In this way death, waging war with these two weapons, pestilence and famine, destroyed whole families in a short time, so that one could see two or three dead bodies carried out at once. Such were the rewards of the boasting of Maximinus and of the measures of the cities against us. Then did the evidences of the universal zeal and piety of the Christians become manifest to all the heathen.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' For they alone in the midst of such ills showed their sympathy and humanity by their deeds. Every day some continued caring for and burying the dead, for there were multitudes who had no one to care for them; others collected in one place those who were afflicted by the famine, throughout the entire city, and gave bread to them all; so that the thing became noised abroad among all men, and they glorified the God of the Christians; and, convinced by the facts themselves, confessed that they alone were truly pious and religious.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' After these things were thus done, God, the great and celestial defender of the Christians, having revealed in the events which have been described his anger and indignation at all men for the great evils which they had brought upon us, restored to us the bright and gracious sunlight of his providence in our behalf; so that in the deepest darkness a light of peace shone most wonderfully upon us from him, and made it manifest to all that God himself has always been the ruler of our affairs. From time to time indeed he chastens his people and corrects them by his visitations, but again after sufficient chastisement he shows mercy and favor to those who hope in him.',
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
      ' Thus when Constantine, whom we have already mentioned as an emperor, born of an emperor, a pious son of a most pious and prudent father, and Licinius, second to him,—two God-beloved emperors, honored alike for their intelligence and their piety—being stirred up against the two most impious tyrants by God, the absolute Ruler and Saviour of all, engaged in formal war against them, with God as their ally, Maxentius was defeated at Rome by Constantine in a remarkable manner, and the tyrant of the East did not long survive him, but met a most shameful death at the hand of Licinius, who had not yet become insane.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Constantine, who was the superior both in dignity and imperial rank, first took compassion upon those who were oppressed at Rome, and having invoked in prayer the God of heaven, and his Word, and Jesus Christ himself, the Saviour of all, as his aid, advanced with his Whole army, proposing to restore to the Romans their ancestral liberty.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But Maxentius, putting confidence rather in the arts of sorcery than in the devotion of his subjects, did not dare to go forth beyond the gates of the city, but fortified every place and district and town which was enslaved by him, in the neighborhood of Rome and in all Italy, with an immense multi-rude of troops and with innumerable bands of soldiers. But the emperor, relying upon the assistance of God, attacked the first, second, and third army of the tyrant, and conquered them all; and having advanced through the greater part of Italy, was already very near Rome.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Then, that he might not be compelled to wage war with the Romans for the sake of the tyrant, God himself drew the latter, as if bound in chains, some distance without the gates, and confirmed those threats against the impious which had been anciently inscribed in sacred books—disbelieved, indeed, by most as a myth, but believed by the faithful—confirmed them, in a word, by the deed itself to all, both believers and unbelievers, that saw the wonder with their eyes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Thus, as in the time of Moses himself and of the ancient God-beloved race of Hebrews, “he cast Pharaoh’s chariots and host into the sea, and overwhelmed his chosen charioteers in the Red Sea, and covered them with the flood,” in the same way Maxentius also with his soldiers and body-guards “went down into the depths like a stone,” when he fled before the power of God which was with Constantine, and passed through the river which lay in his way, over which he had formed a bridge with boats, and thus prepared the means of his own destruction.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' In regard to him one might say, “he digged a pit and opened it and fell into the hole which he had made; his labor shall turn upon his own head, and his unrighteousness shall fall upon his own crown.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Thus, then, the bridge over the river being broken, the passageway settled down, and immediately the boats with the men disappeared in the depths, and that most impious one himself first of all, then the shield-bearers who were with him, as the divine oracles foretold, “sank like lead in the mighty waters”;',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' so that those who obtained the victory from God, if not in words, at least in deeds, like Moses, the great servant of God, and those who were with him, fittingly sang as they had sung against the impious tyrant of old, saying, “Let us sing unto the Lord, for he hath gloriously glorified himself; horse and rider hath he thrown into the sea; a helper and a protector hath he become for my salvation;” and “Who is like unto thee, O Lord; among the gods, who is like unto thee? glorious in holiness, marvelous in glory, doing wonders.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' These and the like praises Constantine, by his very deeds, sang to God, the universal Ruler, and Author of his victory, as he entered Rome in triumph. Immediately all the members of the senate and the other most celebrated men, with the whole Roman people, together with children and women, received him as their deliverer, their saviour, and their benefactor, with shining eyes and with their whole souls, with shouts of gladness and unbounded joy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' But he, as one possessed of inborn piety toward God, did not exult in the shouts, nor was he elated by the praises; but perceiving that his aid was from God, he immediately commanded that a trophy of the Saviour’s passion be put in the hand of his own statue. And when he had placed it, with the saving sign of the cross in its right hand, in the most public place in Rome, he commanded that the following inscription should be engraved upon it in the Roman tongue:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' “By this salutary sign, the true proof of bravery, I have saved and freed your city from the yoke of the tyrant and moreover, having set at liberty both the senate and the people of Rome, I have restored them to their ancient distinction and splendor.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And after this both Constantine himself and with him the Emperor Licinius, who had not yet been seized by that madness into which he later fell, praising God as the author of all their blessings, with one will and mind drew up a full and most complete decree in behalf of the Christians, and sent an account of the wonderful things done for them by God, and of the victory over the tyrant, together with a copy of the decree itself, to Maximinus, who still ruled over the nations of the East and pretended friendship toward them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But he, like a tyrant, was greatly pained by what he learned; but not wishing to seem to yield to others, nor, on the other hand, to suppress that which was commanded, for fear of those who enjoined it, as if on his own authority, he addressed, under compulsion, to the governors under him this first communication in behalf of the Christians, falsely inventing things against himself which had never been done by him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' Copy of a translation of the epistle of the tyrant Maximinus. “Jovius Maximinus Augustus to Sabinus. I am confident that it is manifest both to thy firmness and to all men that our masters Diocletian and Maximianus, our fathers, when they saw almost all men abandoning the worship of the gods and attaching themselves to the party of the Christians, rightly decreed that all who gave up the worship of those same immortal gods should be recalled by open chastisement and punishment to the worship of the gods.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' But when I first came to the East under favorable auspices and learned that in some places a great many men who were able to render public service had been banished by the judges for the above-mentioned cause, I gave command to each of the judges that henceforth none of them should treat the provincials with severity, but that they should rather recall them to the worship of the gods by flattery and exhortations.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' Then when, in accordance with my command, these orders were obeyed by the judges, it came to pass that none of those who lived in the districts of the East were banished or insulted, but that they were rather brought back to the worship of the gods by the fact that no severity was employed toward them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But afterwards, when I went up last year under good auspices to Nicomedia and sojourned there, citizens of the same city came to me with the images of the gods, earnestly entreating that such a people should by no means be permitted to dwell in their country.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' But when I learned that many men of the same religion dwelt in those regions, I replied that I gladly thanked them for their request, but that I perceived that it was not proffered by all, and that if, therefore, there were any that persevered in the same superstition, each one had the privilege of doing as he pleased, even if he wished to recognize the worship of the gods.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' Nevertheless, I considered it necessary to give a friendly answer to the inhabitants of Nicomedia and to the other cities which had so earnestly presented to me the same petition, namely, that no Christians should dwell in their cities—both because this same course had been pursued by all the ancient emperors, and also because it was pleasing to the gods, through whom all men and the government of the state itself endure—and to confirm the request which they presented in behalf of the worship of their deity.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' Therefore, although before this time, special letters have been sent to thy devotedness, and commands have likewise been given that no harsh measures should be taken against those provincials who desire to follow such a course, but that they should be treated mildly and moderately—nevertheless, in order that they may not suffer insults or extortions from the beneficiaries, or from any others, I have thought meet to remind thy firmness in this epistle also that thou shouldst lead our provincials rather by flatteries and exhortations to recognize the care of the gods.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' Hence, ‘if any one of his own choice should decide to adopt the worship of the gods, it is fitting that he should be welcomed, but if any should wish to follow their own religion, do thou leave it in their power.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' Wherefore it behooves thy devotedness to observe that which is committed to thee, and to see that power is given to no one to oppress our provincials with insults and extortions, since, as already written, it is fitting to recall our provincials to the worship of the gods rather by exhortations and flatteries. But, in order that this command of ours may come to the knowledge of all our provincials, it is incumbent upon thee to proclaim that which has been enjoined, in an edict issued by thyself.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' Since he was forced to do this by necessity and did not give the command by his own will, he was not regarded by any one as sincere or trustworthy, because he had already shown his unstable and deceitful disposition after his former similar concession.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' None of our people, therefore, ventured to hold meetings or even to appear in public, because his communication did not cover this, but only commanded to guard against doing us any injury, and did not give orders that we should hold meetings or build churches or perform any of our customary acts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' And yet Constantine and Licinius, the advocates of peace and piety, had written him to permit this, and had granted it to all their subjects by edicts and ordinances. But this most impious man did not choose to yield in this matter until, being driven by the divine judgment, he was at last compelled to do it against his will.',
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
      ' The circumstances which drove him to this course were the following. Being no longer able to sustain the magnitude of the government which had been undeservedly committed to him, in consequence of his want of prudence and imperial understanding, he managed affairs in a base manner, and with his mind unreasonably exalted in all things with boastful pride, even toward his colleagues in the empire who were in every respect his superiors, in birth, in training, in education, in worth and intelligence, and, greatest of all, in temperance and piety toward the true God, he began to venture to act audaciously and to arrogate to himself the first rank.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Becoming mad in his folly, he broke the treaties which he had made with Licinius and undertook an implacable war. Then in a brief time he threw all things into confusion, and stirred up every city, and having collected his entire force, comprising an immense number of soldiers, he went forth to battle with him, elated by his hopes in demons, whom he supposed to be gods, and by the number of his soldiers.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And when he joined battle he was deprived of the oversight of God, and the victory was given to Licinius, who was then ruling, by the one and only God of all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' First, the army in which he trusted was destroyed, and as all his guards abandoned him and left him alone, and fled to the victor, he secretly divested himself as quickly as possible of the imperial garments, which did not fitly belong to him, and in a cowardly and ignoble and unmanly way mingled with the crowd, and then fled, concealing himself in fields and villages. But though he was so careful for his safety, he scarcely escaped the hands of his enemies, revealing by his deeds that the divine oracles are faithful and true, in which it is said,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' “A king is not saved by a great force, and a giant shall not be saved by the greatness of his strength; a horse is a vain thing for safety, nor shall he be delivered by the greatness of his power. Behold, the eyes of the Lord are upon them that fear him, upon them that hope in his mercy, to deliver their souls from death.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Thus the tyrant, covered with shame, went to his own country. And first, in frantic rage, he slew many priests and prophets of the gods whom he had formerly admired, and whose oracles had incited him to undertake the war, as sorcerers and impostors, and besides all as betrayers of his safety. Then having given glory to the God of the Christians and enacted a most full and complete ordinance in behalf of their liberty, he was immediately seized with a mortal disease, and no respite being granted him, departed this life. The law enacted by him was as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Copy of the edict of the tyrant in behalf of the Christians, translated from the man tongue. “The Emperor Cæsar Caius Valerius Maximinus, Germanicus, Sarmaticus, Plus, Felix, Invictus, Augustus. We believe it manifest that no one is ignorant, but that every man who looks back over the past knows and is conscious that in every way we care continually for the good of our provincials, and wish to furnish them with those things which are of especial advantage to all, and for the common benefit and profit, and whatever contributes to the public welfare and is agreeable to the views of each.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' When, therefore, before this, it became clear to our mind that under pretext of the command of our parents, the most divine Diocletian and Maximianus, which enjoined that the meetings of the Christians should be abolished, many extortions and spoliations had been practiced by officials; and that those evils were continually increasing, to the detriment of our provincials toward whom we are especially anxious to exercise proper care, and that their possessions were in consequence perishing, letters were sent last year to the governors of each province, in which we decreed that, if any one wished to follow such a practice or to observe this same religion, he should be permitted without hindrance to pursue his purpose and should be impeded and prevented by no one, and that all should have liberty to do without any fear or suspicion that which each preferred.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But even now we cannot help perceiving that some of the judges have mistaken our commands, and have given our people reason to doubt the meaning of our ordinances, and have caused them to proceed too reluctantly to the observance of those religious rites which are pleasing to them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' In order, therefore, that in the future every suspicion of fearful doubt may be taken away, we have commanded that this decree be published, so that it may be clear to all that whoever wishes to embrace this sect and religion is permitted to do so by virtue of this grant of ours; and that each one, as he wishes or as is pleasing to him, is permitted to practice this religion which he has chosen to observe according to his custom. It is also granted them to build Lord’s houses.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' But that this grant of ours may be the greater, we have thought good to decree also that if any houses and lands before this time rightfully belonged to the Christians, and by the command of our parents fell into the treasury, or were confiscated by any city—whether they have been sold or presented to any one as a gift—that all these should be restored to their original possessors, the Christians, in order that in this also every one may have knowledge of our piety and care.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' These are the words of the tyrant which were published not quite a year after the decrees against the Christians engraved by him on pillars. And by him to whom a little before we seemed impious wretches and atheists and destroyers of all life, so that we were not permitted to dwell in any city nor even in country or desert—by him decrees and ordinances were issued in behalf of the Christians, and they who recently had been destroyed by fire and sword, by wild beasts and birds of prey, in the presence of the tyrant himself, and had suffered every species of torture and punishment, and most miserable deaths as atheists and impious wretches, were now acknowledged by him as possessors of religion and were permitted to build churches; and the tyrant himself bore witness and confessed that they had some rights.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And having made such confessions, as if he had received some benefit on account of them, he suffered perhaps less than he ought to have suffered, and being smitten by a sudden scourge of God, he perished in the second campaign of the war.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But his end was not like that of military chieftains who, while fighting bravely in battle for virtue and friends, often boldly encounter a glorious death; for like an impious enemy of God, while his army was still drawn up in the field, remaining at home and concealing himself, he suffered the punishment which he deserved. For he was smitten with a sudden scourge of God in his whole body, and harassed by terrible pains and torments, he fell prostrate on the ground, wasted by hunger, while all his flesh was dissolved by an invisible and God-sent fire, so that the whole appearance of his frame was changed, and there was left only a kind of image wasted away by length of time to a skeleton of dry bones; so that those who were present could think of his body as nothing else than the tomb of his soul, which was buried in a body already dead and completely melted away.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' And as the heat still more violently consumed him in the depths of his marrow, his eyes burst forth, and falling from their sockets left him blind. Thereupon still breathing and making free confession to the Lord, he invoked death, and at last, after acknowledging that he justly suffered these things on account of his violence against Christ, he gave up the ghost.',
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
      ' Thus when Maximinus, who alone had remained of the enemies of religion and had appeared the worst of them all, was put out of the way, the renovation of the churches from their foundations was begun by the grace of God the Ruler of all, and the word of Christ. shining unto the glory of the God of the universe, obtained greater freedom than before, while the impious enemies of religion were covered with extremest shame and dishonor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For Maximinus himself, being first pronounced by the emperors a common enemy, was declared by public proclamations to be a most impious, execrable, and God-hating tyrant. And of the portraits which had been set up in every city in honor of him or of his children, some were thrown down from their places to the ground, and torn in pieces; while the faces of others were obliterated by daubing them with black paint. And the statues which had been erected to his honor were likewise overthrown and broken, and lay exposed to the laughter and sport of those who wished to insult and abuse them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Then also all the honors of the other enemies of religion were taken away, and all those who sided with Maximinus were slain, especially those who had been honored by him with high offices in reward for their flattery, and had behaved insolently toward our doctrine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Such an one was Peucetius, the dearest of his companions, who had been honored and rewarded by him above all, who had been consul a second and third time, and had been appointed by him chief minister; and Culcianus, who had likewise advanced through every grade of office, and was also celebrated for his numberless executions of Christians in Egypt; and besides these not a few others, by whose agency especially the tyranny of Maximinus had been confirmed and extended.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And Theotecnus also was summoned by justice which by no means overlooked his deeds against the Christians. For when the statue had been set up by him at Antioch, he appeared to be in the happiest state, and was already made a governor by Maximinus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But Licinius, coming down to the city of Antioch, made a search for impostors, and tortured the prophets and priests of the newly erected statue, asking them for what reason they practiced their deception. They, under the stress of torture, were unable longer to conceal the matter, and declared that the whole deceptive mystery had been devised by the art of Theotecnus. Therefore, after meting out to all of them just judgment, he first put Theotecnus himself to death, and then his confederates in the imposture, with the severest possible tortures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' To all these were added also the children of Maximinus, whom he had already made sharers in the imperial dignity, by placing their names on tablets and statues. And the relatives of the tyrant, who before had been boastful and had in their pride oppressed all men, suffered the same punishments with those who have been already mentioned, as well as the extremest disgrace. For they had not received instruction, neither did they know and understand the exhortation given in the Holy Word:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' “Put not your trust in princes, nor in the sons of men, in whom there is no salvation; his spirit shall go forth and return to his earth; in that day all their thoughts perish.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' The impious ones having been thus removed, the government was preserved firm and undisputed for Constantine and Licinius, to whom it fittingly belonged. They, having first of all cleansed the world of hostility to the Divine Being, conscious of the benefits which he had conferred upon them, showed their love of virtue and of God, and their piety and gratitude to the Deity, by their ordinance in behalf of the Christians.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
