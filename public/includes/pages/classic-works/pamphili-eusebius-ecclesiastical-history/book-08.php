<?php
$html->add(new BS_Banner(
  null,

  'Book eight of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering many persecutions across the land'
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
      ' As we have described in seven books the events from the time of the apostles, we think it proper in this eighth book to record for the information of posterity a few of the most important occurrences of our own times, which are worthy of permanent record. Our account will begin at this point.',
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
      ' It is beyond our ability to describe in a suitable manner the extent and nature of the glory and freedom with which the word of piety toward the God of the universe, proclaimed to the world through Christ, was honored among all men, both Greeks and barbarians, before the persecution in our day.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The favor shown our people by the rulers might be adduced as evidence; as they committed to them the government of provinces, and on account of the great friendship which they entertained toward their doctrine, released them from anxiety in regard to sacrificing.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Why need I speak of those in the royal palaces, and of the rulers over all, who allowed the members of their households, wives and children and servants, to speak openly before them for the Divine word and life, and suffered them almost to boast of the freedom of their faith? Indeed they esteemed them highly, and preferred them to their fellow-servants.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Such an one was that Dorotheus, the most devoted and faithful to them of all, and on this account especially honored by them among those who held the most honorable offices and governments. With him was the celebrated Gorgonius, and as many as had been esteemed worthy of the same distinction on account of the word of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And one could see the rulers in every church accorded the greatest favor by all officers and governors. But how can any one describe those vast assemblies, and the multitude that crowded together in every city, and the famous gatherings in the houses of prayer; on whose account not being satisfied with the ancient buildings they erected from the foundation large churches in all the cities?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' No envy hindered the progress of these affairs which advanced gradually, and grew and increased day by day. Nor could any evil demon slander them or hinder them through human counsels, so long as the divine and heavenly hand watched over and guarded his own people as worthy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But when on account of the abundant freedom, we fell into laxity and sloth, and envied and reviled each other, and were almost, as it were, taking up arms against one another, rulers assailing rulers with words like spears, and people forming parties against people, and monstrous hypocrisy and dissimulation rising to the greatest height of wickedness, the divine judgment with forbearance, as is its pleasure, while the multitudes yet continued to assemble, gently and moderately harassed the episcopacy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' This persecution began with the brethren in the army. But as if without sensibility, we were not eager to make the Deity favorable and propitious; and some, like atheists, thought that our affairs were unheeded and ungoverned; and thus we added one wickedness to another. And those esteemed our shepherds, casting aside the bond of piety, were excited to conflicts with one another, and did nothing else than heap up strifes and threats and jealousy and enmity and hatred toward each other, like tyrants eagerly endeavoring to assert their power. Then, truly, according to the word of Jeremiah, “The Lord in his wrath darkened the daughter of Zion, and cast down the glory of Israel from heaven to earth, and remembered not his footstool in the day of his anger. The Lord also overwhelmed all the beautiful things of Israel, and threw down all his strongholds.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And according to what was foretold in the Psalms: “He has made void the covenant of his servant, and profaned his sanctuary to the earth—in the destruction of the churches—and has thrown down all his strongholds, and has made his fortresses cowardice. All that pass by have plundered the multitude of the people; and he has become besides a reproach to his neighbors. For he has exalted the right hand of his enemies, and has turned back the help of his sword, and has not taken his part in the war. But he has deprived him of purification, and has cast his throne to the ground. He has shortened the days of his time, and besides all, has poured out shame upon him.”',
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
      ' All these things were fulfilled in us, when we saw with our own eyes the houses of prayer thrown down to the very foundations, and the Divine and Sacred Scriptures committed to the flames in the midst of the market-places, and the shepherds of the churches basely hidden here and there, and some of them captured ignominiously, and mocked by their enemies. When also, according to another prophetic word, “Contempt was poured out upon rulers, and he caused them to wander in an untrodden and pathless way.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But it is not our place to describe the sad misfortunes which finally came upon them, as we do not think it proper, moreover, to record their divisions and unnatural conduct to each other before the persecution. Wherefore we have decided to relate nothing concerning them except the things in which we can vindicate the Divine judgment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Hence we shall not mention those who were shaken by the persecution, nor those who in everything pertaining to salvation were shipwrecked, and by their own will were sunk in the depths of the flood. But we shall introduce into this history in general only those events which may be use-fill first to ourselves and afterwards to posterity. Let us therefore proceed to describe briefly the sacred conflicts of the witnesses of the Divine Word.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' It was in the nineteenth year of the reign of Diocletian, in the month Dystrus, called March by the Romans, when the feast of the Saviour’s passion was near at hand, that royal edicts were published everywhere, commanding that the churches be leveled to the ground and the Scriptures be destroyed by fire, and ordering that those who held places of honor be degraded, and that the household servants, if they persisted in the profession of Christianity, be deprived of freedom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Such was the first edict against us. But not long after, other decrees were issued, commanding that all the rulers of the churches in every place be first thrown into prison, and afterwards by every artifice be compelled to sacrifices.',
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
      ' Then truly a great many rulers of the churches eagerly endured terrible sufferings, and furnished examples of noble conflicts. But a multitude of others, benumbed in spirit by fear, were easily weakened at the first onset. Of the rest each one endured different forms of torture. The body of one was scourged with rods. Another was punished with insupportable rackings and scrapings, in which some suffered a miserable death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Others passed through different conflicts. Thus one, while those around pressed him on by force and dragged him to the abominable and impure sacrifices, was dismissed as if he had sacrificed, though he had not. Another, though he had not approached at all, nor touched any polluted thing, when others said that he had sacrificed, went away, bearing the accusation in silence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Another being taken up half dead, was cast aside as if already dead, and again a certain one lying upon the ground was dragged a long distance by his feet and counted among those who had sacrificed. One cried out and with a loud voice testified his rejection of the sacrifice; another shouted that he was a Christian, being resplendent in the confession of the saving Name. Another protested that he had not sacrificed and never would.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But they were struck in the mouth and silenced by a large band of soldiers who were drawn up for this purpose; and they were smitten on the face and cheeks and driven away by force; so important did the enemies of piety regard it, by any means, to seem to have accomplished their purpose. But these things did no+ avail them against the holy martyrs; for an accurate description of whom, what word of ours could suffice?',
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
      ' For we might tell of many who showed admirable zeal for the religion of the God of the universe, not only from the beginning of the general persecution, but long before that time, while yet peace prevailed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For though he who had received power was seemingly aroused now as from a deep sleep, yet from the time after Decius and Valerian, he had been plotting secretly and without notice against the churches. He did not wage war against all of us at once, but made trial at first only of those in the army. For he supposed that the others could be taken easily if he should first attack and subdue these. Thereupon many of the soldiers were seen most cheerfully embracing private life, so that they might not deny their piety toward the Creator of the universe.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For when the commander, whoever he was, began to persecute the soldiers, separating onto tribes an purging those who were enrolled in the army, giving them the choice either by obeying to receive the honor which belonged to them, or on the other hand to be deprived of it if they disobeyed the command, a great many soldiers of Christ’s kingdom, without hesitation, instantly preferred the confession of him to the seeming glory and prosperity which they were enjoying.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And one and another of them occasionally received in exchange, for their pious constancy, not only the loss of position, but death. But as yet the instigator of this plot proceeded with moderation, and ventured so far as blood only in some instances; for the multitude of believers, as it is likely, made him afraid, and deterred him from waging war at once against all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But when he made the attack more boldly, it is impossible to relate how many and what sort of martyrs of God could be seen, among the inhabitants of all the cities and countries.',
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
      ' Immediately on the publication of the decree against the churches in Nicomedia, a certain man, not obscure but very highly honored with distinguished temporal dignities, moved with zeal toward God, and incited with ardent faith, seized the edict as it was posted openly and publicly, and tore it to pieces as a profane and impious thing; and this was done while two of the sovereigns were in the same city—the oldest of all, and the one who held the fourth place in the government after him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But this man, first in that place, after distinguishing himself in such a manner suffered those things which were likely to follow such daring, and kept his spirit cheerful and undisturbed till death.',
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
      ' This period produced divine and illustrious martyrs, above all whose praises have ever been sung and who have been celebrated for courage, whether among Greeks or barbarians, in the person of Dorotheus and the servants that were with him in the palace. Although they received the highest honors from their masters, and were treated by them as their own children, they esteemed reproaches and trials for religion, and the many forms of death that were invented against them, as, in truth, greater riches than the glory and luxury of this life. We will describe the manner in which one of them ended his life, and leave our readers to infer from his case the sufferings of the others.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' A certain man was brought forward in the above-mentioned city, before the rulers of whom we have spoken. He was then commanded to sacrifice, but as he refused, he was ordered to be stripped and raised on high and beaten with rods over his entire body, until, being conquered, he should, even against his will, do what was commanded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But as he was unmoved by these sufferings, and his bones were already appearing, they mixed vinegar with salt and poured it upon the mangled parts of his body. As he scorned these agonies, a gridiron and fire were brought forward. And the remnants of his body, like flesh intended for eating, were placed on the fire, not at once, lest he should expire instantly, but a little at a time. And those who placed him on the pyre were not permitted to desist until, after such sufferings, he should assent to the things commanded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But he held his purpose firmly, and victoriously gave up his life while the tortures were still going on. Such was the martyrdom of one of the servants of the palace, who was indeed well worthy of his name, for he was called Peter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The martyrdoms of the rest, though they were not inferior to his, we will pass by for the sake of brevity, recording only that Dorotheus and Gorgonius, with many others of the royal household, after varied sufferings, ended their lives by strangling, and bore away the trophies of God-given victory.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' At this time Anthimus, who then presided over the church in Nicomedia, was beheaded for his testimony to Christ. A great multitude of martyrs were added to him, a conflagration having broken out in those very days in the palace at Nicomedia, I know not how, which through a false suspicion was laid to our people. Entire families of the pious in that place were put to death in masses at the royal command, some by the sword, and others by fire. It is reported that with a certain divine and indescribable eagerness men and women rushed into the fire. And the executioners bound a large number of others and put them on boats and threw them into the depths of the sea.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And those who had been esteemed their masters considered it necessary to dig up the bodies of the imperial servants, who had been committed to the earth with suitable burial and cast them into the sea, lest any, as they thought, regarding them as gods, might worship them lying in their sepulchers. Such things occurred in Nicomedia at the beginning of the persecution.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But not long after, as persons in the country called Melitene, and others throughout Syria, attempted to usurp the government, a royal edict directed that the rulers of the churches everywhere should lye thrown into prison and bonds.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' What was to be seen after this exceeds all description. A vast multitude were imprisoned in every place; and the prisons everywhere, which had long before been prepared for murderers and robbers of graves, were filled with bishops, presbyters and deacons, readers and exorcists, so that room was no longer left in them for those condemned for crimes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And as other decrees followed the first, directing that those in prison if they would sacrifice should be permitted to depart in freedom, but that those who refused should be harassed with many tortures, how could any one, again, number the multitude of martyrs in every province, and especially of those in Africa, and Mauritania, and Thebais, and Egypt? From this last country many went into other cities and provinces, and became illustrious through martyrdom.',
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
      ' Those of them that were conspicuous in Palestine we know, as also those that were at Tyre in Phœnicia. Who that saw them was not astonished at the numberless stripes, and at the firmness which these truly wonderful athletes of religion exhibited under them? and at their contest, immediately after the scourging, with bloodthirsty wild beasts, as they were cast before leopards and different kinds of bears and wild boars and bulls goaded with fire and red-hot iron? and at the marvelous endurance of these noble men in the face of all sorts of wild beasts?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' We were present ourselves when these things occurred, and have put on record the divine power of our martyred Saviour Jesus Christ, which was present and manifested itself mightily in the martyrs. For a long time the man-devouring beasts did not dare to touch or draw near the bodies of those dear to God, but rushed upon the others who from the outside irritated and urged them on. And they would not in the least touch the holy athletes, as they stood alone and naked and shook their hands at them to draw them toward themselves—for they were commanded to do this. But whenever they rushed at them, they were restrained as if by some diviner power and retreated again.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' This continued for a long time, and occasioned no little wonder to the spectators. And as the first wild beast did nothing, a second and a third were let loose against one and the same martyr.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' One could not but be astonished at the invincible firmness of these holy men, and the enduring and immovable constancy of those whose bodies were young. You could have seen a youth not twenty years of age standing unbound and stretching out his hands in the form of a cross, with unterrified and untrembling mind, engaged earnestly in prayer to God, and not in the least going back or retreating from the place where he stood, while bears and leopards, breathing rage and death, almost touched his flesh. And yet their mouths were restrained, I know not how, by a divine and incomprehensible power, and they ran back again to their place. Such an one was he.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Again you might have seen others, for they were five in all, cast before a wild bull, who tossed into the air with his horns those who approached from the outside, and mangled them, leaving them to be token up half dead; but when he rushed with rage and threatening upon the holy martyrs, who were standing alone, he was unable to come near them; but though he stamped with his feet, and pushed in all directions with his horns, and breathed rage and threatening on account of the irritation of the burning irons, he was, nevertheless, held back by the sacred Providence. And as he in nowise harmed them, they let loose other wild beasts upon them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Finally, after these terrible and various attacks upon them, they were all slain with the sword; and instead of being buried in the earth they were committed to the waves of the sea.',
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
      ' Such was the conflict of those Egyptians who contended nobly for religion in Tyre. But we must admire those also who suffered martyrdom in their native land; where thousands of men, women, and children, despising the present life for the sake of the teaching of our Saviour, endured various deaths.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Some of them, after scrapings and rackings and severest scourgings, and numberless other kinds of tortures, terrible even to hear of, were committed to the flames; some were drowned in the sea; some offered their heads bravely to those who cut them off; some died under their tortures, and others perished with hunger. And yet others were crucified; some according to the method commonly employed for malefactors; others yet more cruelly, being nailed to the cross with their heads downward, and being kept alive until they perished on the cross with hunger.',
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
      ' It would be impossible to describe the outrages and tortures which the martyrs in Thebais endured. They were scraped over the entire body with shells instead of hooks until they died. Women were bound by one foot and raised aloft in the air by machines, and with their bodies altogether bare and uncovered, presented to all beholders this most shameful, cruel, and inhuman spectacle.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Others being bound to the branches and trunks of trees perished. For they drew the stoutest branches together with machines, and bound the limbs of the martyrs to them; and then, allowing the branches to assume their natural position, they tore asunder instantly the limbs of those for whom they contrived this.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' All these things were done, not for a few days or a short time, but for a long series of years. Sometimes more than ten, at other times above twenty were put to death. Again not less than thirty, then about sixty, and yet again a hundred men with young children and women, were slain in one day, being condemned to various and diverse torments.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' We, also being on the spot ourselves, have observed large crowds in one day; some suffering decapitation, others torture by fire; so that the murderous sword was blunted, and becoming weak, was broken, and the very executioners grew weary and relieved each other.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And we beheld the most wonderful ardor, and the truly divine energy and zeal of those who believed in the Christ of God. For as soon as sentence was pronounced against the first, one after another rushed to the judgment seat, and confessed themselves Christians. And regarding with indifference the terrible things and the multiform tortures, they declared themselves boldly and undauntedly for the religion of the God of the universe. And they received the final sentence of death with joy and laughter and cheerfulness; so that they sang and offered up hymns and thanksgivings to the God of the universe till their very last breath.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' These indeed were wonderful; but yet more wonderful were those who, being distinguished for wealth, noble birth, and honor, and for learning and philosophy, held everything secondary to the true religion and to faith in our Saviour and Lord Jesus Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Such an one was Philoromus, who held a high office under the imperial government at Alexandria, and who administered justice every day, attended by a military guard corresponding to his rank and Roman dignity. Such also was Phileas, bishop of the church of Thmuis, a man eminent on account of his patriotism and the services rendered by him to his country, and also on account of his philosophical learning.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' These persons, although a multitude of relatives and other friends besought them, and many in high position, and even the judge himself entreated them, that they would have compassion on themselves and show mercy to their children and wives, yet were not in the least induced by these things to choose the love of life, and to despise the ordinances of our Saviour concerning confession and denial. But with manly and philosophic minds, or rather with pious and God-loving souls, they persevered against all the threats and insults of the judge; and both of them were beheaded.',
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
      ' Since we have mentioned Phileas as having a high reputation for secular learning, let him be his own witness in the following extract, in which he shows us who he was, and at the same time describes more accurately than we can the martyrdoms which occurred in his time at Alexandria:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “Having before them all these examples and models and noble tokens which are given us in the Divine and Sacred Scriptures, the blessed martyrs who were with us did not hesitate, but directing the eye of the soul in sincerity toward the God over all, and having their mind set upon death for religion, they adhered firmly to their calling. For they understood that our Lord Jesus Christ had become man on our account, that he might cut off all sin and furnish us with the means of entrance into eternal life. For ‘he counted it not a prize to be on an equality with God, but emptied himself taking the form of a servant; and being found in fashion as a man, he humbled himself unto death, even the death of the cross.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Wherefore also being zealous for the greater gifts, the Christ-bearing martyrs endured all trials and all kinds of contrivances for torture; not once only, but some also a second time. And although the guards vied with each other in threatening them in all sorts of ways, not in words only, but in actions, they did not give up their resolution; because ‘perfect love casteth out fear.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “What words could describe their courage and manliness under every torture? For as liberty to abuse them was given to all that wished, some beat them with clubs, others with rods, others with scourges, yet others with thongs, and others with ropes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And the spectacle of the outrages was varied and exhibited great malignity. For some, with their hands bound behind them, were suspended on the stocks, and every member stretched by certain machines. Then the torturers, as commanded, lacerated with instruments their entire bodies; not only their sides, as in the case of murderers, but also their stomachs and knees and cheeks. Others were raised aloft, suspended from the porch by one hand, and endured the most terrible suffering of all, through the distension of their joints and limbs. Others were bound face to face to pillars, not resting on their feet, but with the weight of their bodies bearing on their bonds and drawing them tightly.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And they endured this, not merely as long as the governor talked with them or was at leisure, but through almost the entire day. For when he passed on to others, he left officers under his authority to watch the first, and observe if any of them, overcome by the tortures, appeared to yield. And he commanded to cast them into chains without mercy, and afterwards when they were at the last gasp to throw them to the ground and drag them away.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' For he said that they were not to have the least concern for us, but were to think and act as if we no longer existed, our enemies having invented this second mode of torture in addition to the stripes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' “Some, also, after these outrages, were placed on the stocks, and had both their feet stretched over the four holes, so that they were compelled to lie on their backs on the stocks, being unable to keep themselves up on account of the fresh wounds with which their entire bodies were covered as a result of the scourging. Others were thrown on the ground and lay there under the accumulated infliction of tortures, exhibiting to the spectators a more terrible manifestation of severity, as they bore on their bodies the marks of the various and diverse punishments which had been invented.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' As this went on, some died under the tortures, shaming the adversary by their constancy. Others half dead were shut up in prison, and suffering with their agonies, they died in a few days; but the rest, recovering under the care which they received, gained confidence by time and their long detention in prison.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' When therefore they were ordered to choose whether they would be released from molestation by touching the polluted sacrifice, and would receive from them the accursed freedom, or refusing to sacrifice, should be condemned to death, they did not hesitate, but went to death cheerfully. For they knew what had been declared before by the Sacred Scriptures. For it is said, ‘He that sacrificeth to other gods shall be utterly destroyed,’ and, ‘Thou shalt have no other gods before me.’”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Such are the words of the truly philosophical and God-loving martyr, which, before the final sentence, while yet in prison, he addressed to the brethren in his parish, showing them his own circumstances, and at the same time exhorting them to hold fast, even after his approaching death, to the religion of Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But why need we dwell upon these things, and continue to add fresh instances of the conflicts of the divine martyrs throughout the world, especially since they were dealt with no longer by common law, but attacked like enemies of war?',
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
      ' A small town of Phrygia, inhabited solely by Christians, was completely surrounded by soldiers while the men were in it. Throwing fire into it, they consumed them with the women and children while they were calling upon Christ. This they did because all the inhabitants of the city, and the curator himself, and the governor, with all who held office, and the entire populace, confessed themselves Christians, and would not in the least obey those who commanded them to worship idols.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' There was another man of Roman dignity named Adauctus, of a noble Italian family, who had advanced through every honor under the emperors, so that he had blamelessly filled even the general offices of magistrate, as they call it, and of finance minister. Besides all this he excelled in deeds of piety and in the confession of the Christ of God, and was adorned with the diadem of martyrdom. He endured the conflict for religion while still holding the office of finance minister.',
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
      ' Why need we mention the rest by name, or number the multitude of the men, or picture the various sufferings of the admirable martyrs of Christ? Some of them were slain with the axe, as in Arabia. The limbs of some were broken, as in Cappadocia. Some, raised on high by the feet, with their heads down, while a gentle fire burned beneath them, were suffocated by the smoke which arose from the burning wood, as was done in Mesopotamia. Others were mutilated by cutting off their noses and ears and hands, and cutting to pieces the other members and parts of their bodies, as in Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Why need we revive the recollection of those in Antioch who were roasted on grates, not so as to kill them, but so as to subject them to a lingering punishment? Or of others who preferred to thrust their right hand into the fire rather than touch the impious sacrifice? Some, shrinking from the trial, rather than be taken and fall into the hands of their enemies, threw themselves from lofty houses, considering death preferable to the cruelty of the impious.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' A certain holy person—in soul admirable for virtue, in body a woman—who was illustrious beyond all in Antioch for wealth and family and reputation, had brought up in the principles of religion her two daughters, who were now in the freshness and bloom of life. Since great envy was excited on their account, every means was used to find them in their concealment; and when it was ascertained that they were away, they were summoned deceitfully to Antioch. Thus they were caught in the nets of the soldiers. When the woman saw herself and her daughters thus helpless, and knew the things terrible to speak of that men would do to them—and the most unbearable of all terrible things, the threatened violation of their chastity,—she exhorted herself and the maidens that they ought not to submit even to hear of this. For, she said, that to surrender their souls to the slavery of demons was worse than all deaths and destruction; and she set before them the only deliverance from all these things—escape to Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' They then listened to her advice. And after arranging their garments suitably, they went aside from the middle of the road, having requested of the guards a little time for retirement, and cast themselves into a river which was flowing by.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Thus they destroyed themselves. But there were two other virgins in the same city of Antioch who served God in all things, and were true sisters, illustrious in family and distinguished in life, young and blooming, serious in mind, pious in deportment, and admirable for zeal. As if the earth could not bear such excellence, the worshipers of demons commanded to cast them into the sea. And this was done to them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' In Pontus, others endured sufferings horrible to hear. Their fingers were pierced with sharp reeds under their nails. Melted lead, bubbling and boiling with the heat, was poured down the backs of others, and they were roasted in the most sensitive parts of the body.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Others endured on their bowels and privy members shameful and inhuman and unmentionable torments, which the noble and law-observing judges, to show their severity, devised, as more honorable manifestations of wisdom. And new tortures were continually invented, as if they were endeavoring, by surpassing one another, to gain! prizes in a contest.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But at the close of these calamities, when finally they could contrive no greater cruelties, and were weary of putting to death, and were filled and satiated with the shedding of blood, they turned to what they considered merciful and humane treatment, so that they seemed to be no longer devising terrible things against us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' For they said that it was not fitting that the cities should be polluted with the blood of their own people, or that the government of their rulers, which was kind and mild toward all, should be defamed through excessive cruelty; but that rather the beneficence of the humane and royal authority should be extended to all, and we should no longer be put to death. For the infliction of this punishment upon us should be stopped in consequence of the humanity of the rulers.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Therefore it was commanded that our eyes should be put out, and that we should be maimed in one of our limbs. For such things were humane in their sight, and the lightest of punishments for us. So that now on account of this kindly treatment accorded us by the impious, it was impossible to tell the incalculable number of those whose right eyes had first been cut out with the sword, and then had been cauterized with fire; or who had been disabled in the left foot by burning the joints, and afterward condemned to the provincial copper mines, not so much for service as for distress and hardship. Besides all these, others encountered other trials, which it is impossible to recount; for their manly endurance surpasses all description.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' In these conflicts the noble martyrs of Christ shone illustrious over the entire world, and everywhere astonished those who beheld their manliness; and the evidences of the truly divine and unspeakable power of our Saviour were made manifest through them. To mention each by name would be a long task, if not indeed impossible.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[13]->title,
      'subtitle' => $metadata->book->chapters[13]->subtitle,
      'id' => $metadata->book->chapters[13]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' As for the rulers of the Church that suffered martyrdom in the principal cities, the first martyr of the kingdom of Christ whom we shall mention among the monuments of the pious is Anthimus, bishop of the city of Nicomedia, who was beheaded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Among the martyrs at Antioch was Lucian, a presbyter of that parish, whose entire life was most excellent. At Nicomedia, in the presence of the emperor, he proclaimed the heavenly kingdom of Christ, first in an oral defense, and afterwards by deeds as well.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Of the martyrs in Phœnicia the most distinguished were those devoted pastors of the spiritual flocks of Christ: Tyrannion, bishop of the church of Tyre; Zenobius, a presbyter of the church at Sidon; and Silvanus, bishop of the churches about Emesa.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The last of these, with others, was made food for wild beasts at Emesa, and was thus received into the ranks of martyrs. The other two glorified the word of God at Antioch through patience unto death. The bishop was thrown into the depths of the sea. But Zenobius, who was a very skillful physician, died through severe tortures which were applied to his sides.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Of the martyrs in Palestine, Silvanus, bishop of the churches about Gaza, was beheaded with thirty-nine others at the copper mines of Phæno. There also the Egyptian bishops, Peleus and Nilus, with others, suffered death by fire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Among these we must mention Pamphilus, a presbyter, who was the great glory of the parish of Cæsarea, and among the men of our time most admirable. The virtue of his manly deeds we have recorded in the proper place.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Of those who suffered death illustriously at Alexandria and throughout Egypt and Thebais, Peter, bishop of Alexandria, one of the most excellent teachers of the religion of Christ, should first be mentioned; and of the presbyters with him Faustus, Dius and Ammonius, perfect martyrs of Christ; also Phileas, Hesychius, Pachymius and Theodorus, bishops of Egyptian churches, and besides them many other distinguished persons who are commemorated by the parishes of their country and region. It is not for us to describe the conflicts of those who suffered for the divine religion throughout the entire world, and to relate accurately what happened to each of them. This would be the proper work of those who were eyewitnesses of the events. I will describe for posterity in another work those which I myself witnessed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But in the present book I will add to what I have given the revocation issued by our persecutors, and those events that occurred at the beginning of the persecution, which will be most profitable to such as shall read them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' What words could sufficiently describe the greatness and abundance of the prosperity of the Roman government before the war against us, while the rulers were friendly and peaceable toward us? Then those who were highest in the government, and had held the position ten or twenty years, passed their time in tranquil peace, in festivals and public games and most joyful pleasures and cheer.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' While thus their authority was growing uninterruptedly, and increasing day by day, suddenly they changed their peaceful attitude toward us, and began an implacable war. But the second year of this movement was not yet past, when a revolution took place in the entire government and overturned all things.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' For a severe sickness came upon the chief of those of whom we have spoken, by which his understanding was distracted; and with him who was honored with the second rank, he retired into private life. Scarcely had he done this when the entire empire was divided; a thing which is not recorded as having ever occurred before.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Not long after, the Emperor Constantius, who through his entire life was most kindly and favorably disposed toward his subjects, and most friendly to the Divine Word, ended his life in the common course of nature, and left his own son, Constantine, as emperor and Augustus in his stead. He was the first that was ranked by them among the gods, and received after death every honor which one could pay to an emperor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' He was the kindest and mildest of emperors, and the only one of those of our day that passed all the time of his government in a manner worthy of his office. Moreover, he conducted himself toward all most favorably and beneficently. He took not the smallest part in the war against us, but preserved the pious that were under him unharmed and unabused. He neither threw down the church buildings, nor did he devise anything else against us. The end of his life was honorable and thrice blessed. He alone at death left his empire happily and gloriously to his own son as his successor—one who was in all respects most prudent and pious.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' His son Constantine entered on the government at once, being proclaimed supreme emperor and Augustus by the soldiers, And long before by God himself, the King of all. He showed himself an emulator of his father’s piety toward our doctrine. Such an one was he. But after this, Licinius was declared emperor and Augustus by a common vote of the rulers.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' These things grieved Maximinus greatly, for until that time he had been entitled by all only Cæsar. He therefore, being exceedingly imperious, seized the dignity for himself, and became Augustus, being made such by himself. In the mean time he whom we have mentioned as having resumed his dignity after his abdication, being detected in conspiring against the life of Constantine, perished by a most shameful death. He was the first whose decrees and statues and public monuments were destroyed because of his wickedness and impiety.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[14]->title,
      'subtitle' => $metadata->book->chapters[14]->subtitle,
      'id' => $metadata->book->chapters[14]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Maxentius his son, who obtained the government at Rome, at first feigned our faith, in complaisance and flattery toward the Roman people. On this account he commanded his subjects to cease persecuting the Christians, pretending to religion that he might appear merciful and mild beyond his predecessors.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But he did not prove in his deeds to be such a person as was hoped, but ran into all wickedness and abstained from no impurity or licentiousness, committing adulteries and indulging in all kinds of corruption. For having separated wives from their lawful consorts, he abused them and sent them back most dishonorably to their husbands. And he not only practiced this against the obscure and unknown, but he insulted especially the most prominent and distinguished members of the Roman senate.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' All his subjects, people and rulers, honored and obscure, were worn out by grievous oppression. Neither, although they kept quiet, and bore the bitter servitude, was there any relief from the murderous cruelty of the tyrant. Once, on a small pretense, he gave the people to be slaughtered by his guards; and a great multitude of the Roman populace were slain in the midst of the city, with the spears and arms, not of Scythians and barbarians, but of their own fellow-citizens.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' It would be impossible to recount the number of senators who were put to death for the sake of their wealth; multitudes being slain on various pretenses.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' To crown all his wickedness, the tyrant resorted to magic. And in his divinations he cut open pregnant women, and again inspected the bowels of newborn infants. He slaughtered lions, and performed various execrable acts to invoke demons and avert war. For his only hope was that, by these means, victory would be secured to him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' It is impossible to tell the ways in which this tyrant at Rome oppressed his subjects, so that they were reduced to such an extreme dearth of the necessities of life as has never been known, according to our contemporaries, either at Rome or elsewhere.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But Maximinus, the tyrant in the East, having secretly formed a friendly alliance with the Roman tyrant as with a brother in wickedness, sought to conceal it for a long time. But being at last detected, he suffered merited punishment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' It was wonderful how akin he was in wickedness to the tyrant at Rome, or rather how far he surpassed him in it. For the chief of sorcerers and magi-clans were honored by him with the highest rank. Becoming exceedingly timid and superstitious, he valued greatly the error of idols and demons. Indeed, without soothsayers and oracles he did not venture to move even a finger, so to speak.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Therefore he persecuted us more violently and incessantly than his predecessors. He ordered temples to be erected in every city, and the sacred groves which had been destroyed through lapse of time to be speedily restored. He appointed idol priests in every place and city; and he set over them in every province, as high priest, some political official who had especially distinguished himself in every kind of service, giving him a band of soldiers and a body-guard. And to all jugglers, as if they were pious and beloved of the gods, he granted governments and the greatest privileges.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' From this time on he distressed and harassed, not one city or country, but all the provinces under his authority, by extreme exactions of gold and silver and goods, and most grievous prosecutions and various fines. He took away from the wealthy the property which they had inherited from their ancestors, and bestowed vast riches and large sums of money on the flatterers about him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And he went to such an excess of folly. and drunkenness that his mind was deranged and crazed in his carousals; and he gave commands when intoxicated of which he repented afterward when sober. He suffered no one to surpass him in debauchery and profligacy, but made ‘himself an instructor in wickedness to those about him, both rulers and subjects. He urged on the army to live wantonly in every kind of revelry and intemperance, and encouraged the governors and generals to abuse their subjects with rapacity and covetousness, almost as if they were rulers with him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Why need we relate the licentious, shameless deeds of the man, or enumerate the multitude with whom he committed adultery? For he could not pass through a city without continually corrupting women and ravishing virgins.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And in this he succeeded with all except the Christians. For as they despised death, they cared nothing for his power. For the men endured fire and sword and crucifixion and wild beasts and the depths of the sea, and cutting off of limbs, anti burnings, and pricking and digging out of eyes, and mutilations of the entire body, and besides these, hunger and mines and bonds. In all they showed patience in behalf of religion rather than transfer to idols the reverence due to God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And the women were not less manly than the men in behalf of the teaching of the Divine Word, as they endured conflicts with the men, and bore away equal prizes of virtue. And when they were dragged away for corrupt purposes, they surrendered their lives to death rather than their bodies to impurity.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' One only of those who were seized for adulterous purposes by the tyrant, a most distinguished and illustrious Christian woman in Alexandria, conquered the passionate and intemperate soul of Maximinus by most heroic firmness. Honorable on account of wealth and family and education, she esteemed all of these inferior to chastity. He urged her many times, but although she was ready to die, he could not put her to death, for his desire was stronger than his anger.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' He therefore punished her with exile, and took away all her property. Many others, unable even to listen to the threats of violation from the heathen rulers, endured every form of tortures, and rackings, and deadly punishment. These indeed should be admired. But far the most admirable was that woman at Rome, who was truly the most noble and modest of all, whom the tyrant Maxentius, fully resembling Maximinus in his actions, endeavored to abuse.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' For when she learned that those who served the tyrant in such matters were at the house (she also was a Christian), and that her husband, although a prefect of Rome, would suffer them to take and lead her away, having requested a little time for adorning her body, she entered her chamber, and being alone, stabbed herself with a sword. Dying immediately, she left her corpse to those who had come for her. And by her deeds, more powerfully than by any words, she has shown to all men now and hereafter that the virtue which prevails among Christians is the only invincible and indestructible possession?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' Such was the career of wickedness which was carried forward at one and the same time by the two tyrants who held the East and the West. Who is there that would hesitate, after careful examination, to pronounce the persecution against us the cause of such evil? Especially since this extreme confusion of affairs did not cease until the Christians had obtained liberty.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[15]->title,
      'subtitle' => $metadata->book->chapters[15]->subtitle,
      'id' => $metadata->book->chapters[15]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' During the entire ten years of the persecution, they were constantly plotting and warring against one another. For the sea could not be navigated, nor could men sail from any port without being exposed to all kinds of outrages; being stretched on the rack and lacerated in their sides, that it might be ascertained through various tortures, whether they came from the enemy; and finally being subjected to punishment by the cross or by fire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And besides these things shields and breastplates were preparing, and darts and spears and other warlike accoutrements were making ready, and galleys and naval armor were collecting in every place. And no one expected anything else than to be attacked by enemies any day. In addition to this, famine and pestilence came upon them, in regard to which we shall relate what is necessary in the proper place.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[16]->title,
      'subtitle' => $metadata->book->chapters[16]->subtitle,
      'id' => $metadata->book->chapters[16]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Such was the state of affairs during the entire persecution. But in the tenth year, through the grace of God, it ceased altogether, having begun to decrease after the eighth year. For when the divine and heavenly grace showed us favorable and propitious oversight, then truly our rulers, and the very persons by whom the war against us had been earnestly prosecuted, most remarkably changed their minds, and issued a revocation, and quenched the great fire of persecution which had been kindled, by merciful proclamations and ordinances concerning us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But this was not due to any human agency; nor was it the result, as one might say, of the compassion or philanthropy of our rulers—far from it, for daily from the beginning until that time they were devising more and more severe measures against us, and continually inventing outrages by a greater variety of instruments—but it was manifestly due to the oversight of Divine Providence, on the one I hand becoming reconciled to his people, and on the other, attacking him a who instigated these evils, and showing anger toward him as the author of the cruelties of the entire persecution.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For though it was necessary that these things should take place, according to the divine judgment, yet the Word saith, “Woe to him through whom the offense cometh.” Therefore punishment from God came upon him, beginning with his flesh, and proceeding to his soul.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For an abscess suddenly appeared in the midst of the secret parts of his body, and from it a deeply perforated sore, which spread irresistibly into his inmost bowels. An indescribable multitude of worms sprang from them, and a deathly odor arose, as the entire bulk of his body had, through his gluttony, been changed, before his sickness, into an excessive mass of soft fat, which became putrid, and thus presented an awful and intolerable sight to those who came near.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Some of the physicians, being wholly unable to endure the exceeding offensiveness of the odor, were slain; others, as the entire mass had swollen and passed beyond hope of restoration, and they were unable to render any help, were put to death without mercy.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[17]->title,
      'subtitle' => $metadata->book->chapters[17]->subtitle,
      'id' => $metadata->book->chapters[17]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Wrestling with so many evils, he thought of the cruelties which he had committed against the pious. Turning, therefore, his thoughts toward himself, he first openly confessed to the God of the universe, and then summoning his attendants, he commanded that without delay they should stop the persecution of the Christians, and should by law and royal decree, urge them forward to build their churches and to perform their customary worship, offering prayers in behalf of the emperor. Immediately the deed followed the word.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The imperial decrees were published in the cities, containing the revocation of the acts against us in the following form:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “The Emperor Cæsar Galerius Valerius Maximinus, Invictus, Augustus, Pontifex Maximus, conqueror of the Germans, conqueror of the Egyptians, conqueror of the Thebans, five times conqueror of the Sarmatians, conqueror of the Persians, twice conqueror of the Carpathians, six times conqueror of the Armenians, conqueror of the Medes, conqueror of the Adiabeni, Tribune of the people the twentieth time, Emperor the nineteenth time, Consul the eighth time, Father of his country, Proconsul;',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' and the Emperor Cæsar Flavius Valerius Constantinus, Pins, Felix, Invictus, Augustus, Pontifex Maximus, Tribune of the people, Emperor the fifth time, Consul, Father of his country, Proconsul;',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' and the Emperor Cæsar Valerius Licinius, Pins, Felix, Invictus, Augustus, Pontifex Maximus, Tribune of the people the fourth time, Emperor the third time, Consul, Father of his country, Proconsul; to the people of their provinces, greeting:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' “Among the other things which we have ordained for the public advantage and profit, we formerly wished to restore everything to conformity with the ancient laws and public discipline of the Romans, and to provide that the Christians also, who have forsaken the religion of their ancestors, should return to a good disposition.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' For in some way such arrogance had seized them and such stupidity had overtaken them, that they did not follow the ancient institutions which possibly their own ancestors had formerly established, but made for themselves laws according to their own purpose, as each one desired, and observed them, and thus assembled as separate congregations in various places.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' When we had issued this decree that they should return to the institutions established by the ancients, a great many submitted under danger, but a great many being harassed endured all kinds of death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And since many continue in the same folly, and we perceive that they neither offer to the heavenly gods the worship which is due, nor pay regard to the God of the Christians, in consideration of our philanthropy and our invariable custom, by which we are wont to extend pardon to all, we have determined that we ought most cheerfully to extend our indulgence in this matter also; that they may again be Christians, and may rebuild the conventicles in which they were accustomed to assemble, on condition that nothing be done by them contrary to discipline. In another letter we shall indicate to the magistrates what they have to observe.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Wherefore, on account of this indulgence of ours, they ought to supplicate their God for our safety, and that of the people, and their own, that the public welfare may be preserved in every place, and that they may live securely in their several homes.” Such is the tenor of this edict, translated, as well as possible, from the Roman tongue into the Greek? It is time to consider what took place after these events.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[18]->title,
      'subtitle' => $metadata->book->chapters[18]->subtitle,
      'id' => $metadata->book->chapters[18]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' The author of the edict very shortly after this confession was released from his pains and died. He is reported to have been the original author of the misery of the persecution, having endeavored, long before the movement of the other emperors, to turn from the faith the Christians in the army, and first of all those in his own house, degrading some from the military rank, and abusing others most shamefully, and threatening still others with death, and finally inciting his partners in the empire to the general persecution. It is not proper to pass over the death of these emperors in silence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' As four of them held the supreme authority, those who were advanced in age and honor, after the persecution had continued not quite two years, abdicated the government, as we have already stated, and passed the remainder of their lives in a common and private station.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The end of their lives was as follows. He who was first in honor and age perished through a long and most grievous physical infirmity. He who held the second place ended his life by strangling, suffering thus according to a certain demoniacal prediction, on account of his many daring crimes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Of those after them, the last, of whom we have spoken as the originator of the entire persecution, suffered such things as we have related. But he who preceded him, the most merciful and kindly emperor Constantius, passed all the time of his government in a manner worthy of his office. Moreover, he conducted himself towards all most favorably and beneficently. He took not the smallest part in the war against us, and preserved the pious that were under him unharmed and unabused. Neither did he throw down the church buildings, nor devise anything else against us. The end of his life was happy and thrice blessed. He alone at death left his empire happily and gloriously to his own son as his successor, one who was in all respects most prudent and pious. He entered on the government at once, being proclaimed supreme emperor and Augustus by the soldiers; and he showed himself an emulator of his father’s piety toward our doctrine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Such were the deaths of the four of whom we have written, which took place at different times.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Of these, moreover, only the one referred to a little above by us, with those who afterward shared in the government, finally published openly to all the above-mentioned confession, in the written edict which he issued.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
