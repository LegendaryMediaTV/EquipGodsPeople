<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => '1 John 2:1–2', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Throughout the New Testament, we see the call to “go and sin no more” ([bible to="John 8:11" /]), “stop sinning” ([bible to="John 5:14" /]), etc ([bible to="Hebrews 10:26–27" /]). At the same time, we also find the message that we will continue to sin as long as we have these sinful bodies ([bible to="Romans 7:20–25" /]). Also, we’re commanded not to sin for simply because we know that we’ll be forgiven ([bible to="Romans 6:1–2" /], [bible to="Jude 1:4" /]). So, how does all this fit together?',
  ),

  new BS_Paragraph(
    null,
    'An “advocate” is “someone that pleads the cause of another.” In this case, it’s Jesus Christ the Righteous One! So, what this passage is saying, is that we should aim NOT to sin, because purposely continuing in sin is a sign of an unchanged heart. However, but when we do stumble, Christ is there to plead our case to the Father.',
  ),

  new BS_Paragraph(
    null,
    '“Propitiation” is another word we don’t hear often (or at all). It means, “to gain or regain the favor or goodwill of; appease.” So, while Christ pleads our case to the Father, He is doing so by His own sacrifice that makes us “not guilty” before the Holy God.',
  ),

  new BS_Paragraph(
    null,
    'The final part of this passage is the cause for much confusion, by saying that Christ isn’t just the propitiation for our sins only, “but also for those of the whole world.” The Bible makes it clear that those that entrust their salvation to Christ will be saved and those that reject Christ will be condemned ([bible to="John 3:16–18" /], [bible to="John 12:47–48" /]). So how could this passage say that Christ is the propitiation for the whole world’s sins? Simply put, it’s because His sacrifice is available to everyone, but only those who entrust their salvation to Christ have Him as their Advocate, pleading His payment for our sins.',
  ),
));
