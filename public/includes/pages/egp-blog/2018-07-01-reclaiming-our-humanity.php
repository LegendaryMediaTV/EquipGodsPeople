<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => 'Matthew 5:38–42',
    'youtube' => 'XFp0Tu5NZUA',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“The reason we become so FRAGILE is because we don’t know the POWER of FORGIVENESS. Forgiveness doesn’t make you WEAKER, forgiveness makes you STRONGER. … Instead of always getting HURT by what ‘everyone else’ did, why don’t you just ELEVATE and show them what YOU do? …'
    ),

    new BS_Paragraph(
      null,
      'You should be GIVING more than you take, always, always, ALWAYS treating others with RESPECT. So I want to remember to always give my COAT when they’re demanding my SHIRT. You cannot FORCE me to be more generous than I already WANT to be. … Because that’s what we’re CALLED to be. … We’re supposed to be the movement of GENEROSITY that destroys the power of GREED in the world. …'
    ),

    new BS_Paragraph(
      null,
      'Right now you feel POWERLESS, but I want you to know there’s a strategy where NO ONE can EVER steal your power. When you come to the END of that [extra] mile, … THAT’S when you show them that you were NEVER their SLAVE. You have ALWAYS been FREE. … I have ANOTHER mile in me. … I don’t live a life of OBLIGATION, I live a life of INTENTION. I’m not doing this because you have POWER over me, I’m doing this because you’re POWERLESS over me.'
    ),

    new BS_Paragraph(
      null,
      'And Jesus says, ‘Look, you’re gonna have to TRUST Me. The only way you’re going to reclaim your HUMANITY is if you discover the STRENGTH of FORGIVENESS, and the WEALTH of GENEROSITY, and you need to understand the FREEDOM of SERVANTHOOD.’ Because the moment you choose the path of HUMILITY, you’ll never lose your HUMANITY.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—Erwin McManus, ',
      new BS_Citation(null, 'Reclaiming Our Humanity'),
    ),
  )
));
