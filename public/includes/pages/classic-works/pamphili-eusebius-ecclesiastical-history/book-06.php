<?php
$html->add(new BS_Banner(
  null,

  'Book six of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“Ecclesiastical History” (a.k.a., “Church History”) by Pamphili Eusebius'
  ),
  ', covering Origen, his influence, and leading to martyrdom'
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
      ' When Severus began to persecute the churches, glorious testimonies were given everywhere by the athletes of religion. This was especially the case in Alexandria, to which city, as to a most prominent theater, athletes of God were brought from Egypt and all Thebais according to their merit, and won crowns from God through their great patience under many tortures and every mode of death. Among these was Leonides, who was called the father of Origen, and who was beheaded while his son was still young. How remarkable the predilection of this son was for the Divine Word, in consequence of his father’s instruction, it will not be amiss to state briefly, as his fame has been very greatly celebrated by many.',
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
      ' Many things might be said in attempting to describe the life of the man while in school; but this subject alone would require a separate treatise. Nevertheless, for the present, abridging most things, we shall state a few facts concerning him as briefly as possible, gathering them from certain letters, and from the statement of persons still living who were acquainted with him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' What they report of Origen seems to me worthy of mention, even, so to speak, from his swathing-bands. It was the tenth year of the reign of Severus, while Lætus was governor of Alexandria and the rest of Egypt, and Demetrius had lately received the episcopate of the parishes there, as successor of Julian.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' As the flame of persecution had been kindled greatly, and multitudes had gained the crown of martyrdom, such desire for martyrdom seized the soul of Origen, although yet a boy, that he went close to danger, springing forward and rushing to the conflict in his eagerness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And truly the termination of his life had been very near had not the divine and heavenly Providence, for the benefit of many, prevented his desire through the agency of his mother.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' For, at first, entreating him, she begged him to have compassion on her motherly feelings toward him; but finding, that when he had learned that his father had been seized and imprisoned, he was set the more resolutely, and completely carried away with his zeal for martyrdom, she hid all his clothing, and thus compelled him to remain at home.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But, as there was nothing else that he could do, and his zeal beyond his age would not suffer him to be quiet, he sent to his father an encouraging letter on martyrdom, in which he exhorted him, saying, “Take heed not to change your mind on our account.” This may be recorded as the first evidence of Origen’s youthful wisdom and of his genuine love for piety.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' For even then he had stored up no small resources in the words of the faith, having been trained in the Divine Scriptures from childhood. And he had not studied them with indifference, for his father, besides giving him the usual liberal education, had made them a matter of no secondary importance.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' First of all, before inducting him into the Greek sciences, he drilled him in sacred studies, requiring him to learn and recite every day.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Nor was this irksome to the boy, but he was eager and diligent in these studies. And he was not satisfied with learning what was simple and obvious in the sacred words, but sought for something more, and even at that age busied himself with deeper speculations. So that he puzzled his father with inquiries for the true meaning of the inspired Scriptures.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' And his father rebuked him seemingly to his face, telling him not to search beyond his age, or further than the manifest meaning. But by himself he rejoiced greatly and thanked God, the author of all good, that he had deemed him worthy to be the father of such a child.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And they say that often, standing by the boy when asleep, he uncovered his breast as if the Divine Spirit were enshrined within it, and kisses it reverently; considering himself blessed in his goodly offspring. These and other things like them are related to Origen when a boy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But when his father ended his life in martyrdom, he was left with his mother and six younger brothers when he was not quite seventeen years old.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And the poverty of his father being confiscated to the royal treasury, he and his family were in want of the necessaries of life. But he was deemed worthy of Divine care. And he found welcome and rest with a woman of great wealth, and distinguished in her manner of life and in other respects. She was treating with great honor a famous heretic then in Alexandria; who, however, was born in Antioch. He was with her as an adopted son, and she treated him with the greatest kindness.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But although Origen was under the necessity of associating with him, he nevertheless gave from this time on strong evidences of his orthodoxy in the faith. For when on account of the apparent skill in argument of Paul—for this was the man’s name—a great multitude came to him, not only of heretics but also of our people, Origen could never be induced to join with him in prayer; for he held, although a boy, the rule of the Church, and abominated, as he somewhere expresses it, heretical teachings. Having been instructed in the sciences of the Greeks by his father, he devoted him after his death more assiduously and exclusively to the study of literature, so that he obtained considerable preparation in philology ad was able not long after the death of his father, by devoting himself to that subject, to earn a compensation amply sufficient for his needs at his age.',
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
      ' But while he was lecturing in the school, as he tells us himself, and there was no one at Alexandria to give instruction in the faith, as all were driven away by the threat of persecution, some of the heathen came to him to hear the word of God.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The first of them, he says, was Plutarch, who after living well, was honored with divine martyrdom. The second was Heraclas, a brother of Plutarch; who after he too had given with him abundant evidence of a philosophic ad ascetic life, was esteemed worthy to succeed Demetrius in the bishopric of Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He was in his eighteenth year when he took charge of the catechetical school. He was prominent also at this time, during the persecution under Aquila, the governor of Alexandria, when his name became celebrated among the leaders in the faith, through the kindness and goodwill which he manifested toward all the holy martyrs, whether known to him or strangers.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' For not only was he with them while in bonds, and until their final condemnation, but when the holy martyrs were led to death, he was very bold and went with them into danger. So that as he acted bravely, and with great boldness saluted the martyrs with a kiss, oftentimes the heathen multitude round about them became infuriated, and were on the point of rushing upon him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But through the helping hand of God, he escaped absolutely and marvelously. And this same divine and heavenly power, again and again, it is impossible to say how often, on account of his great zeal and boldness for the words of Christ, guarded him when thus endangered. So great was the enmity of the unbelievers toward him, on account of the multitude that were instructed by him in the sacred faith, that they placed bands of soldiers around the house where he abode.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Thus day by day the persecution burned against him, so that the whole city could no longer contain him; but he removed from house to house and was driven in every direction because of the multitude who attended upon the divine instruction which he gave. For his life also exhibited right and admirable conduct according to the practice of genuine philosophy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' For they say that his manner of life was as his doctrine, and his doctrine as his life. Therefore, by the divine Power working with him he aroused a great many to his own zeal.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But when he saw yet more coming to him for instruction, and the catechetical school had been entrusted to him alone by Demetrius, who presided over the church, he considered the teaching of grammatical science inconsistent with training in divine subjects, and forthwith he gave up his grammatical school as unprofitable and a hindrance to sacred learning.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Then, with becoming consideration, that he might not need aid from others, he disposed of whatever valuable books of ancient literature he possessed, being satisfied with receiving from the purchaser four oboli a day. For many years he lived philosophically in this manner, putting away all the incentives of youthful desires. Through the entire day he endured no small amount of discipline; and for the greater part of the night he gave himself to the study of the Divine Scriptures. He restrained himself as much as possible by a most philosophic life; sometimes by the discipline of fasting, again by limited time for sleep. And in his zeal he never lay upon a bed, but upon the ground.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' Most of all, he thought that the words of the Saviour in the Gospel should be observed, in which he exhorts not to have two coats nor to use shoes, nor to occupy oneself with cares for the future.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' With a zeal beyond his age he continued in cold and nakedness; and, going to the very extreme of poverty, he greatly astonished those about him. And indeed he grieved may of his friends who desired to share their possessions with him, on account of the wearisome toil which they saw him enduring in the teaching of divine things.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But he did not relax his perseverance. He is said to have walked for a number of years never wearing a shoe, and, for a great many years, to have abstained from the use of wine, and of all other things beyond his necessary food; so that he was in danger of breaking down and destroying his constitution.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' By giving such evidences of a philosophic life to those who saw him,, he aroused may of his pupils to similar zeal; so that prominent men even of the unbelieving heathen and men that followed learning and philosophy were led to his instruction. Some of them having received from hi into the depth of their souls faith in the Divine Word, became prominent in the persecution then prevailing; and some of them were seized and suffered martyrdom.',
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
      ' The first of these was Plutarch, who was mentioned just above. As he was led to death the man of whom we are speaking being with him at the end of his life, came near being slain by his fellow-citizens, as if he were the cause of his death. But the providence of God preserved him at this time also.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' After Plutarch, the second martyr among the pupils of Origen was Serenus, who gave through fire a proof of the faith which he had received.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The third martyr from the same school was Heraclides, and after him the fourth was Hero. The former of these was as yet a catechumen, and the latter had but recently been baptized. Both of them were beheaded. After them, the fifth from the same school proclaimed as an athlete of piety was another Serenus, who, it is reported, was beheaded, after a long endurance of tortures. And of women, Herais died while yet a catechumen, receiving baptism by fire, as Origen himself somewhere says.',
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
      ' Basilides may be counted the seventh of these. He led to martyrdom the celebrated Potamiæna, who is still famous among the people of the country for the many things which she endured for the preservation of her chastity and virginity. For she was blooming in the perfection of her mind and her physical graces. Having suffered much for the faith of Christ, finally after tortures dreadful and terrible to speak of, she with her mother, Marcella, was put to death by fire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' They say that the judge, Aquila by name, having inflicted severe tortures upon her entire body, at last threatened to hand her over to the gladiators for bodily abuse. After a little consideration, being asked for her decision, she made a reply which was regarded as impious.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Thereupon she received sentence immediately, and Basilides, one of the officers of the army, led her to death. But as the people attempted to annoy and insult her with abusive words, he drove back her insulters, showing her much pity and kindness. And perceiving the man’s sympathy for her, she exhorted him to be of good courage, for she would supplicate her Lord for him after her departure, and he would soon received a reward for the kindness he had shown her.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Having said this, she nobly sustained the issue, burning pitch being poured little by little, over various parts of her body, from the sole of her feet to the crown of her head. Such was the conflict endured by this famous maiden.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Not long after this Basilides, being asked by his fellow-soldiers to swear for a certain reason, declared that it was not lawful for him to swear at all, for he was a Christian, and he confessed this openly. At first they thought that he was jesting, but when he continued to affirm it, he was led to the judge, and, acknowledging his conviction before him, he was imprisoned.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But the brethren in God coming to him and inquiring the reason of this sudden and remarkable resolution, he is reported to have said that Potamiæna, for three days after her martyrdom, stood beside him by night and placed a crown on his head and said that she had besought the Lord for him and had obtained what she asked, and that soon she would take him with her. Thereupon the brethren gave him the seal of the Lord; and on the next day, after giving glorious testimony for the Lord, he was beheaded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' And many others in Alexandria are recorded to have accepted speedily the word of Christ in those times. For Potamiæna appeared to them in their dreams and exhorted them. But let this suffice in regard to this matter.',
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
      ' Clement having succeeded Pantænus, had charge at that time of the catechetical instruction in Alexandria, so that Origen also, while still a boy, was one of his pupils. In the first book of the work called Stromata, which Clement wrote, he gives a chronological table, bringing events down to the death of Commodus. So it is evident that that work was written during the reign of Severus, whose times we are now recording.',
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
      ' At this time another writer, Judas, discoursing about the seventy weeks in Daniel, brings down the chronology to the tenth year of the reign of Severus. He thought that the coming of Antichrist, which was much talked about, was then near. So greatly did the agitation caused by the persecution of our people at this time disturb the minds of many.',
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
      ' At this time while Origen was conducting catechetical instruction at Alexandria, a deed was done by him which evidenced an immature and youthful mind, but at the same time gave the highest proof of faith and continence.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For he took the words, “There are eunuchs who have made themselves eunuchs for the kingdom of heaven’s sake,” in too literal ad extreme a sense. And in order to fulfill the Saviour’s word, and at the same time to take away from the unbelievers all opportunity for scandal—for, although young, he met for the study of divine things with women as well as men—he carried out in action the word of the Saviour. He thought that this would not be known by many of his acquaintances. But it was impossible for him, though desiring to do so, to keep such an action secret.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' When Demetrius, who presided over that parish, at last learned of this, he admired greatly the daring nature of the act, and as he perceived his zeal and the genuineness of his faith, he immediately exhorted him to courage, and urged him the more to continue his work of catechetical instruction.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Such was he at that time. But soon afterward, seeing that he was prospering, and becoming great and distinguished among all men, the same Demetrius, overcome by human weakness, wrote of his deed as most foolish to the bishops throughout the world. But the bishops of Cesarea and Jerusalem, who were especially notable and distinguished among the bishops of Palestine, considering Origen worthy in the highest degree of the honor, ordained him a presbyter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Thereupon his fame increased greatly, and his name became renowned everywhere, and he obtained no small reputation for virtue and wisdom. But Demetrius, having nothing else that he could say against him, save this deed of his boyhood, accused him bitterly, and dared to include with him in these accusations those who had raised him to the presbyterate.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' These things, however, took place a little later. But at this time Origen continued fearlessly the instruction in divine things at Alexandria by day and night to all who came to him; devoting his entire leisure without cessation to divine studies and to his pupils.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Severus, having held the government for eighteen years, was succeeded by his son, Antoninus. Among those who had endured courageously the persecution of that time, and had been preserved by the Providence of God through the conflicts of confession, was Alexander, of whom we have spoken already as bishop of the church in Jerusalem. On account of his pre-eminence in the confession of Christ he was thought worthy of that bishopric, while Narcissus, his predecessor, was still living.',
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
      ' The citizens of that parish mention many other miracles of Narcissus, on the tradition of the brethren who succeeded him; among which they relate the following wonder as performed by him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' They say that the oil once failed while the deacons were watching through the night at the great paschal vigil. Thereupon the whole multitude being dismayed, Narcissus directed those who attended to the lights, to draw water and bring it to him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' This being immediately done he prayed over the water, and with firm faith in the Lord, commanded them to pour it into the lamps. And when they had done so, contrary to all expectation by a wonderful and divine power, the nature of the water was changed into that of oil. A small portion of it has been preserved even to our day by many of the brethren there as a memento of the wonder.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' They tell many other things worthy to be noted of the life of this man, among which is this. Certain base men being unable to endure the strength and firmness of his life, and fearing punishment for the many evil deeds of which they were conscious, sought by plotting to anticipate him, and circulated a terrible slander against him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' And to persuade those who heard of it, they confirmed their accusations with oaths: one invoked upon himself destruction by fire; another the wasting of his body by a foul disease; the third the loss of his eyes. But though they swore in this manner, they could not affect the mind of the believers; because the continence and virtuous life of Narcissus were well known to all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But he could not in any wise endure the wickedness of these men; and as he had followed a philosophic life for a long time, he fled from the whole body of the Church, and hid himself in desert and secret places, and remained there many years.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But the great eye of judgment was not unmoved by these things, but soon looked down upon these impious men, and brought on them the curses with which they had bound themselves. The residence of the first, from nothing but a little spark failing upon it, was entirely consumed by night, and he perished with all his family. The second was speedily covered with the disease which he had imprecated upon himself, from the sole of his feet to his head.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' But the third, perceiving what had happened to the others, and fearing the inevitable judgment of God, the ruler of all, confessed publicly what they had plotted together. And in his repentance he became so wasted by his great lamentations, and continued weeping to such an extent, that both his eyes were destroyed. Such were the punishments which these men received for their falsehood.',
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
      ' Narcissus having departed, and no one knowing where he was, those presiding over the neighboring churches thought it best to ordain another bishop. His name was Dius. He presided but a short time, and Germanio succeeded him. He was followed by Gordius, in whose time Narcissus appeared again, as if raised from the dead. And immediately the brethren besought him to take the episcopate, as all admired him the more on account of his retirement and philosophy, and especially because of the punishment with which God had avenged him.',
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
      ' But as on account of his great age Narcissus was no longer able to perform his official duties, the Providence of God called to the office with him, by a revelation given him in a night vision, the above-mentioned Alexander, who was then bishop of another parish.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Thereupon, as by Divine direction, he journeyed from the land of Cappadocia, where he first held the episcopate, to Jerusalem, in consequence of a vow and for the sake of information in regard to its places. They received, him there with great cordiality, and would not permit him to return, because of another revelation seen by them at night, which uttered the clearest message to the most zealous among them. For it made known that if they would go outside the gates, they would receive the bishop foreordained for them by God. And having done this, with the unanimous consent of the bishops of the neighboring churches, they constrained him to remain.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Alexander, himself, in private letters to the Antinoites, which are still preserved among us, mentions the joint episcopate of Narcissus and himself, writing in these words at the end of the epistle:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “Narcissus salutes you, who held the episcopate here before me, and is now associated with me in prayers, being one hundred and sixteen years of age; and he exhorts you, as I do, to be of one mind.” These things took place in this manner. But, on the death of Serapion, Asclepiades, who had been himself distinguished among the confessors during the persecution, succeeded to the episcopate of the church at Antioch. Alexander alludes to his appointment, writing thus to the church at Antioch:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' “Alexander, a servant and prisoner of Jesus Christ, to the blessed church of Antioch, greeting in the Lord. The Lord hath made my bonds during the time of my imprisonment light and easy, since I learned that, by the Divine Providence, Asclepiades, who in regard to the true faith is eminently qualified, has undertaken the bishopric of your holy church at Antioch.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' He indicates that he sent this epistle by Clement, writing toward its close as follows: “My honored brethren, have sent this letter to you by Clement, the blessed presbyter, a man virtuous and approved, whom ye yourselves also know and will recognize. Being here, in the providence and oversight of the Master, he has strengthened and built up the Church of the Lord.”',
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
      ' It is probable that others have preserved other memorials of Serapion’s literary industry, but there have reached us only those addressed to a certain Domninus, who, in the time of persecution, fell away from faith in Christ to the Jewish will-worship; and those addressed to Pontius and Caricus, ecclesiastical men, and other letters to different persons, and still another work composed by him on the so-called Gospel of Peter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He wrote this last to refute the falsehoods which that Gospel contained, on account of some in the parish of Rhossus who had been led astray by it into heterodox notions. It may be well to give some brief extracts from his work, showing his opinion of the book. He writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “For we, brethren, receive both Peter and the other apostles as Christ; but we reject intelligently the writings falsely ascribed to them, knowing that such were not handed down to us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' When I visited you I supposed that all of you held the true faith, and as I had not read the Gospel which they put forward under the name of Peter, I said, ‘If this is the only thing which occasions dispute among you, let it be read.’ But now having learned, from what has been told me, that their mind was involved in some heresy, I will hasten to come to you again. Therefore, brethren, expect me shortly.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But you will learn, brethren, from what has been written to you, that we perceived the nature of the heresy of Marcianus, and that, not understanding’, what he was saying, he contradicted himself.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' For having obtained this Gospel from others who had studied it diligently, namely, from the successors of those who first used it, whom we call Docetæ (for most of their opinions are connected with the teaching of that school) we have been able to read it through, and we find many things in accordance with the true doctrine of the Saviour, but some things added to that doctrine, which we have pointed out for you farther on.” So much in regard to Serapion.',
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
      ' All the eight Stromata of Clement are preserved among us, and have been given by him the following title: “Titus Flavius Clement’s Stromata of Gnostic Notes on the True Philosophy.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' The books entitled Hypotyposes are of the same number. In them he mentions Pantænus by name as his teacher, and gives his opinions and traditions.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Besides these there is his Hortatory Discourse addressed to the Greeks; three books of a work entitled the Instructor; another with the title What Rich Man is Saved? the work on the Passover; discussions on Fasting and on Evil Speaking; the Hortatory Discourse on Patience, or To Those Recently Baptized; and the one bearing the title Ecclesiastical Canon, or Against the Judaizers, which he dedicated to Alexander, the bishop mentioned above.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' In the Stromata, he has not only treated extensively of the Divine Scripture, but he also quotes from the Greek writers whenever anything that they have said seems to him profitable. He elucidates the opinions of many, both Greeks and barbarians.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' He also refutes the false doctrines of the heresiarchs, and besides this, reviews a large portion of history, giving us specimens of very various learning; with all the rest he mingles the views of philosophers. It is likely that on this account he gave his work the appropriate title of Stromata.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' He makes use also in these works of testimonies from the disputed Scriptures, the so-called Wisdom of Solomon, and of Jesus, the son of Sirach, and the Epistle to the Hebrews, and those of Barnabas, and Clement and Jude.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' He mentions also Tatian’s Discourse to the Greeks, and speaks of Cassianus as the author of a chronological work. He refers to the Jewish authors Philo, Aristobulus, Josephus, Demetrius, and Eupolemus, as showing, all of them, in their works, that Moses and the Jewish race existed before the earliest origin of the Greeks.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' These books abound also in much other learning. In the first of them the author speaks of himself as next after the successors of the apostles. In them he promises also to write a commentary on Genesis.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' In his book on the Passover he acknowledges that he had been urged by his friends to commit to writing, for posterity, the traditions which he had heard from the ancient presbyters; and in the same work he mentions Melito and Irenæus, and certain others, and gives extracts from their writings.',
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
      ' To sum up briefly, he has given in the Hypotyposes abridged accounts of all canonical Scripture, not omitting the disputed books,—I refer to Jude and the other Catholic epistles, and Barnabas and the so-called Apocalypse of Peter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He says that the Epistle to the Hebrews is the work of Paul, and that it was written to the Hebrews in the Hebrew language; but that Luke translated it carefully and published it for the Greeks, and hence the same style of expression is found in this epistle and in the Acts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But he says that the words, Paul the Apostle, were probably not prefixed, because, in sending it to the Hebrews, who were prejudiced and suspicious of him, he wisely did not wish to repel them at the very beginning by giving his name.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Farther on he says: “But now, as the blessed presbyter said, since the Lord being the apostle of the Almighty, was sent to the Hebrews, Paul, as sent to the Gentiles, on account of his modesty did not subscribe himself an apostle of the Hebrews, through respect for the Lord, and because being a herald and apostle of the Gentiles he wrote to the Hebrews out of his superabundance.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Again, in the same books, Clement gives the tradition of the earliest presbyters, as to the order of the Gospels, in the following manner: The Gospels containing the genealogies, he says, were written first.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' The Gospel according to Marks had this occasion. As Peter had preached the Word publicly at Rome, and declared the Gospel by the Spirit, many who were present requested that Mark, who had followed him for a long time and remembered his sayings, should write them out. And having composed the Gospel he gave it to those who had requested it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' When Peter learned of this, he neither directly forbade nor encouraged it. But, last of all, John, perceiving that the external facts had been made plain in the Gospel, being urged by his friends, and inspired by the Spirit, composed a spiritual Gospel. This is the account of Clement.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Again the above-mentioned Alexander, in a certain letter to Origen, refers to Clement, and at the same time to Pantænus, as being among his familiar acquaintances. He writes as follows: “For this, as thou knowest, was the will of God, that the ancestral friendship existing between us should remain unshaken; nay, rather should be warmer and stronger.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' For we know well those blessed fathers who have trodden the way before us, with whom we shall soon be; Pantænus, the truly blessed man and master, and the holy Clement, my master and benefactor, and if there is any other like them, through whom I became acquainted with thee, the best in everything, my master and brother.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' So much for these matters. But Adamantius,—for this also was a name of Origen,—when Zephyrinus was bishop of Rome, visited Rome, “desiring,” as he himself somewhere says, “to see the most ancient church of Rome.” After a short stay there he returned to Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' And he performed the duties of catechetical instruction there with great zeal; Demetrius, who was bishop there at that time, urging and even entreating him to work diligently for the benefit of the brethren.',
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
      ' But when he saw that he had not time for the deeper study of divine things, and for the investigation and interpretation of the Sacred Scriptures, and also for the instruction of those who came to him—for coming, one after another, from morning till evening to be taught by him, they scarcely gave him time to breathe—he divided the multitude. And from those whom he knew well, he selected Heraclas, who was a zealous student of divine things, and in other respects a very learned man, not ignorant of philosophy, and made him his associate in the work of instruction. He entrusted to him the elementary training of beginners, but reserved for himself the teaching of those who were farther advanced.',
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
      ' So earnest and assiduous was Origen’s research into the divine words that he learned the Hebrew language, and procured as his own the original Hebrew Scriptures which were in the hands of the Jews. He investigated also the works of other translators of the Sacred Scriptures besides the Seventy. And in addition to the well-known translations of Aquila, Symmachus, and Theodotion, he discovered certain others which had been concealed from remote times—in what out-of-the-way corners I know not—and by his search he brought them to light.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Since he did not know the authors, he simply stated that he had found this one in Nicopolis near Actium and that one in some other place.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In the Hexapla of the Psalms, after the four prominent translations, he adds not only a fifth, but also a sixth and seventh. He states of one of these that he found it in a jar in Jericho in the time of Antoninus, the son of Severus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Having collected all of these, he divided them into sections, and placed them opposite each other, with the Hebrew text itself. He thus left us the copies of the so-called Hexapla. He arranged also separately an edition of Aquila and Symmachus and Theodotion with the Septuagint, in the Tetrapla.',
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
      ' As to these translators it should be stated that Symmachus was an Ebionite. But the heresy of the Ebionites, as it is called, asserts that Christ was the son of Joseph and Mary, considering him a mere man, and insists strongly on keeping the law in a Jewish manner, as we have seen already in this history. Commentaries of Symmachus are still extant in which he appears to support this heresy by attacking the Gospel of Matthew. Origen states that he obtained these and other commentaries of Symmachus on the Scriptures from a certain Juliana, who, he says, received the books by inheritance from Symmachus himself.',
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
      ' About this time Ambrose, who held the heresy of Valentinus, was convinced by Origen’s presentation of the truth, and, as if his mind were illumined by light, he accepted the orthodox doctrine of the Church.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Many others also, drawn by the fame of Origen’s learning, which resounded everywhere, came to him to make trial of his skill in sacred literature. And a great many heretics, and not a few of the most distinguished philosophers, studied under him diligently, receiving instruction from him not only in divine things, but also in secular philosophy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For when he perceived that any persons had superior intelligence he instructed them also in philosophic branches—in geometry, arithmetic, and other preparatory studies—and then advanced to the systems of the philosophers and explained their writings. And he made observations and comments upon each of them, so that he became celebrated as a great philosopher even among the Greeks themselves.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And he instructed many of the less learned in the common school branches, saying that these would be no small help to them in the study and understanding of the Divine Scriptures. On this account he considered it especially necessary for himself to be skilled in secular and philosophic learning.',
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
      ' The Greek philosophers of his age are witnesses to his proficiency in these subjects. We find frequent mention of him in their writings. Sometimes they dedicated their own works to him; again, they submitted their labors to him as a teacher for his judgment.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Why need we say these things when even Porphyry, who lived in Sicily in our own times and wrote books against us, attempting to traduce the Divine Scriptures by them, mentions those who have interpreted them; and being unable in any way to find a base accusation against the doctrines, for lack of arguments turns to reviling and calumniating their interpreters, attempting especially to slander Origen, whom he says he knew in his youth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But truly, without knowing it, he commends the man; telling the truth about him in some cases where he could not do otherwise; but uttering falsehoods where he thinks he will not be detected. Sometimes he accuses him as a Christian; again he describes his proficiency in philosophic learning. But hear his own words:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “Some persons, desiring to find a solution of the baseness of the Jewish Scriptures rather than abandon them, have had recourse to explanations inconsistent and incongruous with the words written, which explanations, instead of supplying a defense of the foreigners, contain rather approval and praise of themselves. For they boast that the plain words of Moses are enigmas, and regard them as oracles full of hidden mysteries; and having bewildered the mental judgment by folly, they make their explanations.” Farther on he says:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' “As an example of this absurdity take a man whom I met when I was young, and who was then greatly celebrated and still is, on account of the writings which he has left. I refer to Origen, who is highly honored by the teachers of these doctrines.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' For this man, having been a hearer of Ammonius, who had attained the greatest proficiency in philosophy of any in our day, derived much benefit from his teacher in the knowledge of the sciences; but as to the correct choice of life, he pursued a course opposite to his.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' For Ammonius, being a Christian, and brought up by Christian parents, when he gave himself to study and to philosophy straightway conformed to the life required by the laws. But Origen, having been educated as a Greek in Greek literature, went over to the barbarian recklessness. And carrying over the learning which he had obtained, he hawked it about, in his life conducting himself as a Christian and contrary to the laws, but in his opinions of material things and of the Deity being like a Greek, and mingling Grecian teachings with foreign fables.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' For he was continually studying Plato, and he busied himself with the writings of Numenius and Cronius, Apollophanes, Longinus, Moderatus, and Nicomachus, and those famous among the Pythagoreans. And he used the books of Chæremon the Stoic, and of Cornutus. Becoming acquainted through them with the figurative interpretation of the Grecian mysteries, he applied it to the Jewish Scriptures.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' These things are said by Porphyry in the third book of his work against the Christians. He speaks truly of the industry and learning of the man, but plainly utters a falsehood (for what will not an opposer of Christians do?) when he says that he went over from the Greeks, and that Ammonius fell from a life of piety into heathen customs.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' For the doctrine of Christ was taught to Origen by his parents, as we have shown above. And Ammonius held the divine philosophy unshaken and unadulterated to the end of his life. His works yet extant show this, as he is celebrated among many for the writings which he has left. For example, the work entitled The Harmony of Moses and Jesus, and such others as are in the possession of the learned.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' These things are sufficient to evince the slander of the false accuser, and also the proficiency of Origen in Grecian learning. He defends his diligence in this direction against some who blamed him for it, in a certain epistle, where he writes as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' “When I devoted myself to the word, and the fame of my proficiency went abroad, and when heretics and persons conversant with Grecian learning, and particularly with philosophy, came to me, it seemed necessary that I should examine the doctrines of the heretics, and what the philosophers say concerning the truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And in this we have followed Pantænus, who benefited many before our time by his thorough preparation in such things, and also Heraclas, who is now a member of the presbytery of Alexandria. I found him with the teacher of philosophic learning, with whom he had already continued five years before I began to hear lectures on those subjects.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' And though he had formerly worn the common dress, he laid it aside and assumed and still wears the philosopher’s garment; and he continues the earnest investigation of Greek works.” He says these things in defending himself for his study of Grecian literature.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' About this time, while he was still at Alexandria, a soldier came and delivered a letter from the governor of Arabia to Demetrius, bishop of the parish, and to the prefect of Egypt who was in office at that time, requesting that they would with all speed send Origen to him for an interview. Being sent by them, he went to Arabia. And having in a short time accomplished the object of his visit, he returned to Alexandria.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' But sometime after a considerable war broke out in the city, and he departed from Alexandria. And thinking that it would be unsafe for him to remain in Egypt, he went to Palestine and abode in Cæsarea. While there the bishops of the church in that country requested him to preach and expound the Scriptures publicly, although he had not yet been ordained as presbyter.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' This is evident from what Alexander, bishop of Jerusalem and Theoctistus of Cæsarea, wrote to Demetrius in regard to the matter, defending themselves thus: “He has stated in his letter that such a thing was never heard of before, neither has hitherto taken place, that laymen should preach in the presence of bishops. I know not how he comes to say what is plainly untrue.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' For whenever persons able to instruct the brethren are found, they are exhorted by the holy bishops to preach to the people. Thus in Laranda, Euelpis by Neon; and in Iconium, Paulinus by Celsus; and in Synada, Theodorus by Atticus, our blessed brethren. And probably this has been done in other places unknown to us.” He was honored in this manner while yet a young man, not only by his countrymen, but also by foreign bishops.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' But Demetrius sent for him by letter, and urged him through members and deacons of the church to return to Alexandria. So he returned and resumed his accustomed duties.',
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
      ' There flourished many learned men in the Church at that time, whose letters to each other have been preserved and are easily accessible. They have been kept until our time in the library at Ælia, which was established by Alexander, who at that time presided over that church. We have been able to gather from that library material for our present work.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Among these Beryllus has left us, besides letters and treatises, various elegant works. He was bishop of Bostra in Arabia. Likewise also Hippolytus, who presided over another church, has left writings.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' There has reached us also a dialogue of Caius, a very learned man, which was held at Rome under Zephyrinus, with Proclus, who contended for the Phrygian heresy. In this he curbs the rashness and boldness of his opponents in setting forth new Scriptures. He mentions only thirteen epistles of the holy apostle, not counting that to the Hebrews with the others. And unto our day there are some among the Romans who do not consider this a work of the apostle.',
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
      ' After Antoninus had reigned seven years and six months, Macrinus succeeded him. He held the government but a year, and was succeeded by another Antoninus. During his first year the Roman bishop, Zephyrinus, having held his office for eighteen years, died, and Callistus received the episcopate.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He continued for five years, and was succeeded by Urbanus. After this, Alexander became Roman emperor, Antoninus having reigned but four years. At this time Philetus also succeeded Asclepiades in the church of Antioch.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' The mother of the emperor, Mammæa by name, was a most pious woman, if there ever was one, and of religious life. When the fame of Origen had extended everywhere and had come even to her ears, she desired greatly to see the man, and above all things to make trial of his celebrated understanding of divine things.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Staying for a time in Antioch, she sent for him with a military escort. Having remained with her a while and shown her many things which were for the glory of the Lord and of the excellence of the divine teaching, he hastened back to his accustomed work.',
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
      ' At that time Hippolytus, besides many other treatises, wrote a work on the passover. He gives in this a chronological table, and presents a certain paschal canon of sixteen years, bringing the time down to the first year of the Emperor Alexander.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Of his other writings the following have reached us: On the Hexæmeron, On the Works after the Hexæmeron, Against Marcion, On the Song of Songs, On Portions of Ezekiel, On the Passover, Against All the Heresies; and you can find many other works preserved by many.',
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
      ' At that time Origen began his commentaries on the Divine Scriptures, being urged thereto by Ambrose, who employed innumerable incentives, not only exhorting him by word, but also furnishing abundant means.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' For he dictated to more than seven amanuenses, who relieved each other at appointed times. And he employed no fewer copyists, besides girls who were skilled in elegant writing. For all these Ambrose furnished the necessary expense in abundance, manifesting himself an inexpressible earnestness in diligence and zeal for the divine oracles, by which he especially pressed him on to the preparation of his commentaries.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' While these things were in progress, Urbanus, who had been for eight years bishop of the Roman church, was succeeded by Pontianus, and Zebinus succeeded Philetus in Antioch.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' At this time Origen was sent to Greece on account of a pressing necessity in connection with ecclesiastical affairs, and went through Palestine, and was ordained as presbyter in Cæsarea by the bishops of that country. The matters that were agitated concerning him on this account, and the decisions on these matters by those who presided over the churches, besides the other works concerning the divine word which he published while in his prime, demand a separate treatise. We have written of them to some extent in the second book of the Defense which we have composed in his behalf.',
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
      ' It may be well to add that in the sixth book of his exposition of the Gospel of John he states that he prepared the first five while in Alexandria. Of his work on the entire Gospel only twenty-two volumes have come down to us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In the ninth of those on Genesis, of which there are twelve in all, he states that not only the preceding eight had been composed at Alexandria, but also those on the first twenty-five Psalms and on Lamentations. Of these last five volumes have reached us. In them he mentions also his books On the Resurrection, of which there are two.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' He wrote also the books De Principiis before leaving Alexandria; and the discourses entitled Stromata, ten in number, he composed in the same city during the reign of Alexander, as the notes by his own hand preceding the volumes indicate.',
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
      ' When expounding the first Psalm, he I gives a catalogue of the sacred Scriptures of the Old Testament as follows: “It should be stated that the canonical books, as the Hebrews have handed them down, are twenty-two; corresponding with the number of their letters.” Farther on he says:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “The twenty-two books of the Hebrews are the following: That which is called by us Genesis, but by the Hebrews, from the beginning of the book, Bresith, which means, ‘In the beginning’; Exodus, Welesmoth, that is, ‘These are the names’; Leviticus, Wikra, ‘And he called’; Numbers, Ammesphekodeim; Deuteronomy, Eleaddebareim, ‘These are the words’; Jesus, the son of Nave, Josoue ben Noun; Judges and Ruth, among them in one book, Saphateim; the First and Second of Kings, among them one, Samouel, that is, ‘The called of God’; the Third and Fourth of Kings in one, Wammelch David, that is, ‘The kingdom of David’; of the Chronicles, the First and Second in one, Dabreiamein, that is, ‘Records of days’; Esdras, First and Second in one, Ezra, that is, ‘An assistant’; the book of Psalms, Spharthelleim; the Proverbs of Solomon, Meloth; Ecclesiastes, Koelth; the Song of Songs (not, as some suppose, Songs of Songs), Sir Hassirim; Isaiah, Jessia; Jeremiah, with Lamentations and the epistle in one, Jeremia; Daniel, Daniel; Ezekiel, Jezekiel; Job, Job; Esther, Esther. And besides these there are the Maccabees, which are entitled Sarbeth Sabanaiel. He gives these in the above-mentioned work.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' In his first book on Matthew’s Gospel, maintaining the Canon of the Church, he testifies that he knows only four Gospels, writing as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' “Among the four Gospels, which are the only indisputable ones in the Church of God under heaven, I have learned by tradition that the first was written by Matthew, who was once a publican, but afterwards an apostle of Jesus Christ, and it was prepared for the converts from Judaism, and published in the Hebrew language.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The second is by Mark, who composed it according to the instructions of Peter, who in his Catholic epistle acknowledges him as a son, saying, ‘The church that is at Babylon elected together with you, saluteth you, and so doth Marcus, my son.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And the third by Luke, the Gospel commended by Paul, and composed for Gentile converts. Last of all that by John.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' In the fifth book of his Expositions of John’s Gospel, he speaks thus concerning the epistles of the apostles: “But he who was ‘made sufficient to be a minister of the New Testament, not of the letter, but of the Spirit,’ that is, Paul, who ‘fully preached the Gospel from Jerusalem and round about even unto Illyricum,’ did not write to all the churches which he had instructed and to those to which he wrote he sent but few lines.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' And Peter, on whom the Church of Christ is built, ‘against which the gates of hell shall not prevail,’ has left one acknowledged epistle; perhaps also a second, but this is doubtful.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' Why need we speak of him who reclined upon the bosom of Jesus, John, who has left us one Gospel, though he confessed that he might write so many that the world could not contain them? And he wrote also the Apocalypse, but was commanded to keep silence and not to write the words of the seven thunders.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' He has left also an epistle of very few lines; perhaps also a second and third; but not all consider them genuine, and together they do not contain hundred lines.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' In addition he makes the following statements in regard to the Epistle to the Hebrews in his Homilies upon it: “That the verbal style of the epistle entitled ‘To the Hebrews,’ is not rude like the language of the apostle, who acknowledged himself ‘rude in speech,’ that is, in expression; but that its diction is purer Greek, any one who has the power to discern differences of phraseology will acknowledge.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' Moreover, that the thoughts of the epistle are admirable, and not inferior to the acknowledged apostolic writings, any one who carefully examines the apostolic text will admit.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Farther on he adds: “If I gave my opinion, I should say that the thoughts are those of the apostle, but the diction and phraseology are those of some one who remembered the apostolic teachings, and wrote down at his leisure what had been said by his teacher. Therefore if any church holds that this epistle is by Paul, let it be commended for this. For not without reason have the ancients handed it down as Paul’s.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But who wrote the epistle, in truth, God knows. The statement of some who have gone before us is that Clement, bishop of the Romans, wrote the epistle, and of others that Luke, the author of the Gospel and the Acts, wrote it.” But let this suffice on these matters.',
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
      ' It was in the tenth year of the above-mentioned reign that Origen removed from Alexandria to Cæsarea, leaving the charge of the catechetical school in that city to Heraclas. Not long afterward Demetrius, bishop of the church of Alexandria, died, having held the office for forty-three full years, and Heraclas succeeded him. At this time Firmilianus, bishop of Cæsarea in Cappadocia, was conspicuous.',
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
      ' He was so earnestly affected toward Origen, that he urged him to come to that country for the benefit of the churches, and moreover he visited him in Judea, remaining with him for some time, for the sake of improvement in divine things. And Alexander, bishop of Jerusalem, and Theoctistus, bishop of Cæsarea, attended on him constantly, as their only teacher, and allowed him to expound the Divine Scriptures, and to perform the other duties pertaining to ecclesiastical discourse.',
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
      ' The Roman emperor, Alexander, having finished his reign in thirteen years, was succeeded by Maximinus Cæsar. On account of his hatred toward the household of Alexander, which contained many believers, he began a persecution, commanding that only the rulers of the churches should be put to death, as responsible for the Gospel teaching. Thereupon Origen composed his work On Martyrdom, and dedicated it to Ambrose and Protoctetus, a presbyter of the parish of Cæsarea, because in the persecution there had come upon them both unusual hardships, in which it is reported that they were eminent in confession during the reign of Maximinus, which lasted but three years. Origen has noted this as the time of the persecution in the twenty-second book of his Commentaries on John, and in several epistles.',
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
      ' Gordianus succeeded Maximinus as Roman emperor; and Pontianus, who had been bishop of the church at Rome for six years, was succeeded by Anteros. After he had held the office for a month, Fabianus succeeded him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' They say that Fabianus having come, after the death of Anteros, with others from the country, was staying at Rome, and that while there he was chosen to the office through a most wonderful manifestation of divine and heavenly grace.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' For when all the brethren had assembled to select by vote him who should succeed to the episcopate of the church, several renowned and honorable men were in the minds of many, but Fabianus, although present, was in the mind of none. But they relate that suddenly a dove flying down lighted on his head, resembling the descent of the Holy Spirit on the Saviour in the form of a dove.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Thereupon all the people, as if moved by one Divine Spirit, with all eagerness and unanimity cried out that he was worthy, and without delay they took him and placed him upon the episcopal seat.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' About that time Zebinus, bishop of Antioch died, and Babylas succeeded him. And in Alexandria Heraclas, having received the episcopal office after Demetrius, was succeeded in the charge of the catechetical school by Dionysius, who had also been one of Origen’s pupils.',
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
      ' While Origen was carrying on his customary duties in Cæsarea, many pupils came to him not only from the vicinity, but also from other countries. Among these Theodorus, the same that was distinguished among the bishops of our day under the name of Gregory, and his brother Athenodorus, we know to have been especially celebrated. Finding them deeply interested in Greek and Roman learning, he infused into them a love of philosophy, and led them to exchange their old zeal for the study of divinity. Remaining with him five years, they made such progress in divine things, that although they were still young, both of them were honored with a bishopric in the churches of Pontus.',
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
      ' At this time also Africanus, the writer of the books entitled Cesti, was well known. There is extant an epistle of his to Origen, expressing doubts of the story of Susannah in Daniel, as being spurious and fictitious. Origen answered this very fully.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Other works of the same Africanus which have reached us are his five books on Chronology, a work accurately and laboriously prepared. He says in this that he went to Alexandria on account of the great fame of Heraclas, who excelled especially in philosophic studies and other Greek learning, and whose appointment to the bishopric of the church there we have already mentioned.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' There is extant also another epistle from the same Africanus to Aristides on the supposed discrepancy between Matthew and Luke in the Genealogies of Christ. In this he shows clearly the agreement of the evangelists, from an account which had come down to him, which we have already given in its proper place in the first book of this work.',
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
      ' About this time Origen prepared his Commentaries on Isaiah and on Ezekiel. Of the former there have come down to us thirty books, as far as the third part of Isaiah, to the vision of the beasts in the desert; on Ezekiel twenty-five books, which are all that he wrote on the whole prophet.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Being at that time in Athens, he finished his work on Ezekiel and commenced his Commentaries on the Song of Songs, which he carried forward to the fifth book. After his return to Cæsarea, he completed these also, ten books in number.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But why should we give in this history an accurate catalogue of the man’s works, which would require a separate treatise? we have furnished this also in our narrative of the life of Pamphilus, a holy martyr of our own time. After showing how great the diligence of Pamphilus was in divine things, we give in that a catalogue of the library which he collected of the works of Origen and of other ecclesiastical writers, Whoever desires may learn readily from this which of Origen’s works have reached us. But we must proceed now with our history.',
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
      ' Beryllus, whom we mentioned recently as bishop of Bostra in Arabia, turned aside from the ecclesiastical standard and attempted to introduce ideas foreign to the faith. He dared to assert that our Saviour and Lord did not pre-exist in a distinct form of being of his own before his abode among men, and that he does not possess a divinity of his own, but only that of the Father dwelling in him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Many bishops carried on investigations and discussions with him on this matter, and Origen having been invited with the others, went down at first for a conference with him to ascertain his real opinion. But when he understood his views, and perceived that they were erroneous, having persuaded him by argument, and convinced him by demonstration, he brought him back to the true doctrine, and restored him to his former sound opinion.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' There are still extant writings of Beryllus and of the synod held on his account, which contain the questions put to him by Origen, and the discussions which were carried on in his parish, as well as all the things done at that time.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' The elder brethren among us have handed down many other facts respecting Origen which I think proper to omit, as not pertaining to this work. But whatever it has seemed necessary to record about him can be found in the Apology in his behalf written by us and Pamphilus, the holy martyr of our day. We prepared this carefully and did the work jointly on account of faultfinders.',
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
      ' Gordianus had been Roman emperor for six years when Philip, with his son Philip, succeeded him. It is reported that he, being a Christian desired, on the day of the last paschal vigil, to share with the multitude in the prayers of the Church, but that he was not permitted to enter, by him who then presided, until he had made confession and had numbered himself among those who were reckoned as transgressors and who occupied the place of penance. For if he had not done this, he would never have been received by him, on account of the many crimes which he had committed. It is said that he obeyed readily, manifesting in his conduct a genuine and pious fear of God.',
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
      ' In the third year of this emperor, Heraclas died, having held his office for sixteen years, and Dionysius received the episcopate of the churches of Alexandria.',
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
      ' At this time, as the faith extended and our doctrine was proclaimed boldly before all, Origen, being, as they say, over sixty years old, and having gained great facility by his long practice, very properly permitted his public discourses to be taken down by stenographers, a thing which he had never before allowed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' He also at this time composed a work of eight books in answer to that entitled True Discourse, which had been written against us by Celsus the Epicurean, and the twenty-five books on the Gospel of Matthew, besides those on the Twelve Prophets, of which we have found only twenty-five.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' There is extant also an epistle of his to the Emperor Philip, and another to Severa his wife, with several others to different persons. We have arranged in distinct books to the number of one hundred, so that they might be no longer scattered, as many of these as we have been able to collect, which have been preserved here and there by different persons.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' He wrote also to Fabianus, bishop of Rome, and to many other rulers of the churches concerning his orthodoxy. You have examples of these in the eighth book of the Apology which we have written in his behalf.',
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
      ' About the same time others arose in Arabia, putting forward a doctrine foreign to the truth. They said that during the present time the human soul dies and perishes with the body, but that at the time of the resurrection they will be renewed together. And at that time also a synod of considerable size assembled, and Origen, being again invited thither, spoke publicly on the question with such effect that the opinions of those who had formerly fallen were changed.',
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
      ' Another error also arose at this time, called the heresy of the Elkesites, which was extinguished in the very beginning. Origen speaks of it in this manner in a public homily on the eighty-second Psalm: “A certain man came just now, puffed up greatly with his own ability, proclaiming that godless and impious opinion which has appeared lately in the churches, styled ‘of the Elkesites.’ I will show you what evil things that opinion teaches, that you may not be carried away by it. It rejects certain parts of every scripture. Again it uses portions of the Old Testament and the Gospel, but rejects the apostle altogether. It says that to deny Christ is an indifferent matter, and that he who understands will, under necessity, deny with his mouth, but not in his heart. They produce a certain book which they say fell from heaven. They hold that whoever hears and believes this shall receive remission of sins, another remission than that which Jesus Christ has given.” Such is the account of these persons.',
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
      ' After a reign of seven years Philip was succeeded by Decius. On account of his hatred of Philip, he commenced a persecution of the churches, in which Fabianus suffered martyrdom at Rome, and Cornelius succeeded him in the episcopate.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' In Palestine, Alexander, bishop of the church of Jerusalem, was brought again on Christ’s account before the governor’s judgment seat in Cæsarea, and having acquitted himself nobly in a second confession was cast into prison, crowned with the hoary locks of venerable age.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And after his honorable and illustrious confession at the tribunal of the governor, he fell asleep in prison, and Mazabanes became his successor in the bishopric of Jerusalem.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Babylas in Antioch, having like Alexander passed away in prison after his confession, was succeeded by Fabius in the episcopate of that church.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' But how many and how great things came upon Origen in the persecution, and what was their final result—as the demon of evil marshaled all his forces, and fought against the man with his utmost craft and power, assaulting him beyond all others against whom he contended at that time—and what and how many things he endured for the word of Christ, bonds and bodily tortures and torments under the iron collar and in the dungeon; and how for many days with his feet stretched four spaces in the stocks he bore patiently the threats of fire and whatever other things were inflicted by his enemies; and how his sufferings terminated, as his judge strove eagerly with all his might not to end his life; and what words he left after these things, full of comfort to those needing aid, a great many of his epistles show with truth and accuracy.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[39]->title,
      'subtitle' => $metadata->book->chapters[39]->subtitle,
      'id' => $metadata->book->chapters[39]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' I shall quote from the epistle of Dionysius to Germanus an account of what befell the former. Speaking of himself, he writes as follows: “I speak before God, and he knows that I do not lie. I did not flee on my own impulse nor without divine direction.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' But even before this, at the very hour when the Decian persecution was commanded, Sabinus sent a frumentarius to search for me, and I remained at home four days awaiting his arrival. But he went about examining all places—roads, rivers, and fields—where he thought I might be concealed or on the way. But he was smitten with blindness, and did not find the house, for he did not suppose, that being pursued, I would remain at home.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' And after the fourth day God commanded me to depart, and made a way for me in a wonderful manner; and I and my attendants and many of the brethren went away together. And that this occurred through the providence of God was made manifest by what followed, in which perhaps we were useful to some.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Farther on he relates in this manner what happened to him after his flight: “For about sunset, having been seized with those that were with me, I was taken by the soldiers to Taposiris, but in the providence of God, Timothy was not present and was not captured. But coming later, he found the house deserted and guarded by soldiers, and ourselves reduced to slavery.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' After a little he says: “And what was the manner of his admirable management? for the truth shall be told. One of the country people met Timothy fleeing and disturbed, and inquired the cause of his haste. And he told him the truth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' And when the man heard it (he was on his way to a marriage feast, for it was customary to spend the entire night in such gatherings), he entered and announced it to those at the table. And they, as if on a preconcerted signal, arose with one impulse, and rushed out quickly and came and burst in upon us with a shout. Immediately the soldiers who were guarding us fled, and they came to us lying as we were upon the bare couches.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' But I, God knows, thought at first that they were robbers who had come for spoil and plunder. So I remained upon the bed on which I was, clothed only in a linen garment, and offered them the rest of my clothing which was lying beside me. But they directed me to rise and come away quickly.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Then I understood why they were come, and I cried out, beseeching and entreating them to depart and leave us alone. And I requested them, if they desired to benefit me in any way, to anticipate those who were carrying me off, and cut off my head themselves. And when I had cried out in this manner, as my companions and partners in everything know, they raised me by force. But I threw myself on my back on the ground; and they seized me by the hands and feet and dragged me away.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And the witnesses of all these occurrences followed: Gaius, Faustus, Peter, and Paul. But they who had seized me carried me out of the village hastily, and placing me on an ass without a saddle, bore me away.” Dionysius relates these things respecting himself.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[40]->title,
      'subtitle' => $metadata->book->chapters[40]->subtitle,
      'id' => $metadata->book->chapters[40]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' The same writer, in an epistle to Fabius, bishop of Antioch, relates as follows the sufferings of the martyrs in Alexandria under Decius: “The persecution among us did not begin with the royal decree, but preceded it an entire year. The prophet and author of evils to this city, whoever he was, previously moved and aroused against us the masses of the heathen, rekindling among them the superstition of their country.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' And being thus excited by him and finding full opportunity for any wickedness, they considered this the only pious service of their demons, that they should slay us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' “They seized first an old man named Metras, and commanded him to utter impious words. But as he would not obey, they beat him with clubs, and tore his face and eyes with sharp sticks, and dragged him out of the city and stoned him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Then they carried to their idol temple a faithful woman, named Quinta, that they might force her to worship. And as she turned away in detestation, they bound her feet and dragged her through the entire city over the stone-paved streets, and dashed her against the millstones, and at the same time scourged her; then, taking her to the same place, they stoned her to death.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Then all with one impulse rushed to the homes of the pious, and they dragged forth whomsoever any one knew as a neighbor, and despoiled and plundered them. They took for themselves the more valuable property; but the poorer articles and those made of wood they scattered about and burned in the streets, so that the city appeared as if taken by an enemy.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' But the brethren withdrew and went away, and ‘took joyfully the spoiling of their goods,’ like those to whom Paul bore witness. I know of no one unless possibly some one who fell into their hands, who, up to this time, denied the Lord.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' Then they seized also that most admirable virgin, Apollonia, an old woman, and, smiting her on the jaws, broke out all her teeth. And they made a fire outside the city and threatened to burn her alive if she would not join with them in their impious cries. And she, supplicating a little, was released, when she leaped eagerly into the fire and was consumed.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' Then they seized Serapion in his own house, and tortured him with harsh cruelties, and having broken all his limbs, they threw him headlong from an upper story. And there was no street, nor public road, nor lane open to us, by night or day; for always and everywhere, all of them cried out that if any one would not repeat their impious words, he should immediately be dragged away and burned.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' And matters continued thus for a considerable time. But a sedition and civil war came upon the wretched people and turned their cruelty toward us against one another. So we breathed for a little while as they ceased from their rage against us. But presently the change from that milder reign was announced to us, and great fear of what was threatened seized us.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' For the decree arrived, almost like unto that most terrible time foretold by our Lord, which if it were possible would offend even the elect.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' All truly were affrighted. And many of the more eminent in their fear came forward immediately; others who were in the public service were drawn on by their official duties; others were urged on by their acquaintances. And as their names were called they approached the impure and impious sacrifices. Some of them were pale and trembled as if they were not about to sacrifice, but to be themselves sacrifices and offerings to the idols; so that they were jeered at by the multitude who stood around, as it was plain to every one that they were afraid either to die or to sacrifice.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But some advanced to the altars more readily, declaring boldly that they had never been Christians. Of these the prediction of our Lord is most true that they shall ‘hardly’ be saved. Of the rest some followed the one, others the other of these classes, some fled and some were seized.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' And of the latter some continued faithful until bonds and imprisonment, and some who had even been imprisoned for many days yet abjured the faith before they were brought to trial. Others having for a time endured great tortures finally retracted.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But the firm and blessed pillars of the Lord being strengthened by him, and having received vigor and might suitable and appropriate to the strong faith which they possessed, became admirable witnesses of his kingdom.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' The first of these was Julian, a man who suffered so much with the gout that he was unable to stand or walk. They brought him forward with two others who carried him. One of these immediately denied. But the other, whose name was Cronion, and whose surname was Eunus, and the old man Julian himself, both of them having confessed the Lord, were carried on camels through the entire city, which, as you know, is a very large one, and in this elevated position were beaten and finally burned in a fierce fire, surrounded by all the populace.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' But a soldier, named Besas, who stood by them as they were led away rebuked those who insulted them. And they cried out against him, and this most manly warrior of God was arraigned, and having done nobly in the great contest for piety, was beheaded.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' A certain other one, a Libyan by birth, but in name and blessedness a true Macar, was strongly urged by the judge to recant; but as he would not yield he was burned alive. After them Epimachus and Alexander, having remained in bonds for a long time, and endured countless agonies from scrapers and scourges, were also consumed in a fierce fire.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' And with them there were four women. Ammonarium, a holy virgin, the judge tortured relentlessly and excessively, because she declared from the first that she would utter none of those things which he commanded; and having kept her promise truly, she was dragged away. The others were Mercuria, a very remarkable old woman, and Dionysia, the mother of many children, who did not love her own children above the Lord. As the governor was ashamed of torturing thus ineffectually, and being always defeated by women, they were put to death by the sword, without the trial of tortures. For the champion, Ammonarium, endured these in behalf of all.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' The Egyptians, Heron and Ater and Isidorus, and with them Dioscorus, a boy about fifteen years old, were delivered up. At first the judge attempted to deceive the lad by fair words, as if he could be brought over easily, and then to force him by tortures, as one who would readily yield. But Dioscorus was neither persuaded nor constrained.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' As the others remained firm, he scourged them cruelly and then delivered them to the fire. But admiring the manner in which Dioscorus had distinguished himself publicly, and his wise answers to his persuasions, he dismissed him, saying that on account of his youth he would give him time for repentance. And this most godly Dioscorus is among us now, awaiting a longer conflict and more severe contest.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' But a certain Nemesion, who also was an Egyptian, was accused as an associate of robbers; but when he had cleared himself before the centurion of this charge most foreign to the truth, he was informed against as a Christian, and taken in bonds before the governor. And the most unrighteous magistrate inflicted on him tortures and scourgings double those which he executed on the robbers, and then burned him between the robbers, thus honoring the blessed man by the likeness to Christ.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' A band of soldiers, Ammon and Zeno and Ptolemy and Ingenes, and with them an old man, Theophilus, were standing close together before the tribunal. And as a certain person who was being tried as a Christian, seemed inclined to deny, they standing by gnashed their teeth, and made signs with their faces and stretched out their hands, and gestured with their bodies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 23),
      ' And when the attention of all was turned to them, before any one else could seize them, they rushed up to the tribunal saying that they were Christians, so that the governor and his council were affrighted. And those who were on trial appeared most courageous in prospect of their sufferings, while their judges trembled. And they went exultingly from the tribunal rejoicing in their testimony; God himself having caused them to triumph gloriously.”',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[41]->title,
      'subtitle' => $metadata->book->chapters[41]->subtitle,
      'id' => $metadata->book->chapters[41]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' “Many others, in cities and villages, were torn asunder by the heathen, of whom I will mention one as an illustration. Ischyrion was employed as a steward by one of the rulers. His employer commanded him to sacrifice, and on his refusal insulted him, and as he remained firm, abused him. And as he still held out he seized a long staff and thrust it through his bowels and slew him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “Why need I speak of the multitude that wandered in the deserts and mountains, and perished by hunger, and thirst, and cold, and sickness, and robbers, and wild beasts? Those of them who survived are witnesses of their election and victory.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' But I will relate one occurrence as an example. Chæremon, who was very old, was bishop of the city called Nilus. He fled with his wife to the Arabian mountain and did not return. And though the brethren searched diligently they could not find either them or their bodies.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' And many who fled to the same Arabian mountain were carried into slavery by the barbarian Saracens. Some of them were ransomed with difficulty and at a large price others have not been to the present time. I have related these things, my brother, not without an object, but that you may understand how many and great distresses came upon us. Those indeed will understand them the best who have had the largest experience of them.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' A little further on he adds: “These divine martyrs among us, who now are seated with Christ, and are sharers in his kingdom, partakers of his judgment and judges with him, received some of the brethren who had fallen away and become chargeable with the guilt of sacrificing. When they perceived that their conversion and repentance were sufficient to be acceptable with him who by no means desires the death of the sinner, but his repentance, having proved them they received them back and brought them together, and met with them and had fellowship with them in prayers and feasts.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' What counsel then, brethren, do you give us concerning such persons? What should we do? Shall we have the same judgment and rule as theirs, and observe their decision and charity, and show mercy to those whom they pitied? Or, shall we declare their decision unrighteous, and set ourselves as judges of their opinion, and grieve mercy and overturn order?” These words Dionysius very properly added when making mention of those who had been weak in the time of persecution.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[42]->title,
      'subtitle' => $metadata->book->chapters[42]->subtitle,
      'id' => $metadata->book->chapters[42]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' After this, Novatus, a presbyter of the church at Rome, being lifted up with arrogance against these persons, as if there was no longer for them a hope of salvation, not even if they should do all things pertaining to a genuine and pure conversion, became leader of the heresy of those who, in the pride of their imagination, call themselves Cathari.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' Thereupon a very large synod assembled at Rome, of bishops in number sixty, and a great many more presbyters and deacons; while the pastors of the remaining provinces deliberated in their places privately concerning what ought to be done. A decree was confirmed by all, that Novatus and those who joined with him, and those who adopted his brother-hating and inhuman opinion, should be considered by the church as strangers; but that they should heal such of the brethren as had fallen into misfortune, and should minister to them with the medicines of repentance.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' There have reached us epistles of Cornelius, bishop of Rome, to Fabius, of the church at Antioch, which show what was done at the synod at Rome, and what seemed best to all those in Italy and Africa and the regions thereabout. Also other epistles, written in the Latin language, of Cyprian and those with him in Africa, which show that they agreed as to the necessity of succoring those who had been tempted, and of cutting off from the Catholic Church the leader of the heresy and all that joined with him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Another epistle of Cornelius, concerning the resolutions of the synod, is attached to these; and yet others, on the conduct of Novatus, from which it is proper for us to make selections, that any one who sees this work may know about him.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' Cornelius informs Fabius what sort of a man Novatus was, in the following words: “But that you may know that a long time ago this remarkable man desired the episcopate, but kept this ambitious desire to himself and concealed it—using as a cloak for his rebellion those confessors who had adhered to him from the beginning—I desire to speak.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Maximus, one of our presbyters, and Urbanus, who twice gained the highest honor by confession, with Sidonius, and Celerinus, a man who by the grace of God most heroically endured all kinds of torture, and by the strength of his faith overcame the weakness of the flesh, and mightily conquered the adversary—these men found him out and detected his craft and duplicity, his perjuries and falsehoods, his un-sociability and cruel friendship. And they returned to the holy church and proclaimed in the presence of many, both bishops and presbyters and a large number of the laity, all his craft and wickedness, which for a long time he had concealed. And this they did with lamentations land repentance, because through the persuasions of the crafty and malicious beast they had left the church for the time.” A little farther on he says:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 7),
      ' “How remarkable, beloved brother, the change and transformation which we have seen take place in him in a short time. For this most illustrious man, who bound himself with terrible oaths in nowise to seek the bishopric, suddenly appears a bishop as if thrown among us by some machine.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 8),
      ' For this dogmatist, this defender of the doctrine of the Church, attempting to grasp and seize the episcopate, which had not been given him from above, chose two of his companions who had given up their own salvation. And he sent them to a small and insignificant corner of Italy, that there by some counterfeit argument he might deceive three bishops, who were rustic and very simple men. And they asserted positively and strongly that it was necessary that they should come quickly to Rome, in order that all the dissension which had arisen there might be appeased through their mediation, jointly with other bishops.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 9),
      ' When they had come, being, as we have stated, very simple in the craft and artifice of the wicked, they were shut up with certain selected men like himself. And by the tenth hour, when they had become drunk and sick, he compelled them by force to confer on him the episcopate through a counterfeit and vain imposition of hands. Because it had not come to him, he avenged himself by craft and treachery.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 10),
      ' One of these bishops shortly after came back to the church, lamenting and confessing his transgression. And we communed with him as with a layman, all the people present interceding for him. And we ordained successors of the other bishops, and sent them to the places where they were.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 11),
      ' This avenger of the Gospel then did not know that there should be one bishop in a catholic church; yet he was not ignorant (for how could he be?) that in it there were forty-six presbyters, seven deacons, seven sub-deacons, forty-two acolyths, fifty-two exorcists, readers, and janitors, and over fifteen hundred widows and persons in distress, all of whom the grace and kindness of the Master nourish.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 12),
      ' But not even this great multitude, so necessary in the church, nor those who, through God’s providence, were rich and full, together with the very many, even innumerable people, could turn him from such desperation and presumption and recall him to the Church.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 13),
      ' Again, farther on, he adds these words: “Permit us to say further: On account of what works or conduct had he the assurance to contend for the episcopate? Was it that he had been brought up in the Church from the beginning, and had endured many conflicts in her behalf, and had passed through many and great dangers for religion? Truly this is not the fact.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 14),
      ' But Satan, who entered and dwelt in him for a long time, became the occasion of his believing. Being delivered by the exorcists, he fell into a severe sickness; and as he seemed about to die, he received baptism by affusion, on the bed where he lay; if indeed we can say that such a one did receive it.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 15),
      ' And when he was healed of his sickness he did not receive the other things which it is necessary to have according to the canon of the Church, even the being sealed by the bishop. And as he did not receive this, how could he receive the Holy Spirit?”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 16),
      ' Shortly after he says again: “In the time of persecution, through cowardice and love of life, he denied that he was a presbyter. For when he was requested and en-treated by the deacons to come out of the chamber in which he had imprisoned himself and give aid to the brethren as far as was lawful and possible for a presbyter to assist those of the brethren who were in danger and needed help, he paid so little respect to the entreaties of the deacons that he went away and departed in anger. For he said that he no longer desired to be a presbyter, as he was an admirer of another philosophy.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 17),
      ' Passing by a few things, he adds the following: “For this illustrious man forsook the Church of God, in which, when he believed, he was judged worthy of the presbyterate through the favor of the bishop who ordained him to the presbyterial office. This had been resisted by all the clergy and many of the laity; because it was unlawful that one who had been affused on his bed on account of sickness as he had been should enter into any clerical office; but the bishop requested that he might be permitted to ordain this one only.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 18),
      ' He adds to these yet another, the worst of all the man’s offenses, as follows: “For when he has made the offerings, and distributed a part to each man, as he gives it he compels the wretched man to swear in place of the blessing. Holding his hands in both of his own, he will not release him until he has sworn in this manner (for I will give his own words): ‘Swear to me by the body and blood of our Lord Jesus Christ that you will never forsake me and turn to Cornelius.’',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 19),
      ' And the unhappy man does not taste until he has called down imprecations on himself; and instead of saying Amen, as he takes the bread, he says, I will never return to Cornelius.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 20),
      ' Farther on he says again: “But know that he has now been made bare and desolate; as the brethren leave him every day and return to the church. Moses also, the blessed martyr, who lately suffered among us a glorious and admirable martyrdom, while he was yet alive, beholding his boldness and folly, refused to commune with him and with the five presbyters who with him had separated themselves from the church.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 21),
      ' At the close of his letter he gives a list of the bishops who had come to Rome and condemned the silliness of Novatus, with their names and the parish over which each of them presided.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 22),
      ' He mentions also those who did not come to Rome, but who expressed by letters their agreement with the vote of these bishops, giving their names and the cities from which they severally sent them. Cornelius wrote these things to Fabius, bishop of Antioch.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[43]->title,
      'subtitle' => $metadata->book->chapters[43]->subtitle,
      'id' => $metadata->book->chapters[43]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' To this same Fabius, who seemed to lean somewhat toward this schism, Dionysius of Alexandria also wrote an epistle. He writes in this many other things concerning repentance, and relates the conflicts of those who had lately suffered martyrdom at Alexandria. After the other account he mentions a certain wonderful fact, which deserves a place in this work. It is as follows:',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' “I will give thee this one example which occurred among us. There was with us a certain Serapion, an aged believer who had lived for a long time blamelessly, but had fallen in the trial. He besought often, but no one gave heed to him, because he had sacrificed. But he became sick, and for three successive days continued speechless and senseless.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Having recovered somewhat on the fourth day he sent for his daughter’s son, and said, ‘How long do you detain me, my child? I beseech you, make haste, and absolve me speedily. Call one of the presbyters to me.’ And when he had said this, he became again speechless. And the boy ran to the presbyter. But it was night and he was sick, and therefore unable to come.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' But as I had commanded that persons at the point of death, if they requested it, and especially if they had asked for it previously, should receive remission, that they might depart with a good hope, he gave the boy a small portion of the eucharist, telling him to soak it and let the drops fall into the old man’s mouth.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' The boy returned with it, and as he drew near, before he entered, Serapion again arousing, said, ‘Thou art come, my child, and the presbyter could not come; but do quickly what he directed, and let me depart.’ Then the boy soaked it and dropped it into his mouth. And when he had swallowed a little, immediately he gave up the ghost.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 6),
      ' Is it not evident that he was preserved and his life continued till he was absolved, and, his sin having been blotted out, he could be acknowledged for the many good deeds which he had done?” Dionysius relates these things.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[44]->title,
      'subtitle' => $metadata->book->chapters[44]->subtitle,
      'id' => $metadata->book->chapters[44]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' But let us see how the same man addressed Novatus when he was disturbing the Roman brotherhood. As he pretended that some of the brethren were the occasion of his apostasy and schism, as if he had been forced by them to proceed as he had, observe the manner in which he writes to him: “Dionysius to his brother Novatus, greeting. If, as thou sayest, thou hast been led on unwillingly, thou wilt prove this if thou retirest willingly. For it were better to suffer everything, rather than divide the Church of God. Even martyrdom for the sake of preventing division would not be less glorious than for refusing to worship idols. Nay, to me it seems greater. For in the one case a man suffers martyrdom for the sake of his own soul; in the other case in behalf of the entire Church. And now if thou canst persuade or induce the brethren to come to unanimity, thy righteousness will be greater than thine error, and this will not be counted, but that will be praised. But if thou canst not prevail with the disobedient, at least save thine own soul. I pray that thou mayst fare well, maintaining peace in the Lord.” This he wrote to Novatus.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_SectionWithHeader(
    [
      'title' => $metadata->book->chapters[45]->title,
      'subtitle' => $metadata->book->chapters[45]->subtitle,
      'id' => $metadata->book->chapters[45]->_id,
    ],

    new BS_Paragraph(
      null,
      new BS_Verse(null, 1),
      ' He wrote also an epistle to the brethren in Egypt on Repentance. In this he sets forth what seemed proper to him in regard to those who had fallen, and he describes the classes of transgressions.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 2),
      ' There is extant also a private letter on Repentance, which he wrote to Conon, bishop of the parish of Hermopolis, and another of an admonitory character, to his flock at Alexandria. Among them also is the one written to Origen on Martyrdom and to the brethren at Laodicea, of whom Thelymidres was bishop. He likewise sent one on Repentance to the brethren in Armenia, of whom Merozanes was bishop.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 3),
      ' Besides all these, he wrote to Cornelius of Rome, when he had received from him an epistle against Novatus. He states in this that he had been invited by Helenus, bishop of Tarsus, in Cilicia, and the others who were with him, Firmilianus, bishop in Cappadocia, and Theoctistus, of Palestine, to meet them at the synod in Antioch, where some persons were endeavoring to establish the schism of Novatus.',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 4),
      ' Besides this he writes that he had been informed that Fabius had fallen asleep, and that Demetrianus had been appointed his successor in the episcopate of Antioch. He writes also in these words concerning the bishop of Jerusalem: “For the blessed Alexander having been confined in prison, passed away happily.”',
    ),

    new BS_Paragraph(
      null,
      new BS_Verse(null, 5),
      ' In addition to this there is extant also a certain other diaconal epistle of Dionysius, sent to those in Rome through Hippolytus. And he wrote another to them on Peace, and likewise on Repentance; and yet another to the confessors there who still held to the opinion of Novatus. He sent two more to the same persons after they had returned to the Church. And he communicated with many others by letters, which he has left behind him as a benefit in various ways to those who now diligently study his writings.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
