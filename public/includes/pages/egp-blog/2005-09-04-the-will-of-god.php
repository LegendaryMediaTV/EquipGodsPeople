<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Heading2(null, 'Commanded, forbidden, or free to choose'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'The choices that we make from day to day involve only four kinds of things:',
    ),

    new BS_List([
      'items' => [
        'Those concerning which God has said an emphatic “no.”',
        'Those about which He has said an equally emphatic “yes.”',
        'Those concerning which He wants us to consult our own sanctified preferences.',
        'Those few matters which require special guidance from the Lord to prevent us from making serious mistakes.',
      ],
    ]),

    new BS_Paragraph(
      null,
      'First, put this down as an unfailing rule: Never seek the leading of the Lord concerning an act that is forbidden in God’s Word. To do so is to convict ourselves of insincerity.',
    ),

    new BS_Paragraph(
      null,
      'Again, prophet, psalmist, apostle and our blessed Lord point out the way of positive obedience. His yoke is easy, His burden is light, so let this be the second rule: Never seek the leading of the Lord concerning an act commanded in the Scriptures.',
    ),

    new BS_Paragraph(
      null,
      'Now, a happy truth too often overlooked in our anxious search for God’s will is that in the majority of decisions touching our lives God expresses no choice but allows us to choose our preference. Some Christians walk uncertainly, worrying about which profession they should enter, which car they should drive, which school they should attend, where they should live and other such matters. The Lord has set Christians to follow their own personal bent, guided only by their love for Him and their fellow men.',
    ),

    new BS_Paragraph(
      null,
      'It appears more spiritual to seek God’s leading than to do the obvious thing. But it is not. If God gave you a watch would you honor Him more by asking Him for the time of day or by consulting the watch?',
    ),

    new BS_Paragraph(
      null,
      'Except for those things that are specifically commanded or forbidden, it is God’s will that we be free to choose. The shepherd leads the sheep but he does not decide which tuft of grass the sheep shall nibble. Touching our life on earth God is pleased when we are pleased. He wills that we be as free as birds to soar and sing our Maker’s praises without anxiety. God’s choice for us may be any one of a score of possible choices. The Christian who is wholly and joyously surrendered to Christ cannot make a wrong choice.',
    ),

    new BS_Paragraph(
      null,
      'But what about those times when much is at stake and we can discover no clear scriptural instruction and yet are forced to choose between two possible courses? We have God’s faithful promise to guide us aright.',
    ),

    new BS_Paragraph(
      null,
      '…',
    ),

    new BS_Paragraph(
      null,
      'Take your problem to the Lord. Remind Him of these promises. If you are dedicated to God’s purpose, He will not permit you to make a mistake.',
    ),

    new BS_BlockquoteFooter(null, '—A.W. Tozer'),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Ask God for direction'),

  new BS_BiblePassage(['passage' => 'James 1:2–8', 'version' => 'NLT']),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Combining the Spirit and Word'),

  new BS_Blockquote(
    null,

    new BS_List([
      'items' => [
        'I seek to get my heart into such a state that it has no will of its own in a given matter. When we are ready to do the Lord’s will—whatever it may be—nine-tenths of the difficulties are overcome.',
        'Having done this, I do not leave the result to feeling or simple impression. If I do so, I make myself liable to great delusions.',
        'I seek the will of the Spirit of God through, or in connection with, God’s Word. The Spirit and the Word must be combined. If I look to the Spirit alone without the Word, I lay myself open to great delusions also. If the Holy Spirit guides us, He will do it according to the Scriptures, never contrary to them.',
        'Next I take into account providential circumstances. These often plainly indicate God’s will in connection with His Word and Spirit.',
        'I ask God in prayer to reveal His will to me.',
        'Thus, through prayer, the study of the Word and reflection, I come to a deliberate judgment according to the best of my ability and knowledge. If my mind is thus at peace and continues so after two or three more petitions, I proceed accordingly. I have found this method always effective in trivial or important issues.',
      ],
    ]),

    new BS_BlockquoteFooter(null, '—George Müller'),
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Knowing His voice'),

  new BS_Paragraph(
    null,
    'It’s a matter of spiritual maturity. As you draw closer to Christ you’ll know His voice. ([bible to="John 10:24–27" /]) You must study His word because it is the filter of evil. Do a study of the temptations…how did Christ combat the Devil? Plain and simple, He used Scripture. ([bible to="Luke 4:1–13" /]) Even when Satan used Scripture, Jesus used Scripture back (in context of course). Even when the Bible doesn’t directly deal with an issue, the basic concepts behind the issue are there.'
  ),

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Give a recent example of when you sought God’s guidance on an issue.',
      'How did God bless you through your obedience?',
      'Give a recent example of when you should have sough God’s guidance but didn’t.',
      'What did you learn about God’s character through that experience?',
      'How can you experience the joy of living God’s will?',
    ],
  ]),
));
