<?php
$html->add(new BS_Banner(
  null,

  'Appendix to book eight of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering various martyrdoms'
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
      ' It was in the nineteenth year of the reign of Diocletian, in the month Xanthicus, which is called April by the Romans, about the time of the feast of our Saviour’s passion, while Flavianus was governor of the province of Palestine, that letters were published everywhere, commanding that the churches be leveled to the ground and the Scriptures be destroyed by fire, and ordering that those who held places of honor be degraded, and that the household servants, if they persisted in the profession of Christianity, be deprived of freedom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Such was the force of the first edict against us. But not long after other letters were issued, commanding that all the bishops of the churches everywhere be first thrown into prison, and afterward, by every artifice, be compelled to sacrifice.',
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
      ' The first of the martyrs of Palestine was Procopius, who, before he had received the trial of imprisonment, immediately on his first appearance before the governor’s tribunal, having been ordered to sacrifice to the so-called gods, declared that he knew only one to whom it was proper to sacrifice, as he himself wills. But when he was commanded to offer libations to the four emperors, having quoted a sentence which displeased them, he was immediately beheaded. The quotation was from the poet: “The rule of many is not good; let there be one ruler and one king.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' It was the seventh day of the month Desius, the seventh before the ides of June, as the Romans reckon, and the fourth day of the week, when this first example was given at Caesura in Palestine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Afterwards, in the same city, many rulers of the country churches readily endured terrible sufferings, and furnished to the beholders an example of noble conflicts. But others, benumbed in spirit by terror, were easily weakened at the first onset. Of the rest, each one endured different forms of torture, as scourgings without number, and rackings, and tearings of their sides, and insupportable fetters, by which the hands of some were dislocated.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Yet they endured what came upon them, as in accordance with the inscrutable purposes of God. For the hands of one were seized, and he was led to the altar, while they thrust into his right hand the polluted and abominable offering, and he was dismissed as if he had sacrificed. Another had not even touched it, yet when others said that he had sacrificed, he went away in silence. Another, being taken up half dead, was cast aside as if already dead, and released from his bonds, and counted among the sacrificers. When another cried out, and testified that he would not obey, he was struck in the mouth, and silenced by a large band of those who were drawn up for this purpose, and driven away by force, even though he had not sacrificed. Of such consequence did they consider it, to seem by any means to have accomplished their purpose.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Therefore, of all this number, the only ones who were honored with the crown of the holy martyrs were Alphæus and Zacchæus. After stripes and scrapings and severe bonds and additional tortures and various other trials, and after having their feet stretched for a night and day over four holes in the stocks, on the seventeenth day of the month Dius,—that is, according to the Romans, the fifteenth before the Kalends of December—having confessed one only God and Christ Jesus as king, as if they had uttered some blasphemy, they were beheaded like the former martyr.',
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
      ' What occurred to Romanus on the same day at Antioch, is also worthy of record. For he was a native of Palestine, a deacon and exorcist in the parish of Cæsarea; and being present at the destruction of the churches, he beheld many men, with women and children, going up in crowds to the idols and sacrificing. But, through his great zeal for religion, he could not endure the sight, and rebuked them with a loud voice.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Being arrested for his boldness, he proved a most noble witness of the truth, if there ever was one. For when the judge informed him that he was to die by fire, he received the sentence with cheerful countenance and most ready mind, and was led away. When he was bound to the stake, and the wood piled up around him, as they were awaiting the arrival of the emperor before lighting the fire, he cried, “Where is the fire for me?”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Having said this, he was summoned again before the emperor, and subjected to the unusual torture of having his tongue cut out. But he endured this with fortitude and showed to all by his deeds that the Divine Power is present with those who endure any hardship whatever for the sake of religion, lightening their sufferings and strengthening their zeal. When he learned of this strange mode of punishment, the noble man was not terrified, but put out his tongue readily, and offered it with the greatest alacrity to those who cut it off.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' After this punishment he was thrown into prison, and suffered there for a very long time. At last the twentieth anniversary of the emperor being near, when, according to an established gracious custom, liberty was proclaimed everywhere to all who were in bonds, he alone had both his feet stretched over five holes in the stocks, and while he lay there was strangled, and was thus honored with martyrdom, as he desired.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Although he was outside of his country, yet, as he was a native of Palestine, it is proper to count him among the Palestinian martyrs. These things occurred in this manner during the first year, when the persecution was directed only against the rulers of the Church.',
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
      ' In the course of the second year, the persecution against us increased greatly. And at that time Urbanus being governor of the province, imperial edicts were first issued to him, commanding by a general decree that all the people should sacrifice at once in the different cities, and offer libations to the idols. In Gaza, a city of Palestine, Timotheus endured countless tortures, and afterwards was subjected to a slow and moderate fire. Having given, by his patience in all his sufferings, most genuine evidence of sincerest piety toward the Deity, he bore away the crown of the victorious athletes of religion. At the same time Agapius and our contemporary, Thecla, having exhibited most noble constancy, were condemned as food for the wild beasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But who that beheld these things would not have admired, or if they heard of them by report, would not have been astonished? For when the heathen everywhere were holding a festival and the customary shows, it was noised abroad that besides the other entertainments, the public combat of those who had lately been condemned to wild beasts would also take place.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' As this report increased and spread in all directions, six young men, namely, Timolaus, a native of Pontus, Dionysius from Tripolis in Phœnicia, Romulus, a sub-deacon of the parish of Diospolis, Pæsis and Alexander, both Egyptians, and another Alexander from Gaza, having first bound their own hands, went in haste to Urbanus, who was about to open the exhibition, evidencing great zeal for martyrdom. They confessed that they were Christians, and by their ambition for all terrible things, showed that those who glory in the religion of the God of the universe do not cower before the attacks of wild beasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Immediately, after creating no ordinary astonishment in the governor and those who were with him, they were cast into prison. After a few days two others were added to them. One of them, named Agapius, had in former confessions endured dreadful torments of various kinds. The other, who had supplied them with the necessaries of life, was called Dionysius. All of these eight were beheaded on one day at Cæsarea, on the twenty-fourth day of the month Dystrus, which is the ninth before the Kalends of April.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Meanwhile, a change in the emperors occurred, and the first of them all in dignity, and the second retired into private life, and public affairs began to be troubled.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Shortly after the Roman government became divided against itself, and a cruel war arose among them. And this division, with the troubles which grew out of it, was not settled until peace toward us had been established throughout the entire Roman Empire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' For when this peace arose for all, as the daylight after the darkest and most gloomy night, the public affairs of the Roman government were re-established, and became happy and peaceful, and the ancestral good-will toward each other was revived. But we will relate these things more fully at the proper time. Now let us return to the regular course of events.',
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
      ' Maximinus Cæsar having come at that time into the government, as if to manifest to all the evidences of his reborn enmity against God, and of his impiety, armed himself for persecution against us more vigorously than his predecessors.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In consequence, no little confusion arose among all, and they scattered here and there, endeavoring in some way to escape the danger; and there was great commotion everywhere. But what words would suffice for a suitable description of the Divine love and boldness, in confessing God, of the blessed and truly innocent lamb, I refer to the martyr Apphianus,—who presented in the sight of all, before the gates of Cæsarea, a wonderful example of piety toward the only God?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He was at that time not twenty years old. He had first spent a long time at Berytus, for the sake of a secular Grecian education, as he belonged to a very wealthy family. It is wonderful to relate how, in such a city, he was superior to youthful passions, and clung to virtue, uncorrupted neither by his bodily vigor nor his young companions; living discreetly, soberly and piously, in accordance with his profession of the Christian doctrine and the life of his teachers.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' If it is needful to mention his native country, and give honor to it as producing this noble athlete of piety, we will do so with pleasure.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The young man came from Pagæ,—if any one is acquainted with the place—a city in Lycia of no mean importance. After his return from his course of study in Berytus, though his father held the first place in his country, he could not bear to live with him and his relatives, as it did not please them to live according to the rules of religion. Therefore, as if he were led by the Divine Spirit, and in accordance with a natural, or rather an inspired and true philosophy, regarding this preferable to what is considered the glory of life, and despising bodily comforts, he secretly left his family. And because of his faith and hope in God, paying no attention to his daily needs, he was led by the Divine Spirit to the city of Cæsarea, where was prepared for him the crown of martyrdom for piety.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Abiding with us there, and conferring with us in the Divine Scriptures diligently for a short time, and fitting himself zealously by suitable exercises, he exhibited such an end as would astonish any one should it be seen again.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Who, that hears of it, would not justly admire his courage, boldness, constancy, and even more than these the daring deed itself, which evidenced a zeal for religion and a spirit truly superhuman?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' For in the second attack upon us under Maximinus, in the third year of the persecution, edicts of the tyrant were issued for the first time, commanding that the rulers of the cities should diligently and speedily see to it that all the people offered sacrifices. Throughout the city of Cæsarea, by command of the governor, the heralds were summoning men, women, and children to the temples of the idols, and besides this, the chiliarchs were calling out each one by name from a roll, and an immense crowd of the wicked were rushing together from all quarters. Then this youth fearlessly, while no one was aware of his intentions, eluded both us who lived in the house with him and the whole band of soldiers that surrounded the governor, and rushed up to Urbanus as he was offering libations, and fearlessly seizing him by the right hand, straightway put a stop to his sacrificing, and skillfully and persuasively, with a certain divine inspiration, exhorted him to abandon his delusion, because it was not well to forsake the one and only true God, and sacrifice to idols and demons.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' It is probable that this was done by the youth through a divine power which led him forward, and which all but cried aloud in his act, that Christians, who were truly such, were so far from abandoning the religion of the God of the universe which they had once espoused, that they were not only superior to threats and the punishments which followed, but yet bolder to speak with noble and untrammeled tongue, and, if possible, to summon even their persecutors to turn from their ignorance and acknowledge the only true God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Thereupon, he of whom we are speaking, and that instantly, as might have been expected after so bold a deed, was torn by the governor and those who were with him as if by wild beasts. And having endured manfully innumerable blows over his entire body, he was straightway cast into prison.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' There he was stretched by the tormentor with both his feet in the stocks for a night and a day; and the next day he was brought before the judge. As they endeavored to force him to surrender, he exhibited all constancy under suffering and terrible tortures. His sides were torn, not once, or twice, but many times, to the bones and the very bowels; and he received so many blows on his face and neck that those who for a long time had been well acquainted with him could not recognize his swollen face.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But as he would not yield under this treatment, the torturers, as commanded, covered his feet with linen cloths soaked in oil and set them on fire. No word can describe the agonies which the blessed one endured from this. For the fire consumed his flesh and penetrated to his bones, so that the humors of his body were melted and oozed out and dropped down like wax.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But as he was not subdued by this, his adversaries being defeated and unable to comprehend his superhuman constancy, cast him again into prison. A third time he was brought before the judge; and having witnessed the same profession, being half dead, he was finally thrown into the depths of the sea.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But what happened immediately after this will scarcely be believed by those who did not see it. Although we realize this, yet we must record the event, of which to speak plainly, all the inhabitants of Cæsarea were witnesses. For truly there was no age but beheld this marvelous sight.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' For as soon as they had cast this truly sacred and thrice-blessed youth into the fathomless depths of the sea, an uncommon commotion and disturbance agitated the sea and all the shore about it, so that the land and the entire city were shaken by it. And at the same time with this wonderful and sudden perturbation, the sea threw out before the gates of the city the body of the divine martyr, as if unable to endure it. Such was the death of the wonderful Apphianus. It occurred on the second day of the month Xanthicus, which is the fourth day before the Nones of April, on the day of preparation',
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
      ' About the same time, in the city of Tyre, a youth named Ulpianus, after dreadful tortures and most severe scourgings, was enclosed in a raw oxhide, with a dog and with one of those poisonous reptiles, an asp, and cast into the sea. Wherefore I think that we may properly mention him in connection with the martyrdom of Apphianus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Shortly afterwards, Ædesius, a brother of Apphianus, not only in God, but also in the flesh, being a son of the same earthly father, endured sufferings like his, after very many confessions and protracted tortures in bonds, and after he had been sentenced by the governor to the mines in Palestine. He conducted himself through them all in a truly philosophic manner; for he was more highly educated than his brother, and had prosecuted philosophic studies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Finally in the city of Alexandria, when he beheld the judge, who was trying the Christians, offending beyond all bounds, now insulting holy men in various ways, and again consigning women of greatest modesty and even religious virgins to procurers for shameful treatment, he acted like his brother. For as these things seemed insufferable, he went forward with bold resolve, and with his words and deeds overwhelmed the judge with shame and disgrace. After suffering in consequence many forms of torture, he endured a death similar to his brother’s, being cast into the sea. But these things, as I have said, happened to him in this way a little later.',
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
      ' In the fourth year of the persecution against us, on the twelfth day before the Kalends of December, which is the twentieth day of the month Dius, on the day before the Sabbath, while the tyrant Maximinus was present and giving magnificent shows in honor of his birthday, the following event, truly worthy of record, occurred in the city of Cæsarea.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' As it was an ancient custom to furnish the spectators more splendid shows when the emperors were present than at other times,—new and foreign spectacles taking the place of the customary amusements, such as animals brought from India or Ethiopia or other places, or men who could astonish the beholders with skillful bodily exercises—it was necessary at this time, as the emperor was giving the exhibition, to add to the shows something more wonderful. And what should this be?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' A witness of our doctrine was brought into the midst and endured the contest for the true and only religion. This was Agapius, who, as we have stated a little above, was, with Thecla, the second to be thrown to the wild beasts for food. He had also, three times and more, marched with malefactors from the prison to the arena; and every time, after threats from the judge, whether in compassion or in hope that he might change his mind, had been reserved for other conflicts. But the emperor being present, he was brought out at this time, as if he had been appropriately reserved for this occasion, until the very word of the Saviour should be fulfilled in him, which through divine knowledge he declared to his disciples, that they should be brought before kings on account of their testimony unto him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' He was taken into the midst of the arena with a certain malefactor who they said was charged with the murder of his master.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But this murderer of his master, when he had been cast to the wild beasts, was deemed worthy of compassion and humanity, almost like Barabbas in the time of our Saviour. And the whole theater resounded with shouts and cries of approval, because the murderer was humanely saved by the emperor, and deemed worthy of honor and freedom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But the athlete of religion was first summoned by the tyrant and promised liberty if he would deny his profession. But he testified with a loud voice that, not for any fault, but for the religion of the Creator of the universe, he would readily and with pleasure endure whatever might be inflicted upon him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Having said this, he joined the deed to the word, and rushed to meet a bear which had been let loose against him, surrendering himself most cheerfully to be devoured by him. After this, as he still breathed, he was cast into prison. And living yet one day, stones were bound to his feet, and he was drowned in the depths of the sea. Such was the martyrdom of Agapius.',
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
      ' Again, in Cæsarea, when the persecution had continued to the fifth year, on the second day of the month Xanthicus, which is the fourth before the Nones of April, on the very Lord’s day of our Saviour’s resurrection, Theodosia, a virgin from Tyre, a faithful and sedate maiden, not yet eighteen years of age, went up to certain prisoners who were confessing the kingdom of Christ and sitting before the judgment seat, and saluted them, and, as is probable, besought them to remember her when they came before the Lord.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Thereupon, as if she had committed a profane and impious act, the soldiers seized her and led her to the governor. And he immediately, like a madman and a wild beast in his anger, tortured her with dreadful and most terrible torments in her sides and breasts, even to the very bones. And as she still breathed, and withal stood with a joyful and beaming countenance, he ordered her thrown into the waves of the sea. Then passing from her to the other confessors, he condemned all of them to the copper mines in Phæno in Palestine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Afterwards on the fifth of the month Dius, on the Nones of November according to the Romans, in the same city, Silvanus (who at that time was a presbyter and confessor, but who shortly after was honored with the episcopate and died a martyr), and those with him, men who had shown the noblest firmness in behalf of religion, were condemned by him to labor in the same copper mines, command being first given that their ankles be disabled with hot irons.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' At the same time he delivered to the flames a man who was illustrious through numerous other confessions. This was Domninus, who was well known to all in Palestine for his exceeding fearlessness After this the same judge, who was a cruel contriver of suffering, and an inventor of devices against the doctrine of Christ, planned against the pious punishments that had never been heard of. He condemned three to single pugilistic combat. He delivered to be devoured by wild beasts Auxentius, a grave and holy old man. Others who were in mature life he made eunuchs, and condemned them to the same mines. Yet others, after severe tortures, he cast into prison. Among these was my dearest friend Pamphilus, who was by reason of every virtue the most illustrious of the martyrs in our time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Urbanus first tested him in rhetorical philosophy and learning; and afterwards endeavored to compel him to sacrifice. But as he saw that he refused and in nowise regarded his threats, being exceedingly angry, he ordered him to be tormented with severest tortures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And when the brutal man, after he had almost satiated himself with these tortures by continuous and prolonged scrapings in his sides, was yet covered with shame before all, he put him also with the confessors in prison.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But what recompense for his cruelty to the saints, he who thus abused the martyrs of Christ, shall receive from the Divine judgment, may be easily determined from the preludes to it, in which immediately, and not long after his daring cruelties against Pamphilus, while he yet held the government, the Divine judgment came upon him. For thus suddenly, he who but yesterday was judging on the lofty tribunal, guarded by a band of soldiers, and ruling over the whole nation of Palestine, the associate and dearest friend and table companion of the tyrant himself, was stripped in one night, and overwhelmed with disgrace and shame before those who had formerly admired him as if he were himself an emperor; and he appeared cowardly and unmanly, uttering womanish cries and supplications to all the people whom he had ruled. And Maximinus himself, in reliance upon whose favor Urbanus was formerly so arrogantly insolent, as if he loved him exceedingly for his deeds against us, was set as a harsh and most severe judge in this same Cæsarea to pronounce sentence of death against him, for the great disgrace of the crimes of which he was convicted.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Let us say this in passing. A suitable time may come when we shall have leisure to relate the end and the fate of those impious men who especially fought against us, both of Maximinus himself and those with him.',
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
      ' Up to the sixth year the storm had been incessantly raging against us. Before this time there had been a very large number of confessors of religion in the so-called Porphyry quarry in Thebais, which gets its name from the stone found there. Of these, one hundred men, lacking three, together with women and infants, were sent to the governor of Palestine. When they confessed the God of the universe and Christ, Firmilianus, who had been sent there as governor in the place of Urbanus, directed, in accordance with the imperial command, that they should be maimed by burning the sinews of the ankles of their left feet, and that their right eyes with the eyelids and pupils should first be cut out, and then destroyed by hot irons to the very roots. And he then sent them to the mines in the province to endure hardships with severe toil and suffering.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But it was not sufficient that these only who suffered such miseries should be deprived of their eyes, but those natives of Palestine also, who were mentioned just above as condemned to pugilistic combat, Since they would neither receive food from the royal storehouse nor undergo the necessary preparatory Exercises.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Having been brought on this account not only before the overseers, but also before Maximinus himself, and having manifested the noblest persistence in confession by the endurance of hunger and stripes, they received like punishment with those whom we have mentioned, and with them other confessors in the city of Cæsarea.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Immediately afterwards others who were gathered to hear the Scriptures read, were seized in Gaza, and some endured the same sufferings in the feet and eyes; but others were afflicted with yet greater torments and with most terrible tortures in the sides.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' One of these, in body a woman, but in understanding a man, would not endure the threat of fornication, and spoke directly against the tyrant who entrusted the government to such cruel judges. She was first scourged and then raised aloft on the stake, and her sides lacerated.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' As those appointed for this purpose applied the tortures incessantly and severely at the command of the judge, another, with mind fixed, like the former, on virginity as her aim—a woman who was altogether mean in forth and contemptible in appearance; but, on the other hand, strong in soul, and endowed with an understanding superior to her body—being unable to bear the merciless and cruel and inhuman deeds, with a boldness beyond that of the combatants famed among the Greeks, cried out to the judge from the midst of the crowd: “And how long will you thus cruelly torture my sister?” But he was greatly enraged, and ordered the woman to be immediately seized.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Thereupon she was brought forward and having called herself by the august name of the Saviour, she was first urged by words to sacrifice, and as she refused she was dragged by force to the altar. But her sister continued to maintain her former zeal, and with intrepid and resolute foot kicked the altar, and overturned it with the fire that was on it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Thereupon the judge, enraged like a wild beast, inflicted on her such tortures in her sides as he never had on any one before, striving almost to glut himself with her raw flesh. But when his madness was satiated, he bound them both together, this one and her whom she called sister, and condemned them to death by fire. It is said that the first of these was from the country of Gaza; the other, by name Valentina, was of Cæsarea, and was well known to many.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But how can I describe as it deserves the martyrdom which followed, with which the thrice-blessed Paul was honored. He was condemned to death at the same time with them, under one sentence. At the time of his martyrdom, as the executioner was about to cut off his head, he requested a brief respite.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' This being granted, he first, in a clear and distinct voice, supplicated God in behalf of his fellow-Christians, praying for their pardon, and that freedom might soon be restored to them. Then he asked for the conversion of the Jews to God through Christ; and proceeding in order he requested the same things for the Samaritans, and besought that those Gentiles, who were in error and were ignorant of God, might come to a knowledge of him, and adopt the true religion. Nor did he leave neglected the mixed multitude who were standing around.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' After all these, oh! great and unspeakable forbearance! he entreated the God of the universe for the judge who had condemned him to death, and for the highest rulers, and also for the one who was about to behead him, in his hearing and that of all present, beseeching that their sin toward him should not be reckoned against them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Having prayed for these things with a loud voice, and having, as one who was dying unjustly, moved almost all to compassion and tears, of his own accord he made himself ready, and submitted his bare neck to the stroke of the sword, and was adorned with divine martyrdom. This took place on the twenty-fifth day of the month Panemus, which is the eighth before the Kalends of August.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Such was the end of these persons. But not long after, one hundred and thirty admirable athletes of the confession of Christ, from the land of Egypt, endured, in Egypt itself, at the command of Maximinus the same afflictions in their eyes and feet with the former persons, and were sent to the above-mentioned mines in Palestine. But some of them were condemned to the mines in Cilicia.',
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
      ' After such noble acts of the distinguished martyrs of Christ, the flame of persecution lessened, and was quenched, as it were by their sacred blood, and relief and liberty were granted to those who, for Christ’s sake, were laboring in the mines of Thebais, and for a little time we were beginning to breath pure air. But by some new impulse, I know not what, he who held the power to persecute was again aroused against the Christians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Immediately letters from Maximinus against us were published everywhere in every province. The governors and the military prefect urged by edicts and letters and public ordinances the magistrates and generals and notaries in all the cities to carry out the imperial decree, which ordered that the altars of the idols should with all speed be rebuilt; and that all men, women, and children, even infants at the breast, should sacrifice and offer oblations; and that with diligence and care they should cause them to taste of the execrable offerings; and that the things for sale in the market should be polluted with libations from the sacrifices; and that guards should be stationed before the baths in order to defile with the abominable sacrifices those who went to wash in them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' When these orders were being carried out, our people, as was natural, were at the beginning greatly distressed in mind; and even the unbelieving heathen blamed the severity and the exceeding absurdity of what was done. For these things appeared to them extreme and burdensome. As the heaviest storm impended over all in every quarter, the divine power of our Saviour again infused such boldness into his athletes, that without being drawn on or dragged forward by any one, they spurned the threats.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Three of the faithful joining together, rushed on the governor as he was sacrificing to the idols, and cried out to him to cease from his delusion, there being no other God than the Maker and Creator of the universe. When he asked who they were, they confessed boldly that they were Christians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Thereupon Firmilianus, being greatly enraged, sentenced them to capital punishment without inflicting tortures upon them. The name of the eldest of these was Antoninus; of the next, Zebinas, who was a native of Eleutheropolis; and of the third, Germanus. This took place on the thirteenth of the month Dius, the Ides of November.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' There was associated with them on the same day Ennathas, a woman from Scythopolis, who was adorned with the chaplet of virginity. She did not indeed do as they had done, but was dragged by force and brought before the judge.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' She endured scourgings and cruel insults, which Maxys, a tribune of a neighboring district, without the knowledge of the superior authority, dared to inflict upon her. He was a man worse than his name, sanguinary in other respects, exceedingly harsh, and altogether cruel, and censured by all who knew him. This man stripped the blessed woman of all her clothing, so that she was covered only from her loins to her feet and the rest of her body was bare. And he led her through the entire city of Cæsarea, and regarded it as a great thing to beat her with thongs while she was dragged through all the market-places.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' After such treatment she manifested the noblest constancy at the judgment seat of the governor himself; and the judge condemned her to be burned alive. He also carried his rage against the pious to a most inhuman length and transgressed the laws of nature, not being ashamed even to deny burial to the lifeless bodies of the sacred men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Thus he ordered the dead to be exposed in the open air as food for wild beasts and to be watched carefully by night and day. For many days a large number of men attended to this savage and barbarous decree. And they looked out from their post of observation, as if it were a matter worthy of care, to see that the dead bodies should not be stolen.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And wild beasts and dogs and birds of prey scattered the human limbs here and there, and the whole city was strewed with the entrails and bones of men, so that nothing had ever appeared more dreadful and horrible, even to those who formerly hated us; though they bewailed not so much the calamity of those against whom these things were done, as the outrage against themselves and the common nature of man.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' For there was to be seen near the gates a spectacle beyond all description and tragic recital; for not only was human flesh devoured in one place, but it was scattered in every place; so that some said that limbs and masses of flesh and parts of entrails were to be seen even within the gates.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' After these things had continued for many days, a wonderful event occurred. The air was clear and bright and the appearance of the sky most serene. When suddenly throughout the city from the pillars which supported the public porches many drops fell like tears; and the market places and streets, though there was no mist in the air, were moistened with sprinkled water, whence I know not. Then immediately it was reported everywhere that the earth, unable to endure the abomination of these things, had shed tears in a mysterious manner; and that as a rebuke to the relentless and unfeeling nature of men, stones and lifeless wood had wept for what had happened. I know well that this account may perhaps appear idle and fabulous to those who come after us, but not to those to whom the truth was confirmed at the time.',
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
      ' On the fourteenth day of the following month Appellæus, the nineteenth before the Kalends of January, certain persons from Egypt were again seized by those who examined people passing the gates. They had been sent to minister to the confessors in Cilicia. They received the same sentence as those whom they had gone to help, being mutilated in their eyes and feet. Three of them exhibited in Ascalon, where they were imprisoned, marvelous bravery in the endurance of various kinds of martyrdom. One of them named Ares was condemned to the flames, and the others, called Probus and Elias, were beheaded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' On the eleventh day of the month Audynæus, which is the third before the Ides of January, in the same city of Cæsarea, Peter an ascetic, also called Apselamus, from the village of Anea, on the borders of Eleutheropolis, like purest gold, gave noble proof by fire of his faith in the Christ of God. Though the judge and those around him besought him many times to have compassion on himself, and to spare his own youth and bloom, he disregarded them, preferring hope in the God of the universe to all things, even to life itself. A certain Asclepius, supposed to be a bishop of the sect of Marcion, possessed as he thought with zeal for religion, but “not according to knowledge,” ended his life on one and the same funeral pyre. These things took place in this manner.',
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
      ' It is time to describe the great and celebrated spectacle of Pamphilus, a man thrice dear to me, and of those who finished their course with him. They were twelve in all; being counted worthy of apostolic grace and number.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Of these the leader and the only one honored with the position of presbyter at Cæsarea, was Pamphilus; a man who through his entire life was celebrated for every virtue, for renouncing and despising the world, for sharing his possessions with the needy, for contempt of earthly hopes, and for philosophic deportment and exercise. He especially excelled all in our time in most sincere devotion to the Divine Scriptures and indefatigable industry in whatever he undertook, and in his helpfulness to his relatives and associates.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In a separate treatise on his life, consisting of three books, we have already described the excellence of his virtue. Referring to this work those who delight in such things and desire to know them, let us now consider the martyrs in order.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Second after Pamphilus, Vales, who was honored for his venerable gray hair, entered and versed in the Divine Scriptures, if any one ever was. He had so laid up the memory of them in his heart that he did not need to look at the books if he undertook to repeat any passage of Scripture.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The third was Paul from the city of Jamna, who was known among them as most zealous and fervent in spirit. Previous to his martyrdom, he had endured the conflict of confession by cauterization. After these persons had continued in prison for two entire years, the occasion of their martyrdom was a second arrival of Egyptian brethren who suffered with them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' They had accompanied the confessors in Cilicia to the mines there and were returning to their homes. At the entrance of the gates of Cæsarea, the guards, who were men of barbarous character, questioned them as to who they were and whence they came. They kept back nothing of the truth, and were seized as malefactors taken in the very act. They were five in number.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' When brought before the tyrant, being very bold in his presence, they were immediately thrown into prison. On the next day, which was the nineteenth of the month Peritius, according to the Roman reckoning the fourteenth before the Kalends of March, they were brought, according to command, before the judge, with Pamphilus and his associates whom we have mentioned. First, by all kinds of torture, through the invention of strange and various machines, he tested the invincible constancy of the Egyptians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Having practised these cruelties upon the leader of all, he asked him first who he was. He heard in reply the name of some prophet instead of his proper name. For it was their custom, in place of the names of idols given them by their fathers, if they had such, to take other names; so that you would hear them calling themselves Elijah or Jeremiah or Isaiah or Samuel or Daniel, thus showing themselves inwardly true Jews, and the genuine Israel of God, not only in deeds, but in the names which they bore. When Firmilianus had heard some such name from the martyr, and did not understand the force of the word, he asked next the name of his country.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But he gave a second answer similar to the former, saying that Jerusalem was his country, meaning that of which Paul says, “Jerusalem which is above is free, which is our mother,” and, “Ye are come unto Mount Sion, and unto the city of the living God, the heavenly Jerusalem.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' This was what he meant; but the judge thinking only of the earth, sought diligently to discover what that city was, and in what part of the world it was situated. And therefore he applied tortures that the truth might be acknowledged. But the man, with his hands twisted behind his back, and his feet crushed by strange machines, asserted firmly that he had spoken the truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And being questioned again repeatedly what and where the city was of which he spoke, he said that it was the country of the pious alone, for no others should have a place in it, and that it lay toward the far East and the rising sun.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' He philosophized about these things according to his own understanding, and was in nowise turned froth them by the tortures with which he was afflicted on every side. And as if he were without flesh or body he seemed insensible of his sufferings. But the judge being perplexed, was impatient, thinking that the Christians were about to establish a city somewhere, inimical and hostile to the Romans. And he inquired much about this, and investigated where that country toward the East was located.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But when he had for a long time lacerated the young man with scourgings, and punished him with all sorts of torments, he perceived that his persistence in what he had said could not be changed, and passed against him sentence of death. Such a scene was exhibited by what was done to this man. And having inflicted similar tortures on the others, he sent them away in the same manner.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' Then being wearied and perceiving that he punished the men in vain, having satiated his desire, he proceeded against Pamphilus and his companions. And having learned that already under former tortures they had manifested an unchangeable zeal for the faith, he asked them if they would now obey. And receiving from every one of them only this one answer, as their last word of confession in martyrdom, he inflicted on them punishment similar to the others.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' When this had been done, a young man, one of the household servants of Pamphilus, who had been educated in the noble life and instruction of such a man, learning the sentence passed upon his master, cried out from the midst of the crowd asking that their bodies might be buried.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' Thereupon the judge, not a man, but a wild beast, or if anything more savage than a wild beast, giving no consideration to the young man’s age, asked him only the same question. When he learned that he confessed himself a Christian, as if he had been wounded by a dart, swelling with rage, he ordered the tormentors to use their utmost power against him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' And when he saw that he refused to sacrifice as commanded, he ordered them to scrape him continually to his very bones and to the inmost recesses of his bowels, not as if he were human flesh but as if he were stones or wood or any lifeless thing. But after long persistence he saw that this was in vain, as the man was speechless and insensible and almost lifeless, his body being worn out by the tortures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' But being inflexibly merciless and inhuman, he ordered him to be committed straightway, as he was, to a slow fire. And before the death of his earthly master, though he had entered later on the conflict, he received release from the body, while those who had been zealous about the others were yet delaying.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' One could then see. Porphyry, like one who had come off victorious in every conflict, his body covered with dust, but his countenance cheerful, after such sufferings, with courageous and exulting mind, advancing to death. And as if truly filled with the Divine Spirit, covered only with his philosophic robe thrown about him as a cloak, soberly and intelligently he directed his friends as to what he wished, and beckoned to them, preserving still a cheerful countenance even at the stake. But when the fire was kindled at some distance around him in a circle, having inhaled the flame into his mouth, he continued most nobly in silence from that time till his death, after the single word which he uttered when the flame first touched him, and he cried out for the help of Jesus the Son of God. Such was the contest of Porphyry.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' His death was reported to Pamphilus by a messenger, Seleucus. He was one of the confessors from the army. As the bearer of such a message, he was forthwith deemed worthy of a similar lot. For as soon as he related the death of Porphyry, and had saluted one of the martyrs with a kiss, some of the soldiers seized him and led him to the governor. And he, as if he would hasten him on to be a companion of the former on the way to heaven, commanded that he be put to death immediately.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' This man was from Cappadocia, and belonged to the select band of soldiers, and had obtained no small honor in those things which are esteemed among the Romans. For in stature and bodily strength, and size and vigor, he far excelled his fellow-soldiers, so that his appearance was matter of common talk, and his whole form was admired on account of its size and symmetrical proportions.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' At the beginning of the persecution he was prominent in the conflicts of confession, through his patience under scourging. After he left the army he set himself to imitate zealously the religious ascetics, and as if he were their father and guardian he showed himself a bishop and patron of destitute orphans and defenceless widows and of those who were distressed with penury or sickness. It is likely that on this account he was deemed worthy of an extraordinary call to martyrdom by God, who rejoices in such things more than in the smoke and blood of sacrifices.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' He was the tenth athlete among those whom we have mentioned as meeting their end on one and the same day. On this day, as was fitting, the chief gate was opened, and a ready way of entrance into the kingdom of heaven was given to the martyr Pamphilus and to the others with him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' In the footsteps of Seleucus came Theodulus, a grave and pious old man, who belonged to the governor’s household, and had been honored by Firmilianus himself more than all the others in his house on account of his age, and because he was a father of the third generation, and also on account of the kindness and most faithful conscientiousness which he had manifested toward him. As he pursued the course of Seleucus when brought before his master, the latter was more angry at him than at those who had preceded him, and condemned him to endure the martyrdom of the Saviour on the cross.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' As there lacked yet one to fill up the number of the twelve martyrs of whom we have spoken, Julian came to complete it. He had just arrived from abroad, and had not yet entered the gate of the city, when having learned about the martyrs while still on the way, he rushed at once, just as he was, to see them. When he beheld the tabernacles of the saints prone on the ground, being filled with joy, he embraced and kissed them all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' The ministers of slaughter straightway seized him as he was doing this and led him to Firmilianus. Acting as was his custom, he condemned him to a slow fire. Thereupon Julian, leaping and exulting, in a loud voice gave thanks to the Lord who had judged him worthy of such things, and was honored with the crown of martyrdom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' He was a Cappadocian by birth, and in his manner of life he was most circumspect, faithful and sincere, zealous in all other respects, and animated by the Holy Spirit himself. Such was the company which was thought worthy to enter into martyrdom with Pamphilus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 28),
      ' By the command of the impious governor their sacred and truly holy bodies were kept as food for the wild beasts for four days and as many nights. But since, strange to say, through the providential care of God, nothing approached them—neither beast of prey, nor bird, nor dog—they were taken up uninjured, and after suitable preparation were buried in the customary manner.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 29),
      ' When the report of what had been done to these men was spread in all directions, Adrianus and Eubulus, having come from the so-called country of Manganaea to Cæsarea, to see the remaining confessors, were also asked at the gate the reason for their coming; and having acknowledged the truth, were brought to Firmilianus. But he, as was his custom, without delay inflicted many tortures in their sides, and condemned them to be devoured by wild beasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 30),
      ' After two days, on the fifth of the month Dystrus, the third before the Nones of March, which was regarded as the birthday of the tutelary divinity of Cæsarea, Adrianus was thrown to a lion, and afterwards slain with the sword. But Eubulus, two days later, on the Nones of March, that is, on the seventh of the month Dystrus, when the judge had earnestly entreated him to enjoy by sacrificing that which was considered freedom among them, preferring a glorious death for religion to transitory life, was made like the other an offering to wild beasts, and as the last of the martyrs in Cæsarea, sealed the list of athletes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 31),
      ' It is proper also to relate here, how in a short time the heavenly Providence came upon the impious rulers, together with the tyrants themselves. For that very Firmilianus, who had thus abused the martyrs of Christ, after suffering with the others the severest punishment, was put to death by the sword. Such were the martyrdoms which took place at Cæsarea during the entire period of the persecution.',
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
      ' I think it best to pass by all the other events which occurred in the meantime: such as those which happened to the bishops of the churches, when instead of shepherds of the rational flocks of Christ, over which they presided in an unlawful manner, the divine judgment, considering them worthy of such a charge, made them keepers of camels, an irrational beast and very crooked in the structure of its body, or condemned them to have the care of the imperial horses—and I pass by also the insults and disgraces and tortures they endured from the imperial overseers and rulers on account of the sacred vessels and treasures of the Church; and besides these the lust of power on the part of many, the disorderly and unlawful ordinations, and the schisms among the confessors themselves; also the novelties which were zealously devised against the remnants of the Church by the new and factious members, who added innovation after innovation and forced them in unsparingly among the calamities of the persecution, heaping misfortune upon misfortune. I judge it more suitable to shun and avoid the account of these things, as I said at the beginning. But such things as are sober and praiseworthy, according to the sacred word—“and if there be any virtue and praise,”—I consider it most proper to tell and to record, and to present to believing hearers in the history of the admirable martyrs. And after this I think it best to crown the entire work with an account of the peace which has appeared unto us from heaven.',
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
      ' The seventh year of our conflict was completed; and the hostile measures which had continued into the eighth year were gradually and quietly becoming less severe. A large number of confessors were collected at the copper mines in Palestine, and were acting with considerable boldness, so far as even to build places of worship. But the ruler of the province, a cruel and wicked man, as his acts against the martyrs showed, having come there and learned the state of affairs, communicated it to the emperor, writing in accusation whatever he thought best.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Thereupon, being appointed superintendent of the mines, he divided the band of confessors as if by a royal decree, and sent some to dwell in Cyprus and others in Lebanon, and he scattered others in different parts of Palestine and ordered them to labor in various works.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And, selecting the four who seemed to him to be the leaders, he sent them to the commander of the armies in that section. These were Peleus and Nilus, Egyptian bishops, also a presbyter, and Patermuthius, who was well known among them all for his zeal toward all. The commander of the army demanded of them a denial of religion, and not obtaining this, he condemned them to death by fire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' There were others there who had been allotted to dwell in a separate place by themselves—such of the confessors as on account of age or mutilations, or for other bodily infirmities, had been released from service. Silvanus, a bishop from Gaza, presided over them, and set a worthy and genuine example of Christianity.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' This man having from the first day of the persecution, and throughout its entire continuance, been eminent for his confessions in all sorts of conflicts, had been kept all that time that he might, so to speak, set the final seal upon the whole con-flier in Palestine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' There were with him many from Egypt, among whom was John, who surpassed all in our time in the excellence of his memory. He had formerly been deprived of his sight. Nevertheless, on account of his eminence in confession he had with the others suffered the destruction of his foot by cauterization. And although his sight had been destroyed he was subjected to the same burning with fire, the executioners aiming after everything that was merciless and pitiless and cruel and inhuman.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Since he was such a man, one would not be so much astonished at his habits and his philosophic life, nor would he seem so wonderful for them, as for the strength of his memory. For he had written whole books of the Divine Scriptures, “not in tables of stone” as the divine apostle says, neither on skins of animals, nor on paper which moths and time destroy, but truly “in fleshy tables of the heart,” in a transparent soul and most pure eye of the mind, so that whenever he wished he could repeat, as if from a treasury of words, any portion of the Scripture, whether in the law, or the prophets, or the historical books, or the gospels, or the writings of the apostles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' I confess that I was astonished when I first saw the man as he was standing in the midst of a large congregation and repeating portions of the Divine Scripture. While I only heard his voice, I thought that, according to the custom in the meetings, he was reading. But when I came near and perceived what he was doing, and observed all the others standing around him with sound eyes while he was using only the eyes of his mind, and yet was speaking naturally like some prophet, and far excelling those who were sound in body, it was impossible for me not to glorify God and wonder. And I seemed to see in these deeds evident and strong confirmation of the fact that true manhood consists not in excellence of bodily appearance, but in the soul and understanding alone. For he, with his body mutilated, manifested the superior excellence of the power that was within him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But as to those whom we have mentioned as abiding in a separate place, and attending to their customary duties in fasting and prayer and other exercises, God himself saw fit to give them a salutary issue by extending his right hand in answer to them. The bitter foe, as they were armed against him zealously through their prayers to God, could no longer endure them, and determined to slay and destroy them from off the earth because they troubled him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And God permitted him to accomplish this, that he might not be restrained from the wickedness he desired, and that at the same time they might receive the prizes of their manifold conflicts. Therefore at the command of the most accursed Maximinus, forty, lacking one, were beheaded in one day.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' These martyrdoms were accomplished in Palestine during eight complete years; and of this description was the persecution in our time. Beginning with the demolition of the churches, it increased greatly as the rulers rose up from time to time against us. In these assaults the multiform and various conflicts of those who wrestled in behalf of religion produced an innumerable multitude of martyrs in every province—in the regions extending from Libya and throughout all Egypt, and Syria, and from the East round about to the district of Illyricum.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But the countries beyond these, all Italy and Sicily and Gaul, and the regions toward the setting sun, in Spain, Mauritania, and Africa, suffered the war of persecution during less than two years, and were deemed worthy of a speedier divine visitation and peace; the heavenly Providence sparing the singleness of purpose and faith of those men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' For what had never before been recorded in the annals of the Roman government, first took place in our day, contrary to all expectation; for during the persecution in our time the empire was divided into two parts. The brethren dwelling in the part of which we have just spoken enjoyed peace; but those in the other part endured trials without number. But when the divine grace kindly and compassionately manifested its care for us too, then truly our rulers also, those very ones through whom the wars against us had been formerly carried on, changed their minds in a most wonderful manner, and published a recantation; and by favorable edicts and mild decrees concerning us, extinguished the conflagration against us. This recantation also must be recorded.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
