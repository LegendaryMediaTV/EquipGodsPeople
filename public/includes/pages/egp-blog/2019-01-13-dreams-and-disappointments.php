<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Proverbs 13:12; 1 Corinthians 1:9; Psalm 119:116; Ephesians 3:17–21; 1 Peter 5:6–7, 10; 2 Corinthians 1:19–22; Luke 5:16; Romans 12:2'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“DISAPPOINTMENT is the mother of DEPRESSION. … Not dealing with it in early stages DEEPLY affects our EMOTIONAL, MENTAL, and SPIRITUAL health. … Disappointment actually makes us VULNERABLE to SPIRITUAL DISEASE. … Disappointment is a THIEF, … because it ROBS us of a sense of VISION and PURPOSE. … Disappointment is what people HIDE BEHIND who, secretly in their heart, accuse GOD of not being FAITHFUL. …'
    ),

    new BS_Paragraph(
      null,
      'Many believers—because of DISAPPOINTMENT—have LOST the capacity to DREAM. … You are LIVING and BREATHING because He has hope you and I will BELIEVE for the IMPOSSIBLE. You are living and breathing because, when the impossibilities of life YIELD to a son or a daughter, the Father is REVEALED and He is GLORIFIED. He is EXALTED. … You want to display the NATURE, the KINDNESS, the HEART of God in such a way that people around you are IMPACTED by who HE IS. …'
    ),

    new BS_Paragraph(
      null,
      'Our capacity to dream is fed, fueled, inspired by our connection to the PROMISES God has given us that we’ve NOT YET seen fulfilled. … And you get ALONE with God and you just say, ‘God, You’ve GOTTA do SOMETHING in me because this ISN’T okay. This isn’t okay.’ … It has to matter ENOUGH. …'
    ),

    new BS_Paragraph(
      null,
      'So, you get back to the drawing board and you say, ‘Here I am AGAIN. Teach me how to PRAY. Teach me how to DIALOGUE with You in such a way that things CHANGE around me and You’re HONORED and GLORIFIED. Do something IN ME and THROUGH ME, so that when we talk, TRANSFORMATION takes place.’”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.podcastics.com/podcast/episode/promises-fulfilled-93484/'],

        'Bill Johnson, Bethel Church, ',
        new BS_Citation(null, 'Promises Fulfilled'),
      ),
    ),
  )
));
