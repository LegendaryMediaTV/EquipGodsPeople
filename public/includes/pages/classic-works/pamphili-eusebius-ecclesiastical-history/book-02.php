<?php
$html->add(new BS_Banner(
  null,

  'Book two of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering the lives and deaths of the apostles following the resurrection and ascention of Christ'
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
      ' We have discussed in the preceding book those subjects in ecclesiastical history which it was necessary to treat by way of introduction, and have accompanied them with brief proofs. Such were the divinity of the saving Word, and the antiquity of the doctrines which we teach, as well as of that evangelical life which is led by Christians, together with the events which have taken place in connection with Christ’s recent appearance, and in connection with his passion and with the choice of the apostles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In the present book let us examine the events which took place after his ascension, confirming some of them from the divine Scriptures, and others from such writings as we shall refer to from time to time.',
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
      ' First, then, in the place of Judas, the betrayer, Matthias, who, as has been shown was also one of the Seventy, was chosen to the apostolate. And there were appointed to the diaconate, for the service of the congregation, by prayer and the laying on of the hands of the apostles, approved men, seven in number, of whom Stephen was one. He first, after the Lord, was stoned to death at the time of his ordination by the slayers of the Lord, as if he had been promoted for this very purpose. And thus he was the first to receive the crown, corresponding to his name, which belongs to the martyrs of Christ, who are worthy of the meed of victory.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Then James, whom the ancients surnamed the Just on account of the excellence of his virtue, is recorded to have been the first to be made bishop of the church of Jerusalem. This James was called the brother of the Lord because he was known as a son of Joseph, and Joseph was supposed to be the father of Christ, because the Virgin, being betrothed to him, “was found with child by the Holy Ghost before they came together,” as the account of the holy Gospels shows.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But Clement in the sixth book of his Hypotyposes writes thus: “For they say that Peter and James and John after the ascension of our Saviour, as if also preferred by our Lord, strove not after honor, but chose James the Just bishop of Jerusalem.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But the same writer, in the seventh book of the same work, relates also the following things concerning him: “The Lord after his resurrection imparted knowledge to James the Just and to John and Peter, and they imparted it to the rest of the apostles, and the rest of the apostles to the seventy, of whom Barnabas was one. But there were two Jameses: one called the Just, who was thrown from the pinnacle of the temple and was beaten to death with a club by a fuller, and another who was beheaded.” Paul also makes mention of the same James the Just, where he writes, “Other of the apostles saw I none, save James the Lord’s brother.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' At that time also the promise of our Saviour to the king of the Osrhœnians was fulfilled. For Thomas, under a divine impulse, sent Thaddeus to Edessa as a preacher and evangelist of the religion of Christ, as we have shown a little above from the document found there?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' When he came to that place he healed Abgarus by the word of Christ; and after bringing all the people there into the right attitude of mind by means of his works, and leading them to adore the power of Christ, he made them disciples of the Saviour’s teaching. And from that time down to the present the whole city of the Edessenes has been devoted to the name of Christ, offering no common proof of the beneficence of our Saviour toward them also.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' These things have been drawn from ancient accounts; but let us now turn again to the divine Scripture. When the first and greatest persecution was instigated by the Jews against the church of Jerusalem in connection with the martyrdom of Stephen, and when all the disciples, except the Twelve, were scattered throughout Judea and Samaria, some, as the divine Scripture says, went as far as Phœnicia and Cyprus and Antioch, but could not yet venture to impart the word of faith to the nations, and therefore preached it to the Jews alone.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' During this time Paul was still persecuting the church, and entering the houses of believers was dragging men and women away and committing them to prison.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Philip also, one of those who with Stephen had been entrusted with the diaconate, being among those who were scattered abroad, went down to Samaria, and being filled with the divine power, he first preached the word to the inhabitants of that country. And divine grace worked so mightily with him that even Simon Magus with many others was attracted by his words.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Simon was at that time so celebrated, and had acquired, by his jugglery, such influence over those who were deceived by him, that he was thought to be the great power of God. But at this time, being amazed at the wonderful deeds wrought by Philip through the divine power, he reigned and counterfeited faith in Christ, even going so far as to receive baptism.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And what is surprising, the same thing is done even to this day by those who follow his most impure heresy. For they, after the manner of their forefather, slipping into the Church, like a pestilential and leprous disease greatly afflict those into whom they are able to infuse the deadly and terrible poison concealed in themselves. The most of these have been expelled as soon as they have been caught in their wickedness, as Simon himself, when detected by Peter, received the merited punishment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But as the preaching of the Saviour’s Gospel was daily advancing, a certain providence led from the land of the Ethiopians an officer of the queen of that country, for Ethiopia even to the present day is ruled, according to ancestral custom, by a woman. He, first among the Gentiles, received of the mysteries of the divine word from Philip in consequence of a revelation, and having become the first-fruits of believers throughout the world, he is said to have been the first on returning to his country to proclaim the knowledge of the God of the universe and the life-giving sojourn of our Saviour among men; so that through him in truth the prophecy obtained its fulfillment, which declares that “Ethiopia stretcheth out her hand unto God.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' In addition to these, Paul, that “chosen vessel,” “not of men neither through men, but by the revelation of Jesus Christ himself and of God the Father who raised him from the dead,” was appointed an apostle, being made worthy of the call by a vision and by a voice which was uttered in a revelation from heaven.',
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
      ' And when the wonderful resurrection and ascension of our Saviour were already noised abroad, in accordance with an ancient custom which prevailed among the rulers of the provinces, of reporting to the emperor the novel occurrences which took place in them, in order that nothing might escape him, Pontius Pilate informed Tiberius of the reports which were noised abroad through all Palestine concerning the resurrection of our Saviour Jesus from the dead.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He gave an account also of other wonders which he had learned of him, and how, after his death, having risen from the dead, he was now believed by many to be a God. They say that Tiberius referred the matter to the Senate, but that they rejected it, ostensibly because they had not first examined into the matter (for an ancient law prevailed that no one should be made a God by the Romans except by a vote and decree of the senate), but in reality because the saving teaching of the divine Gospel did not need the confirmation and recommendation of men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But although the Senate of the Romans rejected the proposition made in regard to our Saviour, Tiberius still retained the opinion which he had held at first, and contrived no hostile measures against Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' These things are recorded by Tertullian, a man well versed in the laws of the Romans, and in other respects of high repute, and one of those especially distinguished in Rome. In his apology for the Christians, which was written by him in the Latin language, and has been translated into Greek, he writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' “But in order that we may give an account of these laws from their origin, it was an ancient decree that no one should be consecrated a God by the emperor until the Senate had expressed its approval. Marcus Aurelius did thus concerning a certain idol, Alburnus. And this is a point in favor of our doctrine, that among you divine dignity is conferred by human decree. If a God does not please a man he is not made a God. Thus, according to this custom, it is necessary for man to be gracious to God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Tiberius, therefore, under whom the name of Christ made its entry into the world, when this doctrine was reported to him from Palestine, where it first began, communicated with the Senate, making it clear to them that he was pleased with the doctrine. But the Senate, since it had not itself proved the matter, rejected it. But Tiberius continued to hold his own opinion, and threatened death to the accusers of the Christians.” Heavenly providence had wisely instilled this into his mind in order that the doctrine of the Gospel, unhindered at its beginning, might spread in all directions throughout the world.',
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
      ' Thus, under the influence of heavenly power, and with the divine cooperation, the doctrine of the Saviour, like the rays of the sun, quickly illumined the whole world; and straightway, in accordance with the divine Scriptures, the voice of the inspired evangelists and apostles went forth through all the earth, and their words to the end of the world.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In every city and village, churches were quickly established, filled with multitudes of people like a replenished threshing-floor. And those whose minds, in consequence of errors which had descended to them from their forefathers, were fettered by the ancient disease of idolatrous superstition, were, by the power of Christ operating through the teaching and the wonderful works of his disciples, set free, as it were, from terrible masters, and found a release from the most cruel bondage. They renounced with abhorrence every species of demoniacal polytheism, and confessed that there was only one God, the creator of all things, and him they honored with the rites of true piety, through the inspired and rational worship which has been planted by our Saviour among men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But the divine grace being now poured out upon the rest of the nations Cornelius, of Cæsarea in Palestine, with his whole house, through a divine revelation and the agency of Peter, first received faith in Christ; and after him a multitude of other Greeks in Antioch, to whom those who were scattered by the persecution of Stephen had preached the Gospel. When the church of Antioch was now increasing and abounding, and a multitude of prophets from Jerusalem were on the ground, among them Barnabas and Paul and in addition many other brethren, the name of Christians first sprang up there, as from a fresh and life-giving fountain.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And Agabus, one of the prophets who was with them, uttered a prophecy concerning the famine which was about to take place, and Paul and Barnabas were sent to relieve the necessities of the brethren.',
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
      ' Tiberius died, after having reigned about twenty-two years, and Caius succeeded him in the empire. He immediately gave the government of the Jews to Agrippa, making him king over the tetrarchies of Philip and of Lysanias; in addition to which he bestowed upon him, not long afterward, the tetrarchy of Herod, having punished Herod (the one under whom the Saviour suffered) and his wife Herodias with perpetual exile on account of numerous crimes. Josephus is a witness to these facts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Under this emperor, Philo became known; a man most celebrated not only among many of our own, but also among many scholars without the Church. He was a Hebrew by birth, but was inferior to none of those who held high dignities in Alexandria. How exceedingly he labored in the Scriptures and in the studies of his nation is plain to all from the work which he has done. How familiar he was with philosophy and with the liberal studies of foreign nations, it is not necessary to say, since he is reported to have surpassed all his contemporaries in the study of Platonic and Pythagorean. philosophy, to which he particularly devoted his attention.',
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
      ' Philo has given us an account, in five books, of the misfortunes of the Jews under Caius. He recounts at the same time the madness of Caius: how he called himself a god, and performed as emperor innumerable acts of tyranny; and he describes further the miseries of the Jews under him, and gives a report of the embassy upon which he himself was sent to Rome in behalf of his fellow-countrymen in Alexandria; how when he appeared before Caius in behalf of the laws of his fathers he received nothing but laughter and ridicule, and almost incurred the risk of his life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Josephus also makes mention of these things in the eighteenth book of his Antiquities, in the following words: a “A sedition having arisen in Alexandria between the Jews that dwell there and the Greeks, three deputies were chosen from each faction and went to Caius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' One of the Alexandrian deputies was Apion, who uttered many slanders against the Jews; among other things saying that they neglected the honors due to Cæsar. For while all other subjects of Rome erected altars and temples to Caius, and in all other respects treated him just as they did the gods, they alone considered it disgraceful to honor him with statues and to swear by his name.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And when Apion had uttered many severe charges by which he hoped that Caius would be aroused, as indeed was likely, Philo, the chief of the Jewish embassy, a man celebrated in every respect, a brother of Alexander the Alabarch, and not unskilled in philosophy, was prepared to enter upon a defense in reply to his accusations.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But Caius prevented him and ordered him to leave, and being very angry, it was plain that he meditated some severe measure against them. And Philo departed covered with insult and told the Jews that were with him to be of good courage; for while Caius was raging against them he was in fact already contending with God.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Thus far Josephus. And Philo himself, in the work On the Embassy which he wrote, describes accurately and in detail the things which were done by him at that time. But I shall omit the most of them and record only those things which will make clearly evident to the reader that the misfortunes of the Jews came upon them not long after their daring deeds against Christ and on account of the same.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And in the first place he relates that at Rome in the reign of Tiberius, Sejanus, who at that time enjoyed great influence with the emperor, made every effort to destroy the Jewish nation utterly; and that in Judea, Pilate, under whom the crimes against the Saviour were committed, attempted something contrary to the Jewish law in respect to the temple, which was at that time still standing in Jerusalem, and excited them to the greatest tumults.',
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
      ' After the death of Tiberius, Caius received the empire, and, besides innumerable other acts of tyranny against many people, he greatly afflicted especially the whole nation of the Jews These things we may learn briefly from the words of Philo, who writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “So great was the caprice of Caius in his conduct toward all, and especially toward the nation of the Jews. The latter he so bitterly hated that he appropriated to himself their places of worship in the other cities, and beginning with Alexandria he filled them with images and statues of himself. The temple in the holy city, which had hitherto been left untouched, and had been regarded as an inviolable asylum, he altered and transformed into a temple of his own, that it might be called the temple of the visible Jupiter, the younger Caius.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Innumerable other terrible and almost indescribable calamities which came upon the Jews in Alexandria during the reign of the same emperor, are recorded by the same author in a second work, to which he gave the title, On the Virtues. With him agrees also Josephus, who likewise indicates that the misfortunes of the whole nation began with the time of Pilate, and with their daring crimes against the Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Hear what he says in the second book of his Jewish War, where he writes as follows: “Pilate being sent to Judea as procurator by Tiberius, secretly carried veiled images of the emperor, called ensigns, to Jerusalem by night. The following day this caused the greatest disturbance among the Jews. For those who were near were confounded at the sight, beholding their laws, as it were, trampled under foot. For they allow no image to be set up in their city.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Comparing these things with the writings of the evangelists, you will see that it was not long before there came upon them the penalty for the exclamation which they had uttered under the same Pilate, when they cried out that they had no other king than Cæsar.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' The same writer further records that after this another calamity overtook them. He writes as follows: “After this he. stirred up another tumult by snaking use of the holy treasure, which is called Corban, in the construction of an aqueduct three hundred stadia in length.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' The multitude were greatly displeased at it, and when Pilate was in Jerusalem they surrounded his tribunal and gave utterance to loud complaints. But he, anticipating the tumult, had distributed through the crowd armed soldiers disguised in citizen’s clothing, forbidding them to use the sword, but commanding them to strike with clubs those who should make an outcry. To them he now gave the preconcerted signal from the tribunal. And the Jews being beaten, many of them perished in consequence of the blows, while many others were trampled under foot by their own countrymen in their flight, and thus lost their lives. But the multitude, overawed by the fate of those who were slain, held their peace.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' In addition to these the same author records many other tumults which were stirred up in Jerusalem itself, and shows that from that time seditions and wars and mischievous plots followed each other in quick succession, and never ceased in the city and in all Judea until finally the siege of Vespasian overwhelmed them. Thus the divine vengeance overtook the Jews for the crimes which they dared to commit against Christ.',
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
      ' It is worthy of note that Pilate himself, who was governor in the time of our Saviour, is reported to have fallen into such misfortunes under Caius, whose times we are recording, that he was forced to become his own murderer and executioner; and thus divine vengeance, as it seems, was not long in overtaking him. This is stated by those Greek historians who have recorded the Olympiads, together with the respective events which have taken place in each period.',
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
      ' Caius had held the power not quite four years, when he was succeeded by the emperor Claudius. Under him the world was visited with a famine, which writers that are entire strangers to our religion have recorded in their histories. And thus the prediction of Agabus recorded in the Acts of the Apostles, according to which the whole world was to be visited by a famine, received its fulfillment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And Luke, in the Acts, after mentioning the famine in the time of Claudius, and stating that the brethren of Antioch, each according to his ability, sent to the brethren of Judea by the hands of Paul and Barnabas, adds the following account.',
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
      ' “Now about that time” (it is clear that he means the time of Claudius) “Herod the King stretched forth his hands to vex certain of the Church. And he killed James the brother of John with the sword.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And concerning this James, Clement, in the seventh book of his Hypotyposes, relates a story which is worthy of mention; telling it as he received it from those who had lived before him. He says that the one who led James to the judgment-seat, when he saw him bearing his testimony, was moved, and confessed that he was himself also a Christian.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' They were both therefore, he says, led away together; and on the way he begged James to forgive him. And he, after considering a little, said, “Peace be with thee,” and kissed him. And thus they were both beheaded at the same time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And then, as the divine Scripture says, Herod, upon the death of James, seeing that the deed pleased the Jews, attacked Peter also and committed him to prison, and would have slain him if he had not, by the divine appearance of an angel who came to him by night, been wonderfully released from his bonds, and thus liberated for the service of the Gospel. Such was the providence of God in respect to Peter.',
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
      ' The consequences of the king’s undertaking against the apostles were no, long deferred, but the avenging minister of divine justice overtook him immediately after his plots against them, as the Book of Acts records. For when he had journeyed to Cæsarea, on a notable feast-day, clothed in a splendid and royal garment, he delivered an address to the people from a lofty throne in front of the tribunal. And when all the multitude applauded the speech, as if it were the voice of a god and not of a man, the Scripture relates that an angel of the Lord smote him, and being eaten of worms he gave up the ghost.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' We must admire the account of Josephus for its agreement with the divine Scriptures in regard to this wonderful event; for he clearly bears witness to the truth in the nineteenth book of his Antiquities, where he relates the wonder in the following words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “He had completed the third year of his reign over all Judea when he came to Cæsarea, which was formerly called Strato’s Tower. There he held games in honor of Cæsar, learning that this was a festival observed in behalf of Cæsar’s safety. At this festival was collected a great multitude of the highest and most honorable men in the province.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And on the second day of the games he proceeded to the theater at break of day, wearing a garment entirely of silver and of wonderful texture. And there the silver, illuminated by the reflection of the sun’s earliest rays, shone marvelously, gleaming so brightly as to produce a sort of fear and terror in those who gazed upon him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And immediately his flatterers, some from one place, others from another, raised up their voices in a way that was not for his good, calling him a god, and saying, ‘Be thou merciful; if up to this time we have feared thee as a man, hence-forth we confess that thou art superior to the nature of mortals.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' The king did not rebuke them, nor did he reject their impious flattery. But after a little, looking up, he saw an angel sitting above his head. And this he quickly perceived would be the cause of evil as it had once been the cause of good fortune, and he was smitten with a heart-piercing pain.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And straightway distress, beginning with the greatest violence, seized his bowels. And looking upon his friends he said, ‘I, your god, am now commanded to depart this life; and fate thus I on the spot disproves the lying words you have just uttered concerning me. He who has been called immortal by you is now led away to die; but our destiny must be accepted as God has determined it. For we have passed our life by no means ingloriously, but in that splendor which is pronounced happiness.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And when he had said this he labored with an increase of pain. He was accordingly carried in haste to the palace, while the report spread among all that the king would undoubtedly soon die. But the multitude, with their wives and children, sitting on sackcloth after the custom of their fathers, implored God in behalf of the king, and every place was filled with lamentation and tears. And the king as he lay in a lofty chamber, and saw them below lying prostrate on the ground, could not refrain from weeping himself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And after suffering continually for five days with pain in the bowels, he departed this life, in the fifty-fourth year of his age, and in the seventh year of his reign. Four years he ruled under the Emperor Caius—three of them over the tetrarchy of Philip, to which was added in the fourth year that of Herod—and three years during the reign of the Emperor Claudius.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' I marvel greatly that Josephus, in these things as well as in others, so fully agrees with the divine Scriptures. But if there should seem to any one to be a disagreement in respect to the name of the king, the time at least and the events show that the same person is meant, whether the change of name has been caused by the error of a copyist, or is due to the fact that he, like so many, bore two names.',
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
      ' Luke, in the Acts, introduces Gamaliel as saying, at the consultation which was held concerning the apostles, that at the time referred to, “rose up Theudas boasting himself to be somebody; who was slain; and all, as many as obeyed him, were scattered.” Let us therefore add the account of Josephus concerning this man. He records in the work mentioned just above, the following circumstances:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “While Fadus was procurator of Judea a certain impostor called Theudas persuaded a very great multitude to take their possessions and follow him to the river Jordan. For he said that he was a prophet, and that the river should be divided at his command, and afford them an easy passage. And with these words he deceived many.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But Fadus did not permit them to enjoy their folly, but sent a troop of horsemen against them, who fell upon them unexpectedly and slew many of them and took many others alive, while they took Theudas himself captive, and cut off his head and carried it to Jerusalem.” Besides this he also makes mention of the famine, which took place in the reign of Claudius, in the following words.',
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
      ' “And at this time” it came to pass that the great famine a took place in Judea, in which the queen Helen, having purchased grain from Egypt with large sums, distributed it to the needy.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' You will find this statement also in agreement with the Acts of the Apostles, where it is said that the disciples at Antioch, “each according to his ability, determined to send relief to the brethren that dwelt in Judea; which also they did, and sent it to the elders by the hands of Barnabas and Paul.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But splendid monuments of this Helen, Of whom the historian has made mention, are still shown in the suburbs of the city which is now called Ælia, But she is said to have been queen of the Adiabeni.',
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
      ' But faith in our Saviour and Lord Jesus Christ having now been diffused among all men, the enemy of man’s salvation contrived a plan for seizing the imperial city for himself. He conducted thither the above-mentioned Simon, aided him in his deceitful arts, led many of the inhabitants of Rome astray, and thus brought them into his own power.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' This is stated by Justin, one of our distinguished writers who lived not long after the time of the apostles. Concerning him I shall speak in the proper place. Take and read the work of this man, who in the first Apology which he addressed to Antonine in behalf of our religion writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “And after the ascension of the Lord into heaven the demons put forward certain men who said they were gods, and who were not only allowed by you to go unpersecuted, but were even deemed worthy of honors. One of them was Simon, a Samaritan of the village of Gitto, who in the reign of Claudius Cæsar performed in your imperial city some mighty acts of magic by the art of demons operating in him, and was considered a god, and as a god was honored by you with a statue, which was erected in the river Tiber, between the two bridges, and bore this inscription in the Latin tongue, Simoni Deo Sancto, that is, To Simon the Holy God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And nearly all the Samaritans and a few even of other nations confess and worship him as the first God. And there went around with him at that time a certain Helena who had formerly been a prostitute in Tyre of Phœnicia; and her they call the first idea that proceeded from him.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Justin relates these things, and Irenæus also agrees with him in the first book of his work, Against Heresies, where he gives an account of the man and of his profane and impure teaching. It would be superfluous to quote his account here, for it is possible for those who wish to know the origin and the lives and the false doctrines of each of the heresiarchs that have followed him, as well as the customs practiced by them all, to find them treated at length in the above-mentioned work of Irenæus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' We have understood that Simon was the author of all heresy. From his time down to the present those who have followed his heresy have reigned the sober philosophy of the Christians, which is celebrated among all on account of its purity of life. But they nevertheless have embraced again the superstitions of idols, which they seemed to have renounced; and they fall down before pictures and images of Simon himself and of the above-mentioned Helena who was with him; and they venture to worship them with incense and sacrifices and libations.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But those matters which they keep more secret than these, in regard to which they say that one upon first hearing them would be astonished, and, to use one of the written phrases in vogue among them, would be confounded, are in truth full of amazing things, and of madness and folly, being of such a sort that it is impossible not only to commit them to writing, but also for modest men even to utter them with the lips on account of their excessive baseness and lewdness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' For what ever could be conceived of, viler than the vilest thing—all that has been outdone by this most abominable sect, which is composed of those who make a sport of those miserable females that are literally overwhelmed with all kinds of vices.',
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
      ' The evil power, who hates all that is good and plots against the salvation of men, constituted Simon at that time the father and author of such wickedness, as if to make him a mighty antagonist of the great, inspired apostles of our Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For that divine and celestial grace which co-operates with its ministers, by their appearance and presence, quickly extinguished the kindled flame of evil, and humbled and cast down through them “every high thing that exalted itself against the knowledge of God.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Wherefore neither the conspiracy of Simon nor that of any of the others who arose at that period could accomplish anything in those apostolic times. For everything was conquered and subdued by the splendors of the truth and by the divine word itself which had but lately begun to shine from heaven upon men, and which was then flourishing upon earth, and dwelling in the apostles themselves.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Immediately the above-mentioned impostor was smitten in the eyes of his mind by a divine and miraculous flash, and after the evil deeds done by him had been first detected by the apostle Peter in Judea, he fled and made a great journey across the sea from the East to the West, thinking that only thus could he live according to his mind.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And coming to the city of Rome, by the mighty co-operation of that power which was lying in wait there, he was in a short time so successful in his undertaking that those who dwelt there honored him as a god by the erection of a statue.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But this did not last long. For immediately, during the reign of Claudius, the all-good and gracious Providence, which watches over all things, led Peter, that strongest and greatest of the apostles, and the one who on account of his virtue was the speaker for all the others, to Rome against this great corrupter of life. He like a noble commander of God, clad in divine armor, carried the costly merchandise of the light of the understanding from the East to those who dwelt in the West, proclaiming the light itself, and the word which brings salvation to souls, and preaching the kingdom of heaven.',
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
      ' And thus when the divine word had made its home among them, the power of Simon was quenched and immediately destroyed, together with the man himself. And so greatly did the splendor of piety illumine the minds of Peter’s hearers that they were not satisfied with hearing once only, and were not content with the unwritten teaching of the divine Gospel, but with all sorts of entreaties they besought Mark, a follower of Peter, and the one whose Gospel is extant, that he would leave them a written monument of the doctrine which had been orally communicated to them. Nor did they cease until they had prevailed with the man, and had thus become the occasion of the written Gospel which bears the name of Mark.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And they say that Peter when he had learned, through a revelation of the Spirit, of that which had been done, was pleased with the zeal of the men, and that the work obtained the sanction of his authority for the purpose of being used in the churches. Clement in the eighth book of his Hypotyposes gives this account, and with him agrees the bishop of Hierapolis named Papias. And Peter makes mention of Mark in his first epistle which they say that he wrote in Rome itself, as is indicated by him, when he calls the city, by a figure, Babylon, as he does in the following words: “The church that is at Babylon, elected together with you, saluteth you; and so doth Marcus my son.”',
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
      ' And they say that this Mark was the first that was sent to Egypt, and that he proclaimed the Gospel which he had written, and first established churches in Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And the multitude of believers, both men and women, that were collected there at the very outset, and lived lives of the most philosophical and excessive asceticism, was so great, that Philo thought it worth while to describe their pursuits, their meetings, their entertainments, and their whole manner of life.”',
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
      ' It is also said that Philo in the reign of Claudius became acquainted at Rome with Peter, who was then preaching there. Nor is this indeed improbable, for the work of which we have spoken, and which was composed by him some years later, clearly contains those rules of the Church which are even to this day observed among us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And since he describes as accurately as possible the life of our ascetics, it is clear that he not only knew, but that he also approved, while he venerated and extolled, the apostolic men of his time, who were as it seems of the Hebrew race, and hence observed, after the manner of the Jews, the most of the customs of the ancients.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In the work to which he gave the title, On a Contemplative Life or on Suppliants, after affirming in the first place that he will add to those things which he is about to relate nothing contrary to truth or of his own invention, he says that these men were called Therapeutæ and the women that were with them Therapeutrides. He then adds the reasons for such a name, explaining it from the fact that they applied remedies and healed the souls of those who came to them, by relieving them like physicians, of evil passions, or from the fact that they served and worshiped the Deity in purity and sincerity.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Whether Philo himself gave them this name, employing an epithet well suited to their mode of life, or whether the first of them really called themselves so in the beginning, since the name of Christians was not yet everywhere known, we need not discuss here.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' He bears witness, however, that first of all they renounce their property. When they begin the philosophical mode of life, he says, they give up their goods to their relatives, and then, renouncing all the cares of life, they go forth beyond the walls and dwell in lonely fields and gardens, knowing well that intercourse with people of a different character is unprofitable and harmful. They did this at that time, as seems probable, under the influence of a spirited and ardent faith, practicing in emulation the prophets’ mode of life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' For in the Acts of the Apostles, a work universally acknowledged as authentic, it is recorded that all the companions of the apostles sold their possessions and their property and distributed to all according to the necessity of each one, so that no one among them was in want. “For as many as were possessors of lands or houses,” as the account says, “sold them and brought the prices of the things that were sold, and laid them at the apostles’ feet, so that distribution was made unto every man according as he had need.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Philo bears witness to facts very much like those here described and then adds the following account: “Everywhere in the world is this race found. For it was fitting that both Greek and Barbarian should share in what is perfectly good. But the race particularly abounds in Egypt, in each of its so-called nomes, and especially about Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' The best men from every quarter emigrate, as if to a colony of the Therapeutæ’s fatherland, to a certain very suitable spot which lies above the lake Maria upon a low hill excellently situated on account of its security and the mildness of the atmosphere.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And then a little further on, after describing the kind of houses which they had, he speaks as follows concerning their churches, which were scattered about here and there: “In each house there is a sacred apartment which is called a sanctuary and monastery, where, quite alone, they perform the mysteries of the religious life. They bring nothing into it, neither drink nor food, nor any of the other things which contribute to the necessities of the body, but only the laws, and the inspired oracles of the prophets, and hymns and such other things as augment and make perfect their knowledge and piety.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And after some other matters he says: “The whole interval, from morning to evening, is for them a time of exercise. For they read the holy Scriptures, and explain the philosophy of their fathers in an allegorical manner, regarding the written words as symbols of hidden truth which is communicated in obscure figures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' They have also writings of ancient men, who were the founders of their sect, and who left many monuments of the allegorical method. These they use as models, and imitate their principles.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' These things seem to have been stated by a man who had heard them expounding their sacred writings. But it is highly probable that the works of the ancients, which he says they had, were the Gospels and the writings of the apostles, and probably some expositions of the ancient prophets, such as are contained in the Epistle to the Hebrews, and in many others of Paul’s Epistles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Then again he writes as follows concerning the new psalms which they composed: “So that they not only spend their time in meditation, but they also compose songs and hymns to God in every variety of metre and melody, though they divide them, of course, into measures of more than common solemnity.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' The same book contains an account of many other things, but it seemed necessary to select those facts which exhibit the characteristics of the ecclesiastical mode of life.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' But if any one thinks that what has been said is not peculiar to the Gospel polity, but that it can be applied to others besides those mentioned, let him be convinced by the subsequent words of the same author, in which, if he is unprejudiced, he will find undisputed testimony on this subject. Philo’s words are as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' “Having laid down temperance as a sort of foundation in the soul, they build upon it the other virtues. None of them may take food or drink before sunset, since they regard philosophizing as a work worthy of the light, but attention to the wants of the body as proper only in the darkness, and therefore assign the day to the former, but to the latter a small portion of the night.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But some, in whom a great desire for knowledge dwells, forget to take food for three days; and some are so delighted and feast so luxuriously upon wisdom, which furnishes doctrines richly and without stint, that they abstain even twice as long as this, and are accustomed, after six days, scarcely to take necessary food.” These statements of Philo we regard as referring clearly and indisputably to those of our communion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' But if after these things any one still obstinately persists in denying the reference, let him renounce his incredulity and be convinced by yet more striking examples, which are to be found nowhere else than in the evangelical religion of the Christians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' For they say that there were women also with those of whom we are speaking, and that the most of them were aged virgins who had preserved their chastity, not out of necessity, as some of the priestesses among the Greeks, but rather by their own choice, through zeal and a desire for wisdom. And that in their earnest desire to live with it as their companion they paid no attention to the pleasures of the body, seeking not mortal but immortal progeny, which only the pious soul is able to bear of itself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' Then after a little he adds still more emphatically: “They expound the Sacred Scriptures figuratively by means of allegories. For the whole law seems to these men to resemble a living organism, of which the spoken words constitute the body, while the hidden sense stored up within the words constitutes the soul. This hidden meaning has first been particularly studied by this sect, which sees, revealed as in a mirror of names, the surpassing beauties of the thoughts.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' Why is it necessary to add to these things their meetings and the respective occupations of the men and of the women during those meetings, and the practices which are even to the present day habitually observed by us, especially such as we are accustomed to observe at the feast of the Saviour’s passion, with fasting and night watching and study of the divine Word.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' These things the above-mentioned author has related in his own work, indicating a mode of life which has been preserved to the present time by us alone, recording especially the vigils kept in connection with the great festival, and the exercises performed during those vigils, and the hymns customarily recited by us, and describing how, while one sings regularly in time, the others listen in silence, and join in chanting only the close of the hymns; and how, on the days referred to they sleep on the ground on beds of straw, and to use his own words, “taste no wine at all, nor any flesh, but water is their only drink, and the relish with their bread is salt and hyssop.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' In addition to this Philo describes the order of dignities which exists among those who carry on the services of the church, mentioning the diaconate, and the office of bishop, which takes the precedence over all the others. But whosoever desires a more accurate knowledge of these matters may get it from the history already cited. But that Philo, when he wrote these things, had in view the first heralds of the Gospel and the customs handed down from the beginning by the apostles, is clear to every one.',
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
      ' Copious in language, comprehensive in thought, sublime and elevated in his views of divine Scripture, Philo has produced manifold and various expositions of the sacred books. On the one hand, he expounds in order the events recorded in Genesis in the books to which he gives the title Allegories of the Sacred Laws; on the other hand, he makes successive divisions-of the chapters in the Scriptures which are the subject of investigation, and gives objections and solutions, in the books which he quite suitably calls Questions and Answers an Genesis and Exodus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' There are, besides these, treatises expressly worked out by him on certain subjects, such as the two books On Agriculture, and the same number On Drunkenness; and some others distinguished by different titles corresponding to the contents of each; for instance, Concerning the things which the Sober Mind desires and execrates, On the Confusion of Tongues, On Flight and Discovery, On Assembly for the sake of Instruction, On the question, ‘Who is heir to things divine?’ or On the division of things into equal and unequal, and still further the work On the three Virtues which with others have been described by Moses.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In addition to these is the work On those whose Names have been changed and why they have been changed, in which he says that he had written also two hooks On Covenants.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And there is also a work of his On Emigration, and one On the life of a Wise Man made perfect in Righteousness, or On unwritten Laws; and still further the work On Giants or On the Immutability of God, and a first, second, third, fourth and fifth book On the proposition, that Dreams according to Moses are sent by God. These are the hooks on Genesis that have come down to us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But on Exodus we are acquainted with the first, second, third, fourth and fifth books of Questions and Answers; also with that On the Tabernacle, and that On the ten Commandments, and the four books On the laws which refer especially to the principal divisions of the ten Commandments, and another On animals intended for sacrifice and On the kinds of sacrifice, and another On the rewards fixed in the law for the good, and on the punishments and curses fixed for the wicked.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' In addition to all these there are extant also some single-volumed works of his; as for instance, the work On Providence, and the book composed by him On the Jews, and The Statesman; and still further, Alexander, or On the possession of reason by the irrational animals: Besides these there is a work On the proposition that every wicked man is a slave, to which is subjoined the work On the proposition that every good man is free.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' After these was composed by him the work On the contemplative life, or On suppliants, from which we have drawn the facts concerning the life of the apostolic men; and still further, the Interpretation of the Hebrew names in the law and in the prophets are said to be the result of his industry.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And he is said to have read in the presence of the whole Roman Senate during the reign of Claudius the work which he had written, when he came to Rome under Coins, concerning Coins’ hatred of the gods, and to which, with ironical reference to its character, he had given the title On the Virtues. And his discourses were so much admired as to be deemed worthy of a place in the libraries.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' At this time, while Paul was completing his journey “from Jerusalem and round about unto Illyricum,” Claudius drove the Jews out of Rome; and Aquila and Priscilla, leaving Rome with the other Jews, came to Asia, and there abode with the apostle Paul, who was confirming the churches of that region whose foundations he had newly laid. The sacred book of the Acts informs us also of these things.',
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
      ' While Claudius was still emperor, it happened that so great a tumult and disturbance took place in Jerusalem at the feast of the Passover, that thirty thousand of those Jews alone who were forcibly crowded together at the gate of the temple perished, being trampled under foot by one another. Thus the festival became a season of mourning for all the nation, and there was weeping in every house. These things are related literally by Josephus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But Claudius appointed Agrippa, son of Agrippa, king of the Jews, having sent Felix as procurator of the whole country of Samaria and Galilee, and of the land called Perea. And after he had reigned thirteen years and eight months a he died, and left Nero as his successor in the empire.',
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
      ' Josephus again, in the twentieth book of his Antiquities, relates the quarrel which arose among the priests during the reign of Nero, while Felix was procurator of Judea. His words are as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “There arose a quarrel between the high priests on the one hand and the priests and leaders of the people of Jerusalem on the other. And each of them collected a body of the boldest and most restless men, and put himself at their head, and whenever they met they hurled invectives and stones at each other. And there was no one that would interpose; but these things were done at will as if in a city destitute of a ruler.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And so great was the shamelessness and audacity of the high priests that they dared to send their servants to the threshing-floors to seize the tithes due to the priests; and thus those of the priests that were poor were seen to be perishing of want. In this way did the violence of the factions prevail over all justice.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And the same author again relates that about the same time there sprang up in Jerusalem a certain kind of robbers, “who by day,” as he says, “and in the middle of the city slew those who met them.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For, especially at the feasts, they mingled with the multitude, and with short swords, which they concealed under their garments, they stabbed the most distinguished men. And when they fell, the murderers themselves were among those who expressed their indignation. And thus on account of the confidence which was reposed in them by all, they remained undiscovered.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' The first that was slain by them was Jonathan the high priest; and after him many were killed every day, until the fear became worse than the evil itself, each one, as in battle, hourly expecting death.',
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
      ' After other matters he proceeds as follows: “But the Jews were afflicted with a greater plague than these by the Egyptian false prophet. For there appeared in the land an impostor who aroused faith in himself as a prophet, and collected about thirty thousand of those whom he had deceived, and led them from the desert to the so-called Mount of Olives whence he was prepared to enter Jerusalem by force and to overpower the Roman garrison and seize the government of the people, using those who made the attack with him as bodyguards.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But Felix anticipated his attack, and went out to meet him with the Roman legionaries, and all the people joined in the defense, so that when the battle was fought the Egyptian fled with a few followers, but the most of them were destroyed or taken captive.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Josephus relates these events in the second book of his History. But it is worth while comparing the account of the Egyptian given here with that contained in the Acts of the Apostles. In the time of Felix it was said to Paul by the centurion in Jerusalem, when the multitude of the Jews raised a disturbance against the apostle, “Art not thou he who before these days made an uproar, and led out into the wilderness four thousand men that were murderers?” These are the events which took place in the time of Felix.',
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
      ' Festus was sent by Nero to be Felix’s successor. Under him Paul, having made his defense, was sent bound to Rome Aristarchus was with him, whom he also somewhere in his epistles quite naturally calls his fellow-prisoner. And Luke, who wrote the Acts of the Apostles, brought his history to a close at this point, after stating that Paul spent two whole years at Rome as a prisoner at large, and preached the word of God without restraint.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Thus after he had made his defense it is said that the apostle was sent again upon the ministry of preaching, and that upon coming to the same city a second time he suffered martyrdom. In this imprisonment he wrote his second epistle to Timothy, in which he mentions his first defense and his impending death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But hear his testimony on these matters: “At my first answer,” he says, “no man stood with me, but all men forsook me: I pray God that it may not be laid to their charge. Notwithstanding the Lord stood with me, and strengthened me; that by me the preaching might be fully known, and that all the Gentiles might hear: and I was delivered out of the mouth of the lion.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' He plainly indicates in these words that on the former occasion, in order that the preaching might be fulfilled by him, he was rescued from the mouth of the lion, referring, in this expression, to Nero, as is probable on account of the latter’s cruelty. He did not therefore afterward add the similar statement, “He will rescue me from the mouth of the lion”; for he saw in the spirit that his end would not be long delayed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Wherefore he adds to the words, “And he delivered me from the mouth of the lion,” this sentence: “The Lord shall deliver me from every evil work, and will preserve me unto his heavenly kingdom,” indicating his speedy martyrdom; which he also foretells still more clearly in the same epistle, when he writes, “For I am now ready to be offered, and the time of my departure is at hand.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' In his second epistle to Timothy, moreover, he indicates that Luke was with him when he wrote, but at his first defense not even he. Whence it is probable that Luke wrote the Acts of the Apostles at that time, continuing his history down to the period when he was with Paul.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But these things have been adduced by us to show that Paul’s martyrdom did not take place at the time of that Roman sojourn which Luke records.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' It is probable indeed that as Nero was more disposed to mildness in the beginning, Paul’s defense of his doctrine was more easily received; but that when he had advanced to the commission of lawless deeds of daring, he made the apostles as well as others the subjects of his attacks.',
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
      ' But after Paul, in consequence of his appeal to Cæsar, had been sent to Rome by Festus, the Jews, being frustrated in their hope of entrapping him by the snares which they had laid for him, turned against James, the brother of the Lord, to whom the episcopal seat at Jerusalem bad been entrusted by the apostles. The following daring measures were undertaken by them against him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Leading him into their midst they demanded of him that he should renounce faith in Christ in the presence of all the people. But, contrary to the opinion of all, with a clear voice, and with greater boldness than they had anticipated, he spoke out before the whole multitude and confessed that our Saviour and Lord Jesus is the Son of God. But they were unable to bear longer the testimony of the man who, on account of the excellence of ascetic virtue and of piety which he exhibited in his life, was esteemed by all as the most just of men, and consequently they slew him. Opportunity for this deed of violence was furnished by the prevailing anarchy, which was caused by the fact that Festus had died just at this time in Judea, and that the province was thus without a governor and head.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The manner of James’ death has been already indicated by the above-quoted words of Clement, who records that he was thrown from the pinnacle of the temple, and was beaten to death with a club. But Hegesippus, who lived immediately after the apostles, gives the most accurate account in the fifth book of his Memoirs. He writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “James, the brother of the Lord, succeeded to the government of the Church in conjunction with the apostles. He has been called the Just by all from the time of our Saviour to the present day; for there were many that bore the name of James.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' He was holy from his mother’s womb; and he drank no wine nor strong drink, nor did he eat flesh. No razor came upon his head; he did not anoint himself with oil, and he did not use the bath.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' He alone was permitted to enter into the holy place; for he wore not woolen but linen garments. And he was in the habit of entering alone into the temple, and was frequently found upon his knees begging forgiveness for the people, so that his knees became hard like those of a camel, in consequence of his constantly bending them in his worship of God, and asking forgiveness for the people.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Because of his exceeding great justice he was called the Just, and Oblias, which signifies in Greek, Bulwark of the people’ and ‘Justice,’ in accordance with what the prophets declare concerning him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Now some of the seven sects, which existed among the people and which have been mentioned by me in the Memoirs, asked him, ‘What is the gate of Jesus?’ and he replied that he was the Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' On account of these words some believed that Jesus is the Christ. But the sects mentioned above did not believe either in a resurrection or in one’s coming to give to every man according to his works. But as many as believed did so on account of James.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Therefore when many even of the rulers believed, there was a commotion among the Jews and Scribes and Pharisees, who said that there was danger that the whole people would be looking for Jesus as the Christ. Coming therefore in a body to James they said, ‘We entreat thee, restrain the people; for they are gone astray in regard to Jesus, as if he were the Christy We entreat thee to persuade all that have come to the feast of the Passover concerning Jesus; for we all have confidence in thee. For we bear thee witness, as do all the people, that thou art just, and dost not respect per sons.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Do thou therefore persuade the multitude not to be led astray concerning Jesus. For the whole people, and all of us also, have confidence in thee. Stand therefore upon the pinnacle of the temple, that from that high position thou mayest be clearly seen, and that thy words may be readily heard by all the people. For all the tribes, with the Gentiles also, are come together on account of the Passover.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' The aforesaid Scribes and Pharisees therefore placed James upon the pinnacle of the temple, and cried out to him and said: Thou just one, in whom we ought all to have: confidence, forasmuch as the people are led, astray after Jesus, the crucified one, declare to us, what is the gate of Jesus.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And he answered with a loud voice,’ Why do ye ask me concerning Jesus, the Son of Man? He himself sitteth in heaven at the right hand of the great Power, and is about to come upon the clouds of heaven.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And when many were fully convinced and gloried in the testimony of James, and said, ‘Hosanna to the Son of David,’ these same Scribes and Pharisees said again to one another,’ We have done badly in supplying such testimony to Jesus. But let us go up and throw him down, in order that they may be afraid to believe him.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' And they cried out, saying, ‘Oh! oh! the just man is also in error.’ And they fulfilled the Scripture written in Isaiah, ‘Let us take away the just man, because he is troublesome to us: therefore they shall eat the fruit of their doings.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' So they went up and threw down the just man, and said to each other, ‘Let us stone James the Just.’ And they began to stone him, for he was not killed by the fall; but he turned and knelt down and said, ‘I entreat thee, Lord God our Father, forgive them, for they know not what they do.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' And while they were thus stoning him one of the priests of the sons of Rechab, the son of the Rechabites, who are mentioned by Jeremiah the prophet, cried out, saying, ‘Cease, what do ye? The just one prayeth for you.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' And one of them, who was a fuller, took the club with which he beat out clothes and struck the just man on the head. And thus he suffered martyrdom. And they buried him on the spot, by the temple, and his monument still remains by the temple. He became a true witness, both to Jews and Greeks, that Jesus is the Christ. And immediately Vespasian besieged them.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' These things are related at length by Hegesippus, who is in agreement with Clement. James was so admirable a man and so celebrated among all for his justice, that the more sensible even of the Jews were of the opinion that this was the cause of the siege of Jerusalem, which happened to them immediately after his martyrdom for no other reason than their daring act against him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' Josephus, at least, has not hesitated to testify this in his writings, where he says, “These things happened to the Jews to avenge James the Just, who was a brother of Jesus, that is called the Christ. For the Jews slew him, although he was a most just man.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' And the same writer records his death also in the twentieth book of his Antiquities in the following words: “But the emperor, when he learned of the death of Festus, sent Albinus to be procurator of Judea. But the younger Ananus, who, as we have already said, had obtained the high priesthood, was of an exceedingly bold and reckless disposition. He belonged, moreover, to the sect of the Sadducees, who are the most cruel of all the Jews in the execution of judgment, as we have already shown.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' Ananus, therefore, being of this character, and supposing that he had a favorable opportunity on account of the fact that Festus was dead, and Albinus was still on the way, called together the Sanhedrim, and brought before them the brother of Jesus, the so-called Christ, James by name, together with some others, and accused them of violating the law, and condemned them to be stoned.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' But those in the city who seemed most moderate and skilled in the law were very angry at this, and sent secretly to the king, requesting him to order Ananus to cease such proceedings. For he had not done right even this first time. And certain of them also went to meet Albinus, who was journeying from Alexandria, and reminded him that it was not lawful for Ananus to summon the Sanhedrim without his knowledge.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' And Albinus, being persuaded by their representations, wrote in anger to Ananus, threatening him with punishment. And the king, Agrippa, in consequence, deprived him, of the high priesthood, which he had held three months, and appointed Jesus, the son of Damnæus.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' These things are recorded in regard to James, who is said to be the author of the first of the so-called catholic epistles. But it is to be observed that it is disputed; at least, not many of the ancients have mentioned it, as is the case likewise with the epistle that bears the name of Jude, which is also one of the seven so-called catholic epistles. Nevertheless we know that these also, with the rest, have been read publicly in very many churches.',
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
      ' When Nero was in the eighth year of his reign, Annianus succeeded Mark the evangelist in the administration of the parish of Alexandria.',
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
      ' When the government of Nero was now firmly established, he began to plunge into unholy pursuits, and armed himself even against the religion of the God of the universe.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' To describe the greatness of his depravity does not lie within the plan of the present work. As there are many indeed that have recorded his history in most accurate narratives, every one may at his pleasure learn from them the coarseness of the man’s extraordinary madness, under the influence of which, after he had accomplished the destruction of so many myriads without any reason, he ran into such blood-guiltiness that he did not spare even his nearest relatives and dearest friends, but destroyed his mother and his brothers and his wife, with very many others of his own family as he would private and public enemies, with various kinds of deaths.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But with all these things this particular in the catalogue of his crimes was still wanting, that he was the first of the emperors who showed himself an enemy of the divine religion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The Roman Tertullian is likewise a witness of this. He writes as follows: “Examine your records. There you will find that Nero was the first that persecuted this doctrine, particularly then when after subduing all the east, he exercised his cruelty against all at Rome. We glory in having such a man the leader in our punishment. For whoever knows him can understand that nothing was condemned by Nero unless it was something of great excellence.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Thus publicly announcing himself as the first among God’s chief enemies, he was led on to the slaughter of the apostles. It is, therefore, recorded that Paul was beheaded in Rome itself, and that Peter likewise was crucified under Nero. This account of Peter and Paul is substantiated by the fact that their names are preserved in the cemeteries of that place even to the present day.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' It is confirmed likewise by Caius, a member of the Church, who arose under Zephyrinus, bishop of Rome. He, in a published disputation with Proclus, the leader of the Phrygian heresy, speaks as follows concerning the places where the sacred corpses of the aforesaid apostles are laid:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' “But I can show the trophies of the apostles. For if you will go to the Vatican or to the Ostian way, you will find the trophies of those who laid the foundations of this church.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And that they both suffered martyrdom at the same time is stated by Dionysius, bishop of Corinth, in his epistle to the Romans, in the following words: “You have thus by such an admonition bound together the planting of Peter and of Paul at Rome and Corinth. For both of them planted and likewise taught us in our Corinth. And they taught together in like manner in Italy, and suffered martyrdom at the same time.” I have quoted these things in order that the truth of the history might be still more confirmed.',
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
      ' Josephus again, after relating many things in connection with the calamity which came upon the whole Jewish nation, records, in addition to many other circumstances, that a great many of the most honorable among the Jews were scourged in Jerusalem itself and then crucified by Florus. It happened that he was procurator of Judea when the war began to be kindled, in the twelfth year of Nero.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Josephus says that at that time a terrible commotion was stirred up throughout all Syria in consequence of the revolt of the Jews, and that everywhere the latter were destroyed without mercy, like enemies, by the inhabitants of the cities, “so that one could see cities filled with unburied corpses, and the dead bodies of the aged scattered about with the bodies of infants, and women without even a covering for their nakedness, and the whole province full of indescribable calamities, while the dread of those things that were threatened was greater than the sufferings themselves which they anywhere endured.” Such is the account of Josephus; and such was the condition of the Jews at that time.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
