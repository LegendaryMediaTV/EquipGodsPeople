<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“Even though the [sc]Lord[/sc] wants us to seek Him and find Him, He would be doing us a great disservice if His blessings were too easily attained. This would only feed our slothfulness. He often makes Himself difficult to find so we will have to search for Him more diligently.',
    ),

    new BS_Paragraph(
      null,
      'In a way, the [sc]Lord[/sc] is like the parent who teaches His child to walk by backing away so the child has to take more steps to reach Him. He wants to bring us to the place where we are seeking Him all the time with all our hearts. But instead of taking more steps to reach Him, we often give up and sit down, thus not reaching Him at all.',
    ),

    new BS_Paragraph(
      null,
      'The [sc]Lord[/sc] does not want us to stop seeking Him until we find Him. He wants to answer all of our prayers. The answer may be ‘no,’ but we should never stop seeking Him until we have heard from Him. Silence is not an answer to prayer. If He were to answer some of our half-hearted prayers, it would be detrimental to our spiritual growth. We must not give up until we have found Him.”',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/There-Trees-Garden-Divine-Destiny/dp/1929371551/'],

        'Rick Joyner, ',
        new BS_Citation(null, 'There Were Two Trees in the Garden'),
        ', chapter 9',
      ),
    ),
  )
));
