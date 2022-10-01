<?php
$html->add(new BS_Banner(
  null,

  'Book two of ',
  new BS_Link(
    ['to' => $metadata->parentURL, 'variant' => 'dark'],
    '“The Imitation of Christ” by Thomas à Kempis'
  ),
  ', discussing the importance of inner purity and carrying your cross by God’s power'
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
      '“The kingdom of God is within you,” says the Lord. [[bible to="Luke 17:21" /]]',
    ),

    new BS_Paragraph(
      null,
      'Turn, then, to God with all your heart. Forsake this wretched world and your soul shall find rest. Learn to despise external things, to devote yourself to those that are within, and you will see the kingdom of God come unto you, that kingdom which is peace and joy in the Holy Spirit, gifts not given to the impious.',
    ),

    new BS_Paragraph(
      null,
      'Christ will come to you offering His consolation, if you prepare a fit dwelling for Him in your heart, whose beauty and glory, wherein He takes delight, are all from within. His visits with the inward man are frequent, His communion sweet and full of consolation, His peace great, and His intimacy wonderful indeed.',
    ),

    new BS_Paragraph(
      null,
      'Therefore, faithful soul, prepare your heart for this Bridegroom that He may come and dwell within you; He Himself says: “If any one love Me, he will keep My word, and My Father will love him, and We will come to him, and will make Our abode with him.” [[bible to="John 14:23" /]]',
    ),

    new BS_Paragraph(
      null,
      'Give place, then, to Christ, but deny entrance to all others, for when you have Christ you are rich and He is sufficient for you. He will provide for you. He will supply your every want, so that you need not trust in frail, changeable men. Christ remains forever, standing firmly with us to the end.',
    ),

    new BS_Paragraph(
      null,
      'Do not place much confidence in weak and mortal man, helpful and friendly though he be; and do not grieve too much if he sometimes opposes and contradicts you. Those who are with us today may be against us tomorrow, and vice versa, for men change with the wind. Place all your trust in God; let Him be your fear and your love. He will answer for you; He will do what is best for you.',
    ),

    new BS_Paragraph(
      null,
      'You have here no lasting home. You are a stranger and a pilgrim wherever you may be, and you shall have no rest until you are wholly united with Christ.',
    ),

    new BS_Paragraph(
      null,
      'Why do you look about here when this is not the place of your repose? Dwell rather upon heaven and give but a passing glance to all earthly things. They all pass away, and you together with them. Take care, then, that you do not cling to them lest you be entrapped and perish. Fix your mind on the Most High, and pray unceasingly to Christ.',
    ),

    new BS_Paragraph(
      null,
      'If you do not know how to meditate on heavenly things, direct your thoughts to Christ’s passion and willingly behold His sacred wounds. If you turn devoutly to the wounds and precious stigmata of Christ, you will find great comfort in suffering, you will mind but little the scorn of men, and you will easily bear their slanderous talk.',
    ),

    new BS_Paragraph(
      null,
      'When Christ was in the world, He was despised by men; in the hour of need He was forsaken by acquaintances and left by friends to the depths of scorn. He was willing to suffer and to be despised; do you dare to complain of anything? He had enemies and defamers; do you want everyone to be your friend, your benefactor? How can your patience be rewarded if no adversity test it? How can you be a friend of Christ if you are not willing to suffer any hardship? Suffer with Christ and for Christ if you wish to reign with Him.',
    ),

    new BS_Paragraph(
      null,
      'Had you but once entered into perfect communion with Jesus or tasted a little of His ardent love, you would care nothing at all for your own comfort or discomfort but would rejoice in the reproach you suffer; for love of Him makes a man despise himself.',
    ),

    new BS_Paragraph(
      null,
      'A man who is a lover of Jesus and of truth, a truly interior man who is free from uncontrolled affections, can turn to God at will and rise above himself to enjoy spiritual peace.',
    ),

    new BS_Paragraph(
      null,
      'He who tastes life as it really is, not as men say or think it is, is indeed wise with the wisdom of God rather than of men.',
    ),

    new BS_Paragraph(
      null,
      'He who learns to live the interior life and to take little account of outward things, does not seek special places or times to perform devout exercises. A spiritual man quickly recollects himself because he has never wasted his attention upon externals. No outside work, no business that cannot wait stands in his way. He adjusts himself to things as they happen. He whose disposition is well ordered cares nothing about the strange, perverse behavior of others, for a man is upset and distracted only in proportion as he engrosses himself in externals.',
    ),

    new BS_Paragraph(
      null,
      'If all were well with you, therefore, and if you were purified from all sin, everything would tend to your good and be to your profit. But because you are as yet neither entirely dead to self nor free from all earthly affection, there is much that often displeases and disturbs you. Nothing so mars and defiles the heart of man as impure attachment to created things. But if you refuse external consolation, you will be able to contemplate heavenly things and often to experience interior joy.',
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
      'Be not troubled about those who are with you or against you, but take care that God be with you in everything you do. Keep your conscience clear and God will protect you, for the malice of man cannot harm one whom God wishes to help. If you know how to suffer in silence, you will undoubtedly experience God’s help. He knows when and how to deliver you; therefore, place yourself in His hands, for it is a divine prerogative to help men and free them from all distress.',
    ),

    new BS_Paragraph(
      null,
      'It is often good for us to have others know our faults and rebuke them, for it gives us greater humility. When a man humbles himself because of his faults, he easily placates those about him and readily appeases those who are angry with him.',
    ),

    new BS_Paragraph(
      null,
      'It is the humble man whom God protects and liberates; it is the humble whom He loves and consoles. To the humble He turns and upon them bestows great grace, that after their humiliation He may raise them up to glory. He reveals His secrets to the humble, and with kind invitation bids them come to Him. Thus, the humble man enjoys peace in the midst of many vexations, because his trust is in God, not in the world. Hence, you must not think that you have made any progress until you look upon yourself as inferior to all others.',
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
      'First keep peace with yourself; then you will be able to bring peace to others. A peaceful man does more good than a learned man. Whereas a passionate man turns even good to evil and is quick to believe evil, the peaceful man, being good himself, turns all things to good.',
    ),

    new BS_Paragraph(
      null,
      'The man who is at perfect ease is never suspicious, but the disturbed and discontented spirit is upset by many a suspicion. He neither rests himself nor permits others to do so. He often says what ought not to be said and leaves undone what ought to be done. He is concerned with the duties of others but neglects his own.',
    ),

    new BS_Paragraph(
      null,
      'Direct your zeal, therefore, first upon yourself; then you may with justice exercise it upon those about you. You are well versed in coloring your own actions with excuses which you will not accept from others, though it would be more just to accuse yourself and excuse your brother. If you wish men to bear with you, you must bear with them. Behold, how far you are from true charity and humility which does not know how to be angry with anyone, or to be indignant save only against self!',
    ),

    new BS_Paragraph(
      null,
      'It is no great thing to associate with the good and gentle, for such association is naturally pleasing. Everyone enjoys a peaceful life and prefers persons of congenial habits. But to be able to live at peace with harsh and perverse men, or with the undisciplined and those who irritate us, is a great grace, a praiseworthy and manly thing.',
    ),

    new BS_Paragraph(
      null,
      'Some people live at peace with themselves and with their fellow men, but others are never at peace with themselves nor do they bring it to anyone else. These latter are a burden to everyone, but they are more of a burden to themselves. A few, finally, live at peace with themselves and try to restore it to others.',
    ),

    new BS_Paragraph(
      null,
      'Now, all our peace in this miserable life is found in humbly enduring suffering rather than in being free from it. He who knows best how to suffer will enjoy the greater peace, because he is the conqueror of himself, the master of the world, a friend of Christ, and an heir of heaven.',
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
      'A man is raised up from the earth by two wings—simplicity and purity. There must be simplicity in his intention and purity in his desires. Simplicity leads to God, purity embraces and enjoys Him.',
    ),

    new BS_Paragraph(
      null,
      'If your heart is free from ill-ordered affection, no good deed will be difficult for you. If you aim at and seek after nothing but the pleasure of God and the welfare of your neighbor, you will enjoy freedom within.',
    ),

    new BS_Paragraph(
      null,
      'If your heart were right, then every created thing would be a mirror of life for you and a book of holy teaching, for there is no creature so small and worthless that it does not show forth the goodness of God. If inwardly you were good and pure, you would see all things clearly and understand them rightly, for a pure heart penetrates to heaven and hell, and as a man is within, so he judges what is without. If there be joy in the world, the pure of heart certainly possess it; and if there be anguish and affliction anywhere, an evil conscience knows it too well.',
    ),

    new BS_Paragraph(
      null,
      'As iron cast into fire loses its rust and becomes glowing white, so he who turns completely to God is stripped of his sluggishness and changed into a new man. When a man begins to grow lax, he fears a little toil and welcomes external comfort, but when he begins perfectly to conquer himself and to walk bravely in the ways of God, then he thinks those things less difficult which he thought so hard before.',
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
      'We must not rely too much upon ourselves, for grace and understanding are often lacking in us. We have but little inborn light, and this we quickly lose through negligence. Often we are not aware that we are so blind in heart. Meanwhile we do wrong, and then do worse in excusing it. At times we are moved by passion, and we think it zeal. We take others to task for small mistakes, and overlook greater ones in ourselves. We are quick enough to feel and brood over the things we suffer from others, but we think nothing of how much others suffer from us. If a man would weigh his own deeds fully and rightly, he would find little cause to pass severe judgment on others.',
    ),

    new BS_Paragraph(
      null,
      'The interior man puts the care of himself before all other concerns, and he who attends to himself carefully does not find it hard to hold his tongue about others. You will never be devout of heart unless you are thus silent about the affairs of others and pay particular attention to yourself. If you attend wholly to God and yourself, you will be little disturbed by what you see about you.',
    ),

    new BS_Paragraph(
      null,
      'Where are your thoughts when they are not upon yourself? And after attending to various things, what have you gained if you have neglected self? If you wish to have true peace of mind and unity of purpose, you must cast all else aside and keep only yourself before your eyes.',
    ),

    new BS_Paragraph(
      null,
      'You will make great progress if you keep yourself free from all temporal cares, for to value anything that is temporal is a great mistake. Consider nothing great, nothing high, nothing pleasing, nothing acceptable, except God Himself or that which is of God. Consider the consolations of creatures as vanity, for the soul that loves God scorns all things that are inferior to Him. God alone, the eternal and infinite, satisfies all, bringing comfort to the soul and true joy to the body.',
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
      'The glory of a good man is the testimony of a good conscience. Therefore, keep your conscience good and you will always enjoy happiness, for a good conscience can bear a great deal and can bring joy even in the midst of adversity. But an evil conscience is ever restive and fearful.',
    ),

    new BS_Paragraph(
      null,
      'Sweet shall be your rest if your heart does not reproach you.',
    ),

    new BS_Paragraph(
      null,
      'Do not rejoice unless you have done well. Sinners never experience true interior joy or peace, for “there is no peace to the wicked,” says the Lord. [[bible to="Isaiah 48:22" /]] Even if they say: “We are at peace, no evil shall befall us and no one dares to hurt us,” do not believe them; for the wrath of God will arise quickly, and their deeds will be brought to naught and their thoughts will perish.',
    ),

    new BS_Paragraph(
      null,
      'To glory in adversity is not hard for the man who loves, for this is to glory in the cross of the Lord. But the glory given or received of men is short lived, and the glory of the world is ever companioned by sorrow. The glory of the good, however, is in their conscience and not in the lips of men, for the joy of the just is from God and in God, and their gladness is founded on truth.',
    ),

    new BS_Paragraph(
      null,
      'The man who longs for the true, eternal glory does not care for that of time; and he who seeks passing fame or does not in his heart despise it, undoubtedly cares little for the glory of heaven.',
    ),

    new BS_Paragraph(
      null,
      'He who minds neither praise nor blame possesses great peace of heart and, if his conscience is good, he will easily be contented and at peace.',
    ),

    new BS_Paragraph(
      null,
      'Praise adds nothing to your holiness, nor does blame take anything from it. You are what you are, and you cannot be said to be better than you are in God’s sight. If you consider well what you are within, you will not care what men say about you. They look to appearances but God looks to the heart. They consider the deed but God weighs the motive.',
    ),

    new BS_Paragraph(
      null,
      'It is characteristic of a humble soul always to do good and to think little of itself. It is a mark of great purity and deep faith to look for no consolation in created things. The man who desires no justification from without has clearly entrusted himself to God: “For not he who commendeth himself is approved,” says St. Paul, “but he whom God commendeth.” [[bible to="2 Corinthians 10:18" /]]',
    ),

    new BS_Paragraph(
      null,
      'To walk with God interiorly, to be free from any external affection—this is the state of the inward man.',
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
      'Blessed is he who appreciates what it is to love Jesus and who despises himself for the sake of Jesus. Give up all other love for His, since He wishes to be loved alone above all things.',
    ),

    new BS_Paragraph(
      null,
      'Affection for creatures is deceitful and inconstant, but the love of Jesus is true and enduring. He who clings to a creature will fall with its frailty, but he who gives himself to Jesus will ever be strengthened.',
    ),

    new BS_Paragraph(
      null,
      'Love Him, then; keep Him as a friend. He will not leave you as others do, or let you suffer lasting death. Sometime, whether you will or not, you will have to part with everything. Cling, therefore, to Jesus in life and death; trust yourself to the glory of Him who alone can help you when all others fail.',
    ),

    new BS_Paragraph(
      null,
      'Your Beloved is such that He will not accept what belongs to another—He wants your heart for Himself alone, to be enthroned therein as King in His own right. If you but knew how to free yourself entirely from all creatures, Jesus would gladly dwell within you.',
    ),

    new BS_Paragraph(
      null,
      'You will find, apart from Him, that nearly all the trust you place in men is a total loss. Therefore, neither confide in nor depend upon a wind-shaken reed, for “all flesh is grass” (Isaiah. 40:6) and all its glory, like the flower of grass, will fade away.',
    ),

    new BS_Paragraph(
      null,
      'You will quickly be deceived if you look only to the outward appearance of men, and you will often be disappointed if you seek comfort and gain in them. If, however, you seek Jesus in all things, you will surely find Him. Likewise, if you seek yourself, you will find yourself—to your own ruin. For the man who does not seek Jesus does himself much greater harm than the whole world and all his enemies could ever do.',
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
      'When Jesus is near, all is well and nothing seems difficult. When He is absent, all is hard. When Jesus does not speak within, all other comfort is empty, but if He says only a word, it brings great consolation.',
    ),

    new BS_Paragraph(
      null,
      'Did not Mary Magdalen rise at once from her weeping when Martha said to her: “The Master is come, and calleth for thee”? [[bible to="John 11:28" /]] Happy is the hour when Jesus calls one from tears to joy of spirit.',
    ),

    new BS_Paragraph(
      null,
      'How dry and hard you are without Jesus! How foolish and vain if you desire anything but Him! Is it not a greater loss than losing the whole world? For what, without Jesus, can the world give you? Life without Him is a relentless hell, but living with Him is a sweet paradise. If Jesus be with you, no enemy can harm you.',
    ),

    new BS_Paragraph(
      null,
      'He who finds Jesus finds a rare treasure, indeed, a good above every good, whereas he who loses Him loses more than the whole world. The man who lives without Jesus is the poorest of the poor, whereas no one is so rich as the man who lives in His grace.',
    ),

    new BS_Paragraph(
      null,
      'It is a great art to know how to converse with Jesus, and great wisdom to know how to keep Him. Be humble and peaceful, and Jesus will be with you. Be devout and calm, and He will remain with you. You may quickly drive Him away and lose His grace, if you turn back to the outside world. And, if you drive Him away and lose Him, to whom will you go and whom will you then seek as a friend? You cannot live well without a friend, and if Jesus be not your friend above all else, you will be very sad and desolate. Thus, you are acting foolishly if you trust or rejoice in any other. Choose the opposition of the whole world rather than offend Jesus. Of all those who are dear to you, let Him be your special love. Let all things be loved for the sake of Jesus, but Jesus for His own sake.',
    ),

    new BS_Paragraph(
      null,
      'Jesus Christ must be loved alone with a special love for He alone, of all friends, is good and faithful. For Him and in Him you must love friends and foes alike, and pray to Him that all may know and love Him.',
    ),

    new BS_Paragraph(
      null,
      'Never desire special praise or love, for that belongs to God alone Who has no equal. Never wish that anyone’s affection be centered in you, nor let yourself be taken up with the love of anyone, but let Jesus be in you and in every good man. Be pure and free within, unentangled with any creature.',
    ),

    new BS_Paragraph(
      null,
      'You must bring to God a clean and open heart if you wish to attend and see how sweet the Lord is. Truly you will never attain this happiness unless His grace prepares you and draws you on so that you may forsake all things to be united with Him alone.',
    ),

    new BS_Paragraph(
      null,
      'When the grace of God comes to a man he can do all things, but when it leaves him he becomes poor and weak, abandoned, as it were, to affliction. Yet, in this condition he should not become dejected or despair. On the contrary, he should calmly await the will of God and bear whatever befalls him in praise of Jesus Christ, for after winter comes summer, after night, the day, and after the storm, a great calm.',
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
      'It is not hard to spurn human consolation when we have the divine. It is, however, a very great thing indeed to be able to live without either divine or human comforting and for the honor of God willingly to endure this exile of heart, not to seek oneself in anything, and to think nothing of one’s own merit.',
    ),

    new BS_Paragraph(
      null,
      'Does it matter much, if at the coming of grace, you are cheerful and devout? This is an hour desired by all, for he whom the grace of God sustains travels easily enough. What wonder if he feel no burden when borne up by the Almighty and led on by the Supreme Guide! For we are always glad to have something to comfort us, and only with difficulty does a man divest himself of self.',
    ),

    new BS_Paragraph(
      null,
      'The holy martyr, Lawrence, with his priest, conquered the world because he despised everything in it that seemed pleasing to him, and for love of Christ patiently suffered the great high priest of God, Sixtus, whom he loved dearly, to be taken from him. Thus, by his love for the Creator he overcame the love of man, and chose instead of human consolation the good pleasure of God. So you, too, must learn to part with an intimate and much-needed friend for the love of God. Do not take it to heart when you are deserted by a friend, knowing that in the end we must all be parted from one another.',
    ),

    new BS_Paragraph(
      null,
      'A man must fight long and bravely against himself before he learns to master himself fully and to direct all his affections toward God. When he trusts in himself, he easily takes to human consolation. The true lover of Christ, however, who sincerely pursues virtue, does not fall back upon consolations nor seek such pleasures of sense, but prefers severe trials and hard labors for the sake of Christ.',
    ),

    new BS_Paragraph(
      null,
      'When, therefore, spiritual consolation is given by God, receive it gratefully, but understand that it is His gift and not your meriting. Do not exult, do not be overjoyed, do not be presumptuous, but be the humbler for the gift, more careful and wary in all your actions, for this hour will pass and temptation will come in its wake.',
    ),

    new BS_Paragraph(
      null,
      'When consolation is taken away, do not at once despair but wait humbly and patiently for the heavenly visit, since God can restore to you more abundant solace.',
    ),

    new BS_Paragraph(
      null,
      'This is neither new nor strange to one who knows God’s ways, for such change of fortune often visited the great saints and prophets of old. Thus there was one who, when grace was with him, declared: “In my prosperity I said: ‘I shall never be moved.’” But when grace was taken away, he adds what he experienced in himself: “Thou didst hide Thy face, and I was troubled.” Meanwhile he does not despair; rather he prays more earnestly to the Lord, saying: “To Thee, O Lord, will I cry; and I will make supplication to my God.” At length, he receives the fruit of his prayer, and testifying that he was heard, says “The Lord hath heard, and hath had mercy on me: the Lord became my helper.” And how was he helped? “Thou hast turned,” he says, “my mourning into joy, and hast surrounded me with gladness.” [[bible to="Psalm 30:10–11" /]]',
    ),

    new BS_Paragraph(
      null,
      'If this is the case with great saints, we who are weak and poor ought not to despair because we are fervent at times and at other times cold, for the spirit comes and goes according to His will. Of this the blessed Job declared: “Thou visitest him early in the morning, and Thou provest him suddenly.” [[bible to="Job 7:18" /]]',
    ),

    new BS_Paragraph(
      null,
      'In what can I hope, then, or in whom ought I trust, save only in the great mercy of God and the hope of heavenly grace? For though I have with me good men, devout brethren, faithful friends, holy books, beautiful treatises, sweet songs and hymns, all these help and please but little when I am abandoned by grace and left to my poverty. At such times there is no better remedy than patience and resignation of self to the will of God.',
    ),

    new BS_Paragraph(
      null,
      'I have never met a man so religious and devout that he has not experienced at some time a withdrawal of grace and felt a lessening of fervor. No saint was so sublimely rapt and enlightened as not to be tempted before and after. He, indeed, is not worthy of the sublime contemplation of God who has not been tried by some tribulation for the sake of God. For temptation is usually the sign preceding the consolation that is to follow, and heavenly consolation is promised to all those proved by temptation. “To him that overcometh,” says Christ, “I will give to eat of the Tree of Life.” [[bible to="Revelation 2:7" /]] Divine consolation, then, is given in order to make a man braver in enduring adversity, and temptation follows in order that he may not pride himself on the good he has done.',
    ),

    new BS_Paragraph(
      null,
      'The devil does not sleep, nor is the flesh yet dead; therefore, you must never cease your preparation for battle, because on the right and on the left are enemies who never rest.',
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
      'Why do you look for rest when you were born to work? Resign yourself to patience rather than to comfort, to carrying your cross rather than to enjoyment.',
    ),

    new BS_Paragraph(
      null,
      'What man in the world, if he could always have them, would not readily accept consolation and spiritual joy, benefits which excel all earthly delights and pleasures of the body? The latter, indeed, are either vain or base, while spiritual joys, born of virtue and infused by God into pure minds, are alone truly pleasant and noble.',
    ),

    new BS_Paragraph(
      null,
      'Now, since the moment of temptation is always nigh, since false freedom of mind and overconfidence in self are serious obstacles to these visitations from heaven, a man can never enjoy them just as he wishes.',
    ),

    new BS_Paragraph(
      null,
      'God does well in giving the grace of consolation, but man does evil in not returning everything gratefully to God. Thus, the gifts of grace cannot flow in us when we are ungrateful to the Giver, when we do not return them to the Fountainhead. Grace is always given to him who is duly grateful, and what is wont to be given the humble will be taken away from the proud.',
    ),

    new BS_Paragraph(
      null,
      'I do not desire consolation that robs me of contrition, nor do I care for contemplation that leads to pride, for not all that is high is holy, nor is all that is sweet good, nor every desire pure, nor all that is dear to us pleasing to God. I accept willingly the grace whereby I become more humble and contrite, more willing to renounce self.',
    ),

    new BS_Paragraph(
      null,
      'The man who has been taught by the gift of grace, and who learns by the lash of its withdrawal, will never dare to attribute any good to himself, but will rather admit his poverty and emptiness. Give to God what is God’s and ascribe to yourself what is yours. Give Him thanks, then, for His grace, but place upon yourself alone the blame and the punishment your fault deserves.',
    ),

    new BS_Paragraph(
      null,
      'Always take the lowest place and the highest will be given you, for the highest cannot exist apart from the lowest. The saints who are greatest before God are those who consider themselves the least, and the more humble they are within themselves, so much the more glorious they are. Since they do not desire vainglory, they are full of truth and heavenly glory. Being established and strengthened in God, they can by no means be proud. They attribute to God whatever good they have received; they seek no glory from one another but only that which comes from God alone. They desire above all things that He be praised in themselves and in all His saints—this is their constant purpose.',
    ),

    new BS_Paragraph(
      null,
      'Be grateful, therefore, for the least gift and you will be worthy to receive a greater. Consider the least gift as the greatest, the most contemptible as something special. And, if you but look to the dignity of the Giver, no gift will appear too small or worthless. Even though He give punishments and scourges, accept them, because He acts for our welfare in whatever He allows to befall us.',
    ),

    new BS_Paragraph(
      null,
      'He who desires to keep the grace of God ought to be grateful when it is given and patient when it is withdrawn. Let him pray that it return; let him be cautious and humble lest he lose it.',
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
      'Jesus has always many who love His heavenly kingdom, but few who bear His cross. He has many who desire consolation, but few who care for trial. He finds many to share His table, but few to take part in His fasting. All desire to be happy with Him; few wish to suffer anything for Him. Many follow Him to the breaking of bread, but few to the drinking of the chalice of His passion. Many revere His miracles; few approach the shame of the Cross. Many love Him as long as they encounter no hardship; many praise and bless Him as long as they receive some comfort from Him. But if Jesus hides Himself and leaves them for a while, they fall either into complaints or into deep dejection. Those, on the contrary, who love Him for His own sake and not for any comfort of their own, bless Him in all trial and anguish of heart as well as in the bliss of consolation. Even if He should never give them consolation, yet they would continue to praise Him and wish always to give Him thanks. What power there is in pure love for Jesus—love that is flee from all self-interest and self-love!',
    ),

    new BS_Paragraph(
      null,
      'Do not those who always seek consolation deserve to be called mercenaries? Do not those who always think of their own profit and gain prove that they love themselves rather than Christ? Where can a man be found who desires to serve God for nothing? Rarely indeed is a man so spiritual as to strip himself of all things. And who shall find a man so truly poor in spirit as to be free from every creature? His value is like that of things brought from the most distant lands.',
    ),

    new BS_Paragraph(
      null,
      'If a man give all his wealth, it is nothing; if he do great penance, it is little; if he gain all knowledge, he is still far afield; if he have great virtue and much ardent devotion, he still lacks a great deal, and especially, the one thing that is most necessary to him. What is this one thing? That leaving all, he forsake himself, completely renounce himself, and give up all private affections. Then, when he has done all that he knows ought to be done, let him consider it as nothing, let him make little of what may be considered great; let him in all honesty call himself an unprofitable servant. For truth itself has said: “When you shall have done all these things that are commanded you, say: ‘we are unprofitable servants.’” [[bible to="Luke 17:10" /]]',
    ),

    new BS_Paragraph(
      null,
      'Then he will be truly poor and stripped in spirit, and with the prophet may say: “I am alone and poor.” [[bible to="Psalm 25:16" /]] No one, however, is more wealthy than such a man; no one is more powerful, no one freer than he who knows how to leave all things and think of himself as the least of all.',
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
      'To many the saying, “Deny thyself, take up thy cross and follow Me,” [[bible to="Matthew 16:24" /]] seems hard, but it will be much harder to hear that final word: “Depart from Me, ye cursed, into everlasting fire.” [[bible to="Matthew 25:41" /]] Those who hear the word of the cross and follow it willingly now, need not fear that they will hear of eternal damnation on the day of judgment. This sign of the cross will be in the heavens when the Lord comes to judge. Then all the servants of the cross, who during life made themselves one with the Crucified, will draw near with great trust to Christ, the judge.',
    ),

    new BS_Paragraph(
      null,
      'Why, then, do you fear to take up the cross when through it you can win a kingdom? In the cross is salvation, in the cross is life, in the cross is protection from enemies, in the cross is infusion of heavenly sweetness, in the cross is strength of mind, in the cross is joy of spirit, in the cross is highest virtue, in the cross is perfect holiness. There is no salvation of soul nor hope of everlasting life but in the cross.',
    ),

    new BS_Paragraph(
      null,
      'Take up your cross, therefore, and follow Jesus, and you shall enter eternal life. He Himself opened the way before you in carrying His cross, and upon it He died for you, that you, too, might take up your cross and long to die upon it. If you die with Him, you shall also live with Him, and if you share His suffering, you shall also share His glory.',
    ),

    new BS_Paragraph(
      null,
      'Behold, in the cross is everything, and upon your dying on the cross everything depends. There is no other way to life and to true inward peace than the way of the holy cross and daily mortification. Go where you will, seek what you will, you will not find a higher way, nor a less exalted but safer way, than the way of the holy cross. Arrange and order everything to suit your will and judgment, and still you will find that some suffering must always be borne, willingly or unwillingly, and thus you will always find the cross.',
    ),

    new BS_Paragraph(
      null,
      'Either you will experience bodily pain or you will undergo tribulation of spirit in your soul. At times you will be forsaken by God, at times troubled by those about you and, what is worse, you will often grow weary of yourself. You cannot escape, you cannot be relieved by any remedy or comfort but must bear with it as long as God wills. For He wishes you to learn to bear trial without consolation, to submit yourself wholly to Him that you may become more humble through suffering. No one understands the passion of Christ so thoroughly or heartily as the man whose lot it is to suffer the like himself.',
    ),

    new BS_Paragraph(
      null,
      'The cross, therefore, is always ready; it awaits you everywhere. No matter where you may go, you cannot escape it, for wherever you go you take yourself with you and shall always find yourself. Turn where you will—above, below, without, or within—you will find a cross in everything, and everywhere you must have patience if you would have peace within and merit an eternal crown.',
    ),

    new BS_Paragraph(
      null,
      'If you carry the cross willingly, it will carry and lead you to the desired goal where indeed there shall be no more suffering, but here there shall be. If you carry it unwillingly, you create a burden for yourself and increase the load, though still you have to bear it. If you cast away one cross, you will find another and perhaps a heavier one. Do you expect to escape what no mortal man can ever avoid? Which of the saints was without a cross or trial on this earth? Not even Jesus Christ, our Lord, Whose every hour on earth knew the pain of His passion. “It behooveth Christ to suffer, and to rise again from the dead, … and so enter into his glory.” [[bible to="Luke 24:46" /], [bible to="Luke 24:26"]26[/bible]] How is it that you look for another way than this, the royal way of the holy cross?',
    ),

    new BS_Paragraph(
      null,
      'The whole life of Christ was a cross and a martyrdom, and do you seek rest and enjoyment for yourself? You deceive yourself, you are mistaken if you seek anything but to suffer, for this mortal life is full of miseries and marked with crosses on all sides. Indeed, the more spiritual progress a person makes, so much heavier will he frequently find the cross, because as his love increases, the pain of his exile also increases.',
    ),

    new BS_Paragraph(
      null,
      'Yet such a man, though afflicted in many ways, is not without hope of consolation, because he knows that great reward is coming to him for bearing his cross. And when he carries it willingly, every pang of tribulation is changed into hope of solace from God. Besides, the more the flesh is distressed by affliction, so much the more is the spirit strengthened by inward grace. Not infrequently a man is so strengthened by his love of trials and hardship in his desire to conform to the cross of Christ, that he does not wish to be without sorrow or pain, since he believes he will be the more acceptable to God if he is able to endure more and more grievous things for His sake.',
    ),

    new BS_Paragraph(
      null,
      'It is the grace of Christ, and not the virtue of man, which can and does bring it about that through fervor of spirit frail flesh learns to love and to gain what it naturally hates and shuns.',
    ),

    new BS_Paragraph(
      null,
      'To carry the cross, to love the cross, to chastise the body and bring it to subjection, to flee honors, to endure contempt gladly, to despise self and wish to be despised, to suffer any adversity and loss, to desire no prosperous days on earth—this is not man’s way. If you rely upon yourself, you can do none of these things, but if you trust in the Lord, strength will be given you from heaven and the world and the flesh will be made subject to your word. You will not even fear your enemy, the devil, if you are armed with faith and signed with the cross of Christ.',
    ),

    new BS_Paragraph(
      null,
      'Set yourself, then, like a good and faithful servant of Christ, to bear bravely the cross of your Lord, Who out of love was crucified for you. Be ready to suffer many adversities and many kinds of trouble in this miserable life, for troublesome and miserable life will always be, no matter where you are; and so you will find it wherever you may hide. Thus it must be; and there is no way to evade the trials and sorrows of life but to bear them.',
    ),

    new BS_Paragraph(
      null,
      'Drink the chalice of the Lord with affection it you wish to be His friend and to have part with Him. Leave consolation to God; let Him do as most pleases Him. On your part, be ready to bear sufferings and consider them the greatest consolation, for even though you alone were to undergo them all, the sufferings of this life are not worthy to be compared with the glory to come.',
    ),

    new BS_Paragraph(
      null,
      'When you shall have come to the point where suffering is sweet and acceptable for the sake of Christ, then consider yourself fortunate, for you have found paradise on earth. But as long as suffering irks you and you seek to escape, so long will you be unfortunate, and the tribulation you seek to evade will follow you everywhere. If you put your mind to the things you ought to consider, that is, to suffering and death, you would soon be in a better state and would find peace.',
    ),

    new BS_Paragraph(
      null,
      'Although you were taken to the third heaven with Paul, you were not thereby insured against suffering. Jesus said: “I will show him how great things he must suffer for My name’s sake.” [[bible to="Acts 9:16" /]] To suffer, then, remains your lot, if you mean to love Jesus and serve Him forever.',
    ),

    new BS_Paragraph(
      null,
      'If you were but worthy to suffer something for the name of Jesus, what great glory would be in store for you, what great joy to all the saints of God, what great edification to those about you! For all men praise patience though there are few who wish to practice it.',
    ),

    new BS_Paragraph(
      null,
      'With good reason, then, ought you to be willing to suffer a little for Christ since many suffer much more for the world.',
    ),

    new BS_Paragraph(
      null,
      'Realize that you must lead a dying life; the more a man dies to himself, the more he begins to live unto God.',
    ),

    new BS_Paragraph(
      null,
      'No man is fit to enjoy heaven unless he has resigned himself to suffer hardship for Christ. Nothing is more acceptable to God, nothing more helpful for you on this earth than to suffer willingly for Christ. If you had to make a choice, you ought to wish rather to suffer for Christ than to enjoy many consolations, for thus you would be more like Christ and more like all the saints. Our merit and progress consist not in many pleasures and comforts but rather in enduring great afflictions and sufferings.',
    ),

    new BS_Paragraph(
      null,
      'If, indeed, there were anything better or more useful for man’s salvation than suffering, Christ would have shown it by word and example. But He clearly exhorts the disciples who follow Him and all who wish to follow Him to carry the cross, saying: “If any man will come after Me, let him deny himself, and take up his cross daily, and follow Me.” [[bible to="Luke 9:23" /]]',
    ),

    new BS_Paragraph(
      null,
      'When, therefore, we have read and searched all that has been written, let this be the final conclusion—that through much suffering we must enter into the kingdom of God.',
    ),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_PreviousNext([
    'previous' => $metadata->previous,
    'next' => $metadata->next,
    'className' => 'mt-5'
  ]),
));
