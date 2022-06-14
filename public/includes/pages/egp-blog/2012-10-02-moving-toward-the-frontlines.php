<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Ephesians 6:11–12; Romans 7:22–23; 1 Peter 2:11; Matthew 6:13; Luke 22:40–46; 1 Corinthians 10:13'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '[b]Johann von Staupitz:[/b] What is it you seek, Aleander?',
    ),

    new BS_Paragraph(
      null,
      '[b]Girolamo Aleander:[/b] To serve God. To serve Him with all my heart.',
    ),

    new BS_Paragraph(
      null,
      '[b]Johann von Staupitz:[/b] And that is how you will be tempted.',
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Citation(null, new BS_Link(['to' => 'https://www.amazon.com/Luther-Joseph-Fiennes/dp/B0002C9D9U/'], 'Luther')),
      ' (a movie that I highly recommend)',
    ),
  ),

  new BS_Paragraph(
    null,
    'When choosing to pursue God, we have visions of the heavens opening, angels singing, and random gifts being bestowed upon us. But the truth is that we’re at war. We’re at war with the Devil and his minions and within ourselves against our sinful desires. Pursuing God will bring blessings, but it will also put you on the frontlines!',
  ),

  new BS_Paragraph(
    null,
    'I think that this is why Jesus said, “lead us not into temptation” in the model prayer. And twice in the Garden of Gethsemane, He told the disciples, “Pray that you may not enter into temptation.”',
  ),

  new BS_Paragraph(
    null,
    'While everything cannot be blamed on the Devil, he will be sure to leverage any weaknesses of his enemy. Just remember that, “No temptation has overtaken you but such as is common to man; and God is faithful, who will not allow you to be tempted beyond what you are able, but with the temptation will provide the way of escape also, so that you will be able to endure it.”',
  ),

  new BS_BiblePassage(['passage' => 'Romans 8:37', 'version' => 'NASB']),
));
