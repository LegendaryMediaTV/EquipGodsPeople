<?php
$html->add(new BS_Banner(
  null,

  'Book seven of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering Dionysius, his influence, and the heresies that followed'
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
      ' In this seventh book of the Church History, the great bishop of Alexandria, Dionysius, shall again assist us by his own words; relating the several affairs of his time in the epistles which he has left. I will begin with them.',
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
      ' When Decius had reigned not quite two years, he was slain with his children, and Gallus succeeded him. At this time Origen died, being sixty-nine years of age. Dionysius, writing to Hermammon, speaks as follows of Gallus: “Gallus neither recognized the wickedness of Decius, nor considered what had destroyed him; but stumbled on the same stone, though it lay before his eyes. For when his reign was prosperous and affairs were proceeding according to his mind, he attacked the holy men who were interceding with God for his peace and welfare. Therefore with them he persecuted also their prayers in his behalf.” So much concerning him.',
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
      ' Cornelius, having held the episcopate in the city of Rome about three years, was succeeded by Lucius. He died in less than eight months, and transmitted his office to Stephen. Dionysius wrote to him the first of his letters on baptism, as no small controversy had arisen as to whether those who had turned from any heresy should be purified by baptism. For the ancient custom prevailed in regard to such, that they should receive only the laying on of hands with prayers.',
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
      ' First of all, Cyprian, pastor of the parish of Carthage, maintained that they should not be received except they had been purified from their error by baptism. But Stephen considering it unnecessary to add any innovation contrary to the tradition which had been held from the beginning, was very indignant at this.',
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
      ' Dionysius, therefore, having communicated with him extensively on this question by letter, finally showed him that since the persecution had abated, the churches everywhere had rejected the novelty of Novatus, and were at peace among themselves. He writes as follows:',
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
      ' “But know now, my brethren, that all the churches throughout the East and beyond, which formerly were divided, have become united. And all the bishops everywhere are of one mind, and rejoice greatly in the peace which has come beyond expectation. Thus Demetrianus in Antioch, Theoctistus in Cæsarea, Mazabanes in Ælia, Marinus in Tyre (Alexander having fallen asleep), Heliodorus in Laodicea (Thelymidres being dead), Helenus in Tarsus, and all the churches of Cilicia, Firmilianus, and all Cappadocia. I have named only the more illustrious bishops, that I may not make my epistle too long and my words too burdensome.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And all Syria, and Arabia to which you send help when needed, and whither you have just written, Mesopotamia, Pontus, Bithynia, and in short all everywhere are rejoicing and glorifying God for the unanimity and brotherly love.” Thus far Dionysius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But Stephen, having filled his office two years, was succeeded by Xystus. Dionysius wrote him a second epistle on baptism, in which he shows him at the same time the opinion and judgment of Stephen and the other bishops, and speaks in this manner of Stephen:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “He therefore had written previously concerning Helenus and Firmilianus, and all those in Cilicia and Cappadocia and Galatia and the neighboring nations, saying that he would not commune with them for this same cause; namely, that they re-baptized heretics. But consider the importance of the matter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For truly in the largest synods of the bishops, as I learn, decrees have been passed on this subject, that those coming over from heresies should be instructed, and then should be washed and cleansed from the filth of the old and impure leaven. And I wrote entreating him concerning all these things.” Further on he says:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' “I wrote also, at first in few words, recently in many, to our beloved fellow-presbyters, Dionysius and Philemon, who formerly had held the same opinion as Stephen, and had written to me on the same matters.” So much in regard to the above-mentioned controversy.',
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
      ' He refers also in the same letter to the heretical teachings of Sabellius, which were in his time becoming prominent, and says: “For concerning the doctrine now agitated in Ptolemais of Pentapolis—which is impious and marked by great blasphemy against the Almighty God, the Father, and our Lord Jesus Christ, and contains much unbelief respecting his Only Begotten Son and the first-born of every creature, the Word which became man, and a want of perception of the Holy Spirit—as there came to me communications from both sides and brethren discussing the matter, I wrote certain letters treating the subject as instructively as, by the help. of God, I was able. Of these I send thee copies.”',
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
      ' In the third epistle on baptism which this same Dionysius wrote to Philemon, the Roman presbyter, he relates the following: “But I examined the works and traditions of the heretics, defiling my mind for a little time with their abominable opinions, but receiving this benefit from them, that I refuted them by myself, and detested them all the more.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And when a certain brother among the presbyters restrained me, fearing that I should be carried away with the filth of their wickedness (for it would defile my soul),—in which also, as I perceived, he spoke the truth,—a vision sent from God came and strengthened me.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And the word which came to me commanded me, saying distinctly, ‘Read everything which thou canst take in hand, for thou art able to correct and prove all; and this has been to thee from the beginning the cause of thy faith.’ I received the vision as agreeing with the apostolic word, which says to them that are stronger, ‘Be skillful money-changers.’”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Then after saying some things concerning all the heresies he adds: “I received this rule and ordinance from our blessed father, Heraclas. For those who came over from heresies, although they had apostatized from the Church—or rather had not apostatized, but seemed to meet with them, yet were charged with resorting to some false teacher—when he, had expelled them from the Church he did not receive them back, though they entreated for it, until they had publicly reported all things which they had heard from their adversaries; but then he received them without requiring of them another baptism. For they had formerly received the Holy Spirit from him.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Again, after treating the question thoroughly, he adds: “I have learned also that this is not a novel practice introduced in Africa alone, but that even long ago in the times of the bishops before us this opinion has been adopted in the most populous churches, and in synods of the brethren in Iconium and Synnada, and by many others. To overturn their counsels and throw them into strife and contention, I cannot endure. For it is said? ‘Thou shalt not remove thy neighbor’s landmark, which thy fathers have set.’”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' His fourth epistle on baptism was written to Dionysius of Rome, who was then a presbyter, but not long after received the episcopate of that church. It is evident from what is stated of him by Dionysius of Alexandria, that he also was a learned and admirable man. Among other things he writes to him as follows concerning Novatus:',
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
      ' “For with good reason do we feel hatred toward Novatian, who has sundered the Church and drawn some of the brethren into impiety and blasphemy, and has introduced impious teaching concerning God, and has calumniated our most compassionate Lord Jesus Christ as unmerciful. And besides all this he rejects the holy baptism, and overturns the faith and confession which precede it, and entirely banishes from them the Holy Ghost, if indeed there was any hope that he would remain or return to them.”',
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
      ' His fifth epistle was written to Xystus, bishop of Rome. In this, after saying much against the heretics, he relates a certain occurrence of his time as follows: “For truly, brother, I am in need of counsel, and I ask thy judgment concerning a certain matter which has come to me, fearing that I may be in error.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For one of the brethren that assemble, who has long been considered a believer, and who, before my ordination, and I think before the appointment of the blessed Heraclas, was a member of the congregation, was present with those who were recently baptized. And when he heard the questions and answers, he came to me weeping, and bewailing himself; and falling at my feet he acknowledged and protested that the baptism with which he had been baptized among the heretics was not of this character, nor in any respect like this, because it was full of impiety and blasphemy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And he said that his soul was now pierced with sorrow, and that he had not confidence to lift his eyes to God, because he had set out from those impious words and deeds. And on this account he besought that he might receive this most perfect purification, and reception and grace.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But I did not dare to do this; and said that his long communion was sufficient for this. For I should not dare to renew from the beginning one who had heard the giving of thanks and joined in repeating the Amen; who had stood by the table and had stretched forth his hands to receive the blessed food; and who had received it, and partaken for a long while of the body and blood of our Lord Jesus Christ. But I exhorted him to be of good courage, and to approach the partaking of the saints with firm faith and good hope.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But he does not cease lamenting, and he shudders to approach the table, and scarcely, though entreated, does he dare to be present at the prayers.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Besides these there is also extant another epistle of the same man on baptism, addressed by him and his parish to Xystus and the church at Rome. In this he considers the question then agitated with extended argument. And there is extant yet another after these, addressed to Dionysius of Rome, concerning Lucian. So much with reference to these.',
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
      ' Gallus and the other rulers, having held the government less than two years, were overthrown, and Valerian, with his son Gallienus, received the empire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The circumstances which Dionysius relates of him we may learn from his epistle to Hermammon, in which he gives the following account: “And in like manner it is revealed to John; ‘For there was given to him,’ he says, ‘a mouth speaking great things and blasphemy; and there was given unto him authority and forty and two months.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' It is wonderful that both of these things occurred under Valerian; and it is the more remarkable in this case when we consider his previous conduct, for he had been mild and friendly toward the men of God, for none of the emperors before him had treated them so kindly and favorably; and not even those who were said openly to be Christians received them with such manifest hospitality and friendliness as he did at the beginning of his reign. For his entire house was filled with pious persons and was a church of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But the teacher and ruler of the synagogue of the Magi from Egypt persuaded him to change his course, urging him to slay and persecute pure and holy men because they opposed and hindered the corrupt and abominable incantations. For there are and there were men who, being present and being seen, though they only breathed and spoke, were able to scatter the counsels of the sinful demons. And he induced him to practice initiations and abominable sorceries and to offer unacceptable sacrifices; to slay innumerable children and to sacrifice the offspring of unhappy fathers; to divide the bowels of new-born babes and to mutilate and cut to pieces the creatures of God, as if by suck practices they could attain happiness.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' He adds to this the following: “Splendid indeed were the thank-offerings which Macrianus brought them for the empire which was the object of his hopes. He is said to have been formerly the emperor’s general finance minister; yet he did nothing praiseworthy or of general benefit, but fell under the prophetic saying, ‘Woe unto those who prophesy from their own heart and do not consider the general good.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' For he did not perceive the general Providence, nor did he look for the judgment of Him who is before all, and through all, and over all. Wherefore he became an enemy of his Catholic Church, and alienated and estranged himself from the compassion of God, and fled as far as possible from his salvation. In this he showed the truth of his own name.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And again, farther on he says: “For Valerian, being instigated to such acts by this man, was given over to insults and reproaches, according to what was said by Isaiah: ‘They have chosen their own ways and their abominations in which their soul delighted; I also will choose their delusions and will render unto them their sins.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But this man madly desired the kingdom though unworthy of it, and being unable to put the royal garment on his crippled body, set forward his two sons to bear their father’s sins. For concerning them the declaration which God spoke was plain, ‘Visiting the iniquities of the fathers upon the children unto the third and fourth generation of them that hate me.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' For heaping on the heads of his sons his own evil desires, in which he had met with success, he wiped off upon them his own wickedness and hatred toward God.” Dionysius relates these things concerning Valerian.',
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
      ' But as regards the persecution which prevailed so fiercely in his reign, and the sufferings which Dionysius with others endured on account of piety toward the God of the universe, his own words shall show, which he wrote in answer to Germanus, a contemporary bishop who was endeavoring to slander him. His statement is as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “Truly I am in danger of falling into great folly and stupidity through being forced to relate the wonderful providence of God toward us. But since it is said that ‘it is good to keep close the secret of a king, but it is honorable to reveal the works of God,’ I will join issue with the violence of Germanus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' I went not alone to Æmilianus; but my fellow-presbyter, Maximus, and the deacons Faustus, Eusebius, and Chæremon, and a brother who was present from Rome, went with me.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But Æmilianus did not at first say to me: ‘Hold no assemblies;’ for this was superfluous to him, and the last thing to one who was seeking to accomplish the first. For he was not concerned about our assembling, but that we ourselves should not be Christians. And he commanded me to give this up; supposing if I turned from it, the others also would follow me.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But I answered him, neither unsuitably nor in many words: ‘We must obey God rather than men.’ And I testified openly that I worshiped the one only God, and no other; and that I would not turn from this nor would I ever cease to be a Christian. Thereupon he commanded us to go to a village near the desert, called Cephro.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But listen to the very words which were spoken on both sides, as they were recorded: “Dionysius, Faustus, Maximus, Marcellus, and Chæremon being arraigned, Æmilianus the prefect said:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' ‘I have reasoned verbally with you concerning the clemency which our rulers have shown to you; for they have given you the opportunity to save yourselves, if you will turn to that which is according to nature, and worship the gods that preserve their empire, and forget those that are contrary to nature. What then do you say to this? For I do not think that you will be ungrateful for their kindness, since they would turn you to a better course.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Dionysius replied: ‘Not all people worship all gods; but each one those whom he approves. We therefore reverence and worship the one God, the Maker of all; who hath given the empire to the divinely favored and august Valerian and Gallienus; and we pray to him continually for their empire, that it may remain unshaken.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Æmilianus, the prefect, said to them: ‘But who forbids you to worship him, if he is a god, together with those who are gods by nature. For ye have been commanded to reverence the gods, and the gods whom all know.’ Dionysius answered: ‘We worship no other.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Æmilianus, the prefect, said to them: ‘I see that you are at once ungrateful, and insensible to the kindness of our sovereigns. Wherefore ye shall not remain in this city. But ye shall be sent into the regions of Libya, to a place called Cephro. For I have chosen this place at the command of our sovereigns, and it shall by no means be permitted you or any others, either to hold assemblies, or to enter into the so-called cemeteries.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' But if any one shall be seen without the place which I have commanded, or be found in any assembly, he will bring peril on himself. For suitable punishment shall not fail. Go, therefore where ye have been ordered.’ “And he hastened me away, though I was sick, not granting even a day’s respite. What opportunity then did I have, either to hold assemblies, or not to hold them?”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Farther on he says: “But through the help of the Lord we did not give up the open assembly. But I called together the more diligently those who were in the city, as if I were with them; being, so to speak, ‘absent in body but present in spirit.’ But in Cephro a large church gathered with us of the brethren that followed us from the city, and those that joined us from Egypt; and there ‘God opened unto us a door for the Word.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' At first we were persecuted and stoned; but afterwards not a few of the heathen forsook the idols and turned to God. For until this time they had not heard the Word, since it was then first sown by us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And as if God had brought us to them for this purpose, when we had performed this ministry he transferred us to another place. For Æmilianus, as it appeared, desired to transport us to rougher and more Libyan-like places; so he commanded them to assemble from all quarters in Mareotis, and assigned to them different villages throughout the country. But he ordered us to be placed nearer the highway that we might be seized first. For evidently he arranged and prepared matters so that whenever he wished to seize us he could take all of us without difficulty.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' When I was first ordered to go to Cephro I did not know where the place was, and had scarcely ever heard the name; yet I went readily and cheerfully. But when I was told that I was to remove to the district of Colluthion, those who were present know how I was affected.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' For here I will accuse myself. At first I was grieved and greatly disturbed; for though these places were better known and more familiar to us, yet the country was said to be destitute of brethren and of men of character, and to be exposed to the annoyances of travelers and incursions of robbers.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' But I was comforted when the brethren reminded me that it was nearer the city, and that while Cephro afforded us much intercourse with the brethren from Egypt, so that we were able to extend the Church more widely, as this place was nearer the city we should enjoy more frequently the sight of those who were truly beloved and most closely related and dearest to us. For they would come and remain, and special meetings could be held, as in the more remote suburbs. And thus it turned out.” After other matters he writes again as follows of the things which happened to him:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' “Germanus indeed boasts of many confessions. He can speak forsooth of many adversities which he himself has endured. But is he able to reckon up as many as we can, of sentences, confiscations, proscriptions, plundering of goods, loss of dignities, contempt of worldly glory, disregard for the flatteries of governors and of councilors, and patient endurance of the threats of opponents, of outcries, of perils and persecutions, and wandering and distress, and all kinds of tribulation, such as came upon me under Decius and Sabinus, and such as continue even now under Æmilianus? But where has Germanus been seen? And what account is there of him?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' But I turn from this great folly into which I am falling on account of Germanus. And for the same reason I desist from giving to the brethren who know it an account of everything which took place.”’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' The same writer also in the epistle to! Domitius and Didymus mentions some particulars of the persecution as follows: “As our people are many and unknown to you, it would be superfluous to give their names; but understand that men and women, young and old, maidens and matrons, soldiers and civilians, of every race and age, some by scourging and fire, others by the sword, have conquered in the strife and received their crowns.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' But in the case of some a very long time was not sufficient to make them appear acceptable to the Lord; as, indeed, it seems also in my own case, that sufficient time has not yet elapsed. Wherefore he has retained me for the time which he knows to be fitting, saying, ‘In an acceptable time have I heard thee, and in a day of salvation have I helped thee.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' For as you have inquired of our affairs and desire us to tell you how we are situated, you have heard fully that when we—that is, myself and Gaius and Faustus and Peter and Paul—were led away as prisoners by a centurion and magistrates, with their soldiers and servants, certain persons from Mareotis came and dragged us away by force, as we were unwilling to follow them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' But now I and Gaius and Peter are alone, deprived of the other brethren, and shut up in a desert and dry place in Libya, three days’ journey from Parætonium.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' He says farther on: “The presbyters, Maximus, Dioscorus, Demetrius, and Lucius concealed themselves in the city, and visited the brethren secretly; for Faustinus and Aquila, who are more prominent in the world, are wandering in Egypt. But the deacons, Faustus, Eusebius, and Chæremon, have survived those who died in the pestilence. Eusebius is one whom God has strengthened. and endowed from the first to fulfill energetically the ministrations for the imprisoned confessors, and to attend to the dangerous task of preparing for burial the bodies of the perfected and blessed martyrs.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' For as I have said before, unto the present time the governor continues to put to death in a cruel manner those who are brought to trial. And he destroys some with tortures, and wastes others away with imprisonment and bonds; and he suffers no one to go near them, and investigates whether any one does so. Nevertheless God gives relief to the afflicted through the zeal and persistence of the brethren.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' Thus far Dionysius. But it should be known that Eusebius, whom he calls a deacon, shortly afterward became bishop of the church of Laodicea in Syria; and Maximus, of whom he speaks as being then a presbyter, succeeded Dionysius himself as bishop of Alexandria. But the Faustus who was with him, and who at that time was distinguished for his confession, was preserved until the persecution in our day, when being very old and full of days, he closed his life by martyrdom, being beheaded. But such are the things which happened at that time to Dionysius.',
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
      ' During the above-mentioned persecution under Valerian, three men in Cæsarea in Palestine, being conspicuous in their confession of Christ, were adorned with divine martyrdom, becoming food for wild beasts. One of them was called Priscus, another Malchus, and the name of the third was Alexander. They say that these men, who lived in the country, acted at first in a cowardly manner, as if they were careless and thoughtless. For when the opportunity was given to those who longed for the prize with heavenly desire, they treated it lightly, lest they should seize the Crown of martyrdom prematurely. But having deliberated on the matter, they hastened to Cæsarea, and went before the judge and met the end we have mentioned. They relate that besides these, in the same persecution and the same city, a certain woman endured a similar conflict. But it is reported that she belonged to the sect of Marcion.',
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
      ' Shortly after this Valerian was reduced to slavery by the barbarians, and his son having become sole ruler, conducted the government more prudently. He immediately restrained the persecution against us by public proclamations, and directed the bishops to perform in freedom their customary duties, in a rescript which ran as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “The Emperor Cæsar Publius Licinius Gallienus, Pius, Felix, Augustus, to Dionysius, Pinnas, Demetrius, and the other bishops. I have ordered the bounty of my gift to be declared through all the world, that they may depart from the places of religious worship. And for this purpose you may use this copy of my rescript, that no one may molest you. And this which you are now enabled lawfully to do, has already for a long time been conceded by me. Therefore Aurelius Cyrenius, who is the chief administrator of affairs, will observe this ordinance which I have given.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' I have given this in a translation from the Latin, that it may be more readily understood. Another decree of his is extant addressed to other bishops, permitting them to take possession again of the so-called cemeteries.',
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
      ' At that time Xystus was still presiding over the church of Rome, and Demetrianus, successor of Fabius, over the church of Antioch, and Firmilianus over that of Cæsarea in Cappadocia; and besides these, Gregory and his brother Athenodorus, friends of Origen, were presiding over the churches in Pontus; and Theoctistus of Cæsarea in Palestine having died, Domnus received the episcopate there. He held it but a short time, and Theotecnus, our contemporary, succeeded him. He also was a member of Origen’s school. But in Jerusalem, after the death of Mazabanes, Hymenæus, who has been celebrated among us for a great many years, succeeded to his seat.',
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
      ' At this time, when the peace of the churches had been everywhere restored, Marinus in Cæsarea in Palestine, who was honored for his military deeds, and illustrious by virtue of family and wealth, was beheaded for his testimony to Christ, on the following account.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The vine-branch is a certain mark of honor among the Romans, and those who obtain it become, they say, centurions. A place being vacated, the order of succession called Marinus to this position. But when he was about to receive the honor, another person came before the tribunal and claimed that it was not legal, according to the ancient laws, for him to receive the Roman dignity, as he was a Christian and did not sacrifice to the emperors; but that the office belonged rather to him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Thereupon the judge, whose name was Achæus, being disturbed, first asked what opinion Marinus held. And when he perceived that he continually confessed himself a Christian, he gave him three hours for reflection.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' When he came out from the tribunal, Theotecnus, the bishop there, took him aside and conversed with him, and taking his hand led him into the church. And standing with him within, in the sanctuary, he raised his cloak a little, and pointed to the sword that hung by his side; and at the same time he placed before him the Scripture of the divine Gospels, and told him to choose which of the two he wished. And without hesitation he reached forth his right hand, and took the divine Scripture. “Hold fast then,” says Theotecnus to him, “hold fast to God, and strengthened by him mayest thou obtain what thou hast chosen, and go in peace.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Immediately on his return the herald cried out calling him to the tribunal, for the appointed time was already completed. And standing before the tribunal, and manifesting greater zeal for the faith, immediately, as he was, he was led away and finished his course by death.',
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
      ' Astyrius also is commemorated on account of his pious boldness in connection with this affair. He was a Roman of senatorial rank, and in favor with the emperors, and well known to all on account of his noble birth and wealth. Being present at the martyr’s death, he took his body away on his shoulder, and arraying him in a splendid and costly garment, prepared him for the grave in a magnificent manner, and gave him fitting burial. The friends of this man, that remain to our day, relate many other facts, concerning him.',
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
      ' Among these is also the following wonder. At Cæsarea Philippi, which the Phœnicia ns call Paneas, springs are shown at the foot of the Mountain Panius, out of which the Jordan flows. They say that on a certain feast day, a victim was thrown in, and that through the power of the demon it marvelously disappeared and that which happened was a famous wonder to those who were present. Astyrius was once there when these things were done, and seeing the multitude astonished at the affair, he pitied their delusion; and looking up to heaven he supplicated the God over all through Christ, that he would rebuke the demon who deceived the people, and bring the men’s delusion to an end. And they say that when he had prayed thus, immediately the sacrifice floated on the surface of the fountain. And thus the miracle departed; and no wonder was ever afterward performed at the place.',
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
      ' Since I have mentioned this city I do not think it proper to omit an account which is worthy of record for posterity. For they say that the woman with an issue of blood, who, as we learn from the sacred Gospel, received from our Saviour deliverance from her affliction, came from this place, and that her house is shown in the city, and that remarkable memorials of the kindness of the Saviour to her remain there.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For there stands upon an elevated stone, by the gates of her house, a brazen image of a woman kneeling, with her hands stretched out, as if she were praying. Opposite this is another upright image of a man, made of the same material, clothed decently in a double cloak, and extending his hand toward the woman. At his feet, beside the statue itself, is a certain strange plant, which climbs up to the hem of the brazen cloak, and is a remedy for all kinds of diseases.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' They say that this statue is an image of Jesus. It has remained to our day, so that we ourselves also saw it when we were staying in the city.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Nor is it strange that those of the Gentiles who, of old, were benefited by our Saviour, should have done such things, since we have learned also that the likenesses of his apostles Paul and Peter, and of Christ himself, are preserved in paintings, the ancients being accustomed, as it is likely, according to a habit of the Gentiles, to pay this kind of honor indiscriminately to those regarded by them as deliverers.',
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
      ' The chair of James, who first received the episcopate of the church at Jerusalem from the Saviour himself and the apostles, and who, as the divine records show, was called a brother of Christ, has been preserved until now, the brethren who have followed him in succession there exhibiting clearly to all the reverence which both those of old times and those of our own day maintained and do maintain for holy men on account of their piety. So much as to this matter.',
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
      ' Dionysius, besides his epistles already mentioned, wrote at that time also his extant Festal Epistles, in which he uses words of panegyric respecting the passover feast. He addressed one of these to Flavius, and another to Domitius and Didymus, in which he sets forth a canon of eight years, maintaining that it is not proper to observe the paschal feast until after the vernal equinox. Besides these he sent another epistle to his fellow-presbyters in Alexandria, as well as various others to different persons while the persecution was still prevailing.',
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
      ' Peace had but just been restored when he returned to Alexandria; but as sedition and war broke out again, rendering it impossible if or him to oversee all the brethren, separated in different places by the insurrection, at the feast of the passover, as if he were still an exile from Alexandria, he addressed them again by letter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And in another festal epistle written later to Hierax, a bishop in Egypt, he mentions the sedition then prevailing in Alexandria, as follows: “What wonder is it that it is difficult for me to communicate by letters with those who live far away, when it is beyond my power even to reason with myself, or to take counsel for my own life?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Truly I need to send letters to those who are as my own bowels, dwelling in one home, and brethren of one soul, and citizens of the same church; but how to send them I cannot tell. For it would be easier for one to go, not only beyond the limits of the province, but even from the East to the West, than from Alexandria to Alexandria itself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For the very heart of the city is more intricate and impassable than that great and trackless desert which Israel traversed for two generations. And our smooth and waveless harbors have become like the sea, divided and walled up, through which Israel drove and in whose highway the Egyptians were overwhelmed. For often from the slaughters there committed they appear like the Red Sea.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And the river which flows by the city has sometimes seemed drier than the waterless desert, and more parched than that in which Israel, as they passed through it, so suffered for thirst, that they cried out against Moses, and the water flowed for them from the steep rock, through him who alone doeth wonders.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Again it has overflowed so greatly as to flood all the surrounding country, and the roads and the fields; threatening to bring back the deluge of water that occurred in the days of Noah. And it flows along, polluted always with blood and slaughter and drownings, as it became for Pharaoh through the agency of Moses, when he changed it into blood, and it stank.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And what other water could purify the water which purifies everything? How could the ocean, so great and impassable for men, if poured into it, cleanse this bitter sea? Or how could the great river which flowed out of Eden, if it poured the four heads into which it is divided into the one of Geon, wash away this pollution?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Or when can the air poisoned by these noxious exhalations become pure? For such vapors arise from the earth, and winds from the sea, and breezes from the river, and mists from the harbors, that the dews are, as it were, discharges from dead bodies putrefying in all the elements around us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Yet men wonder and cannot understand whence these continuous pestilences; whence these severe sicknesses; whence these deadly diseases of all kinds; whence this various and vast human destruction; why this great city no longer contains as many inhabitants, from tender infants to those most advanced in life, as it formerly contained of those whom it called hearty old men. But the men from forty to seventy years of age were then so much more numerous that their number cannot now be filled out, even when those from fourteen to eighty years are enrolled and registered for the public allowance of food.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And the youngest in appearance have become, as it were, of equal age with those who formerly were the oldest. But though they see the race of men thus constantly diminishing and wasting away, and though their complete destruction is increasing and advancing, they do not tremble.”',
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
      ' After these events a pestilential disease followed the war, and at the approach of the feast he wrote again to the brethren, describing the sufferings consequent upon this calamity.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “To other men the present might not seem to be a suitable time for a festival. Nor indeed is this or any other time suitable for them; neither sorrowful times, nor even such as might be thought especially cheerful. Now, indeed, everything is tears and every one is mourning, and wailings resound daily through the city because of the multitude of the dead and dying.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For as it was written of the firstborn of the Egyptians, so now ‘there has arisen a great cry, for there is not a house where there is not one dead.’ And would that this were all!',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For many terrible things have happened already. First, they drove us out; and when alone, and persecuted, and put to death by all, even then we kept the feast. And every place of affliction was to us a place of festival: field, desert, ship, inn, prison; but the perfected martyrs kept the most joyous festival of all, feasting in heaven.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' After these things war and famine followed, which we endured in common with the heathen. But we bore alone those things with which they afflicted us, and at the same time we experienced also the effects of what they inflicted upon and suffered from one another; and again, we rejoiced in the peace of Christ, which he gave to us alone.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' “But after both we and they had enjoyed a very brief season of rest this pestilence assailed us; to them more dreadful than any dread, and more intolerable than any other calamity; and, as one of their own writers has said, the only thing which prevails over all hope. But to us this was not so, but no less than the other things was it an exercise and probation. For it did not keep aloof even from us, but the heathen it assailed more severely.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Farther on he adds: “The most of our brethren were unsparing in their exceeding love and brotherly kindness. They held fast to each other and visited the sick fearlessly, and ministered to them continually, serving them in Christ. And they died with them most joyfully, taking the affliction of others, and drawing the sickness from their neighbors to themselves and willingly receiving their pains. And many who cared for the sick and gave strength to others died themselves having transferred to themselves their death. And the popular saying which always seems a mere expression of courtesy, they then made real in action, taking their departure as the others’ ‘offscouring.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' “Truly the best of our brethren departed from life in this manner, including some presbyters and deacons and those of the people who had the highest reputation; so that this form of death, through the great piety and strong faith it exhibited, seemed to lack nothing of martyrdom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And they took the bodies of the saints in their open hands and in their bosoms, and closed their eyes and their mouths; and they bore them away on their shoulders and laid them out; and they clung to them and embraced them; and they prepared them suitably with washings and garments. And after a little they received like treatment themselves, for the survivors were continually following those who had gone before them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' “But with the heathen everything was quite otherwise. They deserted those who began to be sick, and fled from their dearest friends. And they cast them out into the streets when they were half dead, and left the dead like refuse, unburied. They shunned any participation or fellowship with death; which yet, with all their precautions, it was not easy for them to escape.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' After this epistle, when peace had been restored to the city, he wrote another festal letter to the brethren in Egypt, and again several others besides this. And there is also a certain one extant On the Sabbath, and another On Exercise.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Moreover, he wrote again an epistle to Hermammon and the brethren in Egypt, describing at length the wickedness of Decius and his successors, and mentioning the peace under Gallienus.',
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
      ' But there is nothing like hearing his own words, which are as follows: “Then he, having betrayed one of the emperors that preceded him, and made war on the other, perished with his whole family speedily and utterly. But Gallienus was proclaimed and universally acknowledged at once an old emperor and a new, being before them and continuing after them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For according to the word spoken by the prophet Isaiah, ‘Behold the things from the beginning have come to pass, and new things shall now arise.’ For as a cloud passing over the sun’s rays and obscuring them for a little time hides it and appears in its place; but when the cloud has passed by or is dissipated, the sun which had risen before appears again; so Macrianus who put himself forward and approached the existing empire of Gallienus, is not, since he never was. But the other is just as he was.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And his kingdom, as if it had cast aside old age, and had been purified from the former wickedness, now blossoms out more vigorously, and is seen and heard farther, and extends in all directions.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' He then indicates the time at which he wrote this in the following words: “It occurs to me again to review the days of the imperial years. For I perceive that those most impious men, though they have been famous, yet in a short time have become nameless. But the holier and more godly prince, having passed the seventh year, is now completing the ninth, in which we shall keep the feast.”',
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
      ' Besides all these the two books on the Promises were prepared by him. The occasion of these was Nepos, a bishop in Egypt, who taught that the promises to the holy men in the Divine Scriptures should be understood in a more Jewish manner, and that there would be a certain millennium of bodily luxury upon this earth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' As he thought that he could establish his private opinion by the Revelation of John, he wrote a book on this subject, entitled Refutation of Allegorists.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Dionysius opposes this in his books on the Promises. In the first he gives his own opinion of the dogma; and in the second he treats of the Revelation of John, and mentioning Nepos at the beginning, writes of him in this manner:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “But since they bring forward a certain work of Nepos, on which they rely confidently, as if it proved beyond dispute that there will be a reign of Christ upon earth, I confess that in many other respects I approve and love Nepos, for his faith and industry and diligence in the Scriptures, and for his extensive psalmody, with which many of the brethren are still delighted; and I hold him in the more reverence because he has gone to rest before us. But the truth should be loved and honored most of all. And while we should praise and approve un-grudgingly what is said aright, we ought to examine and correct what does not seem to have been written soundly.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Were he present to state his opinion orally, mere unwritten discussion, persuading and reconciling those who are opposed by question and answer, would be sufficient. But as some think his work very plausible, and as certain teachers regard the law and prophets as of no consequence, and do not follow the Gospels, and treat lightly the apostolic epistles, while they make promises as to the teaching of this work as if it were some great hidden mystery, and do not permit our simpler brethren to have any sublime and lofty thoughts concerning the glorious and truly divine appearing of our Lord, and our resurrection from the dead, and our being gathered together unto him, and made like him, but on the contrary lead them to hope for small and mortal things in the kingdom of God, and for things such as exist now—since this is the case, it is necessary that we should dispute with our brother Nepos as if he were present.” Farther on he says:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' “When I was in the district of Arsinoe, where, as you know, this doctrine has prevailed for a long time, so that schisms and apostasies of entire churches have resulted, I called together the presbyters and teachers of the brethren in the villages—such brethren as wished being also present—and I exhorted them to make a public examination of this question.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Accordingly when they brought me this book, as if it were a weapon and fortress impregnable, sitting with them from morning till evening for three successive days, I endeavored to correct what was written in it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And I rejoiced over the constancy, sincerity, docility, and intelligence of the brethren, as we considered in order and with moderation the questions and the difficulties and the points of agreement. And we abstained from defending in every manner and contentiously the opinions which we had once held, unless they appeared to be correct. Nor did we evade objections, but we endeavored as far as possible to hold to and confirm the things which lay before us, and if the reason given satisfied us, we were not ashamed to change our opinions and agree with others; but on the contrary, conscientiously and sincerely, and with hearts laid open before God, we accepted whatever was established by the proofs and teachings of the Holy Scriptures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And finally the author and mover of this teaching, who was called Coracion, in the hearing of all the brethren that were present, acknowledged and testified to us that he would no longer hold this opinion, nor discuss it, nor mention nor teach it, as he was fully convinced by the arguments against it. And some of the other brethren expressed their gratification at the conference, and at the spirit of conciliation and harmony which all had manifested.”',
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
      ' Afterward he speaks in this manner of the Apocalypse of John. “Some before us have set aside and rejected the book altogether, criticising it chapter by chapter, and pronouncing it without sense or argument, and maintaining that the title is fraudulent.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For they say that it is not the work of John, nor is it a revelation, because it is covered thickly and densely by a vail of obscurity. And they affirm that none of the apostles, rend none of the saints, nor any one in the Church is its author, but that Cerinthus, who founded the sect which was called after him the Cerinthian, desiring reputable authority for his fiction, prefixed the name.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For the doctrine which he taught was this: that the kingdom of Christ will be an earthly one. And as he was himself devoted to the pleasures of the body and altogether sensual in his nature, he dreamed that that kingdom would consist in those things which he desired, namely, in the delights of the belly and of sexual passion; that is to say, in eating and drinking and marrying, and in festivals and sacrifices and the slaying of victims, under the guise of which he thought he could indulge his appetites with a better grace.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “But I could not venture to reject the book, as many brethren hold it in high esteem. But I suppose that it is beyond my comprehension, and that there is a certain concealed and more wonderful meaning in every part. For if I do not understand I suspect that a deeper sense lies beneath the words.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' I do not measure and judge them by my own reason, but leaving the more to faith I regard them as too high for me to grasp. And I do not reject what I cannot comprehend, but rather wonder because I do not understand it.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' After this he examines the entire Book of Revelation, and having proved that it is impossible to understand it according to the literal sense, proceeds as follows: “Having finished all the prophecy, so to speak, the prophet pronounces those blessed who shall observe it, and also himself. For he says, ‘Blessed is he that keepeth the words of the prophecy of this book, and I, John, who saw and heard these things.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Therefore that he was called John, and that this book is the work of one John, I do not deny. And I agree also that it is the work of a holy and inspired man. But I cannot readily admit that he was the apostle, the son of Zebedee, the brother of James, by whom the Gospel of John and the Catholic Epistle were written.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' For I judge from the character of both, and the forms of expression, and the entire execution of the book, that it is not his. For the evangelist nowhere gives his name, or proclaims himself, either in the Gospel or Epistle.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Farther on he adds: “But John never speaks as if referring to himself, or as if referring to another person. But the author of the Apocalypse introduces himself at the very beginning: ‘The Revelation of Jesus Christ, which he gave him to show unto his servants quickly; and he sent and signified it by his angel unto his servant John, who bare witness of the word of God and of his testimony, even of all things that he saw.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Then he writes also an epistle: ‘John to the seven churches which are in Asia, grace be with you, and peace.’ But the evangelist did not prefix his name even to the Catholic Epistle; but without introduction he begins with the mystery of the divine revelation itself: ‘That which was from the beginning, which we have heard, which we have seen with our eyes.’ For because of such a revelation the Lord also blessed Peter, saying, ‘Blessed art thou, Simon Bar-Jonah, for flesh and blood hath not revealed it unto thee, but my heavenly Father.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' But neither in the reputed second or third epistle of John, though they are very short, does the name John appear; but there is written the anonymous phrase, ‘the eider.’ But this author did not consider it sufficient to give his name once and to proceed with his work; but he takes it up again: ‘I, John, who also am your brother and companion in tribulation, and in the kingdom and in the patience of Jesus Christ, was in the isle that is called Patmos for the Word of God and the testimony of Jesus.’ And toward the close he speaks thus: ‘Blessed is he that keepeth the words of the prophecy of this book, and I, John, who saw and heard these things.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' “But that he who wrote these things was called John must be believed, as he says it; but who he was does not appear. For he did not say, as often in the Gospel, that he was the beloved disciple of the Lord, or the one who lay on his breast, or the brother of James, or the eyewitness and hearer of the Lord.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' For he would have spoken of these things if he had wished to show himself plainly. But he says none of them; but speaks of himself as our brother and companion, and a witness of Jesus, and blessed because he had seen and heard the revelations.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But I am of the opinion that there were many with the same name as the apostle John, who, on account of their love for him, and because they admired and emulated him, and desired to be loved by the Lord as he was, took to themselves the same surname, as many of the children of the faithful are called Paul or Peter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' For example, there is also another John, surnamed Mark, mentioned in the Acts of the Apostles, whom Barnabas and Paul took with them; of whom also it is said, ‘And they had also John as their attendant.’ But that it is he who wrote this, I would not say. For it not written that he went with them into Asia, but, ‘Now when Paul and his company set sail from Paphos, they came to Perga in Pamphylia and John departing from them returned to Jerusalem.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' But I think that he was some other one of those in Asia; as they say that there are two monuments in Ephesus, each bearing the name of John.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' “And from the ideas, and from the words and their arrangement, it may be reasonably conjectured that this one is different from that one.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' For the Gospel and Epistle agree with each other and begin in the same manner. The one says, ‘In the beginning was the Word’; the other, ‘That which was from the beginning.’ The one: ‘And the Word was made flesh and dwelt among us, and we beheld his glory, the glory as of the only begotten of the Father’; the other says the same things slightly altered: ‘Which we have heard, which we have seen with our eyes; which we have looked upon and our hands have handled of the Word of life—and the life was manifested.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' For he introduces these things at the beginning, maintaining them, as is evident from what follows, in opposition to those who said that the Lord had not come in the flesh. Wherefore also he carefully adds, ‘And we have seen and bear witness, and declare unto you the eternal life which was with the Father and was manifested unto us. That which we have seen and heard declare we unto you also.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' He holds to this and does not digress from his subject, but discusses everything under the same heads and names some of which we will briefly mention.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' Any one who examines carefully will find the phrases, ‘the life,’ ‘the light,’ ‘turning from darkness,’ frequently occurring in both; also continually, ‘truth,’ ‘grace,’ ‘joy,’ ‘the flesh and blood of the Lord,’ ‘the judgment,’ ‘the forgiveness of sins,’ ‘the love of God toward us,’ the ‘commandment that we love one another,’ that we should’ keep all the commandments’; the ‘conviction of the world, of the Devil, of Anti-Christ,’ the ‘promise of the Holy Spirit,’ the ‘adoption of God,’ the ‘faith continually required of us,’ ‘the Father and the Son,’ occur everywhere. In fact, it is plainly to be seen that one and the same character marks the Gospel and the Epistle throughout.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' But the Apocalypse is different from these writings and foreign to them; not touching, nor in the least bordering upon them; almost, so to speak, without even a syllable in common with them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' Nay more, the Epistle—for I pass by the Gospel—does not mention nor does it contain any intimation of the Apocalypse, nor does the Apocalypse of the Epistle. But Paul, in his epistles, gives some indication of his revelations, though he has not written them out by themselves.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' “Moreover, it can also be shown that the, diction of the Gospel and Epistle differs from that of the Apocalypse.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' For they were written not only without error as regards the Greek language, but also with elegance in their expression, in their reasonings, and in their entire structure. They are far indeed from betraying any barbarism or solecism, or any vulgarism whatever. For the writer had, as it seems, both the requisites of discourse,—that is, the gift of knowledge and the gift of expression—as the Lord had bestowed them both upon him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' I do not deny that the other writer saw a revelation and received knowledge and prophecy. I perceive, however, that his dialect and language are not accurate Greek, but that he uses barbarous idioms, and, in some places, solecisms.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' It is unnecessary to point these out here, for I would not have any one think that I have said these things in a spirit of ridicule, for I have said what I have only with the purpose of showing dearly the difference between the writings.”',
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
      ' Besides these, many other epistles of Dionysius are extant, as those against Sabellius, addressed to Ammon, bishop of the church of Bernice, and one to Telesphorus, and one to Euphranor, and again another to Ammon and Euporus. He wrote also four other books on the same subject, which he addressed to his namesake Dionysius, in Rome.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Besides these many of his epistles are with us, and large books written in epistolary form, as those on Nature, addressed to the young man Timothy, and one on Temptations, which he also dedicated to Euphranor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Moreover, in a letter to Basilides, bishop of the parishes in Pentapolis, he says that he had written an exposition of the beginning of Ecclesiastes. And he has left us also various letters addressed to this same person. Thus much Dionysius. But our account of these matters being now completed, permit us to show to posterity the character of our own age.',
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
      ' After Xystus had presided over the church of Rome for eleven years, Dionysius, namesake of him of Alexandria, succeeded him. About the same time Demetrianus died in Antioch, and Paul of Samosata received that episcopate.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' As he held, contrary to the teaching of the Church, low and degraded views of Christ, namely, that in his nature he was a common man, Dionysius of Alexandria was entreated to come to the synod. But being unable to come on account of age and physical weakness, he gave his opinion on the subject under consideration by letter. But all the other pastors of the churches from all directions, made haste to assemble at Antioch, as against a de-spoiler of the flock of Christ.',
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
      ' Of these, the most eminent were Firmilianus, bishop of Cæsarea in Cappadocia; the brothers Gregory and Athenodorus, pastors of the churches in Pontus; Helenus of the parish of Tarsus, and Nicomas of Iconium moreover, Hymenæus, of the church of Jerusalem, and Theotecnus of the neighboring church of Cæsarea; and besides these Maximus, who presided in a distinguished manner over the brethren in Bostra. If any should count them up he could not fail to note a great many others, besides presbyters and deacons, who were at that time assembled for the same cause in the above-mentioned city. But these were the most illustrious.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' When all of these assembled at different times and frequently to consider these matters, the arguments and questions were discussed at every meeting; the adherents of the Samosatian endeavoring to cover and conceal his heterodoxy, and the others striving zealously to lay bare and make manifest his heresy and blasphemy against Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Meanwhile, Dionysius died in the twelfth year of the reign of Gallienus, having held the episcopate of Alexandria for seventeen years, and Maximus succeeded him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Gallienus after a reign of fifteen years was succeeded by Claudius, who in two years delivered the government to Aurelian.',
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
      ' During his reign a final synod composed of a great many bishops was held, and the leader of heresy in Antioch was detected, and his false doctrine clearly shown before all, and he was excommunicated from the Catholic Church under heaven.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Malchion especially drew him out of his hiding-place and refuted him. He was a man learned in other respects, and principal of the sophist school of Grecian learning in Antioch; yet on account of the superior nobility of his faith in Christ he had been made a presbyter of that parish. This man, having conducted a discussion with him, which was taken down by stenographers and which we know is still extant, was alone able to detect the man who dissembled and deceived the others.',
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
      ' The pastors who had assembled about this matter, prepared by common consent an epistle addressed to Dionysius, bishop of Rome, and Maximus of Alexandria, and sent it to all the provinces. In this they make manifest to all their own zeal and the perverse error of Paul, and the arguments and discussions which they had with him, and show the entire life and conduct of the man. It may be well to put on record at the present time the following extracts from their writing:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “To Dionysius and Maximus, and to all our fellow-ministers throughout the world, bishops, presbyters, and deacons, and to the whole Catholic Church under heaven, Helenus, Hymenæus, Theophilus, Theotecnus, Maximus, Proclus, Nicomas, Ælianus, Paul, Bolanus, Protogenes, Hierax, Eutychius, Theodorus, Malchion, and Lucius, and all the others who dwell with us in the neighboring cities and nations, bishops, presbyters, and deacons, and the churches of God, greeting to the beloved brethren in the Lord.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' A little farther on they proceed thus: “We sent for and called many of the bishops from a distance to relieve us from this deadly doctrine; as Dionysius of Alexandria and Firmilianus of Cappadocia, those blessed men. The first of these not considering the author of this delusion worthy to be addressed, sent a letter to Antioch, not written to him, but to the entire parish, of which we give a copy below.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But Firmilianus came twice and condemned his innovations, as we who were present know and testify, and many others understand. But as he promised to change his opinions, he believed him and hoped that without any reproach to the Word what was necessary would be done. So he delayed the matter, being deceived by him who denied even his own God and Lord, and had not kept the faith which he formerly held.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And now Firmilianus was again on his way to Antioch, and had come as far as Tarsus because he had learned by experience his God-denying wickedness. But while we, having come together, were calling for him and awaiting his arrival, he died.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' After other things they describe as follows the manner of life which he led: “Whereas he has departed from the rule of faith, and has turned aside after base and spurious teachings, it is not necessary—since he is without—that we should pass judgment upon his practices:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' as for instance in that although formerly destitute and poor, and having received no wealth from his fathers, nor made anything by trade or business, he now possesses abundant wealth through his iniquities and sacrilegious acts, and through those things which he extorts from the brethren, depriving the injured of their rights and promising to assist them for reward, yet deceiving them, and plundering those who in their trouble are ready to give that they may obtain reconciliation with their oppressors,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' ‘supposing that gain is godliness’;—or in that he is haughty, and is puffed up, and assumes worldly dignities, preferring to be called ducenarius rather than bishop; and struts in the market-places, reading letters and reciting them as he walks in public, attended by a body-guard, with a multitude preceding and following him, so that the faith is envied and hated on account of his pride and haughtiness of heart;—',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' or in that he practices chicanery in ecclesiastical assemblies, contrives to glorify himself, and deceive with appearances, and astonish the minds of the simple, preparing for himself a tribunal and lofty throne,—not like a disciple of Christ—and possessing a ‘secretum,’—like the rulers of the world—and so calling it, and striking his thigh with his hand, and stamping on the tribunal with his feet—or in that he rebukes and insults those who do not applaud, and shake their handkerchiefs as in the theaters, and shout and leap about like the men and women that are stationed around him, and hear him in this unbecoming manner, but who listen reverently and orderly as in the house of God—or in that he violently and coarsely assails in public the expounders of the Word that have departed this life, and magnifies himself, not as a bishop, but as a sophist and juggler,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' and stops the psalms to our Lord Jesus Christ, as being the modern productions of modern men, and trains women to sing psalms to himself in the midst of the church on the great day of the passover, which any one might shudder to hear, and persuades the bishops and presbyters of the neighboring districts and cities who fawn upon him, to advance the same ideas in their discourses to the people.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' For to anticipate something of what we shall presently write, he is unwilling to acknowledge that the Son of God has come down from heaven. And this is not a mere assertion, but it is abundantly proved from the records which we have sent you; and not least where he says ‘Jesus Christ is from below.’ But those singing to him and extolling him among the people say that their impious teacher has come down an angel from heaven, And he does not forbid such things; but the arrogant man is even present when they are uttered.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' And there are the women, the ‘subintroductæ,’ as the people of Antioch call them, belonging to him and to the presbyters and deacons that are with him. Although he knows and has convicted these men, yet he connives at this and their other incurable sins, in order that they may be bound to him, and through fear for themselves may not dare to accuse him for his wicked words and deeds. But he has also made them rich; on which account he is loved and admired by those who covet such things.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' We know, beloved, that the bishop and all the clergy should be an example to the people of all good works. And we are not ignorant how many have fallen or incurred suspicion, through the women whom they have thus brought in. So that even if we should allow that he commits no sinful act, yet he ought to avoid the suspicion which arises from such a thing, lest he scandalize some one, or lead others to imitate him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' For how can he reprove or admonish another not to be too familiar with women—lest he fall, as it is written,—when he has himself sent one away already, and now has two with him, blooming and beautiful, and takes them with him wherever he goes, and at the same time lives in luxury and surfeiting?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' Because of these things all mourn and lament by themselves; but they so fear his tyranny and power, that they dare not accuse him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' But as we have said, while one might call the man to account for this conduct, if he held the Catholic doctrine and was numbered with us, since he has scorned the mystery and struts about in the abominable heresy of Artemas (for why should we not mention his father?), we think it unnecessary to demand of him an explanation of these things.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' Afterwards, at the close of the epistle, they add these words: “Therefore we have been compelled to excommunicate him, since he sets himself against God, and refuses to obey; and to appoint in his place another bishop for the Catholic Church. By divine direction, as we believe, we have appointed Domnus, who is adorned with all the qualities becoming in a bishop, and who is a son of the blessed Demetrianus, who formerly presided in a distinguished manner over the same parish. We have informed you of this that you may write to him, and may receive letters of communion from him. But let this man write to Artemas; and let those who think as Artemas does, communicate with him.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' As Paul had fallen from the episcopate, as well as from the orthodox faith, Domnus, as has been said, became bishop of the church at Antioch.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' But as Paul refused to surrender the church building, the Emperor Aurelian was petitioned; and he decided the matter most equitably, ordering the building to be given to those to whom the bishops of Italy and of the city of Rome should adjudge it. Thus this man was driven out of the church, with extreme disgrace, by the worldly power.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' Such was Aurelian’s treatment of us at that time; but in the course of his reign he changed his mind in regard to us, and was moved by certain advisers to institute a persecution against us. And there was great talk about this on every side.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' But as he was about to do it, and was, so to speak, in the very act of signing the decrees against us, the divine judgment came upon him and restrained him at the very verge of his undertaking, showing in a manner that all could see clearly, that the rulers of this world can never find an opportunity against the churches of Christ, except the hand, that defends them permits it, in divine and heavenly judgment, for the sake of discipline and correction, at such times as it sees best.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' After a reign of six years, Aurelian was succeeded by Probus. He reigned for the same number of years, and Carus, with his sons, Carinus and Numerianus, succeeded him. After they had reigned less than three years the government devolved on Diocletian, and those associated with him. Under them took place the persecution of our time, and the destruction of the churches connected with it. Shortly before this, Dionysius, bishop of Rome, after holding office for nine years, died, and was succeeded by Felix.',
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
      ' At this time, the madman, named from his demoniacal heresy, armed himself in the perversion of his reason, as the devil, Satan, who himself fights against God, put him forward to the destruction of many. He was a barbarian in life, both in word and deed; and in his nature demoniacal and insane. In consequence of this he sought to pose as Christ, and being puffed up in his madness, he proclaimed himself the Paraclete and the very Holy Spirit; and afterwards, like Christ, he chose twelve disciples as partners of his new doctrine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And he patched together false and godless doctrines collected from a multitude of long-extinct impieties, and swept them, like a deadly poison, from Persia to our part of the world. From him the impious name of the Manicheans is still prevalent among many. Such was the foundation of this “knowledge falsely so-called,” which sprang up in those times.',
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
      ' At this time, Felix, having presided over the church of Rome for five years, was succeeded by Eutychianus, but he in less than ten months left the position to Caius, who lived in our day. He held it about fifteen years, and was in turn succeeded by Marcellinus, who was overtaken by the persecution.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' About the same time Timæus received the episcopate of Antioch after Domnus, and Cyril, who lived in our day, succeeded him. In his time we became acquainted with Dorotheus, a man of learning among those of his day, who was honored with the office of presbyter in Antioch. He was a lover of the beautiful in divine things, and devoted himself to the Hebrew language, so that he read the Hebrew Scriptures with facility.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He belonged to those who were especially liberal, and was not unacquainted with Grecian propædeutics. Besides this he was a eunuch, having been so from his very birth. On this account, as if it were a miracle, the emperor took him into his family, and honored him by placing him over the purple dye-works at Tyre. We have heard him expound the Scriptures wisely in the Church.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' After Cyril, Tyrannus received the episcopate of the parish of Antioch. In his time occurred the destruction of the churches.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Eusebius, who had come from the city of Alexandria, ruled the parishes of Laodicea after Socrates. The occasion of his removal thither was the affair of Paul. He went on this account to Syria, and was restrained from returning home by those there who were zealous in divine things. Among our contemporaries he was a beautiful example of religion, as is readily seen from the words of Dionysius which we have quoted.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Anatolius was appointed his successor; one good man, as they say, following another. He also was an Alexandrian by birth. In learning and skill in Greek philosophy, such as arithmetic and geometry, astronomy, and dialectics in general, as well as in the theory of physics, he stood first among the ablest men of our time, and he was also at the head in rhetorical science. It is reported that for this reason he was requested by the citizens of Alexandria to establish there a school of Aristotelian philosophy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' They relate of him many other eminent deeds during the siege of the Pyrucheium in Alexandria, on account of which he was especially honored by all those in high office; but I will give the following only as an example.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' They say that bread had failed the besieged, so that it was more difficult to withstand the famine than the enemy outside; but he being present provided for them in this manner. As the other part of the city was allied with the Roman army, and therefore was not under siege, Anatolius sent for Eusebius—for he was still there before his transfer to Syria, and was among those who were not besieged, and possessed, moreover, a great reputation and a renowned name which had reached even the Roman general—and he informed him of those who were perishing in the siege from famine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' When he learned this he requested the Roman commander as the greatest possible favor, to grant safety to deserters from the enemy. Having obtained his request, he communicated it to Anatolius. As soon as he received the message he convened the senate of Alexandria, and at first proposed that all should come to a reconciliation with the Romans. But when he perceived that they were angered by this advice, he said, “But I do not think you will oppose me, if I counsel you to send the supernumeraries and those who are in nowise useful to us, as old women and children and old men, outside the gates, to go wherever they may please. For why should we retain for no purpose these who must at any rate soon die? and why should we destroy with hunger those who are crippled and maimed in body, when we ought to provide only for men and youth, and to distribute the necessary bread among those who are needed for the garrison of the city?”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' With such arguments he persuaded the assembly, and rising first he gave his vote that the entire multitude, whether of men or women, who were not needful for the army, should depart from the city, because if they remained and unnecessarily continued in the city, there would be for them no hope of safety, but they would perish with famine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' As all the others in the senate agreed to this, he saved almost all the besieged. He provided that first, those belonging to the church, and afterwards, of the others in the city, those of every age should escape, not only the classes included in the decree, but, under cover of these, a multitude of others, secretly clothed in women’s garments; and through his management they went out of the gates by night and escaped to the Roman camp. There Eusebius, like a father and physician, received all of them, wasted away through the long siege, and restored them by every kind of prudence and care.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' The church of Laodicea was honored by two such pastors in succession, who, in the providence of God, came after the aforesaid war from Alexandria to that city.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Anatolius did not write very many works; but in such as have come down to us we can discern his eloquence and erudition. In these he states particularly his opinions on the passover. It seems important to give here the following extracts from them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' From the Paschal Canons of Anatolius. “There is then in the first year the new moon of the first month, which is the beginning of every cycle of nineteen years, on the twenty-sixth day of the Egyptian Phamenoth; but according to the months of the Macedonians, the twenty-second day of Dystrus, or, as the Romans would say, the eleventh before the Kalends of April.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' On the said twenty-sixth of Phamenoth, the sun is found not only entered on the first segment, but already passing through the fourth day in it. They are accustomed to call this segment the first dodecatomorion, and the equinox, and the beginning of months, and the head of the cycle, and the starting-point of the planetary circuit. But they call the one preceding this the last of months, and the twelfth segment, and the final dodecatomorion, and the end of the planetary circuit. Wherefore we maintain that those who place the first month in it, and determine by it the fourteenth of the passover, commit no slight or common blunder.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' And this is not an opinion of our own; but it was known to the Jews of old, even before Christ, and was carefully observed by them. This may be learned from what is said by Philo, Josephus, and Musæus; and not only by them, but also by those yet more ancient, the two Agathobuli, surnamed ‘Masters,’ and the famous Aristobulus, who was chosen among the seventy interpreters of the sacred and divine Hebrew Scriptures by Ptolemy Philadelphus and his father, and who also dedicated his exegetical books on the law of Moses to the same kings.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' These writers, explaining questions in regard to the Exodus, say that all alike should sacrifice the passover offerings after the vernal equinox, in the middle of the first month. But this occurs while the sun is passing through the first segment of the solar, or as some of them have styled it, the zodiacal circle. Aristobulus adds that it is necessary for the feast of the passover, that not only the sun should pass through the equinoctial segment, but the moon also.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' For as there are two equinoctial segments, the vernal and the autumnal, directly opposite each other, and as the day of the passover was appointed on the fourteenth of the month, beginning with the evening, the moon will hold a position diametrically opposite the sun, as may be seen in full moons; and the sun will be in the segment of the vernal equinox, and of necessity the moon in that of the autumnal.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' I know that many other things have been said by them, some of them probable, and some approaching absolute demonstration, by which they endeavor to prove that it is altogether necessary to keep the passover and the feast of unleavened bread after the equinox. But I refrain from demanding this sort of demonstration for matters from which the veil of the Mosaic law has been removed, so that now at length with uncovered face we continually behold as in a glass Christ and the teachings and sufferings of Christ. But that with the Hebrews the first month was near the equinox, the teachings also of the Book of Enoch show.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' The same writer has also left the Institutes of Arithmetic, in ten books, and other evidences of his experience and proficiency in divine things.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' Theotecnus, bishop of Cæsarea in Palestine, first ordained him as bishop, designing to make him his successor in his own parish after his death. And for a short time both of them presided over the same church. But the synod which was held to consider Paul’s case called him to Antioch, and as he passed through the city of Laodicea, Eusebius being dead, he was detained by the brethren there.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' And after Anatolius had departed this life, the last bishop of that parish before the persecution was Stephen, who was admired by many for his knowledge of philosophy and other Greek learning. But he was not equally devoted to the divine faith, as the progress of the persecution manifested; for it showed that he was a cowardly and unmanly dissembler rather than a true philosopher.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' But this did not seriously injure the church, for Theodotus restored their affairs, being straightway made bishop of that parish by God himself, the Saviour of all. He justified by his deeds both his lordly name and his office of bishop. For he excelled in the medical art for bodies, and in the healing art for souls. Nor did any other man equal him in kindness, sincerity, sympathy, and zeal in helping such as needed his aid. He was also greatly devoted to divine learning. Such an one was he.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' In Cæsarea in Palestine, Agapius succeeded Theotecnus, who had most zealously performed the duties of his episcopate. Him too we know to have labored diligently, and to have manifested most genuine providence in his oversight of the people, particularly caring for all the poor with liberal hand.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' In his time we became acquainted with Pamphilus, that most eloquent man, of truly philosophical life, who was esteemed worthy of the office of presbyter in that parish. It would be no small matter to show what sort of a man he was and whence he came. But we have described, in our special work concerning him, all the particulars of his life, and of the school which he established, and the trials which he endured in many confessions during the persecution, and the crown of martyrdom with which he was finally honored. But of all that were there he was indeed the most admirable.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' Among those nearest our times, we have known Pierius, of the presbyters in Alexandria, and Meletius, bishop of the churches in Pontus—rarest of men.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' The first was distinguished for his life of extreme poverty and his philosophic learning, and was exceedingly diligent in the contemplation and exposition of divine things, and in public discourses in the church. Meletius, whom the learned called the “honey of Attica,” was a man whom every one would describe as most accomplished in all kinds of learning; and it would be impossible to admire sufficiently his rhetorical skill. It might be said that he possessed this by nature; but who could surpass the excellence of his great experience and erudition in other respects?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 28),
      ' For in all branches of knowledge had you undertaken to try him even once, you would have said that he was the most skillful and learned. Moreover, the virtues of his life were not less remarkable. We observed him well in the time of the persecution, when for seven full years he was escaping from its fury in the regions of Palestine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 29),
      ' Zambdas received the episcopate of the church of Jerusalem after the bishop Hymenæus, whom we mentioned a little above. He died in a short time, and Hermon, the last before the persecution in our day, succeeded to the apostolic chair, which has been preserved there until the present time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 30),
      ' In Alexandria, Maximus, who, after the death of Dionysius, had been bishop for eighteen years, was succeeded by Theonas. In his time Achillas, who had been appointed a presbyter in Alexandria at the same time with Pierius, became celebrated. He was placed over the school of the sacred faith, and exhibited fruits of philosophy most rare and inferior to none, and conduct genuinely evangelical.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 31),
      ' After Theonas had held the office for nineteen years, Peter received the episcopate in Alexandria, and was very eminent among them for twelve entire years. Of these he governed the church less than three years before the persecution, and for the remainder of his life he subjected himself to a more rigid discipline and cared in no secret manner for the general interest of the churches. On this account he was beheaded in the ninth year of the persecution, and was adorned with the crown of martyrdom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 32),
      ' Having written out in these books the account of the successions from the birth of our Saviour to the destruction of the places of worship—a period of three hundred and five years, permit me to pass on to the contests of those who, in our day, have heroically fought for religion, and to leave in writing, for the information of posterity, the extent and the magnitude of those conflicts.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
