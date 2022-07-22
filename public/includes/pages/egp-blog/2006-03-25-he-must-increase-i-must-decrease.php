<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'John 3:26–30', 'version' => 'NLT']),

  new BS_Heading3(null, 'Getting into God’s Stride'),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'The true test of a person’s spiritual life and character is not what he does in the extraordinary moments of life, but what he does during the ordinary times when there is nothing tremendous or exciting happening. A person’s worth is revealed in his attitude toward the ordinary things of life when he is not under the spotlight (see [bible to="John 1:35–37" /] and [bible to="John 3:30"]3:30[/bible]). It is painful work to get in step with God and to keep pace with Him—it means getting your second wind spiritually. In learning to walk with God, there is always the difficulty of getting into His stride, but once we have done so, the only characteristic that exhibits itself is the very life of God Himself. The individual person is merged into a personal oneness with God, and God’s stride and His power alone are exhibited.'
    ),

    new BS_Paragraph(
      null,
      'It is difficult to get into stride with God, because as soon as we start walking with Him we find that His pace has surpassed us before we have even taken three steps. He has different ways of doing things, and we have to be trained and disciplined in His ways. It was said of Jesus—”He will not fail nor be discouraged…” ([bible to="Isaiah 42:4" /]) because He never worked from His own individual standpoint, but always worked from the standpoint of His Father. And we must learn to do the same. Spiritual truth is learned through the atmosphere that surrounds us, not through intellectual reasoning. It is God’s Spirit that changes the atmosphere of our way of looking at things, and then things begin to be possible which before were impossible. Getting into God’s stride means nothing less than oneness with Him. It takes a long time to get there, but keep at it. Don’t give up because the pain is intense right now—get on with it, and before long you will find that you have a new vision and a new purpose.'
    ),

    new BS_BlockquoteFooter(
      null,

      '—Oswald Chambers, ',
      new BS_Citation(
        null,
        new BS_Link(
          ['to' => 'https://www.amazon.com/My-Utmost-His-Highest-Updated-ebook/dp/B0049U4WA6/'],
          'My Utmost for His Highest: Special Updated Edition'
        )
      ),
      ', October 12',
      new BS_Superscript(null, 'th'),
      ' entry',
    ),
  ),

  new BS_Heading2(null, 'Response'),

  new BS_List([
    'ordered' => true,
    'items' => [
      'Read [bible to="Isaiah 55:8–9" /]. What is an area of your life that you previously refused to turn over to God? What was it like before and after you finally turned it over to Him?',
      'It is said that, “who you really are is truly revealed when no one else is watching.” With that concept in mind, are you happy with who you are? What needs to change?',
      'The way we live our lives in the world helps pave the way to salvation for unbelievers. What part of your lifestyle must decrease and what part of Christ in you must increase to smooth that path?',
      'How can you and the church you’re a part of experience the concept of “decreasing you and increasing Christ in you” on a deeper level?',
    ],
  ]),
));
