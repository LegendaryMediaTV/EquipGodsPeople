<?php
$html->add(new BS_Banner(
  null,

  'Book four of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering various bishops and early extra-biblical writings around the 2[sup]nd[/sup] century'
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
      ' About the twelfth year of the reign of Trajan the above-mentioned bishop of the parish of Alexandria died, and Primus, the fourth in succession from the apostles, was chosen to the office.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' At that time also Alexander, the fifth in the line of succession from Peter and Paul, received the episcopate at Rome, after Evarestus had held the office eight years.',
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
      ' The teaching and the Church of our Saviour flourished greatly and made progress from day to day; but the calamities of the Jews increased, and they underwent a constant succession of evils. In the eighteenth year of Trajan’s reign there was another disturbance of the Jews, through which a great multitude of them perished.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For in Alexandria and in the rest of Egypt, and also in Cyrene, as if incited by some terrible and factious spirit, they rushed into seditious measures against their fellow-inhabitants, the Greeks. The insurrection increased greatly, and in the following year, while Lupus was governor of all Egypt, it developed into a war of no mean magnitude.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In the first attack it happened that they were victorious over the Greeks, who fled to Alexandria and imprisoned and slew the Jews that were in the city. But the Jews of Cyrene, although deprived of their aid, continued to plunder the land of Egypt and to devastate its districts, under the leadership of Lucuas. Against them the emperor sent Marcius Turbo with a foot and naval force and also with a force of cavalry.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' He carried on the war against them for a long time and fought many battles, and slew many thousands of Jews, not only of those of Cyrene, but also of those who dwelt in Egypt and had come to the assistance of their king Lucuas.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But the emperor, fearing that the Jews in Mesopotamia would also make an attack upon the inhabitants of that country, commanded Lucius Quintus to clear the province of them. And he having marched against them slew a great multitude of those that dwelt there; and in consequence of his success he was made governor of Judea by the emperor. These events are recorded also in these very words by the Greek historians that have written accounts of those times.',
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
      ' After Trajan had reigned for nineteen and a half years Ælius Adrian became his successor in the empire. To him Quadratus addressed a discourse containing an apology for our religion, because certain wicked men had attempted to trouble the Christians. The work is still in the hands of a great many of the brethren, as also in our own, and furnishes clear proofs of the man’s understanding and of his apostolic orthodox.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He himself reveals the early date at which he lived in the following words: “But the works of our Saviour were always present, for they were genuine:-those that were healed, and those that were raised from the dead, who were seen not only when they were healed and when they were raised, but were also always present; and not merely while the Saviour was on earth, but also after his death, they were alive for quite a while, so that some of them lived even to our day.” Such then was Quadratus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Aristides also, a believer earnestly devoted to our religion, left, like Quadratus, an apology for the faith, addressed to Adrian. His work, too, has been preserved even to the present day by a great many persons.',
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
      ' In the third year of the same reign, Alexander, bishop of Rome, died after holding office ten years. His successor was Xystus. About the same time Primus, bishop of Alexandria, died in the twelfth year of his episcopate, and was succeeded by Justus.',
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
      ' The chronology of the bishops of Jerusalem I have nowhere found preserved in writing; for tradition says that they were all short lived.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But I have learned this much from writings, that until the siege of the Jews, which took place under Adrian, there were fifteen bishops in succession there. all of whom are said to have been of Hebrew descent, and to have received the knowledge of Christ in purity, so that they were approved by those who were able to judge of such matters, and were deemed worthy of the episcopate. For their whole church consisted then of believing Hebrews who continued from the days of the apostles until the siege which took place at this time; in which siege the Jews, having again rebelled against the Romans, were conquered after severe battles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But since the bishops of the circumcision ceased at this time, it is proper to give here a list of their names from the beginning. The first, then, was James, the so-called brother of the Lord; the second, Symeon; the third, Justus; the fourth, Zacchæus; the fifth, Tobias; the sixth, Benjamin; the seventh, John; the eighth, Matthias; the ninth, Philip; the tenth, Seneca; the eleventh, Justus; the twelfth, Levi; the thirteenth, Ephres; the fourteenth, Joseph; and finally, the fifteenth, Judas.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' These are the bishops of Jerusalem that lived between the age of the apostles and the time referred to, all of them belonging to the circumcision.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' In the twelfth year of the reign of Adrian, Xystus, having completed the tenth year of his episcopate, was succeeded by Telesphorus, the seventh in succession from the apostles. In the meantime, after the lapse of a year and some months, Eumenes, the sixth in order, succeeded to the leadership of the Alexandrian church, his predecessor having held office eleven years.',
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
      ' As the rebellion of the Jews at this time grew much more serious, Rufus, governor of Judea, after an auxiliary force had been sent him by the emperor, using their madness as a pretext, proceeded against them without mercy, and destroyed indiscriminately thousands of men and women and children, and in accordance with the laws of war reduced their country to a state of complete subjection.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The leader of the Jews at this time was a man by the name of Barcocheba (which signifies a star), who possessed the character of a robber and a murderer, but nevertheless, relying upon his name, boasted to them, as if they were slaves, that he possessed wonderful powers; and he pretended that he was a star that had come down to them out of heaven to bring them light in the midst of their misfortunes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The war raged most fiercely in the eighteenth year of Adrian, at the city of Bithara, which was a very secure fortress, situated not far from Jerusalem. When the siege had lasted a long time, and the rebels had been driven to the last extremity by hunger and thirst, and the instigator of the rebellion had suffered his just punishment, the whole nation was prohibited from this time on by a decree, and by the commands of Adrian, from ever going up to the country about Jerusalem. For the emperor gave orders that they should not even see from a distance the land of their fathers. Such is the account of Aristo of Pella.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And thus, when the city had been emptied of the Jewish nation and had suffered the total destruction of its ancient inhabitants, it was colonized by a different race, and the Roman city which subsequently arose changed its name and was called Ælia, in honor of the emperor Ælius Adrian. And as the church there was now composed of Gentiles, the first one to assume the government of it after the bishops of the circumcision was Marcus.',
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
      ' As the churches throughout the world were now shining like the most brilliant stars, and faith in our Saviour and Lord Jesus Christ was flourishing among the whole human race, the demon who hates everything that is good, and is always hostile to the truth, and most bitterly opposed to the salvation of man, turned all his arts against the Church. In the beginning he armed himself against it with, external persecutions.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But now, being shut off from the use of such means, he devised all sorts of plans, and employed other methods in his conflict with the Church, using base and deceitful men as instruments for the ruin of souls and as ministers of destruction. Instigated by him, impostors and deceivers, assuming the name of our religion, brought to the depth of ruin such of the believers as they could win over and at the same time, by means of the deeds which they practiced, turned away from the path which leads to the word of salvation those who were ignorant of the faith.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Accordingly there proceeded from that Menander, whom we have already mentioned as the successor of Simon, a certain serpent-like power, double-tongued and two-headed, which produced the leaders of two different heresies, Saturninus, an Antiochian by birth, and Basilides, an Alexandrian. The former of these established schools of godless heresy in Syria, the latter in Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Irenæus states that the false teaching of Saturninus agreed in most respects with that of Menander, but that Basilides, under the pretext of unspeakable mysteries, invented monstrous fables, and carried the fictions of his impious heresy quite beyond bounds.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But as there were at that time a great many members of the Church who were fighting for the truth and defending apostolic and ecclesiastical doctrine with uncommon eloquence, so there were some also that furnished posterity through their writings with means of defense against the heresies to which we have referred.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Of these there has come down to us a most powerful refutation of Basilides by Agrippa Castor, one of the most renowned writers of that day, which shows the terrible imposture of the man.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' While exposing his mysteries he says that Basilides wrote twenty-four books upon the Gospel, and that he invented prophets for himself named Barcabbas and Barcoph, and others that had no existence, and that he gave them barbarous names in order to amaze those who marvel at such things; that he taught also that the eating of meat offered to idols and the unguarded renunciation of the faith in times of persecution were matters of indifference; and that he enjoined upon his followers, like Pythagoras, a silence of five years.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Other similar things the above-mentioned writer has recorded concerning Basilides, and has ably exposed the error of his heresy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Irenæus also writes that Carpocrates was a contemporary of these men, and that he was the father of another heresy, called the heresy of the Gnostics, who did not wish to transmit any longer the magic arts of Simon, as that one had done, in secret, but openly. For they boasted—as of something great—of love potions that were carefully prepared by them, and of certain demons that sent them dreams and lent them their protection, and of other similar agencies; and in accordance with these things they taught that it was necessary for those who wished to enter fully into their mysteries, or rather into their abominations, to practice all the worst kinds of wickedness, on the ground that they could escape the cosmic powers, as they called them, in no other way than by discharging their obligations to them all by infamous-conduct.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Thus it came to pass that the malignant demon, making use of these ministers, on the one hand enslaved those that were so pitiably led astray by them to their own destruction, while on the other hand he furnished to the unbelieving heathen abundant opportunities for slandering the divine word, inasmuch as the reputation of these men brought infamy upon the whole race of Christians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' In this way, therefore, it came to pass that there was spread abroad in regard to us among the unbelievers of that age, the infamous and most absurd suspicion that we practiced unlawful commerce with mothers and sisters, and enjoyed impious feasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' He did not, however, long succeed in these artifices, as the truth established itself and in time shone with great brilliancy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' For the machinations of its enemies were refuted by its power and speedily vanished. One new heresy arose after another, and the former ones always passed away, and now at one time, now at another, now in one way, now in other ways, were lost in ideas of various kinds and various forms. But the splendor of the catholic and only true Church, which is always the same, grew in magnitude and power, and reflected its piety and simplicity and freedom, and the modesty and purity of its inspired life and philosophy to every nation both of Greeks and of Barbarians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' At the same time the slanderous accusations which had been brought against the whole Church also vanished, and there remained our teaching alone, which has prevailed over all, and which is acknowledged to be superior to all in dignity and temperance, and in divine and philosophical doctrines. So that none of them now ventures to affix a base calumny upon our faith, or any such slander as our ancient enemies formerly delighted to utter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' Nevertheless, in those times the truth again called forth many champions who fought in its defense against the godless heresies, refuting them not only with oral, but also with written arguments.',
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
      ' Among these Hegesippus was well known. We have already quoted his words a number of times, relating events which happened in the time of the apostles according to his account.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He records in five books the true tradition of apostolic doctrine in a most simple style, and he indicates the time in which he flourished when he writes as follows concerning those that first set up idols: “To whom they erected cenotaphs and temples, as is done to the present day. Among whom is also Antinous, a slave of the Emperor Adrian, in whose honor are celebrated also the Antinoian games, which were instituted in our day. For he [i.e. Adrian] also founded a city named after Antinous, and appointed prophets.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' At the same time also Justin, a genuine lover of the true philosophy, was still continuing to busy himself with Greek literature. He indicates “We do not think it out of place to mention here Antinous also, who lived in our day, and whom all were driven by fear to worship as a god, although they knew who he was and whence he came.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The same writer, speaking of the Jewish war which took place at that time, adds the following: “For in the late Jewish war Barcocheba, the leader of the Jewish rebellion, commanded that Christians alone should be visited with terrible punishments unless they would deny and blaspheme Jesus Christ.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And in the same work he shows that his conversion from Greek philosophy to Christianity was not without reason, but that it was the result of deliberation on his part. His words are as follows: “For I myself, while I was delighted with the doctrines of Plato, and heard the Christians slandered, and saw that they were afraid neither of death nor of anything else ordinarily looked upon as terrible, concluded that it was impossible that they could be living in wickedness and pleasure. For what pleasure-loving or intemperate man, or what man that counts it good to feast on human flesh, could welcome death that he might be deprived of his enjoyments, and would not rather strive to continue permanently his present life, and to escape the notice of the rulers, instead of giving himself up to be put to death?”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' The same writer, moreover, relates that Adrian having received from Serennius Granianus, a most distinguished governor, a letter in behalf of the Christians, in which he stated that it was not just to slay the Christians without a regular accusation and trial, merely for the sake of gratifying the outcries of the populace, sent a rescript to Minucius Fundanus, proconsul of Asia, commanding him to condemn no one without an indictment and a well-grounded accusation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And he gives a copy of the epistle, preserving the original Latin in which it was written, and prefacing it with the following words: “Although from the epistle of the greatest and most illustrious Emperor Adrian, your father, we have good ground to demand that you order judgment to be given as we have desired, yet we have asked this not because it was ordered by Adrian, but rather because we know that what we ask is just. And we have subjoined the copy of Adrian’s epistle that you may know that we are speaking the truth in this matter also. And this is the copy.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' After these words the author referred to gives the rescript in Latin, which we have translated into Greek as accurately as we could. It reads as follows:',
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
      ' “To Minucius Fundanus. I have received an epistle, written to me by Serennius Granianus, a most illustrious man, whom you have succeeded. It does not seem right to me that the matter should be passed by without examination, lest the men be harassed and opportunity be given to the informers for practicing villainy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' If, therefore, the inhabitants of the province can clearly sustain this petition against the Christians so as to give answer in a court of law, let them pursue this course alone, but let them not have resort to men’s petitions and outcries. For it is far more proper, if any one wishes to make an accusation, that you should examine into it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' If any one therefore accuses them and shows that they are doing anything contrary to the laws, do you pass judgment according to the heinousness of the crime. But, by Hercules! if any one bring an accusation through mere calumny, decide in regard to his criminality, and see to it that you inflict punishment.” Such are the contents of Adrian’s rescript.',
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
      ' Adrian having died after a reign of twenty-one years, was succeeded in the government of the Romans by Antoninus, called the Pious. In the first year of his reign Telesphorus died in the eleventh year of his episcopate, and Hyginus became bishop of Rome. Irenæus records that Telesphorus’ death was made glorious by martyrdom, and in the same connection he states that in the time of the above-mentioned Roman bishop Hyginus, Valentinus, the founder of a sect of his own, and Cerdon, the author of Marcion’s error, were both well known at Rome. He writes as follows:',
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
      ' “For Valentinus came to Rome under Hyginus, flourished under Plus, and remained until Anicetus. Cerdon also, Marcion’s predecessor, entered the Church in the time of Hyginus, the ninth bishop, and made confession, and continued in this way, now teaching in secret, now making confession again, and now denounced for corrupt doctrine and withdrawing from the assembly of the brethren.” These words are found in the third book of the work Against Heresies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And again in the first book he speaks as follows concerning Cerdon: “A certain Cerdon, who had taken his system from the followers of Simon, and had come to Rome under Hyginus, the ninth in the episcopal succession from the apostles, taught that the God proclaimed by the law and prophets was not the father of our Lord Jesus Christ. For the former was known, but the latter unknown; and the former was just, but the latter good. Marcion of Pontus succeeded Cerdon and developed his doctrine, uttering shameless blasphemies.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The same Irenæus unfolds with the greatest vigor the unfathomable abyss of Valentinus’ errors in regard to matter, and reveals his wickedness, secret and hidden like a serpent lurking in its nest.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And in addition to these men he says that there was also another that lived in that age, Marcus by name, who was remarkably skilled in magic arts. And he describes also their unholy initiations and their abominable mysteries in the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' “For some of them prepare a nuptial couch an perform a mystic rite with certain forms of expression addressed to those who are being initiated, and they say that it is a spiritual marriage which is celebrated by them, after the likeness of the marriages above. But others lead them to water, and while they baptize them they repeat the following words: Into the name of the unknown father of the universe, into truth, the mother of all things, into the one that descended upon Jesus. Others repeat Hebrew names in order the better to confound those who are being initiated.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But Hyginus having died at the close of the fourth year of his episcopate, Pius succeeded him in the government of the church of Rome. In Alexandria Marcus was appointed pastor, after Eumenes had filled the office thirteen years in all. And Marcus having died after holding office ten years was succeeded by Celadion in the government of the church of Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And in Rome Pius died in the fifteenth year of his episcopate, and Anicetus assumed the leadership of the Christians there. Hegesippus records that he himself was in Rome at this time, and that he remained there until the episcopate of Eleutherus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But Justin was especially prominent in those days. In the guise of a philospher he preached the divine word, and contended for the faith in his writings. He wrote also a work against Marcion, in which he states that the latter was alive at the time he wrote.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' He speaks as follows: “And there is a certain Marcion of Pontus, who is even now still teaching his followers to think that there is some other God greater than the creator. And by the aid of the demons he has persuaded many of every race of men to utter blasphemy, and to deny that the maker of this universe is the father of Christ, and to confess that some other, greater than he, was the creator. And all who followed them are, as we have said, called Christians, just as the name of philosophy is given to philosphers, although they may have no doctrines in common.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' To this he adds: “And we have also written a work against all the heresies that have existed, which we will give you if you wish to read it.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' But this same Justin contended most successfully against the Greeks, and addressed discourses containing an apology for our faith to the Emperor Antoninus, called Pius, and to the Roman senate. For he lived at Rome. But who and whence he was he shows in his Apology in the following words.',
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
      ' “To the Emperor Titus Ælius Adrian Antoninus Pius Cæsar Augustus, and to Verissimus his son, the philosopher, and to Lucius the philosopher, own son of Cæsar and adopted son of Pius, a lover of learning, and to the sacred senate and to the whole Roman people, I, Justin, son of Priscus and grandson of Bacchius, of Flavia Neapolis in Palestine, Syria, present this address and petition in behalf of those men of every nation who are unjustly hated and persecuted, I myself being one of them.” And the same emperor having learned also from other brethren in Asia of the injuries of all kinds which they were suffering from the inhabitants of the province, thought it proper to address the following ordinance to the Common Assembly of Asia.',
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
      ' The Emperor Cæsar Marcus Aurelius Antoninus Augustus, Armenicus, Pontifex Maximus, for the fifteenth time Tribune, for the third time Consul, to the Common Assembly of Asia, Greeting.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' I know that the gods also take care that such persons do not escape detection. For they would much rather punish those who will not worship them than you would.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But you throw them into confusion, and while you accuse them of atheism you only confirm them in the opinion which they hold. It would indeed be more desirable for them, when accused, to appear to die for their God, than to live. Wherefore also they come off victorious when they give up their lives rather than yield obedience to your commands.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And in regard to the earthquakes which have been and are still taking place, it is not improper to admonish you who lose heart whenever they occur, and nevertheless are accustomed to compare your conduct with theirs.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' They indeed become the more confident in God, while you, during the whole time, neglect, in apparent ignorance, the other gods and the worship of the Immortal, and oppress and persecute even unto death the Christians who worship him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But in regard to these persons, many of the governors of the provinces wrote also to our most divine father, to whom he wrote in reply that they should not trouble these people unless it should appear that they were attempting something affecting the Roman government. And to me also may have sent communications concerning these men, but I have replied to them in the same way that my father did.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But if any one still persists in bringing accusations against any of these people as such, the person who is accused shall be acquitted of the charge, even if it appear that he is one of them, but the accuser shall be punished. Published in Ephesus in the Common Assembly of Asia.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' To these things Melito, bishop of the church of Sardis, and a man well known at that time, is a witness, as is clear from his words in the Apology which he addressed to the Emperor Verus in behalf of our doctrine.',
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
      ' At this time, while Anicetus was at the head of the church of Rome, Irenæus relates that Polycarp, who was still alive, was at Rome, and that he had a conference with Anicetus on a question concerning the day of the paschal feast.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And the same writer gives another account of Polycarp which I feel constrained to add to that which has been already related in regard to him. The account is taken from the third book of Irenæus’ work Against Heresies, and is as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “But Polycarp also was not only instructed by the apostles, and acquainted with many that had seen Christ, but was also appointed by apostles in Asia bishop of the church of Smyrna.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' We too saw him in our early youth; for he lived a long time, and died, when a very old man, a glorious and most illustrious martyr’s death, having always taught the things which he had learned form the apostles, which the Church also hands down, and which alone are true.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' To these things all the Asiatic churches testify, as do also those who, down to the present time, have succeeded Polycarp, who was a much more trustworthy and certain witness of the truth than Valentinus and Marcion and the rest of the heretics. He also was in Rome in the time of Anicetus and caused many to turn away from the above-mentioned heretics to the Church of God, proclaiming that he had received from the apostles this one and only system of truth which has been transmitted by the Church.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And there are those that heard from him that John, the disciple of the Lord, going to bathe in Ephesus and seeing Cerinthus within, ran out of the bath-house without bathing, crying, ‘Let us flee, lest even the bath fall, because Cerinthus, the enemy of the truth, is within.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And Polycarp himself, when Marcion once met him and said, ‘Knowest thou us?’ replied, ‘I know the first born of Satan.’ Such caution did the apostles and their disciples exercise that they might not even converse with any of those who perverted the truth; as Paul also said, ‘A man that is a heretic, after the first and second admonition, reject; knowing he that is such is subverted, and sinneth, being condemned of himself.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' There is also a very powerful epistle of Polycarp written to the Philippians, from which those that wish to do so, and that are concerned for their own salvation, may learn the character of his faith and the preaching of the truth.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Such is the account of Irenæus. But Polycarp, in his above-mentioned epistle to the Philippians, which is still extant, has made use of certain testimonies drawn from the First Epistle of Peter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And when Antoninus, called Pius, had completed the twenty-second year of his reign, Marcus Aurelius Verus, his son, who was also called Antoninus, succeeded him, together with his brother Lucius.',
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
      ' At this time, when the greatest persecutions were exciting Asia, Polycarp ended his life by martyrdom. But I consider it most important that his death, a written account of which is still extant, should be recorded in this history.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' There is a letter, written in the name of the church over which he himself presided, to the parishes in Pontus, which relates the events that befell him, in the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “The church of God which dwelleth in Philomelium, and to all the parishes of the holy catholic Church in every place; mercy and peace and love from God the Father be multiplied. We write unto you, brethren, an account of what happened to those that suffered martyrdom and to the blessed Polycarp, who put an end to the persecution, having, as it were, sealed it by his martyrdom.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' After these words, before giving the account of Polycarp, they record the events which befell the rest of the martyrs, and describe the great firmness which they exhibited in the midst of their pains. For they say that the bystanders were struck with amazement when they saw them lacerated with scourges even to the innermost veins and arteries, so that the hidden inward parts of the body, both their bowels and their members, were exposed to view; and then laid upon seashells and certain pointed spits, and subjected to every species of punishment and of torture, and finally thrown as food to wild beasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And they record that the most noble Germanicus especially distinguished himself, overcoming by the grace of God the fear of bodily death implanted by nature. When indeed the proconsul wished to persuade him, and urged his youth, and besought him, as he was very young and vigorous, to take compassion on himself, he did not hesitate, but eagerly lured the beast toward himself, all but compelling and irritating him, in order that he might the sooner be freed from their unrighteous and lawless life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' After his glorious death the whole multitude marveling at the bravery of the God-beloved martyr and at the fortitude of the whole race of Christians, began to cry out suddenly, “Away with the atheists; let Polycarp be sought.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And when a very great tumult arose in consequence of the cries, a certain Phrygian, Quintus by name, who was newly come from Phrygia, seeing the beasts and the additional tortures, was smitten with cowardice and gave up the attainment of salvation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But the above-mentioned epistle shows that he, too hastily and without proper discretion, had rushed forward with others to the tribunal, but when seized had furnished a clear proof to all, that it is not right for such persons rashly and recklessly to expose themselves to danger. Thus did matters turn out in connection with them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' But the most admirable Polycarp, when he first heard of these things, continued: undisturbed, preserved a quiet and unshaken mind, and determined to remain in the city. But being persuaded by his friends who en-treated and exhorted him to retire secretly, he went out to a farm not far distant from the city and abode there with a few companions, night and day doing nothing but wrestle with the Lord in prayer, beseeching and imploring, and asking peace for the churches throughout the whole world. For this was always his custom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And three days before his arrest, while he was praying, he saw in a vision at night the pillow under his head suddenly seized by fire and consumed; and upon this awakening he immediately interpreted the vision to those that were present, almost foretelling that which was about to happen, and declaring plainly to those that were with him that it would be necessary for him for Christ’s sake to die by fire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Then, as those who were seeking him pushed the search with vigor, they say that he was again constrained by the solicitude and love of the brethren to go to another farm. Thither his pursuers came after no long time, and seized two of the servants there, and tortured one of them for the purpose of learning from him Polycarp’s hiding-place.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And coming late in the evening, they found him lying in an upper room, whence he might have gone to another house, but he would not, saying, “The will of God be done.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And when he learned that they were present, as the account says, he went down and spoke to them with a very cheerful and gentle countenance, so that those who did not already know the man thought that they beheld a miracle when they observed his advanced age and the gravity and firmness of his bearing, and they marveled that so much effort should be made to capture a man like him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But he did not hesitate, but immediately gave orders that a table should be spread for them. Then he invited them to partake of a bounteous meal, and asked of them one hour that he might pray undisturbed. And when they had given permission, he stood up and prayed, being full of the grace of the Lord, so that those who were present and heard him praying were amazed, and many of them now repented that such a venerable and godly old man was about to be put to death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' In addition to these things the narrative concerning him contains the following account: “But when at length he had brought his prayer to an end, after remembering all that had ever come into contact with him, small and great, famous and obscure, and the whole catholic Church throughout the world, the hour of departure being come, they put him upon an ass and brought him to the city, it being a great Sabbath. And he was met by Herod, the captain of police, and by his father Nicetes, who took him into their carriage, and sitting beside him endeavored to persuade him, saying, ‘For what harm is there in saying, Lord Cæsar, and sacrificing and saving your, life?’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' He at first did not answer; but when they persisted, he said, ‘I am not going to do what you advise me.’ And when they failed to persuade him, they uttered dreadful words, and thrust him down with violence, so that as he descended from the carriage he lacerated his shin. But without turning round, he went on his way promptly and rapidly, as if nothing had happened to him, and was taken to the stadium.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But there was such a tumult in the stadium that not many heard a voice from heaven, which came to Polycarp as he was entering the place: ‘Be strong, Polycarp, and play the man.’ And no one saw the speaker, but many of our people heard the voice.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' And when he was led forward, there was a great tumult, as they heard that Polycarp was taken. Finally, when he came up, the proconsul asked if he were Polycarp. And when he confessed that he was, he endeavored to persuade him to deny, saying, ‘Have regard for thine age,’ and other like things, which it is their custom to say:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' ‘Swear by the genius of Cæsar; repent and say, Away with the Atheists.’ But Polycarp, looking with dignified countenance upon the whole crowd that was gathered in the stadium, waved his hand to them, and groaned, and raising his eyes toward heaven, said, ‘Away with the Atheists.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' But when the magistrate pressed him, and said, Swear, and I will release thee; revile Christ,’ Polycarp said, ‘Fourscore and six years have I been serving him, and he hath done me no wrong; how then can I blaspheme my king who saved me?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' “But when he again persisted, and said, ‘Swear by the genius of Cæsar,’ Polycarp replied, ‘If thou vainly supposest that I will swear by the genius of Cæsar, as thou sayest, feigning to be ignorant who I am, hear plainly: I am a Christian. But if thou desirest to learn the doctrine of Christianity, assign a day and hear.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' The proconsul said, ‘Persuade the people.’ But Polycarp said, ‘As for thee, I thought thee worthy of an explanation; for we have been taught to render to princes and authorities ordained by God the honor that is due, so long as it does not injure us; but as for these, I do not esteem them the proper persons to whom to make my defense.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' But the proconsul said, ‘I have wild beasts; I will throw thee to them unless thou repent.’ But he said, ‘Call them; for repentance from better to worse is a change we cannot make. But it is a noble thing to turn from wickedness to righteousness.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' But he again said to him, ‘If thou despisest the wild beasts, I will cause thee to be consumed by fire, unless thou repent.’ But Polycarp said, ‘Thou threatenest a fire which burneth for an hour, and after a little is quenched; for thou knowest not the fire of the future judgment and of the eternal punishment which is reserved for the impious. But why dost thou delay? Do what thou wilt.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' Saying these and other words besides, he was filled with courage and joy, and his face was suffused with grace, so that not only was he not terrified and dismayed by the words that were spoken to him, but, on the contrary, the proconsul was amazed, and sent his herald to proclaim three times in the midst of the stadium: ‘Polycarp hath confessed that he is a Christian.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' And when this was proclaimed by the herald, the whole multitude, both of Gentiles and of Jews, who dwelt in Smyrna, cried out with ungovernable wrath and with a great shout, ‘This is the teacher of Asia, the father of the Christians, the overthrower of our gods, who teacheth many not to sacrifice nor to worship.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' When they had said this, they cried out and asked the Asiarch Philip to let a lion loose upon Polycarp. But he said that it was not lawful for him, since he had closed the games. Then they thought fit to cry out with one accord that Polycarp should be burned alive.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 28),
      ' For it was necessary that the vision should be fulfilled which had been shown him concerning his pillow, when he saw it burning while he was praying, and turned and said prophetically to the faithful that were with him, ‘I must needs be burned alive.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 29),
      ' These things were done with great speed—more quickly than they were said—the crowds immediately collecting from the workshops and baths timber and fagots, the Jews being especially zealous in the work, as is their wont.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 30),
      ' But when the pile was ready, taking off all his upper garments, and loosing his girdle, he attempted also to remove his shoes, although he had never before done this, because of the effort which each of the faithful always made to touch his skin first; for he had been treated with all honor on account of his virtuous life even before his gray hairs came.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 31),
      ' Forthwith then the materials prepared for the pile were placed about him; and as they were also about to nail him to the stake, he said, ‘Leave me thus; for he who hath given me strength to endure the fire, will also grant me strength to remain in the fire unmoved without being secured by you with nails.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 32),
      ' So they did not nail him, but bound him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 33),
      ' And he, with his hands behind him, and bound like a noble ram taken from a great flock, an acceptable burnt-offering unto God omnipotent, said, ‘Father of thy beloved and blessed Son Jesus Christ, through whom we have received the knowledge of thee, the God of angels and of powers and of the whole creation and of the entire race of the righteous who live in thy presence, I bless thee that thou hast deemed me worthy of this day and hour that I might receive a portion in the number of the martyrs, in the cup of Christ, unto resurrection of eternal life, both of soul and of body, in the immortality of the Holy Spirit.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 34),
      ' Among these may I be received before thee this day, in a rich and acceptable sacrifice, as thou, the faithful and true God, hast beforehand prepared and revealed, and hast fulfilled.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 35),
      ' Wherefore I praise thee also for everything; I bless thee, I glorify thee, through the eternal high priest, Jesus Christ, thy beloved Son, through whom, with him, in the Holy Spirit, be glory unto thee, both now and for the ages to come, Amen.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 36),
      ' When he had offered up his Amen and had finished his prayer, the firemen lighted the fire and as a great flame blazed out, we, to whom it was given to see, saw a wonder, and we were preserved that we might relate what happened to the others.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 37),
      ' For the fire presented the appearance of a vault, like the sail of a vessel filled by the wind, and made a wall about the body of the martyr, and it was in the midst not like flesh burning, but like gold and silver refined in a furnace. For we perceived such a fragrant odor, as of the fumes of frankincense or of some other precious spices.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 38),
      ' So at length the lawless men, when they saw that the body could not be consumed by the fire, commanded an executioner to approach and pierce him with the sword.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 39),
      ' And when he had done this there came forth a quantity of blood so that it extinguished the fire; and the whole crowd marveled that there should be such a difference between the unbelievers and the elect, of whom this man also was one, the most wonderful teacher in our times, apostolic and prophetic, who was bishop of the catholic Church in Smyrna. For every word which came from his mouth was accomplished and will be accomplished.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 40),
      ' But the jealous and envious Evil One, the adversary of the race of the righteous, when he saw the greatness of his martyrdom, and his blameless life from the beginning, and when he saw him crowned with the crown of immortality and bearing off an incontestable prize, took care that not even his body should be taken away by us, although many desired to do it and to have communion with his holy flesh.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 41),
      ' Accordingly certain ones secretly suggested to Nicetes, the father of Herod and brother of Alce, that he should plead with the magistrate not to give up his body, ‘lest,’ it was said, ‘they should abandon the crucified One and begin to worship this man.’ They said these things at the suggestion and impulse of the Jews, who also watched as we were about to take it from the fire, not knowing that we shall never be able either to forsake Christ, who suffered for the salvation of the whole world of those that are saved, or to worship any other.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 42),
      ' For we worship him who is the Son of God, but the martyrs, as disciples and imitators of the Lord, we love as they deserve on account of their matchless affection for their own king and teacher. May we also be made partakers and fellow-disciples with them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 43),
      ' The centurion, therefore, when he saw the contentiousness exhibited by the Jews, placed him in the midst and burned him, as was their custom. And so we afterwards gathered up his bones. which were more valuable than precious stones and more to be esteemed than gold, and laid them in a suitable place.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 44),
      ' There the Lord will permit us to come together as we are able, in gladness and joy to celebrate the birthday of his martyrdom, for the commemoration of those who have already fought and for the training and preparation of those who shall hereafter do the same.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 45),
      ' Such are the events that befell the blessed Polycarp, who suffered martyrdom in Smyrna with the eleven from Philadelphia. This one man is remembered more than the others by all, so that even by the heathen he is talked about in every place.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 46),
      ' Of such an end was the admirable and apostolic Polycarp deemed worthy, as recorded by the brethren of the church of Smyrna in their epistle which we have mentioned. In the same volume concerning him are subjoined also other martyrdoms which took place in the same city, Smyrna, about the same period of time with Polycarp’s martyrdom. Among them also Metrodorus, who appears to have been a proselyte of the Marcionitic sect, suffered death by fire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 47),
      ' A celebrated martyr of those times was a certain man named Pionius. Those who desire to know his several confessions, and the boldness of his speech, and his apologies in behalf of the faith before the people and the rulers, and his instructive addresses and moreover, his greetings to those who had yielded to temptation in the persecution, and the words of encouragement which he addressed to the brethren who came to visit him in prison, and the tortures which he endured in addition, and besides these the sufferings and the nailings, and his firmness on the pile, and his death after all the extraordinary trials,—those we refer to that epistle which has been given in the Martyrdoms of the Ancients, collected by us, and which contains a very full account of him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 48),
      ' And there are also records extant of others that suffered martyrdom in Pergamus, a city of Asia—of Carpus and Papylus, and a woman named Agathonice, who, after many and illustrious testimonies, gloriously ended their lives.',
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
      ' About this time Justin, who was mentioned by us just above, after he had addressed a second work in behalf of our doctrines to the rulers already named, was crowned with divine martyrdom, in consequence of a plot laid against him by Crescens, a philosopher who emulated the life and manners of the Cynics, whose name he bore. After Justin had frequently refuted him in public discussions he won by his martyrdom the prize of victory, dying in behalf of the truth which he preached.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And he himself, a man most learned in the truth, in his Apology already referred to clearly predicts how this was about to happen to him, although it had not yet occurred. His words are as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “I, too, therefore, expect to be plotted against and put in the stocks by some one of those whom I have named, or perhaps by Crescens, that unphilosophical and vainglorious man. For the man is not worthy to be called a philosopher who publicly bears witness against those concerning whom he knows nothing, declaring, for the sake of captivating and pleasing the multitude, that the Christians are atheistical and impious. Doing this he errs greatly.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For if he assails us without having read the teachings of Christ, he is thoroughly depraved, and is much worse than the illiterate, who often guard against discussing and bearing false witness about matters which they do not understand. And if he has read them and does not understand the majesty that is in them, or, understanding it, does these things in order that he may not be suspected of being an adherent, he is far more base and totally depraved, being enslaved to vulgar applause and irrational fear.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For I would have you know that when I proposed certain questions of the sort and asked him in regard to them, I learned and proved that he indeed knows nothing. And to show that I speak the truth I am ready, if these disputations have not been reported to you, to discuss the questions again in your presence. And this indeed would be an act worthy of an emperor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But if my questions and his answers have been made known to you, it is obvious to you that he knows nothing about our affairs; or if he knows, but does not dare to speak because of those who hear him, he shows himself to be, as I have already said, not a philosopher, but a vainglorious man, who indeed does not even regard that most admirable saying of Socrates.” These are the words of Justin.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And that he met his death as he had predicted that he would, in consequence of the machinations of Crescens, is stated by Tatian, a than who early in life lectured upon the sciences of the Greeks and won no little fame in them, and who has left a great many monuments of himself in his writings. He records this fact in his work against the Greeks, where he writes as follows: “And that most admirable Justin declared with truth that the aforesaid persons were like robbers.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Then, after making some remarks about the philosophers, he continues as follows: “Crescens, indeed, who made his nest in the great city, surpassed all in his unnatural lust, and was wholly devoted to the love of money.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And he who taught that death should be despised, was himself so greatly in fear of it that he endeavored to inflict death, as if it were a great evil, upon Justin, because the latter, when preaching the truth, had proved that the philosophers were gluttons and impostors.” And such was the cause of Justin’s martyrdom.',
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
      ' The same man, before his conflict, mentions in his first Apology others that suffered martyrdom before him, and most fittingly records the following events. He writes thus:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “A certain woman lived with a dissolute husband; she herself, too, having formerly been of the same character. But when she came to the knowledge of the teachings of Christ, she became temperate, and endeavored to persuade her husband likewise to be temperate, repeating the teachings, and declaring the punishment in eternal fire which shall come upon those who do not live temperately and conformably to right reason.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But he, continuing in the same excesses, alienated his wife by his conduct. For she finally, thinking it wrong to live as a wife with a man who, contrary to the law of nature and right, sought every possible means of pleasure, desired to be divorced from him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And when she was earnestly entreated by her friends, who counseled her still to remain with him, on the ground that her husband might some time give hope of amendment, she did violence to herself and remained.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But when her husband had gone to Alexandria, and was reported to be conducting himself still worse, she in order that she might not, by continuing in wedlock, and by sharing his board and bed, become a partaker in his lawlessness and impiety—gave him what we a call a bill of divorce and left him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But her noble and excellent husband—instead of rejoicing, as he ought to have done, that she had given up those actions which she had formerly recklessly committed with the servants and hirelings, when she delighted in drunkenness and in every vice, and that she desired him likewise to give them up—when she had gone from him contrary to his wish, brought an accusation concerning her, declaring that she was a Christian.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And she petitioned you, the emperor, that she might be permitted first to set her affairs in order, and afterwards, after the settlement of her affairs, to make her defense against the accusation. And this you granted.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But he who had once been her husband, being no longer able to prosecute her, directed his attacks against a certain Ptolemæus, who had been her teacher in the doctrines of Christianity, and whom Urbicius had punished. Against him he proceeded in the following manner:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' “He persuaded a centurion who was his friend to cast Ptolemæus into prison, and to take him and ask him this only: whether he were a Christian? And when Ptolemæus, who was a lover of truth, and not of a deceitful and false disposition, confessed that he was a Christian, the centurion bound him and punished him for a long time in the prison.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And finally, when the man was brought before Urbicius he was likewise asked this question only: whether he were a Christian? And again, conscious of the benefits which he enjoyed through the teaching of Christ, he confessed his schooling in divine virtue.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' For whoever denies that he is a Christian, either denies because he despises Christianity, or he avoids confession because he is conscious that he is unworthy and an alien to it; neither of which is the case with the true Christian.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And when Urbicius commanded that he be led away to punishment, a certain Lucius, who was also a Christian, seeing judgment so unjustly passed, said to Urbicius, ‘Why have you punished this I man who is not an adulterer, nor a fornicator, nor a murderer, nor a thief, nor a robber, nor has been convicted of committing any crime at all, but has confessed that he beam the name of Christian? You do not judge, O Urbicius, in a manner befitting the Emperor Pins, or the philosophical son of Cæsar, or the sacred senate.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And without making any other reply, he said to Lucius, ‘Thou also seemest to me to be such an one.’ And when Lucius said, ‘Certainly,’ he again commanded that he too should be led away to punishment. But he professed his thanks, for he was liberated, he added, from such wicked rulers and was going to the good Father and King, God. And still a third having come forward was condemned to be punished.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' To this, Justin fittingly and consistently adds the words which we quoted above, saying, “I, too, therefore expect to be plotted against by some one of those whom I have named,” etc.”',
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
      ' This writer has left us a great many monuments of a mind educated and practiced in divine things, which are replete with profitable matter of every kind. To them we shall refer the studious, noting as we proceed those that have come to our knowledge.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' There is a certain discourse of his in defense of our doctrine addressed to Antoninus surnamed the Pious, and to his sons, and to the Roman senate. Another work contains his second Apology in behalf of our faith, which he offered to him who was the successor of the emperor mentioned and who bore the same name, Antoninus Verus, the one whose times we are now recording.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Also another work against the Greeks, in which he discourses at length upon most of the questions at issue between us and the Greek philosophers, and discusses the nature of demons. It is not necessary for me to add any of these things here.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And still another work of his against the Greeks has come down to us, to which he gave the title Refutation. And besides these another, On the Sovereignty of God, which he establishes not only from our Scriptures, but also from the books of the Greeks.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Still further, a work entitled Psaltes, and another disputation On the Soul, in which, after propounding various questions concerning the problem under discussion, he gives the opinions of the Greek philosophers, promising to refute it, and to present his own view in another work.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' He composed also a dialogue against the Jews, which he held in the city of Ephesus with Trypho, a most distinguished man among the Hebrews of that day. In it he shows how the divine grace urged him on to the doctrine of the faith, and with what earnestness he had formerly pursued philosophical studies, and how ardent a search he had made for the truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And he records of the Jews in the same work, that they were plotting against the teaching of Christ, asserting the same things against Trypho: “Not only did you not repent of the wickedness which you had committed, but you selected at that time chosen men, and you sent them out from Jerusalem through all the land, to announce that the godless heresy of the Christians had made its appearance, and to accuse them of those things which all that are ignorant of us say against us, so that you become the causes not only of your own injustice, but also of all other men’s.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' He writes also that even down to his time prophetic gifts shone in the Church. And he mentions the Apocalypse of John, saying distinctly that it was the apostle’s. He also refers to certain prophetic declarations, and accuses Trypho on the ground that the Jews had cut them out of the Scripture. A great many other works of his are still in the hands of many of the brethren.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And the discourses of the man were thought so worthy of study even by the ancients, that Irenæus quotes his words: for instance, in the fourth book of his work Against Heresies, where he writes as follows: “And Justin well says in his work against Marcion, that he would not have believed the Lord himself if he had preached another God besides the Creator”; and again in the fifth book of the same work he says: “And Justin well said that before the coming of the Lord Satan never dared to blaspheme God, because he did not yet know his condemnation.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' These things I have deemed it necessary to say for the sake of stimulating the studious to peruse his works with diligence. So much concerning him.',
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
      ' In the eighth year of the above-mentioned reign Soter succeeded Anicetus as bishop of the church of Rome, after the latter had held office eleven years in all. But when Celadion had presided over the church of Alexandria for fourteen years tie was succeeded by Agrippinus.',
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
      ' At that time also in the church of Antioch, Theophilus was well known as the sixth from the apostles. For Cornelius, who succeeded Hero, was the fourth, and after him Eros, the fifth in order, had held the office of bishop.',
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
      ' At that time there flourished in the Church Hegesippus, whom we know from what has gone before, and Dionysius, bishop of Corinth, and another bishop, Pinytus of Crete, and besides these, Philip, and Apolinarius, and Melito, and Musanus, and Modestus, and finally, Irenæus. From them has come down to us in writing, the sound and orthodox faith received from apostolic tradition.',
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
      ' Hegesippus in the five books of Memoirs which have come down to us has left a most complete record of his own views. In them he states that on a journey to Rome he met a great many bishops, and that he received the same doctrine from all. It is fitting to hear what he says after making some remarks about the epistle of Clement to the Corinthians. His words are as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “And the church of Corinth continued in the true faith until Primus was bishop in Corinth. I conversed with them on my way to Rome, and abode with the Corinthians many days, during which we were mutually refreshed in the true doctrine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And when I had come to Rome I remained a there until Anicetus, whose deacon was Eleutherus. And Anicetus was succeeded by Soter, and he by Eleutherus. In every succession, and in every city that is held which is preached by the law and the prophets and the Lord.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The same author also describes the beginnings of the heresies which arose in his time, in the following words: “And after James the Just had suffered martyrdom, as the Lord had also on the same account, Symeon, the son of the Lord’s uncle, Clopas, was appointed the next bishop. All proposed him as second bishop because he was a cousin of the Lord.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' “Therefore, they called the Church a virgin, for it was not yet corrupted by vain discourses. But Thebuthis, because he was not made bishop, began to corrupt it. He also was sprung from the seven sects among the people, like Simon, from whom came the Simonians, and Cleobius, from whom came the Cleobians, and Dositheus, from whom came the Dositheans, and Gorthæus, from whom came the Goratheni, and Masbotheus, from whom came the Masbothæans. From them sprang the Menandrianists, and Marcionists, and Carpocratians, and Valentinians, and Basilidians, and Saturnilians. Each introduced privately and separately his own peculiar opinion. From them came false Christs, false prophets, false apostles, who divided the unity of the Church by corrupt doctrines uttered against God and against his Christ.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' The same writer also records the ancient heresies which arose among the Jews, in the following words: “There were, moreover, various opinions in the circumcision, among the children of Israel. The following were those that were opposed to the tribe of Judah and the Christ: Essenes, Galileans, Hemerobaptists, Masbothæans, Samaritans, Sadducees, Pharisees.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And he wrote of many other matters, which we have in part already mentioned, introducing the accounts in their appropriate places. And from the Syriac Gospel according to the Hebrews he quotes some passages in the Hebrew tongue, showing that he was a convert from the Hebrews, and he mentions other matters as taken from the unwritten tradition of the Jews.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And not only he, but also Irenæus and the whole company of the ancients, called the Proverbs of Solomon All-virtuous Wisdom. And when speaking of the books called Apocrypha, he records that some of them were composed in his day by certain heretics. But let us now pass on to another.',
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
      ' And first we must speak of Dionysius, who was appointed bishop of the church in Corinth, and communicated freely of his inspired labors not only to his own people, but also to those in foreign lands, and rendered the greatest service to all in the catholic epistles which he wrote to the churches.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Among these is the one addressed to the Lacedæmonians, containing instruction in the orthodox faith and an admonition to peace and unity; the one also addressed to the Athenians, exciting them to faith and to the life prescribed by the Gospel, which he accuses them of esteeming lightly, as if they had almost apostatized from the faith since the martyrdom of their ruler Publius, which had taken place during the persecutions of those days.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He mentions Quadratus also, stating that he was appointed their bishop after the martyrdom of Publius, and testifying that through his zeal they were brought together again and their faith revived. He records, moreover, that Dionysius the Areopagite, who was converted to the faith by the apostle Paul, according to the statement in the Acts of the Apostles, first obtained the episcopate of the church at Athens.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And there is extant another epistle of his addressed to the Nicomedians, in which he attacks the heresy of Marcion, and stands fast by the canon of the truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Writing also to the church that is in Gortyna, together with the other parishes in Crete, he commends their bishop Philip, because of the many acts of fortitude which are testified to as performed by the church under him, and he warns them to be on their guard against the aberrations of the heretics.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And writing to the church that is in Amastris, together with those in Pontus, he refers to Bacchylides and Elpistus, as having urged him to write, and he adds explanations of passages of the divine Scriptures, and mentions their bishop Palmas by name. He gives them much advice also in regard to marriage and chastity, and commands them to receive those who come back again after any fall, whether it be delinquency or heresy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Among these is inserted also another epistle addressed to the Cnosians, in which he exhorts Pinytus, bishop of the parish, not to lay upon the brethren a grievous and compulsory burden in regard to chastity, but to have regard to the weakness of the multitude.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Pinytus, replying to this epistle, admires and commends Dionysius, but exhorts him in turn to impart some time more solid food, and to feed the people under him, when he wrote again, with more advanced teaching, that they might not be fed continually on these milky doctrines and imperceptibly grow old under a training calculated for children. In this epistle also Pinytus’ orthodoxy in the faith and his care for the welfare of those placed under him, his learning and his comprehension of divine things, are revealed as in a most perfect image.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' There is extant also another epistle written by Dionysius to the Romans, and addressed to Soter, who was bishop at that time. We cannot do better than to subjoin some passages from this epistle, in which he commends the practice of the Romans which has been retained down to the persecution in our own days. His words are as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' “For from the beginning it has been your practice to do good to all the brethren in various ways, and to send contributions to many churches in every city. Thus relieving the want of the needy, and making provision for the brethren in the mines by the gifts which you have sent from the beginning, you Romans keep up the hereditary customs of the Romans, which your blessed bishop Soter has not only maintained, but also added to, furnishing an abundance of supplies to the saints, and encouraging the brethren from abroad with blessed words, as a loving father his children.’’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' In this same epistle he makes mention also of Clement’s epistle to the Corinthians, showing that it had been the custom from the beginning to read it in the church. His words are as follows: “To-day we have passed the Lord’s holy day, in which we have read your epistle. From it, whenever we read it, we shall always be able to draw advice, as also from the former epistle, which was written ‘to us through Clement.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' The same writer also speaks as follows concerning his own epistles, alleging that they had been mutilated: “As the brethren desired me to write epistles, I wrote. And these epistles the apostles of the devil have filled with tares, cutting out some things and adding others. For them a woe is reserved. It is, therefore, not to be wondered at if some have attempted to adulterate the Lord’s writings also, since they have formed designs even against writings which are of less accounts.” There is extant, in addition to these, another epistle of Dionysius, written to Chrysophora a most faithful sister. In it he writes what is suitable, and imparts to her also the proper spiritual food. So much concerning Dionysius.',
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
      ' Of Theophilus, whom we have mentioned as bishop of the church of Antioch, three elementary works addressed to Autolycus are extant; also another writing entitled Against the Heresy of Hermogenes, in which he makes use of testimonies from the Apocalypse of John, and finally certain other catechetical books.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And as the heretics, no less then than at other times, were like tares, destroying the pure harvest of apostolic teaching, the pastors of the churches everywhere hastened to restrain them as wild beasts from the fold of Christ, at one time by admonitions and exhortations to the brethren, at another time by contending more openly against them in oral discussions and refutations, and again by correcting their opinions with most accurate proofs in written works.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And that Theophilus also, with the others, contended against them, is manifest from a certain discourse of no common merit written by him against Marcion. This work too, with the others of which we have spoken, has been preserved to the present day. Maximinus, the seventh from the apostles, succeeded him as bishop of the church of Antioch.',
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
      ' Philip who, as we learn from the words of Dionysius, was bishop of the parish of Gortyna, likewise wrote a most elaborate work against Marcion, as did also Irenæus and Modestus. The last named has exposed the error of the man more clearly than the rest to the view of all. There are a number of others also whose works are still presented by a great many of the brethren.',
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
      ' In those days also Melito, bishop of the parish in Sardis, and Apolinarius, bishop of Hierapolis, enjoyed great distinction. Each of them on his own part addressed apologies in behalf of the faith to the above-mentioned emperor of the Romans who was reigning at that time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The following works of these writers have come to our knowledge. Of Melito, the two books On the Passover, and one On the Conduct of Life and the Prophets, the discourse On the Church, and one On the Lord’s Day, still further one On the Faith of Man, and one On his Creation, another also On the Obedience of Faith, and one On the Senses; besides these the work On the Soul and Body, and that On Baptism, and the one On Truth, and On the Creation and Generation of Christ; his discourse also On Prophecy, and that On Hospitality; still further, The Key, and the books On the Devil and the Apocalypse of John, and the work On the Corporeality of God, and finally the book addressed to Antoninus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In the books On the Passover he indicates the time at which he wrote, beginning with these words: “While Servilius Paulus was proconsul of Asia, at the time when Sagaris suffered martyrdom, there arose in Laodicea a great strife concerning the Passover, which fell according to rule in those days; and these were written.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And Clement of Alexandria refers to this work in his own discourse On the Passover, which, he says, he wrote on occasion of Melito’s work.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But in his book addressed to the emperor he records that the following events happened to us under him: “For, what never before happened, the race of the pious is now suffering persecution, being driven about in Asia by new decrees. For the shameless informers and coveters of the property of others, taking occasion from the decrees, openly carry on robbery night and day, despoiling those who are guilty of no wrong.” And a little further on he says: “If these things are done by thy command, well and good. For a just ruler will never take unjust measures; and we indeed gladly accept the honor of such a death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But this request alone we present to thee, that thou wouldst thyself first examine the authors of such strife, and justly judge whether they be worthy of death and punishment, or of safety and quiet. But if, on the other hand, this counsel and this new decree, which is not fit to be executed even against barbarian enemies, be not from thee, much more do we beseech thee not to leave us exposed to such lawless plundering by the populace.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Again he adds the following: “For our philosophy formerly flourished among the Barbarians; but having sprung up among the nations under thy rule, during the great reign of thy ancestor Augustus, it became to thine empire especially a blessing of auspicious omen. For from that time the power of the Romans has grown in greatness and splendor. To this power thou hast succeeded, as the desired possessor, and such shalt thou continue with thy son, if thou guardest the philosophy which grew up with the empire and which came into existence with Augustus; that philosophy which thy ancestors also honored along with the other religions.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And a most convincing proof that our doctrine flourished for the good of an empire happily begun, is this—that there has no evil happened since Augustus’ reign, but that, on the contrary, all things have been splendid and glorious, in accordance with the prayers of all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Nero and Domitian, alone, persuaded by certain calumniators, have wished to slander our doctrine, and from them it has come to pass that the falsehood has been handed down, in consequence of an unreasonable practice which prevails of bringing slanderous accusations against the Christians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' But thy pious fathers corrected their ignorance, having frequently rebuked in writing many who dared to attempt new measures against them. Among them thy grandfather Adrian appears to have written to many others, and also to Fundanus, the proconsul and governor of Asia. And thy father, when thou also wast ruling with him, wrote to the cities, forbidding them to take any new measures against us; among the rest to the Larissæans, to the Thessalonians, to the Athenians, and to all the Greeks.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And as for thee—since thy opinions respecting the Christians are the same as theirs, and indeed much more benevolent and philosophic—we are the more persuaded that thou wilt do all that we ask of thee.” These words are found in the above-mentioned work.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But in the Extracts made by him the same writer gives at the beginning of the introduction a catalogue of the acknowledged books of the Old Testament, which it is necessary to quote at this point. He writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' “Melito to his brother Onesimus, greeting: Since thou hast often, in thy zeal for the word, expressed a wish to have extracts made from the Law and the Prophets concerning the Saviour and concerning our entire faith, and hast also desired to have an accurate statement of the ancient book, as regards their number and their order, I have endeavored to perform the task, knowing thy zeal for the faith, and thy desire to gain information in regard to the word, and knowing that thou, in thy yearning after God, esteemest these things above all else, struggling to attain eternal salvation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' Accordingly when I went East and came to the place where these things were preached and done, I learned accurately the books of the Old Testament, and send them to thee as written below. Their names are as follows: Of Moses, five books: Genesis, Exodus, Numbers, Leviticus, Deuteronomy; Jesus Nave, Judges, Ruth; of Kings, four books; of Chronicles, two; the Psalms of David, the Proverbs of Solomon, Wisdom also, Ecclesiastes, Song off Songs, Job; of Prophets, Isaiah, Jeremiah; of the twelve prophets, one book; Daniel, Ezekiel, Esdras. From which also I have made the extracts, dividing them into six books.” Such are the words of Melito.',
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
      ' A number of works of Apolinarius have been preserved by many, and the following have reached us: the Discourse addressed to the above-mentioned emperor, five books Against the Greeks, On Truth, a first and second book, and those which he subsequently wrote against the heresy of the Phrygians, which not long afterwards came out with its innovations, but at that time was, as it were, in its incipiency, since Montanus, with his false prophetesses, was then laying the foundations of his error.',
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
      ' And as for Musanus, whom we have mentioned among the foregoing writers, a certain very elegant discourse is extant, which was written by him against some brethren that had gone over to the heresy of the so-called Encratites, which had recently sprung up, and which introduced a strange and pernicious error. It is said that Tatian was the author of this false doctrine.',
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
      ' He is the one whose words we quoted a little above in regard to that admirable man, Justin, and whom we stated to have been a disciple of the martyr. Irenæus declares this in the first book of his work Against Heresies, where he writes as follows concerning both him and his heresy:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “Those who are called Encratites, and who sprung from Saturninus and Marcion, preached celibacy, setting aside the original arrangement of God and tacitly censuring him who made male and female for the propagation of the human race. They introduced also abstinence from the things called by them animate, thus showing ingratitude to the God who made all things. And they deny the salvation of the first man?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But this has been only recently discovered by them, a certain Tatian being the first to introduce this blasphemy. He was a hearer of Jus-tin, and expressed no such opinion while he was with him, but after the martyrdom of the latter he left the Church, and becoming exalted with the thought of being a teacher, and puffed up with the idea that he was superior to others, he established a peculiar type of doctrine of his own, inventing certain invisible æons like the followers of Valentinus, while, like Marcion and Saturninus, he pronounced marriage to be corruption and fornication. His argument against the salvation of Adam, however, he devised for himself.” Irenæus at that time wrote thus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But a little later a certain man named Severus put new strength into the aforesaid heresy, and thus brought it about that those who took their origin from it were called, after him, Severians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' They, indeed, use the Law and Prophets and Gospels, but interpret in their own way the utterances of the Sacred Scriptures. And they abuse Paul the apostle and reject his epistles, and do not accept even the Acts of the Apostles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But their original founder, Tatian, formed a certain combination and collection of the Gospels, I know not how, to which he gave the title Diatessaron, and which is still in the hands of some. But they say that he ventured to paraphrase certain words of the apostle, in order to improve their style.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' He has left a great many writings. Of these the one most in use among many persons is his celebrated Address to the Greeks, which also appears to be the best and most useful of all his works. In it he deals with the most ancient times, and shows that Moses and the Hebrew prophets were older than all the celebrated men among the Greeks. So much in regard to these men.',
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
      ' In the same reign, as heresies were abounding in the region between the rivers, a certain Bardesanes, a most able man and a most skillful disputant in the Syriac tongue, having composed dialogues against Marcion’s followers and against certain others who were authors of various opinions, committed them to writing in his own language, together with many other works. His pupils, of whom he had very many (for he was a powerful defender of the faith), translated these productions from the Syriac into Greek.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Among them there is also his most able dialogue On Fate, addressed to Antoninus, and other works which they say he wrote on occasion of the persecution which arose at that time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He indeed was at first a follower of Valentinus, but afterward, having rejected his teaching and having refuted most of his fictions, he fancied that he had come over to the more correct opinion. Nevertheless he did not entirely wash off the filth of the old heresy. About this time also Soter, bishop of the church of Rome, departed this life.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
