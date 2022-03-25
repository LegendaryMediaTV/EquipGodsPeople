<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Galatians 5:16–24'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“A Christian is not a person who experiences NO bad desires. A Christian is a person who is at WAR with those desires by the POWER of the Spirit.'
    ),

    new BS_Paragraph(
      null,
      'CONFLICT in your soul is not all bad. Even though we long for the day when our flesh will be utterly defunct and only PURE and LOVING desires will fill our hearts, yet there is something worse than the war within between flesh and Spirit; namely, NO WAR within because the flesh controls the citadel and all the outposts.'
    ),

    new BS_Paragraph(
      null,
      'PRAISE GOD for the war within! Serenity in sin is DEATH. The Spirit has landed to do BATTLE with the flesh. So take heart if your soul feels like a BATTLEFIELD at times. The sign of whether you are indwelt by the Spirit is NOT that you have no bad desires, but that you are at WAR with them!'
    ),

    new BS_Paragraph(
      null,

      'But when you take ',
      new BS_BibleLink(
        ['to' => 'Galatians 5:16–17'],
        '[Galatians 5] verses 16 and 17'
      ),
      ' together, the main point is not WAR, but VICTORY for the Spirit.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.desiringgod.org/messages/the-war-within-flesh-versus-spirit'],

        'John Piper, ',
        new BS_Citation(null, 'The War Within: Flesh vs Spirit'),
      ),
    ),
  )
));
