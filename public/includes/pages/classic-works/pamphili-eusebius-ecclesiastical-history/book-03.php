<?php
$html->add(new BS_Banner(
  null,

  'Book three of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering the years following the apostles’ deaths, the bishops of Rome, and the formation of the Scriptures'
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
      ' Such was the condition of the Jews. Meanwhile the holy apostles and disciples of our Saviour were dispersed throughout the world. Parthia, according to tradition, was allotted to Thomas as his field of labor, Scythia to Andrew, and Asia to John, who, after he had lived some time there, died at Ephesus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Peter appears to have preached in Pontus, Galatia, Bithynia, Cappadocia, and Asia to the Jews of the dispersion. And at last, having come to Rome, he was crucified head-downwards; for he had requested that he might suffer in this way. What do we need to say concerning Paul, who preached the Gospel of Christ from Jerusalem to Illyricum, and afterwards suffered martyrdom in Rome under Nero? These facts are related by Origen in the third volume of his Commentary on Genesis.',
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
      ' After the martyrdom of Paul and of Peter, Linus was the first to obtain the episcopate of the church at Rome. Paul mentions him, when writing to Timothy from Rome, in the salutation at the end of the epistle.',
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
      ' One epistle of Peter, that called the first, is acknowledged as genuine. And this the ancient elders used freely in their own writings as an undisputed work. But we have learned that his extant second Epistle does not belong to the canon; yet, as it has appeared profitable to many, it has been used with the other Scriptures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The so-called Acts of Peter, however, and the Gospel which bears his name, and the Preaching and the Apocalypse, as they are called, we know have not been universally accepted, because no ecclesiastical writer, ancient or modern, has made use of testimonies drawn from them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But in the course of my history I shall be careful to show, in addition to the official succession, what ecclesiastical writers have from time to time made use of any of the disputed works, and what they have said in regard to the canonical and accepted writings, as well as in regard to those which are not of this class.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Such are the writings that bear the name of Peter, only one of which I know to be genuine and acknowledged by the ancient elders.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Paul’s fourteen epistles are well known and undisputed. It is not indeed right to overlook the fact that some have rejected the Epistle to the Hebrews, saying that it is disputed by the church of Rome, on the ground that it was not written by Paul. But what has been said concerning this epistle by those who lived before our time I shall quote in the proper place. In regard to the so-called Acts of Paul, I have not found them among the undisputed writings.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But as the same apostle, in the salutations at the end of the Epistle to the Romans, has made mention among others of Hermas, to whom the book called The Shepherd is ascribed, it should be observed that this too has been disputed by some, and on their account cannot be placed among the acknowledged books; while by others it is considered quite indispensable, especially to those who need instruction in the elements of the faith. Hence, as we know, it has been publicly read in churches, and I have found that some of the most ancient writers used it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' This will serve to show the divine writings that are undisputed as well as those that are not universally acknowledged.',
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
      ' That Paul preached to the Gentiles and laid the foundations of the churches “from Jerusalem round about even unto Illyricum,” is evident both from his own words, and from the account which Luke has given in the Acts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And in how many provinces Peter preached Christ and taught the doctrine of the new covenant to those of the circumcision is clear from his own words in his epistle already mentioned as undisputed, in which he writes to the Hebrews of the dispersion in Pontus, Galatia, Cappadocia, Asia, and Bithynia.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But the number and the names of those among them that became true and zealous followers of the apostles, and were judged worthy to tend the churches rounded by them, it is not easy to tell, except those mentioned in the writings of Paul.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For he had innumerable fellow-laborers, or “fellow-soldiers,” as he called them, and most of them were honored by him with an imperishable memorial, for he gave enduring testimony concerning them in his own epistles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Luke also in the Acts speaks of his friends, and mentions them by name.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Timothy, so it is recorded, was the first to receive the episcopate of the parish in Ephesus, Titus of the churches in Crete.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But Luke, who was of Antiochian parentage and a physician by profession, and who was especially intimate with Paul and well acquainted with the rest of the apostles, has left us, in two inspired books, proofs of that spiritual healing art which he learned from them. One of these books is the Gospel, which he testifies that he wrote as those who were from the beginning eye witnesses and ministers of the word delivered unto him, all of whom, as he says, he followed accurately from the first. The other book is the Acts of the Apostles which he composed not from the accounts of others, but from what he had seen himself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And they say that Paul meant to refer to Luke’s Gospel wherever, as if speaking of some gospel of his own, he used the words, “according to my Gospel.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' As to the rest of his followers, Paul testifies that Crescens was sent to Gaul; but Linus, whom he mentions in the Second Epistle to Timothy as his companion at Rome, was Peter’s successor in the episcopate of the church there, as has already been shown.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Clement also, who was appointed third bishop of the church at Rome, was, as Paul testifies, his co-laborer and fellow-soldier.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Besides these, that Areopagite, named Dionysius, who was the first to believe after Paul’s address to the Athenians in the Areopagus (as recorded by Luke in the Acts) is mentioned by another Dionysius, an ancient writer and pastor of the parish in Corinth, as the first bishop of the church at Athens.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But the events connected with the apostolic succession we shall relate at the proper time. Meanwhile let us continue the course of our history.',
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
      ' After Nero had held the power thirteen years, and Galba and Otho had ruled a year and six months, Vespasian, who had become distinguished in the campaigns against the Jews, was proclaimed sovereign in Judea and received the title of Emperor from the armies there. Setting out immediately, therefore, for Rome, he entrusted the conduct of the war against the Jews to his son Titus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For the Jews after the ascension of our Saviour, in addition to their crime against him, had been devising as many plots as they could against his apostles. First Stephen was stoned to death by them, and after him James, the son of Zebedee and the brother of John, was beheaded, and finally James, the first that had obtained the episcopal seat in Jerusalem after the ascension of our Saviour, died in the manner already described. But the rest of the apostles, who had been incessantly plotted against with a view to their destruction, and had been driven out of the land of Judea, went unto all nations to preach the Gospel, relying upon the power of Christ, who had said to them, “Go ye and make disciples of all the nations in my name.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But the people of the church in Jerusalem had been commanded by a revelation, vouchsafed to approved men there before the war, to leave the city and to dwell in a certain town of Perea called Pella. And when those that believed in Christ had come thither from Jerusalem, then, as if the royal city of the Jews and the whole land of Judea were entirely destitute of holy men, the judgment of God at length overtook those who had committed such outrages against Christ and his apostles, and totally destroyed that generation of impious men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But the number of calamities which every where fell upon the nation at that time; the extreme misfortunes to which the inhabitants of Judea were especially subjected, the thousands of men, as well as women and children, that perished by the sword, by famine, and by other forms of death innumerable—all these things, as well as the many great sieges which were carried on against the cities of Judea, and the excessive. sufferings endured by those that fled to Jerusalem itself, as to a city of perfect safety, and finally the general course of the whole war, as well as its particular occurrences in detail, and how at last the abomination of desolation, proclaimed by the prophets, stood in the very temple of God, so celebrated of old, the temple which was now awaiting its total and final destruction by fire—all these things any one that wishes may find accurately described in the history written by Josephus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But it is necessary to state that this writer records that the multitude of those who were assembled from all Judea at the time of the Passover, to the number of three million souls, were shut up in Jerusalem “as in a prison,” to use his own words.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' For it was right that in the very days in which they had inflicted suffering upon the Saviour and the Benefactor of all, the Christ of God, that in those days, shut up “as in a prison,” they should meet with destruction at the hands of divine justice.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But passing by the particular calamities which they suffered from the attempts made upon them by the sword and by other means, I think it necessary to relate only the misfortunes which the famine caused, that those who read this work may have some means of knowing that God was not long in executing vengeance upon them for their wickedness against the Christ of God.',
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
      ' Taking the fifth book of the History of Josephus again in our hands, let us go through the tragedy of events which then occurred.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “For the wealthy,” he says, “it was equally dangerous to remain. For under pretense that they were going to desert men were put to death for their wealth. The madness of the seditions increased with the famine and both the miseries were inflamed more and more day by day.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Nowhere was food to be seen; but, bursting into the houses men searched them thoroughly, and whenever they found anything to eat they tormented the owners on the ground that they had denied that they had anything; but if they found nothing, they tortured them on the ground that they had more carefully concealed it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The proof of their having or not having food was found in the bodies of the poor wretches. Those of them who were still in good condition they assumed were well supplied with food, while those who were already wasted away they passed by, for it seemed absurd to slay those who were on the point of perishing for want.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Many, indeed, secretly sold their possessions for one measure of wheat, if they belonged to the wealthier class, of barley if they were poorer. Then shutting themselves up in the innermost parts of their houses, some ate the grain uncooked on account of their terrible want, while others baked it according as necessity and fear dictated.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Nowhere were tables set, but, snatching the yet uncooked food from the fire, they tore it in pieces. Wretched was the fare, and a lamentable spectacle it was to see the more powerful secure an abundance while the weaker mourned.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Of all evils, indeed, famine is the worst, and it destroys nothing so effectively as shame. For that which under other circumstances is worthy of respect, in the midst of famine is despised. Thus women snatched the food from the very mouths of their husbands and children, from their fathers, and what was most pitiable of all, mothers from their babes, And while their dearest ones were wasting away in their arms, they were not ashamed to take away froth them the last drops that supported life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And even while they were eating thus they did not remain undiscovered. But everywhere the rioters appeared, to rob them even of these portions of food. For whenever they saw a house shut up, they regarded it as a sign that those inside were taking food. And immediately bursting open the doors they rushed in and seized what they were eating, almost forcing it out of their very throats.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Old men who clung to their food were beaten, and if the women concealed it in their hands, their hair was torn for so doing. There was pity neither for gray hairs nor for infants, but, taking up the babes that clung to their morsels of food, they dashed them to the ground. But to those that anticipated their entrance and swallowed what they were about to seize, they were still more cruel, just as if they had been wronged by them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And they devised the most terrible modes of torture to discover food, stopping up the privy passages of the poor wretches with bitter herbs, and piercing their seats with sharp rods. And men suffered things horrible even to hear of, for the sake of compelling them to confess to the possession of one loaf of bread, or in order that they might be made to disclose a single drachm of barley which they had concealed. But the tormentors themselves did not suffer hunger.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Their conduct might indeed have seemed less barbarous if they had been driven to it by necessity; but they did it for the sake of exercising their madness and of providing sustenance for themselves for days to come.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And when any one crept out of the city by night as far as the outposts of the Romans to collect wild herbs and grass, they went to meet him; and when he thought he had already escaped the enemy, they seized what he had brought with him, and even though oftentimes the man would entreat them, and, calling upon the most awful name of God, adjure them to give him a portion of what he had obtained at the risk of his life, they would give him nothing back. Indeed, it was fortunate if the one that was plundered was not also slain.” To this account Josephus, after relating other things, adds the following:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' “The possibility of going out of the city being brought to an end, all hope of safety for the Jews was cut off. And the famine increased and devoured the people by houses and families. And the rooms were filled with dead women and children, the lanes of the city with the corpses of old men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' Children and youths, swollen with the famine, wandered about the marketplaces like shadows, and fell down wherever the death agony overtook them. The sick were not strong enough to bury even their own relatives, and those who had the strength hesitated because of the multitude of the dead and the uncertainty as to their own fate. Many, indeed, died while they were burying others, and many betook themselves to their graves before death came upon them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' There was neither weeping nor lamentation under these misfortunes; but the famine stifled the natural affections. Those that were dying a lingering death looked with dry eyes upon those that had gone to their rest before them. Deep silence and death-laden night encircled the city.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' But the robbers were more terrible than these miseries; for they broke open the houses, which were now mere sepulchres, robbed the dead and stripped the covering from their bodies, and went away with a laugh. They tried the points of their swords in the dead bodies, and some that were lying on the ground still alive they thrust through in order to test their weapons. But those that prayed that they would use their right hand and their sword upon them, they contemptuously left to be destroyed by the famine. Every one of these died with eyes fixed upon the temple; and they left the seditious alive.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' These at first gave orders that the dead should be buried out of the public treasury, for they could not endure the stench. But afterward, when they were not able to do this, they threw the bodies from the walls into the trenches.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' And as Titus went around and saw the trenches filled with the dead, and the thick blood oozing out of the putrid bodies, he groaned aloud, and, raising his hands, called God to witness that this was not his doing.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' After speaking of some other things, Josephus proceeds as follows: “I cannot hesitate to declare what my feelings compel me to. I suppose, if the Romans had longer delayed in coming against these guilty wretches, the city would have been swallowed up by a chasm, or overwhelmed with a flood, or struck with such thunderbolts as destroyed Sodom. For it had brought forth a generation of men much more godless than were those that suffered such punishment. By their madness indeed was the whole people brought to destruction.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' And in the sixth book he writes as follows: “Of those that perished by famine in the city the number was countless, and the miseries they underwent unspeakable. For if so much as the shadow of food appeared in any house, there was war, and the dearest friends engaged in hand-to-hand conflict with one another, and snatched from each other the most wretched supports of life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' Nor would they believe that even the dying were without food; but the robbers would search them while they were expiring, lest any one should feign death while concealing food in his bosom. With mouths gaping for want of food, they stumbled and staggered along like mad dogs, and beat the doors as if they were drunk, and in their impotence they would rush into the same houses twice or thrice in one hour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' Necessity compelled them to eat anything they could find, and they gathered and devoured things that were not fit even for the filthiest of irrational beasts. Finally they did not abstain even from their girdles and shoes, and they stripped the hides off their shields and devoured them. Some used even wisps of old hay for food, and others gathered stubble and sold the smallest weight of it for four Attic drachm’.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' “But why should I speak of the shamelessness which was displayed during the famine toward inanimate things? For I am going to relate a fact such as is recorded neither by Greeks nor Barbarians; horrible to relate, incredible to hear. And indeed I should gladly have omitted this calamity, that I might not seem to posterity to be a teller of fabulous tales, if I had not innumerable witnesses to it in my own age. And besides, I should render my country poor service if I suppressed the account of the sufferings which she endured.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' “There was a certain woman named Mary that dwelt beyond Jordan, whose father was Eleazer, of the village of Bathezor (which signifies the house of hyssop). She was distinguished for her family and her wealth, and had fled with the rest of the multitude to Jerusalem and was shut up there with them during the siege.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' The tyrants had robbed her of the rest of the property which she had brought with her into the city from Perea. And the remnants of her possessions and whatever food was to be seen the guards rushed in daily and snatched away from her. This made the woman terribly angry, and by her frequent reproaches and imprecations she aroused the anger of the rapacious villains against herself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' But no one either through anger or pity would slay her; and she grew weary of finding food for others to eat. The search, too, was already become everywhere difficult, and the famine was piercing her bowels and marrow, and resentment was raging more violently than famine. Taking, therefore, anger and necessity as her counsellors, she proceeded to do a most unnatural thing.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' Seizing her child, a boy which was sucking at her breast, she said, Oh, wretched child, in war, in famine, in sedition, for what do I preserve thee? Slaves among the Romans we shall be even if we are allowed to live by them. But even slavery is anticipated by the famine, and the rioters are more cruel than both. Come, be food for me, a fury for these rioters, and a bye-word to the world, for this is all that is wanting to complete the calamities of the Jews.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 28),
      ' And when she had said this she slew her son; and having roasted him, she ate one half herself, and covering up the remainder, she kept it. Very soon the rioters appeared on the scene, and, smelling the nefarious odor, they threatened to slay her ‘immediately unless she should show them what she had prepared. She replied that she had saved an excellent portion for them, and with that she uncovered the remains of the child.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 29),
      ' They were immediately seized with horror and amazement and stood transfixed at the sight. But she said This is my own son, and the deed is mine. Eat for I too have eaten. Be not more merciful than a woman, nor more compassionate than a mother. But if you are too pious and shrink from my sacrifice, I have already eaten of it; let the rest also remain for me.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 30),
      ' At these words the men went out trembling, in this one case being affrighted; yet with difficulty did they yield that food to the mother. Forthwith the whole city was filled with the awful crime, and as all pictured the terrible deed before their own eyes, they trembled as if they had done it themselves.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 31),
      ' Those that were suffering from the famine now longed for death; and blessed were they that had died before hearing and seeing miseries like these.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 32),
      ' Such was the reward which the Jews received for their wickedness and impiety, against the Christ of God.',
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
      ' It is fitting to add to these accounts the true prediction of our Saviour in which he foretold these very events.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' His words are as follows: “Woe unto them that are with child, and to them that give suck in those days! But pray ye that your flight be not in the winter, neither on the Sabbath day; For there shall be great tribulation, such as was not since the beginning of the world to this time, no, nor ever shall be.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The historian, reckoning the whole number of the slain, says that eleven hundred thousand persons perished by famine and sword, and that the rest of the rioters and robbers, being betrayed by each other after the taking of the city, were slain. But the tallest of the youths and those that were distinguished for beauty were preserved for the triumph. Of the rest of the multitude, those that were over seventeen years of age were sent as prisoners to labor in the works of Egypt, while still more were scattered through the provinces to meet their death in the theaters by the sword and by beasts. Those under seventeen years of age were carried away to be sold as slaves, and of these alone the number reached ninety thousand.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' These things took place in this manner in the second year of the reign of Vespasian, in accordance with the prophecies of our Lord and Saviour Jesus Christ, who by divine power saw them beforehand as if they were already present, and wept and mourned according to the statement of the holy evangelists, who give the very words which be uttered, when, as if addressing Jerusalem herself, he said:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' “If thou hadst known, even thou, in this day, the things which belong unto thy peace! But now they are hid from thine eyes. For the days shall come upon thee, that thine enemies shall cast a rampart about thee, and compass thee round, and keep thee in on every side, and shall lay thee and thy children even with the ground.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And then, as if speaking concerning the people, he says, “For there shall be great distress in the land, and wrath upon this people. And they shall fall by the edge of the sword, and shall be led away captive into all nations. And Jerusalem shall be trodden down of the Gentiles, until the times of the Gentiles be fulfilled.” And again: “When ye shall see Jerusalem compassed with armies, then know that the desolation thereof is nigh.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' If any one compares the words of our Saviour with the other accounts of the historian concerning the whole war, how can one fail to wonder, and to admit that the foreknowledge and the prophecy of our Saviour were truly divine and marvellously strange.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Concerning those calamities, then, that befell the whole Jewish nation after the Saviour’s passion and after the words which the multitude of the Jews uttered, when they begged the release of the robber and murderer, but besought that the Prince of Life should be taken from their midst, it is not necessary to add anything to the account of the historian.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But it may be proper to mention also those events which exhibited the graciousness of that all-good Providence which held back their destruction full forty years after their crime against Christ—during which time many of the apostles and disciples, and James himself the first bishop there, the one who is called the brother of the Lord, were still alive, and dwelling in Jerusalem itself, remained the surest bulwark of the place. Divine Providence thus still proved itself long-suffering toward them in order to see whether by repentance for what they had done they might obtain pardon and salvation; and in addition to such long-suffering, Providence also furnished wonderful signs of the things which were about to happen to them if they did not repent.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Since these matters have been thought worthy of mention by the historian already cited, we cannot do better than to recount them for the benefit of the readers of this work.',
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
      ' Taking, then, the work of this author, read what he records in the sixth book of his History. His words are as follows: “Thus were the miserable people won over at this time by the impostors and false prophets; but they did not heed nor give credit to the visions and signs that foretold the approaching desolation. On the contrary, as if struck by lightning, and as if possessing neither eyes nor understanding, they slighted the proclamations of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' At one time a star, in form like a sword, stood over the city, and a comet, which lasted for a whole year; and again before the revolt and before the disturbances that led to the war, when the people were gathered for the feast of unleavened bread, on the eighth of the month Xanthicus, at the ninth hour of the night, so great a light shone about the altar and the temple that it seemed to be bright day; and this continued for half an hour. This seemed to the unskillful a good sign, but was interpreted by the sacred scribes as portending those events which very soon took place.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And at the same feast a cow, led by the high priest to be sacrificed, brought forth a lamb in the midst of the temple.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And the eastern gate of the inner temple, which was of bronze and very massive, and which at evening was closed with difficulty by twenty men, and rested upon iron-bound beams, and had bars sunk deep in the ground, was seen at the sixth hour of the night to open of itself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And not many days after the feast, on the twenty-first of the month Artemisium, a certain marvelous vision was seen which passes belief. The prodigy might seem fabulous were it not related by those who saw it, and were not the calamities which followed deserving of such signs. For before the setting of the sun chariots and armed troops were seen throughout the whole region in mid-air, wheeling through the clouds and encircling the cities.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And at the feast which is called Pentecost, when the priests entered the temple at night, as was their custom, to perform the services, they said that at first they perceived a movement and a noise, and afterward a voice as of a great multitude, saying, ‘Let us go hence.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But what follows is still more terrible; for a certain Jesus, the son of Ananias, a common countryman, four years before the war, when the city was particularly prosperous and peaceful, came to the feast, at which it was customary for all to make tents at the temple to the honor of God, and suddenly began to cry out: ‘A voice from the east, a voice from the west, a voice from the four winds, a voice against Jerusalem and the temple, a voice against bridegrooms and brides, a voice against all the people.’ Day and night he went through all the alleys crying thus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But certain of the more distinguished citizens, vexed at the ominous cry, seized the man and beat him with many stripes. But without uttering a word in his own behalf, or saying anything in particular to those that were present, he continued to cry out in the same words as before.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And the rulers, thinking, as was true, that the man was moved by a higher power, brought him before the Roman governor. And then, though he was scourged to the bone, he neither made supplication nor shed tears, but, changing his voice to the most lamentable tone possible, he answered each stroke with the words, ‘Woe, woe unto Jerusalem.’”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' The same historian records another fact still more wonderful than this. He says that a certain oracle was found in their sacred writings which declared that at that time a certain person should go forth from their country to rule the world. He himself understood that this was fulfilled in Vespasian.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' But Vespasian did not rule the whole world, but only that part of it which was subject to the Romans. With better right could it be applied to Christ; to whom it was said by the Father, “Ask of me, and I will give thee the heathen for thine inheritance, and the ends of the earth for thy possession.” At that very time, indeed, the voice of his holy apostles “went throughout all the earth, and their words to the end of the world.”',
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
      ' After all this it is fitting that we should know something in regard to the origin and family of Josephus, who has contributed so much to the history in hand. He himself gives us information on this point in the following words: “Josephus, the son of Mattathias, a priest of Jerusalem, who himself fought against the Romans in the beginning and was compelled to be present at what happened afterward.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He was the most noted of all the Jews of that day, not only among his own people, but also among the Romans, so that he was honored by the erection of a statue in Rome, and his works were deemed worthy of a place in the library.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He wrote the whole of the Antiquities of the Jews in twenty books, and a history of the war with the Romans which took place in his time, in seven books? He himself testifies that the latter work was not only written in Greek, but that it was also translated by himself into his native tongue. He is worthy of credit here because of his truthfulness in other matters.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' There are extant also two other books of his which are worth reading. They treat of the antiquity of the Jews, and in them he replies to Apion the Grammarian, who had at that time written a treatise against the Jews, and also to others who had attempted to vilify the hereditary institutions of the Jewish people.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' In the first of these books he gives the number of the canonical books of the so-called Old Testament. Apparently drawing his information from ancient tradition, he shows what books were accepted without dispute among the Hebrews. His words are as follows.',
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
      ' “We have not, therefore, a multitude of books disagreeing and conflicting with one another; but we have only twenty-two, which contain the record of all time and are justly held to be divine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Of these, five are by Moses, and contain the laws and the tradition respecting the origin of man, and continue the history down to his own death. This period embraces nearly three thousand years.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' From the death of Moses to the death of Artaxerxes, who succeeded Xerxes as king of Persia, the prophets that followed Moses wrote the history of their own times in thirteen books. The other four books contain hymns to God, and precepts for the regulation of the life of men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' From the time of Artaxerxes to our own day all the events have been recorded, but the accounts are not worthy of the same confidence that we repose in those which preceded them, because there has not been during this time an exact succession of prophets.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' How much we are attached to our own writings is shown plainly by our treatment of them. For although so great a period has already passed by, no one has ventured either to add to or to take from them, but it is inbred in all Jews from their very birth to regard them as the teachings of God, and to abide by them, and, if necessary, cheerfully to die for them.” These remarks of the historian I have thought might advantageously be introduced in this connection.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Another work of no little merit has been produced by the same writer, On the Supremacy of Reason, which some have called Maccabaicum, because it contains an account of the struggles of those Hebrews who contended manfully for the true religion, as is related in the books called Maccabees.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And at the end of the twentieth book of his Antiquities Josephus himself intimates that he had purposed to write a work in four books concerning God and his existence, according to the traditional opinions of the Jews, and also concerning the laws, why it is that they permit some things while prohibiting others. And the same writer also mentions in his own works other books written by himself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' In addition to these things it is proper to quote also the words that are found at the close of his Antiquities, in confirmation of the testimony which we have drawn from his accounts. In that place he attacks Justus of Tiberias, who, like himself, had attempted to write a history of contemporary events, on the ground that he had not written truthfully. Having brought many other accusations against the man, he continues in these words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' “I indeed was not afraid in respect to my writings as you were, but, on the contrary, I presented my books to the emperors themselves when the events were almost under men’s eyes. For I was conscious that I had preserved the truth in my account, and hence was not disappointed in my expectation of obtaining their attestation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And I presented my history also to many others, some of whom were present at the war, as, for instance, King Agrippa and some of his relatives.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' For the Emperor Titus desired so much that the knowledge of the events should be communicated to men by my history alone, that he indorsed the books with his own hand and commanded that they should be published. And King Agrippa wrote sixty-two epistles testifying to the truthfulness of my account.” Of these epistles Josephus subjoins two.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But this will suffice in regard to him. Let us now proceed with our history.',
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
      ' After the martyrdom of James and the conquest of Jerusalem which immediately followed, it is said that those of the apostles and disciples of the Lord that were still living came together from all directions with those that were related to the Lord according to the flesh (for the majority of them also were still alive) to take counsel as to who was worthy to succeed James.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' They all with one consent pronounced Symeon, the son of Clopas, of whom the Gospel also makes mention; to be worthy of the episcopal throne of that parish. He was a cousin, as they say, of the Saviour. For Hegesippus records that Clopas was a brother of Joseph.',
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
      ' He also relates that Vespasian after the conquest of Jerusalem gave orders that all that belonged to the lineage of David should be sought out, in order that none of the royal race might be left among the Jews; and in consequence of this a most terrible persecution again hung over the Jews.',
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
      ' After Vespasian had reigned ten years Titus, his son, succeeded him. In the second year of his reign, Linus, who had been bishop of the church of Rome for twelve years, delivered his office to Anencletus. But Titus was succeeded by his brother Domitian after he had reigned two years and the same number of months.',
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
      ' In the fourth year of Domitian, Annianus, the first bishop of the parish of Alexandria, died after holding office twenty-two years, and was succeeded by Abilius, the second bishop.',
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
      ' In the twelfth year of the same reign Clement succeeded Anencletus after the latter had been bishop of the church of Rome for twelve years. The apostle in his Epistle to the Philippians informs us that this Clement was his fellow-worker. His words are as follows: “With Clement and the rest of my fellow-laborers whose names are in the book of life.”',
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
      ' There is extant an epistle of this Clement which is acknowledged to be genuine and is of considerable length and of remarkable merit. He wrote it in the name of the church of Rome to the church of Corinth, when a sedition had arisen in the latter church. We know that this epistle also has been publicly used in a great many churches both in former times and in our own. And of the fact that a sedition did take place in the church of Corinth at the time referred to Hegesippus is a trustworthy witness.',
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
      ' Domitian, having shown great cruelty toward many, and having unjustly put to death no small number of well-born and notable men at Rome, and having without cause exiled and confiscated the property of a great many other illustrious men, finally became a successor of Nero in his. hatred and enmity toward God. He was in fact the second that stirred up a persecution against us, although his father Vespasian had undertaken nothing prejudicial to us.',
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
      ' It is said that in this persecution the apostle and evangelist John, who was still alive, was condemned to dwell on the island of Patmos in consequence of his testimony to the divine word.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Irenæus, in the fifth book of his work Against Heresies, where he discusses the number of the name of Antichrist which is given in the so-called Apocalypse of John, speaks as follows concerning him:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “If it were necessary for his name to be proclaimed openly at the present time, it would have been declared by him who saw the revelation. For it was seen not long ago, but almost in our own generation, at the end of the reign of Domitian.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' To such a degree, indeed, did the teaching of our faith flourish at that time that even those writers who were far from our religion did not hesitate to mention in their histories the persecution and the martyrdoms which took place during it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And they, indeed, accurately indicated the time. For they recorded that in the fifteenth year of Domitian Flavia Domitilla, daughter of a sister of Flavius Clement, who at that time was one of the consuls of Rome, was exiled with many others to the island of Pontia in consequence of testimony borne to Christ.',
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
      ' But when this same Domitian had commanded that the descendants of David should be slain, an ancient tradition says that some of the heretics brought accusation against the descendants of Jude (said to have been a brother of the Saviour according to flesh), on the ground that they were of the lineage of David and were related to Christ himself. Hegesippus relates these facts in the following words.',
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
      ' “Of the family of the Lord there were still living the grandchildren of Jude, who is said to have been the Lord’s brother according to the flesh.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Information was given that they belonged to the family of David, and they were brought to the Emperor Domitian by the Evocatus. For Domitian feared the coming of Christ as Herod also had feared it. And he asked them if they were descendants of David, and they confessed that they were.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Then he asked them how much property they had, or how much money they owned.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And both of them answered that they had only nine thousand denarii, half of which belonged to each of them; and this property did not consist of silver, but of a piece of land which contained only thirty-nine acres, and from which they raised their taxes and supported themselves by their own labor.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Then they showed their hands, exhibiting the hardness of their bodies and the callousness produced upon their hands by continuous toil as evidence of their own labor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And when they were asked concerning Christ and his kingdom, of what sort it was and where and when it was to appear, they, answered that it was not a temporal nor an earthly kingdom, but a heavenly and angelic one, which would appear at the end of the world, when he should come in glory to judge the quick and the dead, and to give unto every one according to his works.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Upon hearing this, Domitian did not pass judgment against them, but, despising them as of no account, he let them go, and by a decree put a stop to the persecution of the Church.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But when they were released they ruled the churches because they were witnesses and were also relatives of the Lord. And peace being established, they lived until the time of Trojan. These things are related by Hegesippus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Tertullian also has mentioned Domitian in the following words: “Domitian also, who possessed a share of Nero’s cruelty, attempted once to do the same thing that the latter did. But because he had, I suppose, some intelligence, he very soon ceased, and even recalled those whom he had banished.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' But after Domitian had reigned fifteen years, and Nerva had succeeded to the empire, the Roman Senate, according to the writers that record the history of those days, voted that Domitian’s honors should be cancelled, and that those who had been unjustly banished should return to their homes and have their property restored to them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' It was at this time that the apostle John returned from his banishment in the island and took up his abode at Ephesus, according to an ancient Christian tradition.',
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
      ' After Nerva had reigned a little more than a year he was succeeded by Trojan. It was during the first year of his reign that Abilius, who had ruled the church of Alexandria for thirteen years, was succeeded by Cerdon.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He was the third that presided over that church after Annianus, who was the first. At that time Clement still ruled the church of Rome, being also the third that held the episcopate there after Paul and Peter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Linus was the first, and after him came Anencletus.',
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
      ' At this time Ignatius was known as the second bishop of Antioch, Evodius having been the first. Symeon likewise was at that time the second ruler of the church of Jerusalem, the brother of our Saviour having been the first.',
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
      ' At that time the apostle and evangelist John, the one whom Jesus loved, was still living in Asia, and governing the churches of that region, having returned after the death of Domitian from his exile on the island.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And that he was still alive at that time may be established by the testimony of two witnesses. They should be trustworthy who have maintained the orthodoxy of the Church; and such indeed were Irenæus and Clement of Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The former in the second book of his work Against Heresies, writes as follows: “And all the elders that associated with John the disciple of the Lord in Asia bear witness that John delivered it to them. For he remained among them until the time of Trajan.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And in the third book of the same work he attests the same thing in the following words: “But the church in Ephesus also, which was founded by Paul, and where John remained until the time of Trajan, is a faithful witness of the apostolic tradition.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Clement likewise in his book entitled What Rich Man Can be Saved? indicates the time, and subjoins a narrative which is most attractive to those that enjoy hearing what is beautiful and profitable. Take and read the account which rims as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' “Listen to a tale, which is not a mere tale, but a narrative concerning John the apostle, which has been handed down and treasured up in memory. For when, after the tyrant’s death, he returned from the isle of Patmos to Ephesus, he went away upon their invitation to the neighboring territories of the Gentiles, to appoint bishops in some places, in other places to set in order whole churches, elsewhere to choose to the ministry some one of those that were pointed out by the Spirit.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' When he had come to one of the cities not far away (the name of which is given by some), and had consoled the brethren in other matters, he finally turned to the bishop that had been appointed, and seeing a youth of powerful physique, of pleasing appearance, and of ardent temperament, he said, ‘This one I commit to thee in all earnestness in the presence of the Church and with Christ as witness.’ And when the bishop had accepted the Charge and had promised all, he repeated the same injunction with an appeal to the same witnesses, and then departed for Ephesus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But the presbyter, taking home the youth committed to him, reared, kept, cherished, and finally baptized him. After this he relaxed his stricter care and watchfulness, with the idea that in putting upon him the seal of the Lord he had given him a perfect protection.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But some youths of his own age, idle and dissolute, and accustomed to evil practices, corrupted him when he was thus prematurely freed from restraint. At first they enticed him by costly entertainments; then, when they went forth at night for robbery, they took him with them, and finally they demanded that he should unite with them in some greater crime.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' He gradually became accustomed to such practices, and on account of the positiveness of his character, leaving the right path, and taking the bit in his teeth like a hard-mouthed and powerful horse, he rushed the more violently down into the depths.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And finally despairing of salvation in God, he no longer meditated what was insignificant, but having committed some great crime, since he was now lost once for all, he expected to suffer a like fate with the rest. Taking them, therefore, and forming a band of robbers, he became a bold bandit-chief, the most violent, most bloody, most cruel of them all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Time passed, and some necessity having arisen, they sent for John. But he, when he had set in order the other matters on account of which he had come, said, ‘Come, O bishop, restore us the deposit which both I and Christ committed to thee, the church, over which thou presidest, being witness.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' But the bishop was at first confounded, thinking that he was falsely charged in regard to money which he had not received, and he could neither believe the accusation respecting what he had not, nor could he disbelieve John. But when he said, ‘I demand the young man and the soul of the brother,’ the old man, groaning deeply and at the same time bursting into tears, said, ‘He is dead.’ ‘How and what kind of death?’ ‘He is dead to God,’ he said; ‘for he turned wicked and abandoned, and at last a robber. And now, instead of the church, he haunts the mountain with a band like himself.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But the Apostle rent his clothes, and beating his head with great lamentation, he said, ‘A fine guard I left for a brother’s soul! But let a horse be brought me, and let some one show me the way.’ He rode away from the church just as he was, and coming to the place, he was taken prisoner by the robbers’ outpost.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' He, however, neither fled nor made entreaty, but cried out, ‘For this did I come; lead me to your captain.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' The latter, meanwhile, was waiting, armed as he was. But when he recognized John approaching, he turned in shame to flee.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But John, forgetting his age, pursued him with all his might, crying out, ‘Why, my son, dost thou flee from me, thine own father, unarmed, aged? Pity me, my son; fear not; thou hast still hope of life. I will give account to Christ for thee. If need be, I will willingly endure thy death as the Lord suffered death for us. For thee will I give up my life. Stand, believe; Christ hath sent me.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' And he, when he heard, first stopped and looked down; then he threw away his arms, and then trembled and wept bitterly. And when the old man approached, he embraced him, making confession with lamentations as he! was able, baptizing himself a second time with tears, and concealing only his right hand,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' But John, pledging himself, and assuring him on oath that he would find forgiveness with the Saviour, besought him, fell upon his knees, kissed his right hand itself as if now purified by repentance, and led him back to the church. And making intercession for him with copious prayers, and struggling together with him in continual fastings, and subduing his mind by various utterances, he did not depart, as they say, until he had restored him to the church, furnishing a great example of true repentance and a great proof of regeneration, a trophy of a visible resurrection.”',
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
      ' This extract from Clement I have inserted here for the sake of the history and for the benefit of my readers. Let us now point out the undisputed writings of this apostle.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And in the first place his Gospel, which is known to all the churches under heaven, must be acknowledged as genuine. That it has with good reason been put by the ancients in the fourth place, after the other three Gospels, may be made evident in the following way.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Those great and truly divine men, I mean the apostles of Christ, were purified in their life, and were adorned with every virtue of the soul, but were uncultivated in speech. They were confident indeed in their trust in the divine and wonder-work-ing power which was granted unto them by the Saviour, but they did not know how, nor did they attempt to proclaim the doctrines of their teacher in studied and artistic language, but employing only the demonstration of the divine Spirit, which worked with them, and the wonder-working power of Christ, which was displayed through them, they published the knowledge of the kingdom of heaven throughout the whole world, paying little attention to the composition of written works.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And this they did because they were assisted in their ministry by one greater than man. Paul, for instance, who surpassed them all in vigor of expression and in richness of thought, committed to writing no more than the briefest epistles, although he had innumerable mysterious matters to communicate, for he had attained even unto the sights of the third heaven, had been carried to the very paradise of God, and had been deemed worthy to ‘heat unspeakable utterances there.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And the rest of the followers of our Saviour, the twelve apostles, the seventy disciples, and countless others besides, were not ignorant of these things. Nevertheless, of all the disciples of the Lord, only Matthew and John have left us written memorials, and they, tradition says, were led to write only under the pressure of necessity.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' For Matthew, who had at first preached to the Hebrews, when he was about to go to other peoples, committed his Gospel to writing in his native tongue, and thus compensated those whom he was obliged to leave for the loss of his presence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And when Mark and Luke had already published their Gospels, they say that John, who had employed all his time in proclaiming the Gospel orally, finally proceeded to write for the following reason. The three Gospels already mentioned having come into the hands of all and into his own too, they say that he accepted them and bore witness to their truthfulness; but that there was lacking in them an account of the deeds done by Christ at the beginning of his ministry.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And this indeed is true. For it is evident that the three evangelists recorded only the deeds done by the Saviour for one year after the imprisonment of John the Baptist, and indicated this in the beginning of their account.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' For Matthew, after the forty days’ fast and the temptation which followed it, indicates the chronology of his work when he says: “Now when he heard that John was delivered up he withdrew from Judea into Galilee.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Mark likewise says: “Now after that John was delivered up Jesus came into Galilee.” And Luke, before commencing his account of the deeds of Jesus, similarly marks the time, when he says that Herod, “adding to all the evil deeds which he had done, shut up John in prison.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' They say, therefore, that the apostle John, being asked to do it for this reason, gave in his Gospel an account of the period which had been omitted by the earlier evangelists, and of the deeds done by the Saviour during that period; that is, of those which were done before the imprisonment of the Baptist. And this is indicated by him, they say, in the following words: “This beginning of miracles did Jesus”; and again when he refers to the Baptist, in the midst of the deeds of Jesus, as still baptizing in Ænon near Salim; where he states the matter clearly in the words: “For John was not yet cast into prison.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' John accordingly, in his Gospel, records the deeds of Christ which were performed before the Baptist was cast into prison, but the other three evangelists mention the events which happened after that time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' One who understands this can no longer think that the Gospels are at variance with one another, inasmuch as the Gospel according to John contains the first acts of Christ, while the others give an account of the latter part of his life. And the genealogy of our Saviour according to the flesh John quite naturally omitted, because it had been already given by Matthew and Luke, and began with the doctrine of his divinity, which had, as it were, been reserved for him, as their superior, by the divine Spirit.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' These things may suffice, which we have said concerning the Gospel of John. The cause which led to the composition of the Gospel of Mark has been already stated by us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' But as for Luke, in the beginning of his Gospel, he states that since many others had more rashly undertaken to compose a narrative of the events of which he had acquired perfect knowledge, he himself, feeling the necessity of freeing us from their uncertain opinions, delivered in his own Gospel an accurate account of those events in regard to which he had learned the full truth, being aided by his intimacy and his stay with Paul and by his acquaintance with the rest of the apostles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' So much for our own account of these things. But in a more fitting place we shall attempt to show by quotations from the ancients, what others have said concerning them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But of the writings of John, not only his Gospel, but also the former of his epistles, has been accepted without dispute both now and in ancient times. But the other two are disputed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' In regard to the Apocalypse, the opinions of most men are still divided. But at the proper time this question likewise shall be decided from the testimony of the ancients.',
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
      ' Since we are dealing with this subject it is proper to sum up the writings of the New Testament which have been already mentioned. First then must be put the holy quaternion of the Gospels; following them the Acts of the Apostles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' After this must be reckoned the epistles of Paul; next in order the extant former epistle of John, and likewise the epistle of Peter, must be maintained. After them is to be placed, if it really seem proper, the Apocalypse of John, concerning which we shall give the different opinions at the proper time. These then belong among the accepted writings.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Among the disputed writings, which are nevertheless recognized by many, are extant the so-called epistle of James and that of Jude, also the second epistle of Peter, and those that are called the second and third of John, whether they belong to the evangelist or to another person of the same name.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Among the rejected writings must be reckoned also the Acts of Paul, and the so-called Shepherd, and the Apocalypse of Peter, and in addition to these the extant epistle of Barnabas, and the so-called Teachings of the Apostles; and besides, as I said, the Apocalypse of John, if it seem proper, which some, as I said, reject, but which others class with the accepted books.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And among these some have placed also the Gospel according to the Hebrews, with which those of the Hebrews that have accepted Christ are especially delighted. And all these may be reckoned among the disputed books.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But we have nevertheless felt compelled to give a catalogue of these also, distinguishing those works which according to ecclesiastical tradition are true and genuine and commonly accepted, from those others which, although not canonical but disputed, are yet at the same time known to most ecclesiastical writers—we have felt compelled to give this catalogue in order that we might be able to know both these works and those that are cited by the heretics under the name of the apostles, including, for instance, such books as the Gospels of Peter, of Thomas, of Matthias, or of any others besides them, and the Acts of Andrew and John and the other apostles, which no one belonging to the succession of ecclesiastical writers has deemed worthy of mention in his writings.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And further, the character of the style is at variance with apostolic usage, and both the thoughts and the purpose of the things that are related in them are so completely out of accord with true orthodoxy that they clearly show themselves to be the fictions of heretics. Wherefore they are not to be placed even among the rejected writings, but are all of them to be cast aside as absurd and impious. Let us now proceed with our history.',
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
      ' Menander, who succeeded Simon Magus, showed himself in his conduct another instrument of diabolical power, not inferior to the former. He also was a Samaritan and carried his sorceries to no less an extent than his teacher had done, and at the same time reveled in still more marvelous tales than he.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For he said that he was himself the Saviour, who had been sent down from invisible æons for the salvation of men; and he taught that no one could gain the mastery over the world-creating angels themselves unless he had first gone through the magical discipline imparted by him and had received baptism from him. Those who were deemed worthy of this would partake even in the present life of perpetual immortality, and would never die, but would remain here forever, and without growing old become immortal. These facts can be easily learned from the works of Irenæus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And Justin, in the passage in which he mentions Simon, gives an account of this man also, in the following words: “And we know that a certain Menander, who was also a Samaritan, from the village of Capparattea, was a disciple of Simon, and that he also, being driven by the demons, came to Antioch and deceived many by his magical art. And he persuaded his followers that they should not die. And there are still some of them that assert this.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And it was indeed an artifice of the devil to endeavor, by means of such sorcerers, who assumed the name of Christians, to defame the great mystery of godliness by magic art, and through them to make ridiculous the doctrines of the Church concerning the immortality of the soul and the resurrection of the dead. But they that have chosen these men as their saviours have fallen away from the true hope.',
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
      ' The evil demon, however, being unable to tear certain others from their allegiance to the Christ of God, yet found them susceptible in a different direction, and so brought them over to his own purposes. The ancients quite properly called these men Ebionites, because they held poor and mean opinions concerning Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For they considered him a plain and common man, who was justified only because of his superior virtue, and who was the fruit of the intercourse of a man with Mary. In their opinion the observance of the ceremonial law was altogether necessary, on the ground that they could not be saved by faith in Christ alone and by a corresponding life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' There were others, however, besides them, that were of the same name, but avoided the strange and absurd beliefs of the former, and did not deny that the Lord was born of a virgin and of the Holy Spirit. But nevertheless, inasmuch as they also refused to acknowledge that he pre-existed, being God, Word, and Wisdom, they turned aside into the impiety of the former, especially when they, like them, endeavored to observe strictly the bodily worship of the law.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' These men, moreover, thought that it was necessary to reject all the epistles of the apostle, whom they called an apostate from the law; and they used only the so-called Gospel according to the Hebrews and made small account of the rest.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The Sabbath and the rest of the discipline of the Jews they observed just like them, but at the same time, like us, they celebrated the Lord’s days as a memorial of the resurrection of the Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Wherefore, in consequence of such a course they received the name of Ebionites, which signified the poverty of their understanding. For this is the name by which a poor man is called among the Hebrews.',
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
      ' We have understood that at this time Cerinthus, the author of another heresy, made his appearance. Caius, whose words we quoted above, in the Disputation which is ascribed to him, writes as follows concerning this man:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “But Cerinthus also, by means of revelations which he pretends were written by a great apostle, brings before us marvelous things which he falsely claims were shown him by angels; and he says that after the resurrection the kingdom of Christ will be set up on earth, and that the flesh dwelling in Jerusalem will again be subject to desires and pleasures. And being an enemy of the Scriptures of God, he asserts, with the purpose of deceiving men, that there is to be a period of a thousand years a for marriage festivals.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And Dionysius, who was bishop of the parish of Alexandria in our day, in the second book of his work On the Promises, where he says some things concerning the Apocalypse of John which he draws from tradition, mentions this same man in the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “But (they say that) Cerinthus, who founded the sect which was called, after him, the Cerinthian, desiring reputable authority for his fiction, prefixed the name. For the doctrine which he taught was this: that the kingdom of Christ will be an earthly one.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And as he was himself devoted to the pleasures of the body and altogether sensual in his nature, he dreamed that that kingdom would consist in those things which he desired, namely, in the delights of the belly and of sexual passion, that is to say, in eating and drinking and marrying, and in festivals and sacrifices and the slaying of victims, under the guise of which he thought he could indulge his appetites with a better grace.” These are the words of Dionysius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But Irenæus, in the first book of his work Against Heresies, gives some more abominable false doctrines of the same man, and in the third book relates a story which deserves to be recorded. He says, on the authority of Polycarp, that the apostle John once entered a bath to bathe; but, learning that Cerinthus was within, he sprang from the place and rushed out of the door, for he could not bear to remain under the same roof with him. And he advised those that were with him to do the same, saying, “Let us flee, lest the bath fall for Cerinthus, the enemy of the truth, is within.”',
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
      ' At this time the so-called sect of the Nicolaitans made its appearance and lasted for a very short time. Mention is made of it in the Apocalypse of John. They boasted that the author of their sect was Nicolaus, one of the deacons who, with Stephen, were appointed by the apostles for the purpose of ministering to the poor. Clement of Alexandria, in the third book of his Stromata, relates the following things concerning him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “They say that he had a beautiful wife, and after the ascension of the Saviour, being accused by the apostles of jealousy, he led her into their midst and gave permission to any one that wished to marry her. For they say that this was in accord with that saying of his, that one ought to abuse the flesh. And those that have followed his heresy, imitating blindly and foolishly that which was done and said, commit fornication without shame.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But I understand that Nicolaus had to do with no other woman than her to whom he was married, and that, so far as his children are concerned, his daughters continued in a state of virginity until old age, and his son remained uncorrupt. If this is so, when he brought his wife, whom he jealously loved, into the midst of the apostles, he was evidently renouncing his passion; and when he used the expression, ‘to abuse the flesh,’ he was inculcating self-control in the face of those pleasures that are eagerly pursued. For I suppose that, in accordance with the command of the Saviour, he did not wish to serve two masters, pleasure and the Lord.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But they say that Matthias also taught in the same manner that we ought to fight against and abuse the flesh, and not give way to it for the sake of pleasure, but strengthen the soul by faith and knowledge.” So much concerning those who then attempted to pervert the truth, but in less time than it has taken to tell it became entirely extinct.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[29]->title,
      'subtitle' => $metadata->book->chapters[29]->subtitle,
      'id' => $metadata->book->chapters[29]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Clement, indeed, whose words we have just quoted, after the above-mentioned facts gives a statement, on account of those who rejected marriage, of the apostles that had wives. “Or will they,” says he, “reject even the apostles? For Peter and Philip begat children; and Philip also gave his daughters in marriage. And Paul does not hesitate, in one of his epistles, to greet his wife, whom he did not take about with him, that he might not be inconvenienced in his ministry.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And since we have mentioned this subject it is not improper to subjoin another account which is given by the same author and which is worth reading. In the seventh book of his Stromata he writes as follows: “They say, accordingly, that when the blessed Peter saw his own wife led out to die, he rejoiced because of her summons and her return home, and called to her very encouragingly and comfortingly, addressing her by name, and saying, ‘Oh thou, remember the Lord.’ Such was the marriage of the blessed, and their perfect disposition toward those dearest to them.” This account being in keeping with the subject in hand, I have related here in its proper place.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[30]->title,
      'subtitle' => $metadata->book->chapters[30]->subtitle,
      'id' => $metadata->book->chapters[30]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' The time and the manner of the death of Paul and Peter as well as their burial places, have been already shown by us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The time of John’s death has also been given in a general way, but his burial place is indicated by an epistle of Polycrates (who was bishop of the parish of Ephesus), addressed to Victor, bishop of Rome. In this epistle he mentions him together with the apostle Philip and his daughters in the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “For in Asia also great lights have fallen asleep, which shall rise again on the last day, at the coming of the Lord, when he shall come with glory from heaven and shall seek out all the saints. Among these are Philip, one of the twelve apostles, who sleeps in Hierapolis, and his two aged virgin daughters, and another daughter who lived in the Holy Spirit and now rests at Ephesus; and moreover John, who was both a witness and a teacher, who reclined upon the bosom of the Lord, and being a priest wore the sacerdotal plate. He also sleeps at Ephesus.” So much concerning their death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And in the Dialogue of Caius which we mentioned a little above, Proclus, against whom he directed his disputation, in agreement with what has been quoted, speaks thus concerning the death of Philip and his daughters: “After him there were four prophetesses, the daughters of Philip, at Hierapolis in Asia. Their tomb is there and the tomb of their father.” Such is his state-merit.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But Luke, in the Acts of the Apostles, mentions the daughters of Philip who were at that time at Cæsarea in Judea with their father, and were honored with the gift of prophecy. His words are as follows: “We came unto Cæsarea; and entering into the house of Philip the evangelist, who was one of the seven, we abode with him. Now this man had four daughters, virgins, which did prophesy.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' We have thus set forth in these pages what has come to our knowledge concerning the apostles themselves and the apostolic age, and concerning the sacred writings which they have left us, as well as concerning those which are disputed, but nevertheless have been publicly used by many in a great number of churches, and moreover, concerning those that are altogether rejected and are out of harmony with apostolic orthodoxy. Having done this, let us now proceed with our history.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[31]->title,
      'subtitle' => $metadata->book->chapters[31]->subtitle,
      'id' => $metadata->book->chapters[31]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' It is reported that after the age of Nero and Domitian, under the emperor whose times we are now recording, a persecution was stirred up against us in certain cities in consequence of a popular uprising. In this persecution we have understood that Symeon, the son of Clopas, who, as we have shown, was the second bishop of the church of Jerusalem, suffered martyrdom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Hegesippus, whose words we have already quoted in various places, is a witness to this fact also. Speaking of certain heretics he adds that Symeon was accused by them at this time; and since it was clear that he was a Christian, he was tortured in various ways for many days, and astonished even the judge himself and his attendants in the highest degree, and finally he suffered a death similar to that of our Lord.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But there is nothing like hearing the historian himself, who writes as follows: “Certain of these heretics brought accusation against Symeon, the son of Clopas, on the ground that he was a descendant of David and a Christian; and thus he suffered martyrdom, at the age of one hundred and twenty years, while Trajan was emperor and Atticus governor.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And the same writer says that his accusers also, when search was made for the descendants of David, were arrested as belonging to that family. And it might be reasonably assumed that Symeon was one of those that saw and heard the Lord, judging from the length of his life, and from the fact that the Gospel makes mention of Mary, the wife of Clopas, who was the father of Symeon, as has been already shown.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The same historian says that there were also others, descended from one of the so-called brothers of the Saviour, whose name was Judas, who, after they had borne testimony before Domitian, as has been already recorded, in behalf of faith in Christ, lived until the same reign.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' He writes as follows: “They came, therefore, and took the lead of every church as witness and as relatives of the Lord. And profound peace being established in every church, they remained until the reign of the Emperor Trajan, and until the above-mentioned Symeon, son of Clopas, an uncle of the Lord, was informed against by the heretics, and was himself in like manner accused for the same cause before the governor Atticus. And after being tortured for many days he suffered martyrdom, and all, including even the proconsul, marveled that, at the age of one hundred and twenty years, he could endure so much. And orders were given that he should be crucified.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' In addition to these things the same man, while recounting the events of that period, records that the Church up to that time had remained a pure and uncorrupted virgin, since, if there were any that attempted to corrupt the sound norm of the preaching of salvation, they lay until then concealed in obscure darkness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But when the sacred college of apostles had suffered death in various forms, and the generation of those that had been deemed worthy to hear the inspired wisdom with their own ears had passed away, then the league of godless error took its rise as a result of the folly of heretical teachers, who, because none of the apostles was still living, attempted henceforth, with a bold face, to proclaim, in opposition to the preaching of the truth, the ‘knowledge which is falsely so-called.’',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[32]->title,
      'subtitle' => $metadata->book->chapters[32]->subtitle,
      'id' => $metadata->book->chapters[32]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' So great a persecution was at that time opened against us in many places that Plinius Secundus, one of the most noted of governors, being disturbed by the great number of martyrs, communicated with the emperor concerning the multitude of those that were put to death for their faith. At the same time, he informed him in his communication that he had not heard of their doing anything profane or contrary to the laws—except that they arose at dawn and sang hymns to Christ as a God; but that they renounced adultery and murder and like criminal offenses, and did all things in accordance with the laws.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In reply to this Trajan made the following decree: that the race of Christians should not be sought after, but when found should be punished. On account of this the persecution which had threatened to be a most terrible one was to a certain degree checked, but there were still left plenty of pretexts for those who wished to do us harm. Sometimes the people, sometimes the rulers in various places, would lay plots against us, so that, although no great persecutions took place, local persecutions were nevertheless going on in particular provinces, and many of the faithful endured martyrdom in various forms.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' We have taken our account from the Latin Apology of Tertullian which we mentioned above. The translation runs as follows: “And indeed we have found that search for us has been forbidden. For when Plinius Secundus, the governor of a province, had condemned certain Christians and deprived them of their dignity, he was confounded by the multitude, and was uncertain what further course to pursue. He therefore communicated with Trajan the emperor, informing him that, aside from their unwillingness to sacrifice, he had found no impiety in them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And he reported this also, that the Christians arose early in the morning and sang hymns unto Christ as a God, and for the purpose of preserving their discipline forbade murder, adultery, avarice, robbery, and the like. In reply to this Trajan wrote that the race of Christians should not be sought after, but when found should be punished.” Such were the events which took place at that time.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[33]->title,
      'subtitle' => $metadata->book->chapters[33]->subtitle,
      'id' => $metadata->book->chapters[33]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' In the third year of the reign of the emperor mentioned above, Clement committed the episcopal government of the church of Rome to Evarestus, and departed this life after he had superintended the teaching of the divine word nine years in all.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[34]->title,
      'subtitle' => $metadata->book->chapters[34]->subtitle,
      'id' => $metadata->book->chapters[34]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' But when Symeon also had died in the manner described, a certain Jew by the name of Justus succeeded to the episcopal throne in Jerusalem. He was one of the many thousands of the circumcision who at that time believed in Christ.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[35]->title,
      'subtitle' => $metadata->book->chapters[35]->subtitle,
      'id' => $metadata->book->chapters[35]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' At that time Polycarp, a disciple of the apostles, was a man of eminence in Asia, having been entrusted with the episcopate of the church of Smyrna by those who had seen and heard the Lord.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And at the same time Papias, bishop of the parish of Hierapolis, became well known, as did also Ignatius, who was chosen bishop of Antioch, second in succession to Peter, and whose fame is still celebrated by a great many.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Report says that he was sent from Syria to Rome, and became food for wild beasts on account of his testimony to Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And as he made the journey through Asia under the strictest military surveillance, he fortified the parishes in the various cities where he stopped by oral homilies and exhortations, and warned them above all to be especially on their guard against the heresies that were then beginning to prevail, and exhorted them to hold fast to the tradition of the apostles. Moreover, he thought it necessary to attest that tradition in writing, and to give it a fixed form for the sake of greater security.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' So when he came to Smyrna, where Polycarp was, he wrote an epistle to the church of Ephesus, in which he mentions Onesimus, its pastor; and another to the church of Magnesia, situated upon the Mæander, in which he makes mention again of a bishop Damas; and finally one to the church of Tralles, whose bishop, he states, was at that time Polybius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' In addition to these he wrote also to the church of Rome, entreating them not to secure his release from martyrdom, and thus rob him of his earnest hope. In confirmation of what has been said it is proper to quote briefly from this epistle. He writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' “From Syria even unto Rome I fight with wild beasts, by land and by sea, by night and by day, being bound amidst ten leopards? that is, a company of soldiers who only become worse when they are well treated. In the midst of their wrongdoings, however, I am more fully learning discipleship, but I am not thereby justified.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' May I have joy of the beasts that are prepared for me; and I pray that I may find them ready; I will even coax them to devour me quickly that they may not treat me as they have some whom they have refused to touch through fear. And if they are unwilling, I will compel them. Forgive me.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' I know what is expedient for me. Now do I begin to be a disciple. May naught of things visible and things invisible envy me; that I may attain unto Jesus Christ. Let fire and cross and attacks of wild beasts, let wrenching of bones, cutting of limbs, crushing of the whole body, tortures of the devil—let all these come upon me if only I may attain unto Jesus Christ.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' These things he wrote from the above-mentioned city to the churches referred to. And when he had left Smyrna he wrote again from Troas to the Philadelphians and to the church of Smyrna; and particularly to Polycarp, who presided over the latter church. And since he knew him well as an apostolic man, he commended to him, like a true and good shepherd, the flock at Antioch, and besought him to care diligently for it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And the same man, writing to the Smyrnæans, used the following words concerning Christ, taken I know not whence: “But I know and believe that he was in the flesh after the resurrection. And when he came to Peter and his companions he said to them, Take, handle me, and see that I am not an incorporeal spirit. And immediately they touched him and believed.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Irenæus also knew of his martyrdom and mentions his epistles in the following words: “As one of our people said, when he was condemned to the beasts on account of his testimony unto God, I am God’s wheat, and by the teeth of wild beasts am I ground, that I may be found pure bread.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Polycarp also mentions these letters in the epistle to the Philippians which is ascribed to him. His words are as follows: “I exhort all of you, therefore, to be obedient and to practice all patience such as ye saw with your own eyes not only in the blessed Ignatius and Rufus and Zosimus, but also in others from among yourselves as well as in Paul himself and the rest of the apostles; being persuaded that all these ran not in vain, but in faith and righteousness, and that they are gone to their rightful place beside the Lord, with whom also they suffered. For they loved not the present world, but him that died for our sakes and was raised by God for us.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And afterwards he adds: “You have written to me, both you and Ignatius, that if any one go to Syria he may carry with him the letters from you. And this I will do if I have a suitable opportunity, either I myself or one whom I send to be an ambassador for you also. The epistles of Ignatius which were sent to us by him and the others which we had with us we sent to you as you gave charge. They are appended to this epistle, and from them you will be able to derive great advantage. For they comprise faith and patience, and every kind of edification that pertaineth to our Lord.” So much concerning Ignatius. But he was succeeded by Heros in the episcopate of the church of Antioch.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[36]->title,
      'subtitle' => $metadata->book->chapters[36]->subtitle,
      'id' => $metadata->book->chapters[36]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Among those that were celebrated at that time was Quadratus, who, report says, was renowned along with the daughters of Philip for his prophetical gifts. And there were many others besides these who were known in those days, and who occupied the first place among the successors of the apostles. And they also, being illustrious disciples of such great men, built up the foundations of the churches which had been laid by the apostles in every place, and preached the Gospel more and more widely and scattered the saving seeds of the kingdom of heaven far and near throughout the whole world.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For indeed most of the disciples of that time, animated by the divine word with a more ardent love for philosophy, had already fulfilled the command of the Saviour, and had distributed their goods to the needy. Then starting out upon long journeys they performed the office of evangelists, being filled with the desire to preach Christ to those who had not yet heard the word of faith, and to deliver to them the divine Gospels.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And when they had only laid the foundations of the faith in foreign places, they appointed others as pastors, and entrusted them with the nurture of those that had recently been brought in, while they themselves went on again to other countries and nations, with the grace and the co-operation of God. For a great many wonderful works were done through them by the power of the divine Spirit, so that at the first hearing whole multitudes of men eagerly embraced the religion of the Creator of the universe.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But since it is impossible for us to enumerate the names of all that became shepherds or evangelists in the churches throughout the world in the age immediately succeeding the apostles, we have recorded, as was fitting, the names of those only who have transmitted the apostolic doctrine to us in writings still extant.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[37]->title,
      'subtitle' => $metadata->book->chapters[37]->subtitle,
      'id' => $metadata->book->chapters[37]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' Thus Ignatius has done in the epistles which we have mentioned, and Clement in his epistle which is accepted by all, and which he wrote in the name of the church of Rome to the church of Corinth. In this epistle he gives many thoughts drawn from the Epistle to the Hebrews, and also quotes verbally some of its expressions, thus showing most plainly that it is not a recent production.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Wherefore it has seemed reasonable to reckon it with the other writings of the apostle. For as Paul had written to the Hebrews in his native tongue, some say that the evangelist Luke, others that this Clement himself, translated the epistle.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The latter seems more probable, because the epistle of Clement and that to the Hebrews have a similar character in regard to style, and still further because the thoughts contained in the two works are not very different.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But it must be observed also that there is said to be a second epistle of Clement. But we do not know that this is recognized like the former, for we do not find that the ancients have made any use of it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And certain men Lengthy writings under his name, containing dialogues of Peter and Apion. But no mention has been made of these by the ancients; for they do not even preserve the pure stamp of apostolic orthodoxy. The acknowledged writing of Clement is well known. We have spoken also of the works of Ignatius and Polycarp.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[38]->title,
      'subtitle' => $metadata->book->chapters[38]->subtitle,
      'id' => $metadata->book->chapters[38]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' There are extant five books of Papias, which bear the title Expositions of Oracles of the Lord. Irenæus makes mention of these as the only works written by him, in the following words: “These things are attested by Papias, an ancient man who was a hearer of John and a companion of Polycarp, in his fourth book. For five books have been written by him.” These are the words of Irenæus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But Papias himself in the preface to his discourses by no means declares that he was himself a hearer and eye-witness of the holy apostles, but he shows by the words which he uses that he received the doctrines of the faith from those who were their friends.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He says: “But I shall not hesitate also to put down for you along with my interpretations whatsoever things I have at any time learned carefully from the elders and carefully remembered, guaranteeing their truth. For I did not, like the multitude, take pleasure in those that speak much, but in those that teach the truth; not in those that relate strange commandments, but in those that deliver the commandments given by the Lord to faith, and springing from the truth itself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' If, then, any one came, who had been a follower of elders, I questioned him in regard to the words of the elders,—what Andrew or what Peter said, or what was said by Philip, or by Thomas, or by James, or by John, or by Matthew, or by any other of the disciples of the Lord, and what things Aristion and the presbyter John, the disciples of the Lord, say. For I did not think that what was to be gotten from the books would profit me as much as what came from the living and abiding voice.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' It is worth while observing here that the name John is twice enumerated by him. The first one he mentions in connection with Peter and James and Matthew and the rest of the Apostles, clearly meaning the evangelist; but the other John he mentions after an interval, and places him among others outside of the number of the apostles, putting Aristion before him, and he distinctly calls him a presbyter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' This shows that the statement of those is true, who say that there were two persons in Asia that bore the same name, and that there were two tombs in Ephesus, each of which, even to the present day, is called John’s. It is important to notice this. For it is probable that it was the second, if one is not willing to admit that it was the first that saw the Revelation, which is ascribed by name to John.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And Papias, of whom we are now speaking, confesses that he received the words of the apostles from those that followed them, but says that he was himself a hearer of Aristion and the presbyter John. At least he mentions them frequently by name, and gives their traditions in his writings. These things, we hope, have not been uselessly adduced by us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But it is fitting to subjoin to the words of Papias which have been quoted, other passages from his works in which he relates some other wonderful events which he claims to have received from tradition.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' That Philip the apostle dwelt in Hierapolis with his daughters has been already stated. But it must be noted here that Papias, their contemporary, says that he heard a wonderful tale from the daughters of Philip. For he relates that in his time one rose from the dead. And he tells another wonderful story of Justus, surnamed Barsabbas: that he drank a deadly poison, and yet, by grace of the Lord, suffered no harm.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' The Book of Acts records that the holy apostles after the ascension of the Saviour, put forward this Justus, together with Matthias, and prayed that one might be chosen in place of the traitor Judas, to fill up their number. The account is as follows: “And they put forward two, Joseph, called Barsabbas, who was surnamed Justus, and Matthias; and they prayed and said.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' The same writer gives also other accounts which he says came to him through unwritten tradition, certain strange parables and teachings of the Saviour, and some other mythical things.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' To these belong his statement that there will be a period of some thousand years after the resurrection of the dead, and that the kingdom of Christ will be set up in material form on this very earth. I suppose he got these ideas through a misunderstanding of the apostolic accounts, not perceiving that the things said by them were spoken mystically in figures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' For he appears to have been of very limited understanding, as one can see from his discourses. But it was due to him that so many of the Church Fathers after him adopted a like opinion, urging in their own support the antiquity of the man; as for instance Irenæus and any one else that may have proclaimed similar views.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' Papias gives also in his own work other accounts of the words of the Lord on the authority of Aristion who was mentioned above, and traditions as handed down by the presbyter John; to which we refer those who are fond of learning. But now we must add to the words of his which we have already quoted the tradition which he gives in regard to Mark, the author of the Gospel.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' It is in the following words: “This also the presbyter said: Mark, having become the interpreter of Peter, wrote down accurately, though not indeed in order, whatsoever he remembered of the things said or done by Christ. For he neither heard the Lord nor followed him, but afterward, as I said, he followed Peter, who adapted his teachings to the needs of his hearers, but with no intention of giving a connected account of the Lord’s discourses, so that Mark committed no error while he thus wrote some things as he remembered them. For he was careful of one thing, not to omit any of the things which he had heard, and not to state any of them falsely. “These things are related by Papias concerning Mark.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' But concerning Matthew he writes as follows: “So then Matthew wrote the oracles in the Hebrew language, and every one interpreted them as he was able.” And the same writer uses testimonies from the Epistle of John and from that of Peter likewise. And he relates another story of a woman, who was accused of many sins before the Lord, which is contained in the Gospel according to the Hebrews. These things we have thought it necessary to observe in addition to what has been already stated.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
