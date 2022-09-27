<?php
$html->add(new BS_Banner(
  null,

  'Book ten of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering peace, Licinius, and Constantine'
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
      ' Thanks for all things be given unto God the Omnipotent Ruler and King of the universe, and the greatest thanks to Jesus Christ the Saviour and Redeemer of our souls, through whom we pray that peace may be always preserved for us firm and undisturbed by external troubles and by troubles of the mind.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Since in accordance with thy wishes, my most holy Paulinus, we have added the tenth book of the Church History to those which have preceded, we will inscribe it to thee, proclaiming thee as the seal of the whole work;',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' and we will fitly add in a perfect number the perfect panegyric upon the restoration of the churches, obeying the Divine Spirit which exhorts us in the following words: “Sing unto the Lord a new song, for he hath done marvelous things. His right hand and his holy arm hath saved him. The Lord hath made known his salvation, his righteousness hath he revealed in the presence of the nations.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And in accordance with the utterance which commands us to sing the new song, let us proceed to show that, after those terrible and gloomy spectacles which we have described, we are now permitted to see and celebrate such things as many truly righteous men and martyrs of God before us desired to see upon earth and did not see, and to hear and did not hear.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But they, hastening on, obtained far better things, being carried to heaven and the paradise of divine pleasure. But, acknowledging that even these things are greater than we deserve, we have been astonished at the grace manifested by the author of the great gifts, and rightly do we admire him, worshiping him with the whole power of our souls, and testifying to the truth of those recorded utterances, in which it is said,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' “Come and see the works of the Lord, the wonders which he hath done upon the earth; he removeth wars to the ends of the world, he shall break the bow and snap the spear in sunder, and shall burn the shields with fire.” Rejoicing in these things which have been clearly fulfilled in our day, let us proceed with our account.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' The whole race of God’s enemies was destroyed in the manner indicated, and was thus suddenly swept from the sight of men. So that again a divine utterance had its fulfillment: “I have seen the impious highly exalted and raising himself like the cedars of Lebanon and I have passed by, and behold, he was not and I have sought his place, and it could not be found.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And finally a bright and splendid day, overshadowed by no cloud, illuminated with beams of heavenly light the churches of Christ throughout the entire world. And not even those without our communion were prevented from sharing in the same blessings, or at least from coming under their influence and enjoying a part of the benefits bestowed upon us by God.',
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
      ' All men, then, were freed from the oppression of the tyrants, and being released from the former ills, one in one way and another in another acknowledged the defender of the pious to be the only true God. And we especially who placed our hopes in the Christ of God had unspeakable gladness, and a certain inspired joy bloomed for all of us, when we saw every place which shortly before had been desolated by the impieties of the tyrants reviving as if from a long and death-fraught pestilence, and temples again rising from their foundations to an immense height, and receiving a splendor far greater than that of the old ones which had been destroyed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But the supreme rulers also confirmed to us still more extensively the munificence of God by repeated ordinances in behalf of the Christians; and personal letters of the emperor were sent to the bishops, with honors and gifts of money. It may not be unfitting to insert these documents, translated from the Roman into the Greek tongue, at the proper place in this book, as in a sacred tablet, that they may remain as a memorial to all who shall come after us.',
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
      ' After this was seen the sight which had been desired and prayed for by us all; feasts of dedication in the cities and consecrations of the newly built houses of prayer took place, bishops assembled, foreigners came together from abroad, mutual love was exhibited between people and people, the members of Christ’s body were united in complete harmony.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Then was fulfilled the prophetic utterance which mystically foretold what was to take place: “Bone to bone and joint to joint,” and whatever was truly announced in enigmatic expressions in the inspired passage.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And there was one energy of the Divine Spirit pervading all the members, and one soul in all, and the same eagerness of faith, and one hymn from all in praise of the Deity. Yea, and perfect services were conducted by the prelates, the sacred rites being solemnized, and the majestic institutions of the Church observed, here with the singing of psalms and with the reading of the words committed to us by God, and there with the performance of divine and mystic services; and the mysterious symbols of the Saviour’s passion were dispensed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' At the same time people of every age, both male and female, with all the power of the mind gave honor unto God, the author of their benefits, in prayers and thanksgiving, with a joyful mind and soul. And every one of the bishops present, each to the best of his ability, delivered panegyric orations, adding luster to the assembly.',
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
      ' A certain one of those of moderate talent, who had composed a discourse, stepped forward in the presence of many pastors who were assembled as if for a church gathering, and while they attended quietly and decently, he addressed himself as follows to one who was in all things a most excellent bishop and beloved of God, through whose zeal the temple in Tyre, which was the most splendid in Phœnicia, had been erected.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Panegyric upon the building of the churches, addressed to Paulinus, Bishop of Tyre. “Friends and priests of God who are clothed in the sacred gown and adorned with the heavenly crown of glory, the inspired unction and the sacerdotal garment of the Holy Spirit; and thou? oh pride of God’s new holy temple, endowed by him with the wisdom of age, and yet exhibiting costly works and deeds of youthful and flourishing virtue, to whom God himself, who embraces the entire world, has granted the distinguished honor of building and renewing this earthly house to Christ, his only begotten and first-born Word, and to his holy and divine bride;—',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' one might call thee a new Beseleel, the architect of a divine tabernacle, or Solomon, king of a new and much better Jerusalem, or also a new Zerubabel, who added a much greater glory than the former to the temple of God;—',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' and you also, oh nurslings of the sacred flock of Christ, habitation of good words, school of wisdom, and august and pious auditory of religion:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' It was long ago permitted us to raise hymns and songs to God, when we learned from hearing the Divine Scriptures read the marvelous signs of God and the benefits conferred upon men by the Lord’s wondrous deeds, being taught to say ‘Oh God! we have heard with our ears, our fathers have told us the work which thou didst in their days, in days of old.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But now as we no longer perceive the lofty arm and the celestial right hand of our all-gracious God and universal King by hearsay merely or report, but observe so to speak in very deed and with our own eyes that the declarations recorded long ago are faithful and true, it is permitted us to raise a second hymn of triumph and to sing with loud voice, and say, ‘As we have heard, so have we seen; in the city of the Lord of hosts, in the city of our God.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And in what city but in this newly built and God-constructed one, which is a ‘church of the living God, a pillar and foundation of the truth,’ concerning which also another divine oracle thus proclaims, ‘Glorious things have been spoken of thee, oh city of God.’ Since the all-gracious God has brought us together to it, through the grace of his Only-Begotten, let every one of those who have been summoned sing with loud voice and say, ‘I was glad when they said unto me, we shall go unto the house of the Lord,’ and ‘Lord, I have loved the beauty of thy house and the place where thy glory dwelleth.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And let us not only one by one, but all together, with one spirit and one soul, honor him and cry aloud, saying, ‘Great is the Lord and greatly to be praised in the city of our God, in his holy mountain.’ For he is truly great, and great is his house, lofty and spacious and ‘comely in beauty above the sons of men.’ ‘Great is the Lord who alone doeth wonderful things’; ‘great is he who doeth great things and things past finding out, glorious and marvelous things which cannot be numbered’; is great is he ‘who changeth times and seasons, who exalteth and debaseth kings’; ‘who raiseth up the poor from the earth and lifteth up the needy from the dunghill.’ ‘He hath put clown princes from their thrones and hath exalted them of low degree from the earth. The hungry he hath filled with good things and the arms of the proud he hath broken.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Not only to the faithful, but also to unbelievers, has he confirmed the record of ancient events; he that worketh miracles, he that doeth great things, the Master of all, the Creator of the whole world, the omnipotent, the all-merciful, the one and only God. To him let us sing the new song, supplying in thought, ‘To him who alone doeth great wonders: for his mercy endureth forever’; ‘To him which smote great kings, and slew famous kings: for his mercy endureth forever’; ‘For the Lord remembered us in our low estate and delivered us from our adversaries.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And let us never cease to cry aloud in these words to the Father of the universe. And let us always honor him with our mouth who is the second cause of our benefits, the instructor in divine knowledge, the teacher of the true religion, the destroyer of the impious, the slayer of tyrants, the reformer of life, Jesus, the Saviour of us who were in despair.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' For he alone, as the only all-gracious Son of an all-gracious Father, in accordance with the purpose of his Father’s benevolence, has willingly put on the nature of us who lay prostrate in corruption, and like some excellent physician, who for the sake of saving them that are ill, examines their sufferings, handles their foul sores, and reaps pain for himself from the miseries of another, so us who were not only diseased and afflicted with terrible ulcers and wounds already mortified, but were even lying among the dead, he hath saved for himself from the very jaws of death. For none other of those in heaven had such power as without harm to minister to the salvation of so many.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But he alone having reached our deep corruption, he alone having taken upon himself our labors, he alone having suffered the punishments due for our impieties, having recovered us who were not half dead merely, but were already in tombs and sepulchers, and altogether foul and offensive, saves us, both anciently and now, by his beneficent zeal, beyond the expectation of any one, even of ourselves, and imparts liberally of the Father’s benefits, he who is the giver of life and light, our great Physician and King and Lord, the Christ of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' For then when the whole human race lay buried in gloomy night and in depths of darkness through the deceitful arts of guilty demons and the power of God-hating spirits, by his simple appearing he loosed once for all the fast-bound cords of our impieties by the rays of his light, even as wax is melted.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But when malignant envy and the evil-loving demon wellnigh burst with anger at such grace and kindness, and turned against us all his death-dealing forces, and when, at first, like a dog gone mad which gnashes his teeth at the stones thrown at him, and pours out his rage against his assailants upon the inanimate missiles, he leveled his ferocious madness at the stones of the sanctuaries and at the lifeless material of the houses, and desolated the churches—at least as he supposed—and then emitted terrible hissings and snake-like sounds, now by the threats of impious tyrants, and again by the blasphemous edicts of profane rulers, vomiting forth death, moreover, and infecting with his deleterious and soul-destroying poisons the souls captured by him, and almost slaying them by his death-fraught sacrifices of dead idols, and causing every beast in the form of man and every kind of savage to assault us—',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' then, indeed, the ‘Angel of the great Council,’ the great Captain of God after the mightiest soldiers of his kingdom had displayed sufficient exercise through patience and endurance in everything, suddenly appeared anew, and blotted out and annihilated his enemies and foes, so that they seemed never to have had even a name.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' But his friends and relatives he raised to the highest glory, in the presence not only of all men, but also of celestial powers, of sun and moon and stars, and of the whole heaven and earth, so that now, as has never happened before, the supreme rulers, conscious of the honor which they have received from him, spit upon the faces of dead idols, trample upon the unhallowed rites of demons, make sport of the ancient delusion handed down from their fathers, and acknowledge only one God, the common benefactor of all, themselves included. And they confess Christ, the Son of God, universal King of all, and proclaim him Saviour on monuments, imperishably recording in imperial letters, in the midst of the city which rules over the earth, his righteous deeds and his victories over the impious. Thus Jesus Christ our Saviour is the only one from all eternity who has been acknowledged, even by those highest in the earth, not as a common king among men, but as a trite son of the universal God, and who has been worshiped as very God, and that rightly.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' For what king that ever lived attained such virtue as to fill the ears and tongues of all men upon earth with his own name? What king, after ordaining such pious and wise laws, has extended them from one end of the earth to the other, so that they are perpetually read in the hearing of all men?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' Who has abrogated barbarous and savage customs of uncivilized nations by his gentle and most philanthropic laws? Who, being attacked for entire ages by all, has shown such superhuman virtue as to flourish daily, and remain young throughout his life?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' Who has founded a nation which of old was not even heard of, but which now is not concealed in some comer of the earth, but is spread abroad everywhere under the sun? Who has so fortified his soldiers with the arms of piety that their souls, being firmer than adamant, shine brilliantly in the contests with their opponents?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' What king prevails to such an extent, and even after death leads on his soldiers, and sets up trophies over his enemies, and fills every place, country and city, Greek and barbarian, with his royal dwellings, even divine temples with their consecrated oblations, like this very temple with its superb adornments and votive offerings, which are themselves so truly great and majestic, worthy of wonder and admiration, and clear signs of the sovereignty of our Saviour? For now, too, ‘he spake, and they were made; he commanded, and they were created.’ For what was there to resist the nod of the universal King and Governor and Word of God himself?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' “A special discourse would be needed accurately to survey and explain all this; and also to describe how great the zeal of the laborers is regarded by him who is celebrated as divine, who looks upon the living temple which we all constitute, and surveys the house, composed of living and moving stones, which is well and surely built upon the foundation of the apostles and prophets, the chief cornerstone being Jesus Christ himself, who has been rejected not only by the builders of that ancient building which no longer stands, but also by the builders—evil architects of evil works—of the structure, which is composed of the mass of men and still endures But the Father has approved him both then and now, and has made him the head of the corner of this our common church.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' Who that beholds this living temple of the living God formed of ourselves—this greatest and truly divine sanctuary, I say, whose inmost shrines are invisible to the multitude and are truly holy and a holy of holies—would venture to declare it? Who is able even to look within the sacred enclosure, except the great High Priest of all, to whom alone it is permitted to fathom the mysteries of every rational soul?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' But perhaps it is granted to another, to one only, to be second after him in the same work, namely, to the commander of this army whom the first and great High Priest himself has honored with the second place in this sanctuary, the shepherd of your divine flock who has obtained your people by the allotment and the judgment of the Father, as if he had appointed him his own servant and interpreter, a new Aaron or Melchizedec, made like the Son of God, remaining and continually preserved by him in accordance with the united prayers of all of you.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' To him therefore alone let it be granted, if not in the first place, at least in the second after the first and greatest High Priest, to observe and supervise the inmost state of your souls—to him who by experience and length of time has accurately proved each one, and who by his zeal and care has disposed you all in pious conduct and doctrine, and is better able than any one else to give an account, adequate to the facts, of those things which he himself has accomplished with the Divine assistance.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 25),
      ' As to our first and great High Priest, it is said, ‘Whatsoever he seeth the Father doing those things likewise the Son also doeth.’ So also this one, looking up to him as to the first teacher, with pure eyes of the mind, using as archetypes whatsoever things he seeth him doing, produceth images of them, making them so far as is possible in the same likeness, in nothing inferior to that Beseleel, whom God himself ‘filled with the spirit of wisdom and understanding’ and with other technical and scientific knowledge, and called to be the maker of the temple constructed after heavenly types given in symbols.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 26),
      ' Thus this one also bearing in his own soul the image of the whole Christ, the Word, the Wisdom, the Light, has formed this magnificent temple of the highest God, corresponding to the pattern of the greater as a visible to an invisible, it is impossible to say with what greatness of soul, with what wealth and liberality of mind, and with what emulation on the part of all of you, shown in the magnanimity of the contributors who have ambitiously striven in no way to be left behind by him in the execution of the same purpose. And this place—for this deserves to be mentioned first of all—which had been covered with all sorts of rubbish by the artifices of our enemies he did not overlook, nor did he yield to the wickedness of those who had brought about that condition of things, although he might have chosen some other place, for many other sites were available in the city, where he would have had less labor, and been free from trouble.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 27),
      ' But having first aroused himself to the work, and then strengthened the whole people with zeal, and formed them all into one great body, he fought the first contest. For he thought that this church, which had been especially besieged by the enemy, which had first suffered and endured the same persecutions with us and for us, like a mother bereft of her children, should rejoice with us in the signal favor of the all-merciful God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 28),
      ' For when the Great Shepherd had driven away the wild animals and wolves and every cruel and savage beast, and, as the divine oracles say, ‘had broken the jaws of the lions,’ he thought good to collect again her children in the same place, and in the most righteous manner he set up the fold of her flock, ‘to put to shame the enemy and avenger,’ and to refute the impious daring of the enemies of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 29),
      ' And now they are not—the haters of God—for they never were. After they had troubled and been troubled for a little time, they suffered the fitting punishment, and brought themselves and their friends and their relatives to total destruction, so that the declarations inscribed of old in sacred records have been proved true by facts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 30),
      ' In these declarations the divine word truly says among other things the following concerning them: ‘The wicked have drawn out the sword, they have bent their bow, to slay the righteous in heart; let their sword enter into their own heart and their bows be broken.’ And again: ‘Their memorial is perished with a sound’ and ‘their name hast thou blotted out forever and ever’; for when they also were in trouble they ‘cried out and there was none to save: unto the Lord, and he heard them not. But ‘their feet were bound together, and they fell, but we have arisen and stand upright.’ And that which was announced beforehand in these words, ‘O Lord, in thy city thou shalt set at naught their image,’—has been shown to be true to the eyes of all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 31),
      ' But having waged war like the giants against God, they died in this way. But she that was desolate and rejected by men received the consummation which we behold in consequence of her patience toward God, so that the prophecy of Isaiah was spoken of her:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 32),
      ' ‘Rejoice, thirsty desert, let the desert rejoice and blossom as the lily, and the desert places shall blossom and be glad.’ ‘Be strengthened, ye weak hands and feeble knees. Be of good courage, ye feeble-hearted, in your minds; be strong, fear not. Behold our God recompenseth judgment and will recompense, he will come and save us.’ ‘For,’ he says, ‘in the wilderness water has broken out, and a pool in thirsty ground, and the dry land shall be watered meadows, and in the thirsty ground there shall be springs of water.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 33),
      ' These things which were prophesied long ago have been recorded in sacred books; but no longer are they transmitted to us by hearsay merely, but in facts. This desert, this dry land, this widowed and deserted one, ‘whose gates they cut down with axes like wood in a forest, whom they broke down with hatchet and hammer,’ whose books also they destroyed, ‘burning with fire the sanctuary of God, and profaning unto the ground the habitation of his name,’ ‘whom all that passed by upon the way plucked, and whose fences they broke down, whom the boar out of the wood ravaged, and on which the savage wild beast fed,’ now by the wonderful power of Christ, when he wills it, has become like a lily. For at that time also she was chastened at his nod as by a careful father; ‘for whom the Lord loveth he chasteneth, and scourgeth every son whom he receiveth.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 34),
      ' Then after being chastened in a measure, according to the necessities of the case, she is commanded to rejoice anew; and she blossoms as a lily and exhales her divine odor among all men. ‘For,’ it is said, ‘water hath broken out in the wilderness,’ the fountain of the saving bath of divine regeneration. And now she, who a little before was a desert, ‘has become watered meadows. and springs of water have gushed forth in a thirsty land.’ The hands which before were ‘weak’ have become ‘truly strong’; and these works are great and convincing proofs of strong hands. The knees, also, which before were ‘feeble and infirm,’ recovering their wonted strength, are moving straight forward in the path of divine knowledge, and hastening to the kindred flock of the all-gracious Shepherd.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 35),
      ' And if there are any whose souls have been stupefied by the threats of the tyrants, not even they are passed by as incurable by the saving Word; but he heals them also and urges them on to receive divine comfort, saying, ‘Be ye comforted, ye who are faint-hearted; be ye strengthened, fear not.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 36),
      ' This our new and excellent Zerubabel, having heard the word which announced beforehand, that she who had been made a desert on account of God should enjoy these things, after the bitter captivity and the abomination of desolation, did not overlook the dead body; but first of all with prayers and supplications propitiated the Father with the common consent of all of you, and invoking the only one that giveth life to the dead as his ally and fellow-worker, raised her that was fallen, after purifying and freeing her from her ills. And he clothed her not with the ancient garment, but with such an one as he had again learned from the sacred oracles, which say clearly, ‘And the latter glory of this house shall be greater than the former.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 37),
      ' Thus, enclosing a much larger space, he fortified the outer court with a wall surrounding the whole, which should serve as a most secure bulwark for the entire edifice.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 38),
      ' And he raised and spread out a great and lofty vestibule toward the rays of the rising sun, and furnished those standing far without the sacred enclosure a full view of those within, almost turning the eyes of those who were strangers to the faith, to the entrances, so that no one could pass by without being impressed by the memory of the former desolation and of the present incredible transformation. His hope was that such an one being impressed by this might be attracted and be induced to enter by the very sight.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 39),
      ' But when one comes within the gates he does not permit him to enter the sanctuary immediately, with impure and unwashed feet; but leaving as large a space as possible between the temple and the outer entrance, he has surrounded and adorned it with four transverse cloisters, making a quadrangular space with pillars rising on every side, which he has joined with lattice-work screens of wood, rising to a suitable height; and he has left an open space in the middle, so that the sky can be seen, and the free air bright in the rays of the sun.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 40),
      ' Here he has placed symbols of sacred purifications, setting up fountains opposite the temple which furnish an abundance of water wherewith those who come within the sanctuary may purify themselves. This is the first halting-place of those who enter; and it furnishes at the same time a beautiful and splendid scene to every one, and to those who still need elementary instruction a fitting station.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 41),
      ' But passing by this spectacle, he has made open entrances to the temple with many other vestibules within, placing three doors on one side, likewise facing the rays of the sun. The one in the middle, adorned with plates of bronze, iron bound, and beautifully embossed, he has made much higher and broader than the others, as if he were making them guards for it as for a queen.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 42),
      ' In the same way, arranging the number of vestibules for the corridors on each side of the whole temple, he has made above them various openings into the building, for the purpose of admitting more light, adorning them with very fine wood-carving. But the royal house he has furnished with more beautiful and splendid materials, using unstinted liberality in his disbursements.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 43),
      ' It seems to me superfluous to describe here in detail the length and breadth of the building, its splendor and its majesty surpassing description, and the brilliant appearance of the work, its lofty pinnacles reaching to the heavens, and the costly cedars of Lebanon above them, which the divine oracle has not omitted to mention, saying, ‘The trees of the Lord shall rejoice and the cedars of Lebanon which he hath planted.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 44),
      ' Why need I now describe the skillful architectural arrangement and the surpassing beauty of each part, when the testimony of the eye renders instruction through the ear superfluous? For when he had thus completed the temple, he provided it with lofty thrones in honor of those who preside, and in addition with seats arranged in proper order throughout the whole building, and finally placed in the middle the holy of holies, the altar, and, that it might be inaccessible to the multitude, enclosed it with wooden lattice-work, accurately wrought with artistic carving, presenting a wonderful sight to the beholders.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 45),
      ' And not even the pavement was neglected by him; for this too he adorned with beautiful marble of every variety. Then finally he passed on to the parts without the temple, providing spacious exedræ and buildings on each side, which were joined to the basilica, and communicated with the entrances to the interior of the structure. These were erected by our most peaceful Solomon, the maker of the temple of God, for those who still needed purification and sprinkling by water and the Holy Spirit, so that the prophecy quoted above is no longer a word merely, but a fact; for now it has also come to pass that in truth ‘the biter glory of this house is greater than the former.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 46),
      ' For it was necessary and fitting that as her shepherd and Lord had once tasted death for her, and after his suffering had changed that vile body which he assumed in her behalf into a splendid and glorious body, leading the very flesh which had been delivered from corruption to incorruption, she too should enjoy the dispensations of the Saviour. For having received from him the promise of much greater things than these, she desires to share uninterruptedly throughout eternity with the choir of the angels of light, in the far greater glory of regeneration, in the resurrection of an incorruptible body, in the palace of God beyond the heavens, with Christ Jesus himself, the universal Benefactor and Saviour.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 47),
      ' But for the present, she that was formerly widowed and desolate is clothed by the grace of God with these flowers, and is become truly like a lily, as the prophecy says, and having received the bridal garment and the crown of beauty, she is taught by Isaiah to dance, and to present her thank-offerings unto God the King in reverent words.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 48),
      ' Let us hear her saying, ‘My soul shall rejoice in the Lord; for he hath clothed me with a garment of salvation and with a robe of gladness; he hath bedecked me like a bridegroom with a garland, and he hath adorned me like a bride with jewels; and like the earth which bringeth forth her bud, and like a garden which causeth the things that are sown in it to spring forth, thus the Lord God hath caused righteousness and praise to spring forth before all the nations.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 49),
      ' In these words she exults. And in similar words the heavenly bridegroom, the Word Jesus Christ himself, answers her. Hear the Lord saying, ‘Fear not because thou hast been put to shame, neither be thou confounded because thou hast been rebuked; for thou shalt forget the former shame, and the reproach of thy widowhood shalt thou remember no more.’ ‘Not as a woman deserted and faint-hearted hath the Lord called thee, nor as a woman hated from her youth, saith thy God. For a small moment have I forsaken thee, but with great mercy will I have mercy upon thee; in a little wrath I hid my face from thee, but with everlasting mercy will I have mercy upon thee, saith the Lord that hath redeemed thee.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 50),
      ' ‘Awake, awake, thou who hast drunk at the hand of the Lord the cup of his fury; for thou hast drunk the cup of ruin, the vessel of my wrath, and hast drained it. And there was none to console thee of all thy sons whom thou didst bring forth, and there was none to take thee by the hand.’ ‘Behold, I have taken out of thine hand the cup of ruin, the vessel of my fury, and thou shalt no longer drink it. And I will put it into the hands of them that have treated thee unjustly and have humbled thee.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 51),
      ' ‘Awake, awake, put on thy strength, put on thy glory. Shake off the dust and arise. Sit thee down, loose the bands of thy neck.’ ‘Lift up thine eyes round about and behold thy children gathered together; behold they are gathered together and are come to thee. As I live, saith the Lord, thou shalt clothe thee with them all as with an ornament, and gird thyself with them as with the ornaments of a bride. For thy waste and corrupted and ruined places shall now be too narrow by reason of those that inhabit thee, and they that swallow thee up shall be far from thee.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 52),
      ' For thy sons whom thou hast lost shall say in thine ears, The place is too narrow for me, give place to me that I may dwell. Then shalt thou say in thine heart, Who hath begotten me these? I am childless and a widow, and who hath brought up these for me? I was left alone, and these, where were they for me?’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 53),
      ' “These are the things which Isaiah foretold; and which were anciently recorded concerning us in sacred books; and it was necessary that we should sometime learn their truthfulness by their fulfillment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 54),
      ' For when the bridegroom, the Word, addressed such language to his own bride, the sacred and holy Church, this bridesman—when she was desolate and lying like a corpse, bereft of hope in the eyes of men—in accordance with the united prayers of all of you, as was proper, stretched out your hands and aroused and raised her up at the command of God, the universal King, and at the manifestation of the power of Jesus Christ; and having raised her he established her as he had learned from the description given in the sacred oracles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 55),
      ' This is indeed a very great wonder, passing all admiration, especially to those who attend only to the outward appearance; but more wonderful than wonders are the archetypes and their mental prototypes and divine models; I mean the reproductions of the inspired and rational building in our souls.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 56),
      ' This the Divine Son himself created after his own image, imparting to it everywhere and in all respects the likeness of God, an incorruptible nature, incorporeal, rational, free from all earthly matter, a being endowed with its own intelligence; and when he had once called her forth from non-existence into existence, he made her a holy spouse, an all-sacred temple for himself and for the Father. This also he clearly declares and confesses in the following words: ‘I will dwell in them and will walk in them; and I will be their God, and they shall be my people.’ Such is the perfect and purified soul, so made from the beginning as to bear the image of the celestial Word.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 57),
      ' But when by the envy and zeal of the malignant demon she became, of her own voluntary choice, sensual and a lover of evil, the Deity left her; and as if bereft of a protector, she became an easy prey and readily accessible to those who had long envied her; and being assailed by the batteries and machines of her invisible enemies and spiritual foes, she suffered a terrible fall, so that not one stone of virtue remained upon another in her, but she lay completely dead upon the ground, entirely divested of her natural ideas of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 58),
      ' “But as she, who had been made in the image of God, thus lay prostrate, it was not that wild boar from the forest which we see that despoiled her, but a certain destroying demon and spiritual wild beasts who deceived her with their passions as with the fiery darts of their own wickedness, and burned the truly divine sanctuary of God with fire, and profaned to the ground the tabernacle of his name. Then burying the miserable one with heaps of earth, they destroyed every hope of deliverance.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 59),
      ' But that divinely bright and saving Word, her protector, after she had suffered the merited punishment for her sins, again restored her, securing the favor of the all-merciful Father.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 60),
      ' Having won over first the souls of the highest rulers, he purified, through the agency of those most divinely favored princes, the whole earth from all the impious destroyers, and from the terrible and God-hating tyrants themselves. Then bringing out into the light those who were his friends, who had long before been consecrated to him for life, but in the midst, as it were, of a storm of evils, had been concealed under his shelter, he honored them worthily with the great gifts of the Spirit. And again, by means of them, he cleared out and cleaned with spades and mattocks—the admonitory words of doctrine—the souls which a little while before had been covered with filth and burdened with every kind of matter and rubbish of impious ordinances.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 61),
      ' And when he had made the ground of all your minds clean and clear, he finally committed it to this all-wise and God-beloved Ruler, who, being endowed with judgment and prudence, as well as with other gifts, and being able to examine and discriminate accurately the minds of those committed to his charge, from the first day, so to speak, down to the present, has not ceased to build. Now he has supplied the brilliant gold, again the refined and unalloyed silver, and the precious and costly stones in all of you, so that again is fulfilled for you in facts a sacred and mystic prophecy, which says,',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 62),
      ' ‘Behold I make thy stone a carbuncle, and thy foundations of sapphire, and thy battlements of jasper, and thy gates of crystals, and thy wall of chosen stones; and all thy sons shall be taught of God, and thy children shall enjoy complete peace; and in righteousness shall thou be built.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 63),
      ' Building therefore in righteousness, be divided the whole people according to their strength. With some he fortified only the outer enclosure, walling it up with unfeigned faith; such were the great mass of the people who were incapable of bearing a greater structure. Others he permitted to enter the building, commanding them to stand at the door and act as guides for those who should come in; these may be not unfitly compared to the vestibules of the temple. Others he supported by the first pillars which are placed without about the quadrangular hall, initiating them into the first elements of the letter of the four Gospels. Still others he joined together about the basilica on both sides; these are the catechumens who are still advancing and progressing, and are not far separated from the inmost view of divine things granted to the faithful.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 64),
      ' Taking from among these the pure souls that have been cleansed like gold by divine washing, he then supports them by pillars, much better than those without, made from the inner and mystic teachings of the Scripture, and illumines them by windows.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 65),
      ' Adorning the whole temple with a great vestibule of the glory of the one universal King and only God, and placing on either side of the authority of the Father Christ, and the Holy Spirit as second lights, he exhibits abundantly and gloriously throughout the entire building the clearness and splendor of the truth of the rest in all its details. And having selected from every quarter the living and moving and well-prepared stones of the souls, he constructs out of them all the great and royal house, splendid and full of light both within and without; for not only soul and understanding, but their body also is made glorious by the blooming ornament of purity and modesty.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 66),
      ' And in this temple there are also thrones, and a great number of seats and benches, in all those souls in which sit the Holy Spirit’s gifts, such as were anciently seen by the sacred apostles, and those who were with them, when there ‘appeared unto them tongues parting asunder, like as of fire, and sat upon each one of them.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 67),
      ' But in the leader of all it is reasonable to suppose that Christ himself dwells in his fullness, and in those that occupy the second rank after him, in proportion as each is able to contain the power of Christ and of the Holy Spirit. And the souls of some—of those, namely, who are committed to each of them for instruction and care—may be seats for angels.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 68),
      ' But the great and august and unique altar, what else could this be than the pure holy of holies of the soul of the common priest of all? Standing at the right of it, Jesus himself, the great High Priest of the universe, the Only Begotten of God, receives with bright eye and extended hand the sweet incense from all, and the bloodless and immaterial sacrifices offered in their prayers, and bears them to the heavenly Father and God of the universe. And he himself first worships him, and alone gives to the Father the reverence which is his due, beseeching him also to continue always kind and propitious to us all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 69),
      ' “Such is the great temple which the great Creator of the universe, the Word, has built throughout the entire world, making it an intellectual image upon earth of those things which lie above the vault of heaven, so that throughout the whole creation, including rational beings on earth, his Father might be honored and adored.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 70),
      ' But the region above the heavens, with the models of earthly things which are there, and the so-called Jerusalem above, and the heavenly Mount of Zion, and the supramundane city of the living God, in which innumerable choirs of angels and the Church of the first born, whose names are written in heaven, praise their Maker and the Supreme Ruler of the universe with hymns of praise unutterable and incomprehensible to us—who that is mortal is able worthily to celebrate this? ‘For eye hath not seen nor ear heard, neither have entered into the heart of men those things which God hath prepared for them that love him.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 71),
      ' Since we, men, children, and women, small and great, are already in part partakers of these things, let us not cease all together, with one spirit and one soul, to confess and praise the author of such great benefits to us, ‘Who for-giveth all our iniquities, who healeth all our diseases, who redeemeth our life from destruction, who crowneth us with mercy and compassion, who satisfieth our desires with good things.’ ‘For he hath not dealt with us according to our sins, nor rewarded us according to our iniquities;’ ‘for as far as the east is from the west, so far hath he removed our iniquities from us. Like as a father pitieth his own children, so the Lord pitieth them that fear him.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 72),
      ' Rekindling these thoughts in our memories, both now and during all time to come, and contemplating in our mind night and day, in every hour and with every breath, so to speak, the Author and Ruler of the present festival, and of this bright and most splendid day, let us love and adore him with every power of the soul. And now rising, let us beseech him with loud voice to shelter and preserve us to the end in his fold, granting his unbroken and unshaken peace forever, in Christ Jesus our Saviour; through whom be the glory unto him forever and ever. Amen.”',
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
      ' Let us finally subjoin the translations from the Roman tongue of the imperial decrees of Constantine and Licinius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Copy of imperial decrees translated from the Roman tongue. “Perceiving long ago that religious liberty ought not to be denied, but that it ought to be granted to the judgment and desire of each individual to perform his religious duties according to his own choice, we had given orders that every man, Christians as well as others, should preserve the faith of his own sect and religion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But since in that rescript, in which such liberty was granted them, many and various conditions seemed clearly added, some of them, it may be, after a little retired from such observance.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' When I, Constantine Augustus, and I, Licinius Augustus, came under favorable auspices to Milan and took under consideration everything which pertained to the common weal and prosperity, we resolved among other things, or rather first of all, to make such decrees as seemed in many respects for the benefit of every one; namely, such as should preserve reverence and piety toward the deity. We resolved, that is, to grant both to the Christians and to all men freedom to follow the religion which they choose, that whatever heavenly divinity exists may be propitious to us and to all that live under our government.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' We have, therefore, determined, with sound and upright purpose, that liberty is to be denied to no one, to choose and to follow the religious observances of the Christians, but that to each one freedom is to be given to devote his mind to that religion which he may think adapted to himself, in order that the Deity may exhibit to us in all things his accustomed care and favor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' It was fitting that we should write that this is our pleasure, that those conditions being entirely left out which were contained in our former letter concerning the Christians which was sent to your devotedness, everything that seemed very severe and foreign to our mildness may be annulled, and that now every one who has the same desire to observe the religion of the Christians may do so without molestation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' We have resolved to communicate this most fully to thy care, in order that thou mayest know that we have granted to these same Christians freedom and full liberty to observe their own religion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Since this has been granted freely by us to them, thy devotedness perceives that liberty is granted to others also who may wish to follow their own religious observances; it being clearly in accordance with the tranquillity of our times, that each one should have the liberty of choosing and worshiping whatever deity he pleases. This has been done by us in order that we might not seem in any way to discriminate against any rank or religion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And we decree still further in regard to the Christians, that their places, in which they were formerly accustomed to assemble, and concerning which in the former letter sent to thy devotedness a different command was given, if it appear that any have bought them either from our treasury or from any other person, shall be restored to the said Christians, without demanding money or any other equivalent, with no delay or hesitation.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' If any happen to have received the said places as a gift, they shall restore them as quickly as possible to these same Christians: with the understanding that if those who have bought these places, or those who have received them as a gift, demand anything from our bounty, they may go to the judge of the district, that provision may be made for them by our clemency. All these things are to be granted to the society of Christians by your care immediately and without any delay.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And since the said Christians are known to have possessed not only those places in which they were accustomed to assemble, but also other places, belonging not to individuals among them, but to the society as a whole, that is, to the society of Christians, you will command that all these, in virtue of the law which we have above stated, be restored, without any hesitation, to these same Christians; that is, to their society and congregation: the above-mentioned provision being of course observed, that those who restore them without price, as we have before said, may expect indemnification from our bounty.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' In all these things, for the behoof of the aforesaid society of Christians, you are to use the utmost diligence, to the end that our command may be speedily fulfilled, and that in this also, by our clemency, provision may be made for the common and public tranquillity.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' For by this means, as we have said before, the divine favor toward us which we have already experienced in many matters will continue sure through all time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And that the terms of this our gracious ordinance may be known to all, it is expected that this which we have written will be published everywhere by you and brought to the knowledge of all, in order that this gracious ordinance of ours may remain unknown to no one.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' Copy of another imperial decree which they issued, indicating that the grant was made to the Catholic Church alone. “Greeting to thee, our most esteemed Anulinus. It is the custom of our benevolence, most esteemed Anulinus, to will that those things which belong of right to another should not only be left unmolested, but should also be restored.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' Wherefore it is our will that when thou receivest this letter, if any such things belonged to the Catholic Church of the-Christians, in any city or other place, but are now held by citizens or by any others, thou shalt cause them to be restored immediately to the said churches. For we have already determined that those things which these same. churches formerly possessed shall be restored to them.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' Since therefore thy devotedness perceives that this command of ours is most explicit, do thou make haste to restore to them, as quickly as possible, everything which formerly belonged to the said churches,—whether gardens or buildings or whatever they may be—that we may learn that thou hast obeyed this decree of ours most carefully. Farewell, our most esteemed and beloved Anulinus.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' Copy of an epistle in which the Emperor commands that a synod of bishops be held at Rome in behalf of the unity and concord of the churches. “Constantine Augustus to Miltiades, bishop of Rome, and to Marcus. Since many such communications have been sent to me by Anulinus, the most illustrious proconsul of Africa, in which it is said that Cæcilianus, bishop of the city of Carthage, has been accused by some of his colleagues in Africa, in many matters; and since it seems to me a very serious thing that in those provinces which Divine Providence has freely entrusted to my devotedness, and in which there is a great population, the multitude are found following the baser course, and dividing, as it were, into two parties, and the bishops are at variance—',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' it has seemed good to me that Cæcilianus himself, with ten of the bishops that appear to accuse him, and with ten others whom he may consider necessary for his defense, should sail to Rome, that there, in the presence of yourselves and of Retecius and Maternus and Marinus, your colleagues, whom I have commanded to hasten to Rome for this purpose, he may be heard, as you may understand to be in accordance with the most holy law.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' But in order that you may be enabled to have most perfect knowledge of all these things, I have subjoined to my letter copies of the documents sent to me by Anulinus, and have sent them to your above-mentioned colleagues. When your firmness has read these, you will consider in what way the above-mentioned case may be most accurately investigated and justly decided. For it does not escape your diligence that I have such reverence for the legitimate Catholic Church that I do not wish you to leave schism or division in any place. May the divinity of the great God preserve you, most honored sirs, for many years.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' Copy of an epistle in which the emperor commands another synod to be held for the purpose of removing all dissensions among the bishops. “Constantine Augustus to Chrestus, bishop of Syracuse. When some began wickedly and perversely to disagree among themselves in regard to the holy worship and celestial power and Catholic doctrine, wishing to put an end to such disputes among them, I formerly gave command that certain bishops should be sent from Gaul, and that the opposing parties who were contending persistently and incessantly with each other, should be summoned from Africa; that in their presence, and in the presence of the bishop of Rome, the matter which appeared to be causing the disturbance might be examined and decided with all care.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' But since, as it happens, some, forgetful both of their own salvation and of the reverence due to the most holy religion, do not even yet bring hostilities to an end, and are unwilling to conform to the judgment already passed, and assert that those who expressed their opinions and decisions were few, or that they had been too hasty and precipitate in giving judgment, before all the things which ought to have been accurately investigated had been examined—on account of all this it has happened that those very ones who ought to hold brotherly and harmonious relations toward each other, are shamefully, or rather abominably, divided among themselves, and give occasion for ridicule to those men whose souls are aliens to this most holy religion. Wherefore it has seemed necessary to me to provide that this dissension, which ought to have ceased after the judgment had been already given by their own voluntary agreement, should now, if possible, be brought to an end by the presence of many.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' Since, therefore, we have commanded a number of bishops from a great many different places to assemble in the city of Arles, before the kalends of August, we have thought proper to write to thee also that thou shouldst secure from the most illustrious La-tronianus, corrector of Sicily, a public vehicle, and that thou shouldst take with thee two others of the second rank whom thou thyself shalt choose, together with three servants who may serve you on the way, and betake thyself to the above-mentioned place before the appointed day;',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 24),
      ' that by thy firmness, and by the wise unanimity and harmony of the others present, this dispute, which has disgracefully continued until the present time, in consequence of certain shameful strifes, after all has been heard which those have to say who are now at variance with one another, and whom we have likewise commanded to be present, may be settled in accordance with the proper faith, and that brotherly harmony, though it be but gradually, may be restored. May the Almighty God preserve thee in health for many years.”',
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
      ' “Constantine Augustus to Cæcilianus, bishop of Carthage. Since it is our pleasure that something should be granted in all the provinces of Africa and Numidia and Mauritania to certain ministers of the legitimate and most holy catholic religion, to defray their expenses, I have written to Ursus, the illustrious finance minister of Africa, and have directed him to make provision to pay to thy firmness three thousand folles.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Do thou therefore, when thou hast received the above sum of money, command that it be distributed among all those mentioned above, according to the briefs sent to thee by Hosius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But if thou shouldst find that anything is wanting for the fulfillment of this purpose of mine in regard to all of them, thou shalt demand without hesitation from Heracleides, our treasurer, whatever thou findest to be necessary. For I commanded him when he was present that if thy firmness should ask him for any money, he should see to it that it be paid without delay.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And since I have learned that some men of unsettled mind wish to turn the people from the most holy and catholic Church by a certain method of shameful corruption, do thou know that I gave command to Anulinus, the proconsul, and also to Patricius, vicar of the prefects, when they were present, that they should give proper attention not only to other matters but also above all to this, and that they should not overlook such a thing when it happened.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Wherefore if thou shouldst see any such men continuing in this madness, do thou without delay go to the above-mentioned judges and report the matter to them; that they may correct them as I commanded them when they were present. The divinity of the great God preserve thee for many years.”',
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
      ' Copy of an epistle in which the emperor commands that the rulers of the churches be exempted from all political duties. “Greeting to thee, our most esteemed Anulinus. Since it appears from many circumstances that when that religion is despised, in which is preserved the chief reverence for the most holy celestial Power, great dangers are brought upon public affairs; but that when legally adopted and observed it affords the most signal prosperity to the Roman name and remarkable felicity to all the affairs of men, through the divine beneficence—it has seemed good to me, most esteemed Anulinus, that those men who give their services with due sanctity and with constant observance of this law, to the worship of the divine religion, should receive recompense for their labors.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Wherefore it is my will that those within the province entrusted to thee, in the catholic Church, over which Cæcilianus presides, who give their services to this holy religion, and who are commonly called clergymen, be entirely exempted from all public duties, that they may not by any error or sacrilegious negligence be drawn away from the service due to the Deity, but may devote themselves without any hindrance to their own law. For it seems that when they show greatest reverence to the Deity, the greatest benefits accrue to the state. Farewell, our most esteemed and beloved Anulinus.”',
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
      ' Such blessings did divine and heavenly grace confer upon us through the appearance of our Saviour, and such was the abundance of benefits which prevailed among all men in consequence of the peace which we enjoyed. And thus were our affairs crowned with rejoicings and festivities.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But malignant envy, and the demon who loves that which is evil, were not able to bear the sight of these things; and moreover the events that befell the tyrants whom we have already mentioned were not sufficient to bring Licinius to sound reason.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For the latter, although his government was prosperous and he was honored with the second rank after the great Emperor Constantine, and was connected with him by the closest ties of marriage, abandoned the imitation of good deeds, and emulated the wickedness of the impious tyrants whose end he had seen with his own eyes, and chose rather to follow their principles than to continue in friendly relations with him who was better than they. Being envious of the common benefactor he waged an impious and most terrible war against him, paying regard neither to laws of nature, nor treaties, nor blood, and giving no thought to covenants.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For Constantine, like an all-gracious emperor, giving him evidences of true favor, did not refuse alliance with him, and did not refuse him the illustrious marriage with his sister, but honored him by making him a partaker of the ancestral nobility and the ancient imperial blood, and granted him the right of sharing in the dominion over all as a brother-in-law and co-regent, conferring upon him the government and administration of no less a portion of the Roman provinces than he himself possessed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But Licinius, on the contrary, pursued a course directly opposite to this; forming daily all kinds of plots against his superior, and devising all sorts of mischief, that he might repay his benefactor with evils. At first he attempted to conceal his preparations, and pretended to be a friend, and practiced frequently fraud and deceit, in the hope that he might easily accomplish the desired end.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But God was the friend, protector, and guardian of Constantine, and bringing the plots which had been formed in secrecy and darkness to the light, he foiled them. So much virtue does the great armor of piety possess for the warding off of enemies and for the preservation of our own safety. Protected by this, our most divinely favored emperor escaped the multitudinous plots of the abominable man.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But when Licinius perceived that his secret preparations by no means progressed according to his mind—for God revealed every plot and wickedness to the God-favored emperor—being no longer able to conceal himself, he undertook an open war.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And at the same time that he determined to wage war with Constantine, he also proceeded to join battle with the God of the universe, whom he knew that Constantine worshiped, and began, gently for a time and quietly, to attack his pious subjects, who had never done his government any harm. This he did under the compulsion of his innate wickedness which drove him into terrible blindness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' He did not therefore keep before his eyes the memory of those who had persecuted the Christians before him, nor of those whose destroyer and executioner he had been appointed, on account of the impieties which they had committed. But departing from sound reason, being seized, in a word, with insanity, he determined to war against God himself as the ally of Constantine, instead of against the one who was assisted by him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And in the first place, he drove from his house every Christian, thus depriving himself, wretched man, of the prayers which they offered to God in his behalf, which they are accustomed, according to the teaching of their fathers, to offer for all men. Then he commanded that the soldiers in the cities should be cashiered and stripped of their rank unless they chose to sacrifice to the demons. And yet these were small matters when compared with the greater things that followed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' Why is it necessary to relate minutely and in detail all that was done by the hater of God, and to recount how this most lawless man invented unlawful laws? He passed an ordinance that no one should exercise humanity toward the sufferers in prison by giving them food, and that none should show mercy to those that were perishing of hunger in bonds; that no one should in any way be kind, or do any good act, even though moved by Nature herself to sympathize with one’s neighbors. And this was indeed an openly shameful and most cruel law, calculated to expel all natural kindliness. And in addition to this it was also decreed, as a punishment, that those who showed compassion should suffer the same things with those whom they compassionated; and that those who kindly ministered to the suffering should be thrown into bonds and into prison, and should endure the same punishment with the sufferers. Such were the decrees of Licinius.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Why should we recount his innovations in regard to marriage or in regard to the dying—innovations by which he ventured to annul the ancient laws of the Romans which had been well and wisely formed, and to introduce certain barbarous and cruel laws, which were truly unlawful and lawless? He invented, to the detriment of the provinces which were subject to him, innumerable prosecutions, and all sorts of methods of extorting gold and silver. new measurements of land and injurious exactions from men in the country, who were no longer living, but long since dead.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Why is it necessary to speak at length of the banishments which, in addition to these things, this enemy of mankind inflicted upon those who had done no wrong, the expatriations of men of noble birth and high reputation whose young wives he snatched from them and consigned to certain baser fellows of his own, to be shamefully abused by them, and the many married women and virgins upon whom he gratified his passions, although he was in advanced age—why, I say, is it necessary to speak at length of these things, when the excessive wickedness of his last deeds makes the first appear small and of no account?',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' For, finally, he reached such a pitch of madness that he attacked the bishops, supposing that they—as servants of the God over all—would be hostile to his measures. He did not yet proceed against them openly, on account of his fear of his superior, but as before, secretly and craftily, employing the treachery of the governors for the destruction of the most distinguished of them. And the manner of their murder was strange, and such as had never before been heard of.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' The deeds which he performed at Amaseia and in the other cities of Pontus surpassed every excess of cruelty. Some of the churches of God were again razed to the ground, others were closed, so that none of those accustomed to frequent them could enter them and render the worship due to God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' For his evil conscience led him to suppose that prayers were not offered in his behalf; but he was persuaded that we did everything in the interest of the God-beloved emperor, and that we supplicated God for him. Therefore he hastened to turn his fury against us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' And then those among the governors who wished to flatter him, perceiving that in doing such things they pleased the impious tyrant, made some of the bishops suffer the penalties customarily inflicted upon criminals, and led away and without any pretext punished like murderers those who had done no wrong. Some now endured a new form of death: having their bodies cut into many pieces with the sword, and after this savage and most horrible spectacle, being thrown into the depths of the sea as food for fishes.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' Thereupon the worshipers of God again fled, and fields and deserts, forests and mountains, again received the servants of Christ. And when the impious tyrant had thus met with success in these measures, he finally planned to renew the persecution against all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' And he would have succeeded in his design, and there would have been nothing to hinder him in the work, had not God, the defender of the lives of his own people, most quickly anticipated that which was about to happen, and caused a great light to shine forth as in the midst of a dark and gloomy night, and raised up a deliverer for leading into those regions with a lofty arm, his servant, Constantine.',
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
      ' To him, therefore, God granted, from heaven above, the deserved fruit of piety, the trophies of victory over the impious, and he cast the guilty one with all his counselors and friends prostrate at the feet of Constantine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For when Licinius carried his madness to the last extreme, the emperor, the friend of God, thinking that he ought no longer to be tolerated, acting upon the basis of sound judgment, and mingling the firm principles of justice with humanity, gladly determined to come to the protection of those who were oppressed by the tyrant, and undertook, by putting a few destroyers out of the way, to save the greater part of the human race.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For when he had formerly exercised humanity alone and had shown mercy to him who was not worthy of sympathy, nothing was accomplished; for Licinius did not renounce his wickedness, but rather increased his fury against the peoples that were subject to him, and there was left to the afflicted no hope of salvation, oppressed as they were by a savage beast.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Wherefore, the protector of the virtuous, mingling hatred for evil with love for good, went forth with his son Crispus, a most beneficent prince, and extended a saving right hand to all that were perishing. Both of them, father and son, under the protection, as it were, of God, the universal King, with the Son of God, the Saviour of all, as their leader and ally, drew up their forces on all sides against the enemies of the Deity and won an easy victory; God having prospered them in the battle in all respects according to their wish.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Thus, suddenly, and sooner than can be told, those who yesterday and the day before breathed death and threatening were no more, and not even their names were remembered, but their inscriptions and their honors suffered the merited disgrace. And the things which Licinius with his own eyes had seen come upon the former impious tyrants he himself likewise suffered, because he did not receive instruction nor learn wisdom from the chastisements of his neighbors, but followed the same path of impiety which they had trod, and was justly hurled over the same precipice.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Thus he lay prostrate. But Constantine, the mightiest victor, adorned with every virtue of piety, together with his son Crispus, a most God-beloved prince, and in all respects like his father, recovered the East which belonged to them; and they formed one united Roman empire as of old, bringing under their peaceful sway the whole world from the rising of the sun to the opposite quarter, both north and south, even to the extremities of the declining day.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' All fear therefore of those who had formerly afflicted them was taken away from men, and they celebrated splendid and festive days. Everything was filled with light, and those who before were downcast beheld each other with smiling faces and beaming eyes. With dances and hymns, in city and country, they glorified first of all God the universal King, because they had been thus taught, and then the pious emperor with his God-beloved children.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' There was oblivion of past evils and forgetfulness of every deed of impiety; there was enjoyment of present benefits and expectation of those yet to come. Edicts full of clemency and laws containing tokens of benevolence and true piety were issued in every place by the victorious emperor.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Thus after all tyranny had been purged away, the empire which belonged to them was preserved firm and without a rival for Constantine and his sons alone. And having obliterated the godlessness of their predecessors, recognizing the benefits conferred upon them by God, they exhibited their love of virtue and their love of God, and their piety and gratitude to the Deity, by the deeds which they performed in the sight of all men.',
    ),

    new BS_Lead(
      null,
      'THE END',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
