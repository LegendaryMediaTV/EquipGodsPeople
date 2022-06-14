<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 19:26; Mark 9:23; Romans 3:19–20; Galatians 3:24–26'],

  new BS_Paragraph(
    null,
    'Sometimes God asks us to do the impossible, because through Him, all things are possible.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Meanwhile it is to be noted that the whole Scripture of God is divided into two parts: precepts and promises. The precepts certainly teach us what is good, but what they teach is not forthwith done. For they show us what we ought to do, but do not give us the power to do it. They were ordained, however, for the purpose of showing man to himself, that through them he may learn his own impotence for good and may despair of his own strength.',
    ),

    new BS_Paragraph(
      null,
      '…',
    ),

    new BS_Paragraph(
      null,
      'Then comes in that other part of Scripture, the promises of God, which declare the glory of God … For what is impossible for you by all the works of the law, which are many and yet useless, you shall fulfill in an easy and summary way through faith, because God the Father has made everything to depend on faith, so that whosoever has it has all things, and he who has it not has nothing.',
    ),

    new BS_Paragraph(
      null,
      '…',
    ),

    new BS_Paragraph(
      null,
      'Thus the promises of God give that which the precepts exact, and fulfill what the law commands; so that all is of God alone, both the precepts and their fulfillment. He alone commands; He alone also fulfills.',
    ),

    new BS_BlockquoteFooter(
      null,

      '—Martin Luther, ',
      new BS_Citation(null, 'Concerning Christian Liberty'),
      ', AD 1520',
    ),
  ),
));
