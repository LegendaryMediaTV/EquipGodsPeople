<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'James 1:19–27', 'version' => 'NLT']),

  new BS_BiblePassage(['passage' => 'James 2:8–13', 'version' => 'NLT']),

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'What we do is bears witness to what we believe. What would people say that you believe by how you live?',
      'Read [bible to="John 13:34–35" /]. The love we express to others is a testimony of our dedication to Christ. With this in mind, would a stranger believe that you are a genuine Christian? Why or why not?',
      '[bible to="James 2:12" /] basically says that we are to live our lives as though we’ll be judged by the measure of our love. How can we better express Christ’s love to this hurting world?',
    ],
  ]),

  new BS_Heading2(null, 'One More for Jesus'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'My father was a minister for over fifty years, serving mostly in small, rural churches. He was a simple preacher, but he was a man with a mission. His favorite activity was taking teams of volunteers overseas to build church buildings for small congregations. In his lifetime, Dad built over 150 churches around the world.'
    ),

    new BS_Paragraph(
      null,
      'In 1999, my father died of cancer. In the final week of his life the disease kept him awake in a semi-conscious state nearly twenty-four hours a day. As he dreamed, he’d talk out loud about what he was dreaming. Sitting by his bedside, I learned a lot about my dad by just listening to his dreams. He relived one church building project after another.'
    ),

    new BS_Paragraph(
      null,
      'One night near the end, while my wife, my niece, and I were by his side, Dad suddenly became very active and tried to get out of bed. Of course, he was too weak, and my wife insisted he lay back down. But he persisted in trying to get out of bed, so my wife finally asked, “Jimmy, what are you trying to do?” He replied, “Got to save one more for Jesus! Got to save one more for Jesus! Got to save one more for Jesus!” He began to repeat that phrase over and over.'
    ),

    new BS_Paragraph(
      null,
      'During the next hour, he said the phrase probably a hundred times. “Got to save one more for Jesus!” As I sat by his bed with tears flowing down my cheeks, I bowed my head to thank God for my dad’s faith. At that moment, Dad reached out and placed his frail hand on my head and said, as if commissioning me, “Save one more for Jesus! Save one more for Jesus!”'
    ),

    new BS_Paragraph(
      null,
      'I intend for that to be the theme of the rest of my life. I invite you to consider it as a focus for your life, too, because nothing will make a greater difference for eternity. If you want to be used by God, you must care about what God cares about; what He cares about most is the redemption of the people He made. He wants His lost children found! Nothing matters more to God; the Cross proves that. I pray that you will always be on the lookout to reach “one more for Jesus” so that when you stand before God one day, you can say, “Mission accomplished!”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/Purpose-Driven-Life-What-Earth/dp/031033750X/'],

        'Rick Warren, ',
        new BS_Citation(null, 'The Purpose Driven Life'),
        ', “One More for Jesus”'
      ),
    ),
  ),
));
