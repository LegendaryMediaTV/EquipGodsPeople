<?php
$html->add(new BS_BlogEntryPage(
  ['metadata' => $metadata],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“I was sitting in my chair in our living room … I had made myself a cup of hot tea, and settled in to enjoy a time of fellowship with Jesus, which I do every morning over His word. I remember pausing before I began to read … and thinking ‘I LOVE this quietness. I LOVE this room. … I LOVE the lighting in this little small spot where Jesus and I meet. … And I have no pain ANYWHERE in my body.’'
    ),

    new BS_Paragraph(
      null,
      'And then my mind shifted. … I was imagining myself … suffering for Jesus in some hostile environment. All I had to do, ALL I had to do to get back to my CHAIR and my TEA and my LIGHT was say ‘Jesus is NOT my Lord, Jesus is NOT my Savior, and Jesus is NOT my treasure.’ That’s ALL I had to do to have this PLACE again. …'
    ),

    new BS_Paragraph(
      null,
      'And I wondered, and I pleaded, … ‘God, please, GIVE ME enough of Yourself, SHOW ME enough of the Father and of the Son by the power of your SPIRIT so that nothing, Nothing, NOTHING would EVER move me to say such a thing. WHATEVER I face, o God, GRANT ME that it would NOT happen. That I would not want this sweet MOMENT so BADLY I would PAY for it at the cost of denying You.’ …'
    ),

    new BS_Paragraph(
      null,
      'When you are in the FINAL throes of cancer or moving toward DEATH in [another chronic/terminal disease] … and you resolve IN and THROUGH [that], to suffer as a CHRISTIAN, to MAGNIFY the Name of Jesus, you are experiencing the SAME THINGS that a person does when he is PERSECUTED for righteousness’ sake. … The question before your SOUL isn’t essentially different. … ‘Will I TURN AGAINST Jesus in anger or will I TRUST Him?’ …'
    ),

    new BS_Paragraph(
      null,

      'In the hour of trial, the question will be THROWN in your face: ‘Where is your GOD? HE can’t stop this PERSECUTION. HE can’t stop this CANCER. What GOOD is HE? WHERE is HE?’ And the answer, according to this text [in ',
      new BS_BibleLink(['to' => '1 Peter 4:14']),
      '], that God will give you is, ‘[sc]I Am[/sc] HERE, resting on YOU, in your death throes, with GLORY and GOD.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.desiringgod.org/messages/how-to-seek-the-holy-spirit'],

        'John Piper ',
        new BS_Citation(null, 'How to Seek the Holy Spirit'),
      ),
    ),
  )
));
