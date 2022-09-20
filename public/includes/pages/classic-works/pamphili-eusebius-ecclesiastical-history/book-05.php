<?php
$html->add(new BS_Banner(
  null,

  'Book five of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering various martyrs, heroes, and heretics around the 2[sup]nd[/sup] century'
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
      ' Soter, bishop of the church of Rome, died after an episcopate of eight years, and was succeeded by Eleutherus, the twelfth from the apostles. In the seventeenth year of the Emperor Antoninus Verus, the persecution of our people was rekindled more fiercely in certain districts on account of an insurrection of the masses in the cities; and judging by the number in a single nation, myriads suffered martyrdom throughout the world. A record of this was written for posterity, and in truth it is worthy of perpetual remembrance.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' A full account, containing the most reliable information on the subject, is given in our Collection of Martyrdoms, which constitutes a narrative instructive as well as historical. I will repeat here such portions of this account as may be needful for the present purpose.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Other writers of history record the victories of war and trophies won from enemies, the skill of generals, and the manly bravery of soldiers, defiled with blood and with innumerable slaughters for the sake of children and country and other possessions.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But our narrative of the government of God will record in ineffaceable letters the most peaceful wars waged in behalf of the peace of the soul, and will tell of men doing brave deeds for truth rather than country, and for piety rather than dearest friends. It will hand down to imperishable remembrance the discipline and the much-tried fortitude of the athletes of religion, the trophies won from demons, the victories over invisible enemies, and the crowns placed upon all their heads.',
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
      ' The country in which the arena was prepared for them was Gaul, of which Lyons and Vienne are the principal and most celebrated cities. The Rhone passes through both of them, flowing in a broad stream through the entire region.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The most celebrated churches in that country sent an account of the witnesses to the churches in Asia and Phrygia, relating in the following manner what was done among them. I will give their own words.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “The servants of Christ residing at Vienne and Lyons, in Gaul, to the brethren through out Asia and Phrygia, who hold the same faith and hope of redemption, peace and grace and glory from God the Father and Christ Jesus our Lord.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Then, having related some other matters they begin their account in this manner: “The greatness of the tribulation in this region, and the fury of the heathen against the saints, and the sufferings of the blessed witnesses we cannot recount accurately, nor indeed could they possibly be recorded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For with all his might the adversary fell upon us, giving us a foretaste of his unbridled activity at his future coming. He endeavored in every manner to practice and exercise his servants against the servants of God, not only shutting us out from houses and baths and markets, but forbidding any of us to be seen in any place whatever.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But the grace of God led the conflict against him, and delivered the weak, and set them as firm pillars, able through patience to endure all the wrath of the Evil One. And they joined battle with him, undergoing all kinds of shame and injury; and regarding their great sufferings as little, they hastened to Christ, manifesting truly that ‘the sufferings of this present time are not worthy to be compared with the glory which shall be revealed to us-ward.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' First of all, they endured nobly the injuries heaped upon them by the populace; clamors and blows and draggings and robberies and stonings and imprisonments, and all things which an infuriated mob delight in inflicting on enemies and adversaries.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Then, being taken to the forum by the chiliarch and the authorities of the city, they were examined in the presence of the whole multitude, and having confessed, they were imprisoned until the arrival of the governor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' When, afterwards, they were brought before him, and he treated us with the utmost cruelty, Vettius Epagathus, one of the brethren, and a man filled with love for God and his neighbor, interfered. His life was so consistent that, although young, he had attained a reputation equal to that of the eider Zacharias: for he ‘walked in all the commandments and ordinances of the Lord blameless,’ and was untiring in every good work for his neighbor, zealous for God and fervent in spirit. Such being his character, he could not endure the unreasonable judgment against us, but was filled with indignation, and asked to be permitted to testify in behalf of his brethren, that there is among us nothing ungodly or impious.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' But those about the judgment seat cried out against him, for he was a man of distinction; and the governor refused to grant his just request, and merely asked if he also were a Christian. And he, confessing this with a loud voice, was himself taken into the order of the witnesses, being called the Advocate of the Christians, but having the Advocate in himself, the Spirit more abundantly than Zacharias. He showed this by the fullness of his love, being well pleased even to lay down his life in defense of the brethren. For he was and is a true disciple of Christ, ‘following the Lamb whithersoever he goeth.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' “Then the others were divided, and the proto-witnesses were manifestly ready, and finished their confession with all eagerness. But some appeared unprepared and untrained, weak as yet, and unable to endure so great a conflict. About ten of these proved abortions, causing us great grief and sorrow beyond measure, and impairing the zeal of the others who had not yet been seized, but who, though suffering all kinds of affliction, continued constantly with the witnesses and did not forsake them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Then all of us feared greatly on account of uncertainty as to their confession not because we dreaded the sufferings to be endured, but because we looked to the end, and were afraid that some of them might fall away.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But those who were worthy were seized day by day, filling up their number, so that all the zealous persons, and those through whom especially our affairs had been established, were collected together out of the two churches.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And some of our heathen servants also were seized, as the governor had commanded that all of us should be examined publicly. These, being ensnared by Satan, and fearing for themselves the tortures which they beheld the saints endure, and being also urged on by the soldiers, accused us falsely of Thyestean banquets and Edipodean intercourse, and of deeds which are not only unlawful for us to speak of or to think, but which we cannot believe were ever done by men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' When these accusations were reported, all the people raged like wild beasts against us, so that even if any had before been moderate on account of friendship, they were now exceedingly furious and gnashed their teeth against us. And that which was spoken by our Lord was fulfilled: ‘The time will come when whosoever killeth you will think that he doeth God service.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' Then finally the holy witnesses endured sufferings beyond description, Satan striving earnestly that some of the slanders might be uttered by them also?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' “But the whole wrath of the populace, and governor, and soldiers was aroused exceedingly against Sanctus, the deacon from Vienne, and Maturus, a late convert, yet a noble combatant, and against Attalus, a native of Pergamos where he had always been a pillar and foundation, and Blandina, through whom Christ showed that things which appear mean and obscure and despicable to men are with God of great glory, through love toward him manifested in power, and not boasting in appearance.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' For while we all trembled, and her earthly mistress, who was herself also one of the witnesses, feared that on account of the weakness of her body, she would be unable to make bold confession, Blandina was filled with such power as to be delivered and raised above those who were torturing her by turns from morning till evening in every manner, so that they acknowledged that they were conquered, and could do nothing more to her. And they were astonished at her endurance, as her entire body was mangled and broken; and they testified that one of these forms of torture was sufficient to destroy life, not to speak of so many and so great sufferings.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' But the blessed woman, like a noble athlete, renewed her strength in her confession; and her comfort and recreation and relief from the pain of her sufferings was in exclaiming, ‘I am a Christian, and there is nothing vile done by us.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' “But Sanctus also endured marvelously and superhumanly all the outrages which he suffered. While the wicked men hoped, by the continuance and severity of his tortures to wring something from him which he ought not to say, he girded himself against them with such firmness that he would not even tell his name, or the nation or city to which he belonged, or whether he was bond or free, but answered in the Roman tongue to all their questions, ‘I am a Christian.’ He confessed this instead of name and city and race and everything besides, and the people heard from him no other word.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' There arose therefore on the part of the governor and his tormentors a great desire to conquer him but having nothing more that they could do to him, they finally fastened red-hot brazen plates to the most tender parts of his body.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' And these indeed were burned, but he continued unbending and unyielding, firm in his confession, and refreshed and strengthened by the heavenly fountain of the water of life, flowing from the bowels of Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' And his body was a witness of his sufferings, being one complete wound and bruise, drawn: out of shape, and altogether unlike a human form. Christ, suffering in him, manifested his glory, delivering him from his adversary, and making him an example for the others, showing that nothing is fearful where the love of the Father is, and nothing painful where there is the glory of Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' For when the wicked men tortured him a second time after some days, supposing that with his body swollen and inflamed to such a degree that he could not bear the touch of a hand, if they should again apply the same instruments, they would overcome him, or at least by his death under his sufferings others would be made afraid, not only did not this occur, but, contrary to all human expectation, his body arose and stood erect in the midst of the subsequent torments, and resumed its original appearance and the use of its limbs so that, through the grace of Christ, these second sufferings became to him, not torture, but healing.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' “But the devil, thinking that he had already consumed Biblias, who was one of those who had denied Christ, desiring to increase her condemnation through the utterance of blasphemy, brought her again to the torture, to compel her, as already feeble and weak, to report impious things concerning us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' But she recovered herself under the suffering, and as if awaking from a deep sleep, and reminded by the present anguish of the eternal punishment in hell, she contradicted the blasphemers. ‘How,’ she said, ‘could those eat children who do not think it lawful to taste the blood even of irrational animals?’ And thence-forward she confessed herself a Christian, and was given a place in the order of the witnesses.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' “But as the tyrannical tortures were made by Christ of none effect through the patience of the blessed, the devil invented other contrivances,—confinement in the dark and most loathsome parts of the prison, stretching of the feet to the fifth hole in the stocks, and the other outrages which his servants are accustomed to inflict upon the prisoners when furious and filled with the devil. A great many were suffocated in prison, being chosen by the Lord for this manner of death, that he might manifest in them his glory.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 28),
      ' For some, though they had been tortured so cruelly that it seemed impossible that they could live, even with the most careful nursing, yet, destitute of human attention, remained in the prison, being strengthened by the Lord, and invigorated both in body and soul; and they exhorted and encouraged the rest. But such as were young, and arrested recently, so that their bodies had not become accustomed to torture, were unable to endure the severity of their confinement, and died in prison.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 29),
      ' “The blessed Pothinus, who had been entrusted with the bishopric of Lyons, was dragged to the judgment seat. He was more than ninety years of age, and very infirm, scarcely indeed able to breathe because of physical weakness; but he was strengthened by spiritual zeal through his earnest desire for martyrdom. Though his body was worn out by old age and disease, his life was preserved that Christ might triumph in it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 30),
      ' When he was brought by the soldiers to the tribunal, accompanied by the civil magistrates and a multitude who shouted against him in every manner as if he were Christ himself, he bore noble witness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 31),
      ' Being asked by the governor, Who was the God of the Christians, he replied, ‘If thou art worthy, thou shalt know.’ Then he was dragged away harshly, and received blows of every kind. Those near him struck him with their hands and feet, regardless of his age; and those at a distance hurled, at him whatever they could seize; all of them thinking that they would be guilty of great wickedness and impiety if any possible abuse were omitted. For thus they thought to avenge their own deities. Scarcely able to breathe, he was cast into prison and died after two days.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 32),
      ' “Then a certain great dispensation of God occurred, and the compassion of Jesus appeared beyond measure, in a manner rarely seen among the brotherhood, but not beyond the power of Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 33),
      ' For those who had recanted at their first arrest were imprisoned with the others, and endured terrible sufferings, so that their denial was of no profit to them even for the present. But those who confessed what they were imprisoned as Christians, no other accusation being brought against them. But the first were treated afterwards as murderers and defiled, and were punished twice as severely as the others.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 34),
      ' For the joy of martyrdom, and the hope of the promises, and love for Christ, and the Spirit of the Father supported the latter; but their consciences so greatly distressed the former that they were easily distinguishable from all the rest by their very countenances when they were led forth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 35),
      ' For the first went out rejoicing, glory and grace being blended in their faces, so that even their bonds seemed like beautiful ornaments, as those of a bride adorned with variegated golden fringes; and they were perfumed with the sweet savor of Christ, so that some supposed they had been anointed with earthly ointment. But the others were downcast and humble and dejected and filled with every kind of disgrace, and they were reproached by the heathen as ignoble and weak, bearing the accusation of murderers, and having lost the one honorable and glorious and life-giving Name. The rest, beholding this, were strengthened, and when apprehended, they confessed without hesitation, paying no attention to the persuasions of the devil.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 36),
      ' After certain other words they continue: “After these things, finally, their martyrdoms For plaiting a crown of various colors and of all kinds of flowers, they presented it to the Father. It was proper therefore that the noble athletes, having endured a manifold strife, and conquered grandly, should receive the crown, great and incorruptible.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 37),
      ' “Maturus, therefore, and Sanctus and Blandina and Attalus were led to the amphitheater to be exposed to the wild beasts, and to give to the heathen public a spectacle of cruelty, a day for fighting with wild beasts being specially appointed on account of our people.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 38),
      ' Both Maturus and Sanctus passed again through every torment in the amphitheater, as if they had suffered nothing before, or rather, as if, having already conquered their antagonist in many contests, they were now striving for the crown itself. They endured again the customary running of the gauntlet and the violence of the wild beasts, and everything which the furious people called for or desired, and at last, the iron chair in which their bodies being roasted, tormented them with the fumes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 39),
      ' And not with this did the persecutors cease, but were yet more mad against them, determined to overcome their patience. But even thus they did not hear a word from Sanctus except the confession which he had uttered from the beginning.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 40),
      ' These, then, after their life had continued for a long time through the great conflict, were at last sacrificed, having been made throughout that day a spectacle to the world, in place of the usual variety of combats.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 41),
      ' “But Blandina was suspended on a stake, and exposed to be devoured by the wild beasts who should attack her. And because she appeared as if hanging on a cross, and because of her earnest prayers, she inspired the combatants with great zeal. For they looked on her in her conflict, and beheld with their outward eyes, in the form of their sister, him who was crucified for them, that he might persuade those who believe on him, that every one who suffers for the glory of Christ has fellowship always with the living God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 42),
      ' As none of the wild beasts at that time touched her, she was taken down from the stake, and cast again into prison. She was preserved thus for another contest, that, being victorious in more conflicts, she might make the punishment of the crooked serpent irrevocable; and, though small and weak and despised, yet clothed with Christ the mighty and conquering Athlete, she might arouse the zeal of the brethren, and, having overcome the adversary many times might receive, through her conflict, the crown incorruptible.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 43),
      ' “But Attalus was called for loudly by! the people, because he was a person of distinction. He entered the contest readily on account of a good conscience and his genuine practice in Christian discipline, and as he had always been a witness for the truth among us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 44),
      ' He was led around the amphitheater, a tablet being carried before him on which was written in the Roman language ‘This is Attalus the Christian,’ and the people were filled with indignation against him. But when the governor learned that he was a Roman, he commanded him to be taken back with the rest of those who were in prison concerning whom he had written to Cæsar, and whose answer he was awaiting.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 45),
      ' “But the intervening time was not wasted nor fruitless to them; for by their patience the measureless compassion of Christ was manifested. For through their continued life the dead were made alive, and the witnesses showed favor to those who had failed to witness. And the virgin mother had much joy in receiving alive those whom she had brought forth as dead.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 46),
      ' For through their influence many who had denied were restored, and re-begotten, and rekindled with life, and learned to confess. And being made alive and strengthened, they went to the judgment seat to be again interrogated by the governor; God, who desires not the death of the sinner, but mercifully invites to repentance, treating them with kindness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 47),
      ' For Cæsar commanded that they should be put to death, but that any who might deny should be set free. Therefore, at the beginning of the public festival which took place there, and which was attended by crowds of men from all nations, the governor brought the blessed ones to the judgment seat, to make of them a show and spectacle for the multitude. Wherefore also he examined them again, and beheaded those who appeared to possess Roman citizenship, but he sent the others to the wild beasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 48),
      ' “And Christ was glorified greatly in those who had formerly denied him, for, contrary to the expectation of the heathen, they confessed. For they, were examined by themselves, as about to be set free; but confessing, they were added to the order of the witnesses. But some continued without, who had never possessed a trace of faith, nor any apprehension of the wedding garment, nor an understanding of the fear of God; but, as sons of perdition, they blasphemed the Way through their apostasy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 49),
      ' But all the others were added to the Church. While these were being examined, a certain Alexander, a Phrygian by birth, and physician by profession, who had resided in Gaul for many years, and was well known to all on account of his love to God and boldness of speech (for he was not without a share of apostolic grace), standing before the judgment seat, and by signs encouraging them to confess, appeared to those standing by as if in travail.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 50),
      ' But the people being enraged because those who formerly denied now confessed, cried out against Alexander as if he were the cause of this. Then the governor summoned him and inquired who he was. And when he answered that he was a Christian, being very angry he condemned him to the wild beasts. And on the next day he entered along with Attalus. For to please the people, the governor had ordered Attalus again to the wild beasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 51),
      ' And they were tortured in the amphitheater with all the instruments contrived for that purpose, and having endured a very great conflict, were at last sacrificed. Alexander neither groaned nor murmured in any manner, but communed in his heart with God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 52),
      ' But when Attalus was placed in the iron seat, and the fumes arose from his burning body, he said to the people in the Roman language: ‘Lo! this which ye do is devouring men; but we do not devour men; nor do any other wicked thing.’ And being asked, what name God has, he replied, ‘God has not a name as man has.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 53),
      ' “After all these, on the last day of the contests, Blandina was again brought in, with Ponticus, a boy about fifteen years old. They had been brought every day to witness the sufferings of the others, and had been pressed to swear by the idols. But because they remained steadfast and despised them, the multitude became furious, so that they had no compassion for the youth of the boy nor respect for the sex of the woman.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 54),
      ' Therefore they exposed them to all the terrible sufferings and took them through the entire round of torture, repeatedly urging them to swear, but being unable to effect this; for Ponticus, encouraged by his sister so that even the heathen could see that she was confirming and strengthening him, having nobly endured every torture, gave up the ghost.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 55),
      ' But the blessed Blandina, last of all, having, as a noble mother, encouraged her children and sent them before her victorious to the King, endured herself all their conflicts and hastened after them, glad and rejoicing in her departure as if called to a marriage supper, rather than east to wild beasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 56),
      ' And, after the scourging, after the wild beasts, after the roasting seat, she was finally enclosed in a net, and thrown before a bull. And having been tossed about by the animal, but feeling none of the things which were happening to her, on account of her hope and firm hold upon what had been entrusted to her, and her communion with Christ, she also was sacrificed. And the heathen themselves confessed that never among them had a woman endured so many and such terrible tortures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 57),
      ' “But not even thus was their madness and cruelty toward the saints satisfied. For incited by the Wild Beast, wild and barbarous tribes were not easily appeased, and their violence found another peculiar opportunity in the dead bodies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 58),
      ' For, through their lack of manly reason, the fact that they had been conquered did not put them to shame, but rather the more enkindled their wrath as that of a wild beast, and aroused alike the hatred of governor and people to treat us unjustly; that the Scripture might be fulfilled: ‘He that is lawless, let him be lawless still, and he that is righteous, let him be righteous still.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 59),
      ' For they cast to the dogs those who had died of suffocation in the prison, carefully guarding them by night and day, lest any one should be buried by us. And they exposed the remains left by the wild beasts and by fire, mangled and charred, and placed the heads of the others by their bodies, and guarded them in like manner from burial by a watch of soldiers for many days.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 60),
      ' And some raged and gnashed their teeth against them, desiring to execute more severe vengeance upon them; but others laughed and mocked at them, magnifying their own idols, and imputed to them the punishment of the Christians. Even the more reasonable, and those who had seemed to sympathize somewhat, reproached them often, saying, ‘Where is their God, and what has their religion, which they have chosen rather than life, profited them?’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 61),
      ' So various was their conduct toward us; but we were in deep affliction because we could not bury the bodies. For neither did night avail us for this purpose, nor did money persuade, nor entreaty move to compassion; but they kept watch in every way, as if the prevention of the burial would be of some great advantage to them.” In addition, they say after other things:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 62),
      ' “The bodies of the martyrs, having thus in every manner been exhibited and exposed for six days, were afterward burned and reduced to ashes, and swept into the Rhone by the wicked men, so that no trace of them might appear on the earth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 63),
      ' And this they did, as if able to conquer God, and prevent their new birth; ‘that,’ as they said, ‘they may have no hope of a resurrection, through trust in which they bring to us this foreign and new religion, and despise terrible things, and are ready even to go to death with joy. Now let us see if they will rise again, and if their God is able to help them, and to deliver them out of our hands.’”',
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
      ' Such things happened to the churches of Christ under the above-mentioned emperor, from which we may reasonably conjecture the occurrences in the other provinces. It is proper to add other selections from the same letter, in which the moderation and compassion of these witnesses is recorded in the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “They were also so zealous in their imitation of Christ—‘who, being in the form of God, counted it not a prize to be on an equality with God,’—that, though they had attained such honor, and had borne witness, not once or twice, but many times, having been brought back to prison from the wild beasts, covered ‘with burns and scars and wounds—yet they did not proclaim themselves witnesses, nor did they suffer us to address them by this name. If any one of us, in letter or conversation, spoke of them as witnesses, they rebuked him sharply.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For they conceded cheerfully the appellation of Witness to Christ ‘the faithful and true Witness,’ and ‘firstborn of the dead,’ and prince of the life of God; and they reminded us of the witnesses who had already departed, and said, ‘They are already witnesses whom Christ has deemed worthy to be taken up in their confession, having sealed their testimony by their departure; but we are lowly and humble confessors.’ And they besought the brethren with tears that earnest prayers should be offered that they might be made perfect.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' They showed in their deeds the power of ‘testimony,’ manifesting great boldness toward all the brethren, and they made plain their nobility through patience and fearlessness and courage, but they refused the title of Witnesses as distinguishing them from their brethren, being filled with the fear of God.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' A little further on they say: “They humbled themselves under the mighty hand, by which they are now greatly exalted. They defended all, but accused none. They absolved all, but bound none. And they prayed for those who had inflicted cruelties upon them, even as Stephen, the perfect witness, ‘Lord, lay not this sin to their charge.’ But if he prayed for those who stoned him, how much more for the brethren!”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And again after mentioning other matters, they say: “For, through the genuineness of their love, their greatest contest with him was that the Beast, being choked, might cast out alive those whom he supposed he had swallowed. For they did not boast over the fallen, but helped them in their need with those things in which they themselves abounded, having the compassion of a mother, and shedding many tears on their account before the Father.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' They asked for life, and he gave it to them, and they shared it with their neighbors. Victorious; over everything, they departed to God. Having always loved peace, and having commended peace to us they went in peace to God, leaving no sorrow to their mother, nor division or strife to the brethren, but joy and peace and concord and love.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' This record of the affection of those blessed ones toward the brethren that had fallen may be profitably added on account of the inhuman and unmerciful disposition of those who, after these events, acted unsparingly toward the members of Christ.',
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
      ' The same letter of the abovementioned witnesses contains another account worthy of remembrance. No one will object to our bringing it to the knowledge of our readers. It runs as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “For a certain Alcibiades, who was one of them, led a very austere life, partaking of nothing whatever but bread and water. When he endeavored to continue this same sort of life in prison, it was revealed to Attalus after his first conflict in the amphitheater that Alcibiades was not doing well in refusing the creatures of God and placing a stumbling-block before others.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And Alcibiades obeyed; and partook of all things without restraint, giving thanks to God. For they were not deprived of the grace of God, but the Holy Ghost was their counselor.” Let this suffice for these matters.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The followers of Montanus, Alcibiades and Theodotus in Phrygia were now first giving wide circulation to their assumption in regard to prophecy—for the many other miracles that, through the gift of God, were still wrought in the different churches caused their prophesying to be readily credited by many—and as dissension arose concerning them, the brethren in Gaul set forth their own prudent and most orthodox judgment in the matter, and published also several epistles from the witnesses that had been put to death among them. These they sent, while they were still in prison, to the brethren throughout Asia and Phrygia, and also to Eleutherus, who was then bishop of Rome, negotiating for the peace of the churches.',
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
      ' The same witnesses also recommended Irenæus, who was already at that time a presbyter of the parish of Lyons, to the above-mentioned bishop of Rome, saying many favorable things in regard to him, as the following extract shows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “We pray, father Eleutherus, that you may rejoice in God in all things and always. We have requested our brother and comrade Irenæus to carry this letter to you, and we ask you to hold him in esteem, as zealous for the covenant of Christ. For if we thought that office could confer righteousness upon any one, we should commend him among the first as a presbyter of the church, which is his position.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Why should we transcribe the catalogue of the witnesses given in the letter already mentioned, of whom some were beheaded, others cast to the wild beasts, and others fell asleep in prison, or give the number of confessors still surviving at that time? For whoever desires can readily find the full account by consulting the letter itself, which, as I have said, is recorded in our Collection of Martyrdoms. Such were the events which happened under Antoninus.',
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
      ' It is reported that Marcus Aurelius Cæsar, brother of Antoninus, being about to engage in battle with the Germans and Sarmatians, was in great trouble on account of his army suffering from thirst. But the soldiers of the so-called Melitene legion, through the faith which has given strength from that time to the present, when they were drawn up before the enemy, kneeled on the ground, as is our custom in prayer, and engaged in supplications to God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' This was indeed a strange sight to the enemy, but it is reported that a stranger thing immediately followed. The lightning drove the enemy to flight and destruction, but a shower refreshed the army of those who had called on God, all of whom had been on the point of perishing with thirst.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' This story is related by non-Christian writers who have been pleased to treat the times referred to, and it has also been recorded by our own people. By those historians who were strangers to the faith, the marvel is mentioned, but it is not acknowledged as an answer to our prayers. But by our own people, as friends of the truth, the occurrence is related in a simple and artless manner.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Among these is Apolinarius, who says that from that time the legion through whose prayers the wonder took place received from the emperor a title appropriate to the event, being called in the language of the Romans the Thundering Legion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Tertullian is a trustworthy witness of these things. In the Apology for the Faith, which he addressed to the Roman Senate, and which work we have already mentioned, he confirms the history with greater and stronger proofs.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' He writes that there are still extant letters of the most intelligent Emperor Marcus in which he testifies that his army, being on the point of perishing with thirst in Germany, was saved by the prayers of the Christians. And he says also that this emperor threatened death to those who brought accusation against us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' He adds further: “What kind of laws are those which impious, unjust, and cruel persons use against us alone? which Vespasian, though he had conquered the Jews, did not regard; which Trajan partially annulled, forbidding Christians to be sought after; which neither Adrian, though inquisitive in all matters, nor he who was called Plus sanctioned.” But let any one treat these things as he chooses; we must pass on to what followed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Pothinus having died with the other martyrs in Gaul at ninety years of age, Irenæus succeeded him in the episcopate of the church at Lyons. We have learned that, in his youth, he was a hearer of Polycarp.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' In the third book of his work Against Heresies he has inserted a list of the bishops of Rome, bringing it down as far as Eleutherus (whose times we are now considering), under whom he composed his work. He writes as follows:',
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
      ' “The blessed apostles having founded and established the church, entrusted the office of the episcopate to Linus. Paul speaks of this Linus in his Epistles to Timothy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Anencletus succeeded him, and after Anencletus, in the third place from the apostles, Clement received the episcopate. He had seen and conversed with the blessed apostles, and their preaching was still sounding in his ears, and their tradition was still before his eyes. Nor was he alone in this, for many who had been taught by the apostles yet survived.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In the times of Clement, a serious dissension having arisen among the brethren in Corinth, the church of Rome sent a most suitable letter to the Corinthians, reconciling them in peace, renewing their faith, and proclaiming the doctrine lately received from the apostles.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' A little farther on he says: “Evarestus succeeded Clement, and Alexander, Evarestus. Then Xystus, the sixth from the apostles, was appointed. After him Telesphorus, who suffered martyrdom gloriously; then Hyginus; then Pius; and after him Anicetus; Sorer succeeded Anicetus; and now, in the twelfth place from the apostles,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Eleutherus holds the office of bishop. In the same order and succession the tradition in the Church and the preaching of the truth has descended from the apostles unto us.”',
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
      ' These things Irenæus, in agreement with the accounts already given by us, records in the work which comprises five books, and to which he gave the title Refutation and Overthrow of the Knowledge Falsely So-called. In the second book of the same treatise he shows that manifestations of divine and miraculous power continued to his time in some of the churches.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He says: “But so far do they come short of raising the dead, as the Lord raised them, and the apostles through prayer. And oftentimes in the brotherhood, when, on account of some necessity, our entire Church has besought with fasting and much supplication, the spirit of the dead has returned, and the man has been restored through the prayers of the saints.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And again, after other remarks, he says: “If they will say that even the Lord did these things in mere appearance, we will refer them to the prophetic writings, and show from them that all things were beforehand spoken of him in this manner, and were strictly fulfilled; and that he alone is the Son of God. Wherefore his true disciples, receiving grace from him, perform such works in his Name for the benefit of other men, as each has received the gift from him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For some of them drive out demons effectually and truly, so that those who have been cleansed from evil spirits frequently believe and unite with the Church. Others have a foreknowledge of future events, and visions, and prophetic revelations. Still others heal the sick by the laying on of hands, and restore them to health. And, as we have said, even dead persons have been raised, and remained with us many years.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But why should we say more? It is not possible to recount the number of gifts which the Church, throughout all the world, has received from God in the name of Jesus Christ, who was crucified under Pontius Pilate, and exercises every day for the benefit of the heathen, never deceiving any nor doing it for money. For as she has received freely from God, freely also does she minister.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And in another place the same author writes: “As also we hear that many brethren in the Church possess prophetic gifts, and speak, through the Spirit, with all kinds of tongues, and bring to light the secret things of men for their good, and declare the mysteries of God.” So much in regard to the fact that various gifts remained among those who were worthy even until that time.',
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
      ' Since, in the beginning of this work, we promised to give, when needful, the words of the ancient presbyters and writers of the Church, in which they have declared those traditions which came down to them concerning the canonical books, and since Irenæus was one of them, we will now give his words and, first, what he says of the sacred Gospels:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “Matthew published his Gospel among the Hebrews in their own language, while Peter and Paul were preaching and founding the church in Rome.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' After their departure Mark, the disciple and interpreter of Peter, also transmitted to us in writing those things which Peter had preached; and Luke, the attendant of Paul, recorded in a book the Gospel which Paul had declared.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Afterwards John, the disciple of the Lord, who also reclined on his bosom, published his Gospel, while staying at Ephesus in Asia.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' He states these things in the third book of his above-mentioned work. In the fifth book he speaks as follows concerning the Apocalypse of John, and the number of the name of Antichrist: “As these things are so, and this number is found in all the approved and ancient copies, and those who saw John face to face confirm it, and reason teaches us that the number of the name of the beast, according to the mode of calculation among the Greeks, appears in its letters…”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And farther on he says concerning the same: “We are not bold enough to speak confidently of the name of Antichrist. For if it were necessary that his name should be declared clearly at the present time, it would have been announced by him who saw the revelation. For it was seen, not long ago, but almost in our generation, toward the end of the reign of Domitian.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' He states these things concerning the Apocalypse in the work referred to. He also mentions the first Epistle of John, taking many proofs from it, and likewise the first Epistle of Peter. And he not only knows, but also receives, The Shepherd, writing as follows: “Well did the Scripture speak, saying, ‘First of all believe that God is one, who has created and completed all things,’” etc.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And he uses almost the precise words of the Wisdom of Solomon, saying: “The vision of God produces immortality, but immortality renders us near to God.” He men-lions also the memoirs of a certain apostolic presbyter, whose name he passes by in silence, and gives his expositions of the sacred Scriptures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And he refers to Justin the Martyr, and to Ignatius, using testimonies also from their writings. Moreover, he promises to refute Marcion from his own writings, in a special work.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Concerning the translation of the inspired Scriptures by the Seventy, hear the very words which he writes: “God in truth became man, and the Lord himself saved us, giving the sign of the virgin but not as some say, who now venture to translate the Scripture, ‘Behold, a young woman shall conceive and bring forth a son,’ as Theodotion of Ephesus and Aquila of Pontus, both of them Jewish proselytes, interpreted; following whom, the Ebionites say that he was begotten by Joseph.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Shortly after he adds: “For before the Romans had established their empire, while the Macedonians were still holding Asia, Ptolemy, the son of Lagus, being desirous of adorning the library which he had rounded in Alexandria with the meritorious writings of all men, requested the people of Jerusalem to have their Scriptures translated into the Greek language.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But, as they were then subject to the Macedonians, they sent to Ptolemy seventy elders, who were the most skilled among them in the Scriptures and in both languages. Thus God accomplished his purpose.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But wishing to try them individually, as he feared lest, by taking counsel together, they might conceal the truth of the Scriptures by their interpretation, he separated them from one another, and commanded all of them to write the same translation. He did this for all the books.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But when they came together in the presence of Ptolemy, and compared their several translations, God was glorified, and the Scriptures were recognized as truly divine. For all of them had rendered the same things in the same words and with the same names from beginning to end, so that the heathen perceived that the Scriptures had been translated by the inspiration of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' And this was nothing wonderful for God to do, who, in the captivity of the people trader Nebuchadnezzar, when the Scriptures had been destroyed, and the Jews had returned to their own country after seventy years, afterwards, in the time of Artaxerxes, king of the Persians, inspired Ezra the priest, of the tribe of Levi, to relate all the words of the former prophets, and to restore to the people the legislation of Moses.” Such are the words of Irenæus.',
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
      ' After Antoninus had been emperor for nineteen years, Commodus received the government. In his first year Julian became bishop of the Alexandrian churches, after Agrippinus had held the office for twelve years.',
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
      ' About that time, Pantænus, a man highly distinguished for his learning, had charge of the school of the faithful in Alexandria. A school of sacred learning, which continues to our day, was established there in ancient times, and as we have been informed, was managed by men of great ability and zeal for divine things. Among these it is reported that Pantænus was at that time especially conspicuous, as he had been educated in the philosophical system of those called Stoics.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' They say that he displayed such zeal for the divine Word, that he was appointed as a herald of the Gospel of Christ to the nations in the East, and was sent as far as India. For indeed there were still many evangelists of the Word who sought earnestly to use their inspired zeal, after the examples of the apostles, for the increase and building up of the Divine Word.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Pantænus was one of these, and is said to have gone to India. It is reported that among persons there who knew of Christ, he found the Gospel according to Matthew, which had anticipated his own arrival. For Bartholomew, one of the apostles, had preached to them, and left with them the writing of Matthew in the Hebrew language, which they had preserved till that time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' After many good deeds, Pantænus finally became the head of the school at Alexandria, and expounded the treasures of divine doctrine both orally and in writing.',
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
      ' At this time Clement, being trained with him in the divine Scriptures at Alexandria, became well known. He had the same name as the one who anciently was at the head of the Roman church, and who was a disciple of the apostles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In his Hypotyposes he speaks of Pantænus by name as his teacher. It seems to me that he alludes to the same person also in the first book of his Stromata, when, referring to the more conspicuous of the successors of the apostles whom he had met, he says:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “This work is not a writing artfully constructed for display; but my notes are stored up for old age, as a remedy against forgetfulness; an image without art, and a rough sketch of those powerful and animated words which it was my privilege to hear, as well as of blessed and truly remarkable men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Of these the one—the Ionian—was in Greece, the other in Magna Græcia; the one of them was from Cœle-Syria, the other from Egypt. There were others in the East, one of them an Assyrian, the other a Hebrew in Palestine? But when I met with the last,—in ability truly he was first—having hunted him out in his concealment in Egypt, I found rest.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' These men, preserving the true tradition of the blessed doctrine, directly from the holy apostles, Peter and James and John and Paul, the son receiving it from the father (but few were like fathers), have come by God’s will even to us to deposit those ancestral and apostolic seeds.”',
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
      ' At this time Narcissus was the bishop of the church at Jerusalem, and he is celebrated by many to this day. He was the fifteenth in succession from the siege of the Jews under Adrian. We have shown that from that time first the church in Jerusalem was composed of Gentiles, after those of the circumcision, and that Marcus was the first Gentile bishop that presided over them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' After him the succession in the episcopate was: first Cassianus; after him Publius; then Maximus; following them Julian; then Gaius; after him Symmachus and another Gaius, and again another Julian; after these Capito and Valens and Dolichianus; and after all of them Narcissus, the thirtieth in regular succession from the apostles.',
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
      ' At this time Rhodo, a native of Asia, who had been instructed, as he himself states, by Tatian, with whom we have already become acquainted, having written several books, published among the rest one against the heresy of Marcion. He says that this heresy was divided in his time into various opinions; and while describing those who occasioned the division, he refutes accurately the falsehoods devised by each of them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But hear what he writes: “Therefore also they disagree among themselves, maintaining an inconsistent opinion. For Apelles, one of the herd, priding himself on his manner of life and his age, acknowledges one principle, but says that the prophecies are from an opposing spirit, being led to this view by the responses of a maiden by name Philumene, who was possessed by a demon.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But others, among whom are Potitus and Basilicus, hold to two principles, as does the mariner Marcion himself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' These following the wolf of Pontus, and, like him, unable to fathom the division of things, became reckless, and without giving any proof asserted two principles. Others, again, drifting into a worse error, consider that there are not only two, but three natures. Of these, Syneros is the leader and chief, as those who defend his teaching say.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The same author writes that he engaged in conversation with Apelles. He speaks as follows: “For the old man Apelles, when conversing with us, was refuted in many things which he spoke falsely; whence also he said that it was not at all necessary to examine one’s doctrine, but that each one should continue to hold what he believed. For he asserted that those who trusted in the Crucified would be saved, if only they were found doing good works. But as we have said before, his opinion concerning God was the most obscure of all. For he spoke of one principle, as also our doctrine does.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Then, after stating fully his own opinion, he adds: “When I said to him, Tell me how you know this or how can you assert that there is one principle, he replied that the prophecies refuted themselves, because they have said nothing true; for they are inconsistent, and false, and self-contradictory. But how there is one principle he said that he did not know, but that he was thus persuaded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' As I then adjured him to speak the truth, he swore that he did so when he said that he did not know how there is one unbegotten God, but that he believed it. Thereupon I laughed and reproved him because, though calling himself a teacher, he knew not how to confirm what he taught.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' In the same work, addressing Callistio, the same writer acknowledges that he had been instructed at Rome by Tatian. And he says that a book of Problems had been prepared by Tatian, in which he promised to explain the obscure and hidden parts of the divine Scriptures. Rhodo himself promises to give in a work of his: own solutions of Tatian’s problems. There is also extant a Commentary of his on the Hexæmeron.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But this Apelles wrote many things, an impious manner, of the law of Moses, blaspheming the divine words in many of his works, being, as it seemed, very zealous for their refutation and overthrow. So much concerning these.',
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
      ' The enemy of God’s Church, who is emphatically a hater of good and a lover of evil, and leaves untried no manner of craft against men, was again active in causing strange heresies to spring up against the Church. For some persons, like venomous reptiles, crawled over Asia and Phrygia, boasting that Montanus was the Paraclete, and that the women that followed him, Priscilla and Maximilla, were prophetesses of Montanus.',
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
      ' Others, of whom Florinus was chief, flourished at Rome. He fell from the presbyterate of the Church, and Blastus was involved in a similar fall. They also drew away many oft the Church to their opinion, each striving to introduce his own innovations in respect to the truth',
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
      ' Against the so-called Phrygian heresy, the power which always contends for the truth raised up a strong and invincible weapon, Apolinarius of Hierapolis, whom we have mentioned before, and with him many other men of ability, by whom abundant material for our history has been left.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' A certain one of these, in the beginning of his work against them, first intimates that he had contended with them in oral controversies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He commences his work in this manner: “Having for a very long and sufficient time, O beloved Avircius Marcellus, been urged by you to write a treatise against the heresy of those who are called after Miltiades, I have hesitated till the present time, not through lack of ability to refute the falsehood or bear testimony for the truth, but from fear and apprehension that I might seem to some to be making additions to the doctrines or precepts of the Gospel of the New Testament, which it is impossible for one who has chosen to live according to the Gospel, either to increase or to diminish.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But being recently in Ancyra in Galatia, I found the church there greatly agitated by this novelty, not prophecy, as they call it, but rather false prophecy, as will be shown. Therefore, to the best of our ability, with the Lord’s help, we disputed in the church many days concerning these and other matters separately brought forward by them, so that the church rejoiced and was strengthened in the truth, and those of the opposite side were for the time confounded, and the adversaries were grieved.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The presbyters in the place, our fellow-presbyter Zoticus of Otrous also being present, requested us to leave a record of what had been said against the opposers of the truth. We did not do this, but we promised to write it out as soon as the Lord permitted us, and to send it to them speedily.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Having said this with other things, in the beginning of his work, he proceeds to state the cause of the above-mentioned heresy as follows: “Their opposition and their recent heresy which has separated them from the Church arose on the following account.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' There is said to be a certain village called Ardabau in that part of Mysia, which borders upon Phrygia. There first, they say, when Gratus was proconsul of Asia, a recent convert, Montanus by name, through his unquenchable desire for leadership, gave the adversary opportunity against him. And he became beside himself, and being suddenly in a sort of frenzy and ecstasy, he raved, and began to babble and utter strange things, prophesying in a manner contrary to the constant custom of the Church handed down by tradition from the beginning.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Some of those who heard his spurious utterances at that time were indignant, and they rebuked him as one that was possessed, and that was under the control of a demon, and was led by a deceitful spirit, and was distracting the multitude; and they forbade him to talk, remembering the distinction drawn by the Lord and his warning to guard watchfully against the coming of false prophets? But others imagining themselves possessed of the Holy Spirit and of a prophetic gift, were elated and not a little puffed up; and forgetting the distinction of the Lord, they challenged the mad and insidious and seducing spirit, and were cheated and deceived by him. In consequence of this, he could no longer be held in check, so as to keep silence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Thus by artifice, or rather by such a system of wicked craft, the devil, devising destruction for the disobedient, and being unworthily honored by them, secretly excited and inflamed their understandings which had already become estranged from the true faith. And he stirred up besides two women, and filled them with the false spirit, so that they talked wildly and unreasonably and strangely, like the person already mentioned. And the spirit pronounced them blessed as they rejoiced and gloried in him, and puffed them up by the magnitude of his promises. But sometimes he rebuked them openly in a wise and faithful manner, that he might seem to be a reprover. But those of the Phrygians that were deceived were few in number. “And the arrogant spirit taught them to revile the entire universal Church under heaven, because the spirit of false prophecy received neither honor from it nor entrance into it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' For the faithful in Asia met often in many places throughout Asia to consider this matter, and examined the novel utterances and pronounced them profane, and rejected the heresy, and thus these persons were expelled from the Church and debarred from communion.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Having related these things at the outset, and continued the refutation of their delusion through his entire work, in the second book he speaks as follows of their end:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' “Since, therefore, they called us slayers of the prophets because we did not receive their loquacious prophets, who, they say, are those that the Lord promised to send to the people, let them answer as in God’s presence: Who is there, O friends, of these who began to talk, from Montanus and the women down, that was persecuted by the Jews, or slain by lawless men? None. Or has any of them been seized and crucified for the Name? Truly not. Or has one of these women ever been scourged in the synagogues of the Jews, or stoned? No; never anywhere.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But by another kind of death Montanus and Maximilla are said to have died. For the report is that, incited by the spirit of frenzy, they both hung themselves; not at the same time, but at the time which common report gives for the death of each. And thus they died, and ended their lives like the traitor Judas.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' So also, as general report says, that remarkable person, the first steward, as it were, of their so-called prophecy, one Theodotus—who, as if at sometime taken up and received into heaven, fell into trances, and entrusted himself to the deceitful spirit—was pitched like a quoit, and died miserably?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' They say that these things happened in this manner. But as we did not see them, O friend, we do not pretend to know. Perhaps in such a manner, perhaps not, Montanus and Theodotus and the above-mentioned woman died.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' He says again in the same book that the holy bishops of that time attempted to refute the spirit in Maximilla, but were prevented by others who plainly co-operated with the spirit.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' He writes as follows: “And let not the spirit, in the same work of Asterius Urbanus, say through Maximilla, ‘I am driven away from the sheep like a wolf. I am not a wolf. I am word and spirit and power.’ But let him show clearly and prove the power in the spirit. And by the spirit let him compel those to confess him who were then present for the purpose of proving and reasoning with the talkative spirit, those eminent men and bishops, Zoticus, from the village Comana and Julian, from Apamea, whose mouths the followers of Themiso muzzled, refusing to per-knit the false and seductive spirit to be refuted by them.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' Again in the same work, after saying other things in refutation of the false prophecies of Maximilla, he indicates the time when he wrote these accounts, and mentions her predictions in which she prophesied wars and anarchy. Their falsehood he censures in the following manner:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' “And has not this been shown clearly to be false? For it is to-day more than thirteen years since the woman died, and there has been neither a partial nor general war in the world; but rather, through the mercy of God, continued peace even to the Christians.” These things are taken from the second book.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' I will add also short extracts from the third book, in which he speaks thus against their boasts that many of them had suffered, martyrdom: “When therefore they are at a loss, being refuted in all that they say, they try to take refuge in their martyrs, alleging that they have many martyrs, and that this is sure evidence of the, power of the so-called prophetic spirit that is with them. But this, as it appears, is entirely fallacious.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' For some of the heresies have a great many martyrs; but surely we shall not on that account agree with them or confess that they hold the truth. And first, indeed, those called Marcionites, from the heresy of Marcion, say that they have a multitude of martyrs for Christ; yet they do not confess Christ himself in truth.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' A little farther on he continues: “When those called to martyrdom from the Church for the truth of the faith have met with any of the so-called martyrs of the Phrygian heresy, they have separated from them, and died without any fellowship with them, because they did not wish to give their assent to the spirit of Montanus and the women. And that this is true and took place in our own time in Apamea on the Mæander, among those who suffered martyrdom with Gaius and Alexander of Eumenia, is well known.”',
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
      ' In this work he mentions a writer, Miltiades, stating that he also wrote a certain book against the above-mentioned heresy. After quoting some of their words, he adds: “Having found these things in a certain work of theirs in opposition to the work of the brother Alcibiades, in which he shows that a prophet ought not to speak in ecstasy, I made an abridgment.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' A little further on in the same work he gives a list of those who prophesied under the new covenant, among whom he enumerates a certain Ammia and Quadratus, saying “But the false prophet falls into an ecstasy, in which he is without shame or fear. Beginning with purposed ignorance, he passes on, as has been stated, involuntary madness of soul.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' They cannot show that one of the old or one of the new prophets was thus carried away in spirit. Neither can they boast of Agabus, or Judas, or Silas, or the daughters of Philip, or Ammia in Philadelphia, or Quadratus, or any others not belonging to them.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And again after a little he says: “For if after Quadratus and Ammia in Philadelphia, as they assert, the women with Montanus received the prophetic gift, let them show who among them received it from Montanus and the women. For the apostle thought it necessary that the prophetic gift should continue in all the Church until the final coming. But they cannot show it, though this is the fourteenth year since the death of Maximilla.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' He writes thus. But the Miltiades to whom he refers has left other monuments of his own zeal for the Divine Scriptures, in the discourses which he composed against the Greeks and against the Jews, answering each of them separately in two books. And in addition he addresses an apology to the earthly rulers, in behalf of the philosophy which he embraced.',
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
      ' As the so-called Phrygian heresy was still flourishing in Phrygia in his time, Apollonius also, an ecclesiastical writer, undertook its refutation, and wrote a special work against it, correcting in detail the false prophecies current among them and reproving the life of the founders of the heresy. But hear his own words respecting Montanus:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “His actions and his teaching show who this new teacher is. This is he who taught the dissolution of marriage; who made laws for fasting; who named Pepuza and Tymion, small towns in Phrygia, Jerusalem, wishing to gather people to them from all directions; who appointed collectors of money; who contrived the receiving of gifts under the name of offerings; who provided salaries for those who preached his doctrine, that its teaching might prevail through gluttony.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He writes thus concerning Montanus; and a little farther on he writes as follows concerning his prophetesses: “We show that these first prophetesses themselves, as soon as they were filled with the Spirit, abandoned their husbands. How falsely therefore they speak who call Prisca a virgin.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Afterwards he says: “Does not all Scripture seem to you to forbid a prophet to receive gifts and money? When therefore I see the prophetess receiving gold and silver and costly garments, how can I avoid reproving her?”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And again a little farther on he speaks thus concerning one of their confessors: “So also Themiso, who was clothed with plausible covetousness, could not endure the sign of confession, but threw aside bonds for an abundance of possessions. Yet, though he should have been humble on this account, he dared to boast as a martyr, and in imitation of the apostle, he wrote a certain catholic epistle, to instruct those whose faith was better than his own, contending for words of empty sound, and blaspheming against the Lord and the apostles and the holy Church.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And again concerning others of those honored among them as martyrs, he writes as follows: “Not to speak of many, let the prophetess herself tell us of Alexander, who called himself a martyr, with whom she is in the habit of banqueting, and who is worshiped by many. We need not mention his robberies and other daring deeds for which he was punished, but the archives contain them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Which of these forgives the sins of the other? Does the prophet the robberies of the martyr, or the: martyr the covetousness of the prophet? For although the Lord said,’ Provide neither gold, nor silver, neither two coats,’ these men, in complete opposition, transgress in respect to the possession of the forbidden things. For we will show that those whom they call prophets and martyrs gather their gain not only from rich men, but also from the poor, and orphans, and widows.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But if they are confident, let them stand up and discuss these matters, that if convicted they may hereafter cease transgressing. For the fruits of the prophet must be tried; ‘for the tree is known by its fruit.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But that those who wish may know concerning Alexander, he was tried by Æmilius Frontinus, proconsul at Ephesus; not on account of the Name, but for the robberies which he had committed, being already an apostate. Afterwards, having falsely declared for the name of the Lord, he was released, having deceived the faithful that were there. And his own parish, from which he came, did not receive him, because he was a robber. Those who wish to learn about him have the public records of Asia. And yet the prophet with whom he spent many years knows nothing about him!',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Exposing him, through him we expose also the pretense of the prophet. We could show the same thing of many others. But if they are confident, let them endure the test.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Again, in another part of his work he speaks as follows of the prophets of whom they boast: “If they deny that their prophets have received gifts, let them acknowledge this: that if they are convicted of receiving them, they are not prophets. And we will bring a multitude of proofs of this. But it is necessary that all the fruits of a prophet should be examined. Tell me, does a prophet dye his hair? Does a prophet stain his eyelids? Does a prophet delight in adornment? Does a prophet play with tables and dice? Does a prophet lend on usury? Let them confess whether these things are lawful or not; but I will show that they have been done by them.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' This same Apollonius states in the same work that, at the time of his writing, it was the fortieth year since Montanus had begun his pretended prophecy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And he says also that Zoticus, who was mentioned by the former writer, when Maximilla was pretending to prophesy in Pepuza, resisted her and endeavored to refute the spirit that was working in her; but was prevented by those who agreed with her. He mentions also a certain Thraseas among the martyrs of that time. He speaks, moreover, of a tradition that the Saviour commanded his apostles not to depart from Jerusalem for twelve years. He uses testimonies also from the Revelation of John, and he relates that a dead man had, through the Divine power, been raised by John himself in Ephesus. He also adds other things by which he fully and abundantly exposes the error of the heresy of which we have been speaking. These are the matters recorded by Apollonius.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[19]->title,
      'subtitle' => $metadata->book->chapters[19]->subtitle,
      'id' => $metadata->book->chapters[19]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Serapion, who, as report says, succeeded Maximinus at that time as bishop of the church of Antioch, mentions the works of Apolinarius against the above-mentioned heresy. And he alludes to him in a private letter to Caricus and Pontius, in which he himself exposes the same heresy, and adds the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “That you may see that the doings of this lying band of the new prophecy, so called, are an abomination to all the brotherhood throughout the world, I have sent you writings of the most blessed Claudius Apolinarius, bishop of Hierapolis in Asia.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In the same letter of Serapion the signatures of several bishops are found, one of whom subscribes himself as follows: “I, Aurelius Cyrenius, a witness, pray for your health.” And another in this manner: “Ælius Publius Julius, bishop of Debeltum, a colony of Thrace. As God liveth in the heavens, the blessed Sotas in Anchialus desired to cast the demon out of Priscilla, but the hypocrites did not permit him.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And the autograph signatures of many other bishops who agreed with them are contained in the same letter. So much for these persons.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[20]->title,
      'subtitle' => $metadata->book->chapters[20]->subtitle,
      'id' => $metadata->book->chapters[20]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Irenæus wrote several letters against those who were disturbing the sound ordinance of the Church at Rome. One of them was to Blastus On Schism; another to Florinus On Monarchy, or That God is not the Author of Evil. For Florinus seemed to be defending this opinion. And because he was being drawn away by the error of Valentinus, Irenæus wrote his work On the Ogdoad, in which he shows that he himself had been acquainted with the first successors of the apostles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' At the close of the treatise we have found a most beautiful note which we are constrained to insert in this work. It runs as follows: “I adjure thee who mayest copy this book, by our Lord Jesus Christ, and by his glorious advent when he comes to judge the living and the dead, to compare what thou shalt write, and correct it carefully by this manuscript, and also to write this adjuration, and place it in the copy.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' These things may be profitably read in his work, and related by us, that we may have those ancient and truly holy men as the best example of painstaking carefulness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' In the letter to Florinus, of which we have spoken, Irenæus mentions again his intimacy with Polycarp, saying: “These doctrines, O Florinus, to speak mildly, are not of sound judgment. These doctrines disagree with the Church, and drive into the greatest impiety those who accept them. These doctrines, not even the heretics outside of the Church, have ever dared to publish. These doctrines, the presbyters who were before us, and who were companions of the apostles, did not deliver to thee.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For when I was a boy, I saw thee in lower Asia with Polycarp, moving in splendor in the royal court, and endeavoring to gain his approbation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' I remember the events of that time more clearly than those of recent years. For what boys learn, growing with their mind, becomes joined with it; so that I am able to describe the very place in which the blessed Polycarp sat as he discoursed, and his goings out and his comings in, and the manner of his life, and his physical appearance, and his discourses to the people, and the accounts which he gave of his intercourse with John and with the others who had seen the Lord. And as he remembered their words, and what he heard from them concerning the Lord, and concerning his miracles and his teaching, having received them from eyewitnesses of the ‘Word of life,’ Polycarp related all things in harmony with the Scriptures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' These things being told me by the mercy of God, I listened to them attentively, noting them down, not on paper, but in my heart. And continually, through God’s grace, I recall them faithfully. And I am able to bear witness before God that if that blessed and apostolic presbyter had heard any such thing, he would have cried out, and stopped his ears, and as was his custom, would have exclaimed, O good God, unto what times hast thou spared me that I should endure these things? And he would have fled from the place where, sitting or standing, he had heard such words.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And this can be shown plainly from the letters which he sent, either to the neighboring churches for their confirmation, or to some of the brethren, admonishing and exhorting them.” Thus far Irenæus.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[21]->title,
      'subtitle' => $metadata->book->chapters[21]->subtitle,
      'id' => $metadata->book->chapters[21]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' About the same time, in the reign of Commodus, our condition became more favorable, and through the grace of God the churches throughout the entire world enjoyed peace, and the word of salvation was leading every soul, from every race of man to the devout worship of the God of the universe. So that now at Rome many who were highly distinguished for wealth and family turned with all their household and relatives unto their salvation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But the demon who hates what is good, being malignant in his nature, could not endure this, but prepared himself again for conflict, contriving many devices against us. And he brought to the judgment seat Apollonius, of the city of Rome, a man renowned among the faithful for learning and philosophy, having stirred up one of his servants, who was well fitted for such a purpose, to accuse him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But this wretched man made the charge unseasonably, because by a royal decree it was unlawful that informers of such things should live. And his legs were broken immediately, Perennius the judge having pronounced this sentence upon him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But the martyr, highly beloved of God, being earnestly entreated and requested by the judge to give an account of himself before the Senate, made in the presence of all an eloquent defense of the faith for which he was witnessing. And as if by decree of the Senate he was put to death by decapitation; an ancient law requiring that those who were brought to the judgment seat and refused to recant should not be liberated.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Whoever desires to know his arguments before the judge and his answers to the questions of Perennius, and his entire defense before the Senate will find them in the records of the ancient martyrdoms which we have collected.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[22]->title,
      'subtitle' => $metadata->book->chapters[22]->subtitle,
      'id' => $metadata->book->chapters[22]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' In the tenth year of the reign of Commodus, Victor succeeded Eleutherus, the latter having held the episcopate for thirteen years. In the same year, after Julian a had completed his tenth year, Demetrius received the charge of the parishes at Alexandria. At this time the above-mentioned Serapion, the eighth from the apostles, was still well known as bishop of the church at Antioch. Theophilus presided at Cæsarea in Palestine; and Narcissus, whom we have mentioned before, still had charge of the church at Jerusalem. Bacchylus at the same time was bishop of Corinth in Greece, and Polycrates of the parish of Ephesus. And besides these a multitude of others, as is likely, were then prominent. But we have given the names of those alone, the soundness of whose faith has come down to us in writing.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[23]->title,
      'subtitle' => $metadata->book->chapters[23]->subtitle,
      'id' => $metadata->book->chapters[23]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' A question of no small importance arose at that time. For the parishes of all Asia, as from an older tradition, held that the fourteenth day of the moon, on which day the Jews were commanded to sacrifice the lamb, should be observed as the feast of the Saviour’s passover. It was therefore necessary to end their fast on that day, whatever day of the week it should happen to be. But it was not the custom of the churches in the rest of the world to end it at this time, as they observed the practice which, from apostolic tradition, has prevailed to the present time, of terminating the fast on no other day than on that of the resurrection of our Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Synods and assemblies of bishops were held on this account, and all, with one consent, through mutual correspondence drew up an ecclesiastical decree, that the mystery of the resurrection of the Lord should be celebrated on no other but the Lord’s day, and that we should observe the close of the paschal fast on this day only. There is still extant a writing of those who were then assembled in Palestine, over whom Theophilus, bishop of Cæsarea, and Narcissus, bishop of Jerusalem, presided.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And there is also another writing extant of those who were assembled at Rome to consider the same question, which bears the name of Bishop Victor; also of the bishops in Pontus over whom Palmas, as the oldest, presided; and of the parishes in Gaul of which Irenæus was bishop, and of those in Osrhoene and the cities there; and a personal letter of Bacchylus, bishop of the church at Corinth, and of a great many others, who uttered the same opinion and judgment, and cast the same vote. And that which has been given above was their unanimous decision.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[24]->title,
      'subtitle' => $metadata->book->chapters[24]->subtitle,
      'id' => $metadata->book->chapters[24]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' But the bishops of Asia, led by Polycrates, decided to hold to the old custom handed down to them. He himself, in a letter which he addressed to Victor and the church of Rome, set forth in the following words the tradition which had come down to him:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “We observe the exact day; neither adding, nor taking away. For in Asia also great lights have fallen asleep, which shall rise again on the day of the Lord’s coming, when he shall come with glory from heaven, and shall seek out all the saints.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Among these are Philip, one of the twelve apostles, who fell asleep in Hierapolis; and his two aged virgin daughters, and another daughter, who lived in the Holy Spirit and now rests at Ephesus; and, moreover, John, who was both a witness and a teacher, who reclined upon the bosom of the Lord, and, being a priest, wore the sacerdotal plate. He fell asleep at Ephesus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And Polycarp in Smyrna, who was a bishop and martyr; and Thraseas, bishop and martyr from Eumenia, who fell asleep in Smyrna.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Why need I mention the bishop and martyr Sagaris who fell asleep in Laodicea, or the blessed Papirius, or Melito, the Eunuch who lived altogether in the Holy Spirit, and who lies in Sardis, awaiting the episcopate from heaven, when he shall rise from the dead?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' All these observed the fourteenth day of the passover according to the Gospel, deviating in no respect, but following the rule of faith. And I also, Polycrates, the least of you all, do according to the tradition of my relatives, some of whom I have closely followed. For seven of my relatives were bishops; and I am the eighth. And my relatives always observed the day when the people put away the leaven.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' I, therefore, brethren, who have lived sixty-five years in the Lord, and have met with the brethren throughout the world, and have gone through every Holy Scripture, am not affrighted by terrifying words. For those greater than I have said ‘We ought to obey God rather than man.’”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' He then writes of all the bishops who were present with him and thought as he did. His words are as follows: “I could mention the bishops who were present, whom I summoned at your desire; whose names, should I write them, would constitute a great multitude. And they, beholding my littleness, gave their consent to the letter, knowing that I did not bear my gray hairs in vain, but had always governed my life by the Lord Jesus.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Thereupon Victor, who presided over the church at Rome, immediately attempted to cut off from the common unity the parishes of all Asia, with the churches that agreed with them, as heterodox; and he wrote letters and declared all the brethren there wholly excommunicate.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' But this did not please all the bishops. And they besought him to consider the things of peace, and of neighborly unity and love. Words of theirs are extant, sharply rebuking Victor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Among them was Irenæus, who, sending letters in the name of the brethren in Gaul over whom he presided, maintained that the mystery of the resurrection of the Lord should be observed only on the Lord’s day. He fittingly admonishes Victor that he should not cut off whole churches of God which observed the tradition of an ancient custom and after many other words he proceeds as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' “For the controversy is not only concerning the day, but also concerning the very manner of the fast. For some think that they should fast one day, others two, yet others more; some, moreover, count their day as consisting of forty hours day and night.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And this variety in its observance has not originated in our time; but long before in that of our ancestors. It is likely that they did not hold to strict accuracy, and thus formed a custom for their posterity according to their own simplicity and peculiar mode. Yet all of these lived none the less in peace, and we also live in peace with one another; and the disagreement in regard to the fast confirms the agreement in the faith.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' He adds to this the following account, which I may properly insert: “Among these were the presbyters before Soter, who presided over the church which thou now rulest. We mean Anicetus, and Plus, and Hyginus, and Telesphorus, and Xystus. They neither observed it themselves, nor did they permit those after them to do so. And yet though not observing it, they were none the less at peace with those who came to them from the parishes in which it was observed; although this observance was more opposed to those who did not observe it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' But none were ever cast out on account of this form; but the presbyters before thee who did not observe it, sent the eucharist to those of other parishes who observed it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' And when the blessed Polycarp was at Rome in the time of Anicetus, and they disagreed a little about certain other things, they immediately made peace with one another, not caring to quarrel over this matter. For neither could Anicetus persuade Polycarp not to observe what he had always observed with John the disciple of our Lord, and the other apostles with whom he had associated; neither could Polycarp persuade Anicetus to observe it as he said that he ought to follow the customs of the presbyters that had preceded him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But though matters were in this shape, they communed together, and Anicetus conceded the administration of the eucharist in the church to Polycarp, manifestly as a mark of respect. And they parted from each other in peace, both those who observed, and those who did not, maintaining the peace of the whole church.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' Thus Irenæus, who truly was well named, became a peacemaker in this matter, exhorting and negotiating in this way in behalf of the peace of the churches. And he conferred by letter about this mooted question, not only with Victor, but also with most of the other rulers of the churches.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[25]->title,
      'subtitle' => $metadata->book->chapters[25]->subtitle,
      'id' => $metadata->book->chapters[25]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Those in Palestine whom we have recently mentioned, Narcissus and Theophilus, and with them Cassius, bishop of the church of Tyre, and Clarus of the church of Ptolemais, and those who met with them, having stated many things respecting the tradition concerning the passover which had come to them in succession from the apostles, at the close of their writing add these words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “Endeavor to send copies of our letter to every church, that we may not furnish occasion to those who easily deceive their souls. We show you indeed that also in Alexandria they keep it on the same day that we do. For letters are carried from us to them and from them to us, so that in the same manner and at the same time we keep the sacred day.”',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[26]->title,
      'subtitle' => $metadata->book->chapters[26]->subtitle,
      'id' => $metadata->book->chapters[26]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Besides the works and letters of Irenæus which we have mentioned, a certain book of his On Knowledge, written against the Greeks, very concise and remarkably forcible, is extant; and another, which he dedicated to a brother Martian, In Demonstration of the Apostolic Preaching; and a volume containing various Dissertations, in which he mentions the Epistle to the Hebrews and the so-called Wisdom of Solomon, making quotations from them. These are the works of Irenæus which have come to our knowledge. Commodus having ended his reign after thirteen years, Severus became emperor in less than six months after his death, Pertinax having reigned during the intervening time.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[27]->title,
      'subtitle' => $metadata->book->chapters[27]->subtitle,
      'id' => $metadata->book->chapters[27]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Numerous memorials of the faithful zeal of the ancient ecclesiastical men of that time are still preserved by many. Of these we would note particularly the writings of Heraclitus On the Apostle, and those of Maximus on the question so much discussed among heretics, the Origin of Evil, and on the Creation of Matter. Also those of Candidus on the Hexæmeron, and of Apion on the same subject; likewise of Sextus on the Resurrection, and another treatise of Arabianus, and writings of a multitude of others, in regard to whom, because we have no data, it is impossible to state in our work when they lived, or to give any account of their history. And works of many others have come down to us whose names we are unable to give, orthodox and ecclesiastical, as their interpretations of the Divine Scriptures show, but unknown to us, because their names are not stated in their writings.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[28]->title,
      'subtitle' => $metadata->book->chapters[28]->subtitle,
      'id' => $metadata->book->chapters[28]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' In a laborious work by one of these writers against the heresy of Artemon, which Paul of Samosata attempted to revive again in our day, there is an account appropriate to the history which we are now examining.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For he criticises, as a late innovation, the above-mentioned heresy which teaches that the Saviour was a mere man, because they were attempting to magnify it as ancient? Having given in his work many other arguments in refutation of their blasphemous falsehood, he adds the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “For they say that all the early teachers and the apostles received and taught what they now declare, and that the truth of the Gospel was preserved until the times of Victor, who was the thirteenth bishop of Rome from Peter, but that from his successor, Zephyrinus, the truth had been corrupted.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And what they say might be plausible, if first of all the Divine Scriptures did not contradict them. And there are writings of certain brethren older than the times of Victor, which they wrote in behalf of the truth against the heathen, and against the heresies which existed in their day. I refer to Justin and Miltiades and Tatian and Clement and many others, in all of whose works Christ is spoken of as God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For who does not know the works of Irenæus and of Melito and of others which teach that Christ is God and man? And how many psalms and hymns, written by the faithful brethren from the beginning, celebrate Christ the Word of God, speaking of him as Divine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' How then since the opinion held by the Church has been preached for so many years, can its preaching have been delayed as they affirm, until the times of Victor? And how is it that they are not ashamed to speak thus falsely of Victor, knowing well that he cut off from communion Theodotus, the cobbler, the leader and father of this God-denying apostasy, and the first to declare that Christ is mere man? For if Victor agreed with their opinions, as their slander affirms, how came he to cast out Theodotus, the inventor of this heresy?”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' So much in regard to Victor. His bishopric lasted ten years, and Zephyrinus was appointed his successor about the ninth year of the reign of Severus. The author of the above-mentioned book, concerning the founder of this heresy, narrates another event which occurred in the time of Zephyrinus, using these words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' “I will remind many of the brethren of a fact which took place in our time, which, had it happened in Sodom, might, I think, have proved a warning to them. There was a certain confessor, Natalius, not long ago, but in our own day.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' This man was deceived at one time by Asclepiodotus and another Theodotus, a money-changer. Both of them were disciples of Theodotus, the cobbler, who, as I have said, was the first person excommunicated by Victor, bishop at that time, on account of this sentiment, or rather senselessness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Natalius was persuaded by them to allow himself to be chosen bishop of this heresy with a salary, to be paid by them, of one hundred and fifty denarii a month.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' When he had thus connected himself with them, he was warned oftentimes by the Lord through visions. For the compassionate God and our Lord Jesus Christ was not willing that a witness of his own sufferings, being cast out of the Church, should perish.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But as he paid little regard to the visions, because he was ensnared by the first position among them and by that shameful covetousness which destroys a great many, he was scourged by holy angels, and punished severely through the entire night. Thereupon having risen in the morning, he put on sackcloth and covered himself with ashes, and with great haste and tears he fell down before Zephyrinus, the bishop, rolling at the feet not only of the clergy, but also of the laity; and he moved with his tears the compassionate Church of the merciful Christ. And though he used much supplication, and showed the welts of the stripes which he had received, yet scarcely was he taken back into communion.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' We will add from the same writer some other extracts concerning them, which run as follows: “They have treated the Divine Scriptures recklessly and without fear. They have set aside the rule of ancient faith; and Christ they have not known. They do not endeavor to learn what the Divine Scriptures declare, but strive laboriously after any form of syllogism which may be devised to sustain their impiety. And if any one brings before them a passage of Divine Scripture, they see whether a conjunctive or disjunctive form of syllogism can be made from it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And as being of the earth and speaking of the earth, and as ignorant of him who cometh from above, they forsake the holy writings of God to devote themselves to geometry. Euclid is laboriously measured by some of them; and Aristotle and Theophrastus are admired; and Galen, perhaps, by some is even worshiped.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' But that those who use the arts of unbelievers for their heretical opinions and adulterate the simple faith of the Divine Scriptures by the craft of the godless, are far from the faith, what need is there to say? Therefore they have laid their hands boldly upon the Divine Scriptures, alleging that they have corrected them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' That I am not speaking falsely of them in this matter, whoever wishes may learn. For if any one will collect their respective copies, and compare them one with another, he will find that they differ greatly.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' Those of Asclepiades, for example, do not agree with those of Theodotus. And many of these can be obtained, because their disciples have assiduously written the corrections, as they call them, that is the corruptions, of each of them. Again, those of Hermophilus do not agree with these, and those of Apollonides are not consistent with themselves. For you can compare those prepared by them at an earlier date with those which they corrupted later, and you will find them widely different.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' But how daring this offense is, it is not likely that they themselves are ignorant. For either they do not believe that the Divine Scriptures were spoken by the Holy Spirit, and thus are unbelievers, or else they think themselves wiser than the Holy Spirit, and in that case what else are they than demoniacs? For they cannot deny the commission of the crime, since the copies have been written by their own hands. For they did not receive such Scriptures from their instructors, nor can they produce any copies from which they were transcribed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' But some of them have not thought it worth while to corrupt them, but simply deny the law and the prophets, and thus through their lawless and impious teaching under pretense of grace, have sunk to the lowest depths of perdition.” Let this suffice for these things.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
