<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Romans 8:11–13; Ezekiel 36:26–27; Philippians 3:10–11',
    'youtube' => 'VuDUwuL3Jg4',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“At the cross, EVERYTHING changed. We could be FORGIVEN. But it’s not just about this ONE TIME decision where we decide, ‘Okay, we BELIEVE that.’ It’s about a change of a LIFESTYLE. … Now I literally have ACCESS to God. I can PRAY to Him and He HEARS me. … Life becomes COMPLETELY different when you realize, it’s not just about ME and these other people, but I can CONNECT to that HOLY GOD, the CREATOR. And ALL of that was done because of the cross. …'
    ),

    new BS_Paragraph(
      null,
      '[Paul] says, ‘If the Spirit of Him who RAISED Christ from the DEAD now DWELLS IN you.’ Man, just THINK about that for a moment. … Picture that DEAD BODY, the amount of POWER to take a DEAD, CRUCIFIED, MUTILATED body and cause it to RISE UP and come to LIFE. And he says THAT’S the Spirit that’s IN YOU now. And THAT’S the Spirit He gave us to put to DEATH the deeds of the FLESH. THAT’S the Spirit He gave us, he says in Acts 1:8, to be His WITNESSES. …'
    ),

    new BS_Paragraph(
      null,
      'I’ve decided to FOLLOW Him. And He’s given me POWER to follow Him. And I can PUT TO DEATH all those things that BROUGHT DEATH to my life. … And you live on His MISSION for the rest of your life, until He comes back for us and takes us to a place where there’s no more PAIN, no more SICKNESS, no more of this GARBAGE, and EVERYTHING is gonna be made RIGHT.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—Francis Chan, ',
      new BS_Citation(null, 'Greater Than: Day 5'),
    ),
  )
));
