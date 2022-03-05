<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“One of the most powerful things that you can actually do is just BE PRESENT. I’m talking about with some of our broken people. Just BE PRESENT. … We do JOY really well. We do FUN really well. … The side effect of our culture is that we don’t do PAIN very well. … Sometimes, in the midst of our culture, we prematurely SUBVERT the process of MOURNING that’s to lead to COMFORT. And because people are prematurely … BROUGHT OUT of the process, sometimes the grief comes out in OTHER WAYS simply because, the PROCESS of wholeness is: I MOURN to a place of COMFORT. … It is true that some people get STUCK in that. We know that, but my point is that it’s important to MOURN with people who MOURN, so that we can REJOICE with people who REJOICE. …'
    ),

    new BS_Paragraph(
      null,
      'Most people don’t need to be CHEERED UP, they need you to JUMP IN THEIR PAIN and say, ‘I GET YOU. I UNDERSTAND YOU,’ and not try to FIX THEM. … If I see a situation that there’s pain involved in and I don’t have a SOLUTION, I tend to not want to be INVOLVED in it. … Our city NEEDS you, but they don’t necessarily need you to be the ANSWER MAN or ANSWER WOMAN. They just need you to BE THERE WITH THEM.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'http://podcasts.ibethel.org/en/podcasts/born-for-times-of-crisis'],

        'Kris Vallotton, Bethel Church, ',
        new BS_Citation(null, 'Born for Times of Crisis'),
      ),
    ),
  )
));
