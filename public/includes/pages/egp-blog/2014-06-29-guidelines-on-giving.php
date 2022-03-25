<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Matthew 6:1–4; Matthew 10:7–10'],

  new BS_BiblePassage(['passage' => 'Luke 6:30', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'It’s easy to get jaded in today’s society to the point that our first thoughts when someone asks for money are: “they’re probably just going to buy drugs/alcohol/cigarettes with it,” “if they spent this time finding a job instead of just begging, they wouldn’t be in this situation,” or “I don’t want to be an enabler and reward their laziness.” The truth is, ALL those things may very well be true in a particular situation. The bottom line is, however, Jesus said, “give to EVERYONE who asks of you” and didn’t add an “except if you don’t think they deserve it or will misuse it” clause.'
  ),

  new BS_Paragraph(
    null,
    'So where’s the balance? I mean, if someone asks for your car, should you just immediately hand them the keys and walk to work every day? If someone has a sign asking for money should you go empty your bank account for them because “you can’t out-give God”, right? Should you remortgage your house, refinance your car, or get a loan so you can give it away? Probably not any or these…but maybe. As always, the real question is, “What does God want me to do in this situation?” Maybe God DOES want you to downsize what you have so that you will know that HE is all you need. Maybe God DOES want you to give all your money away to someone so that you will see that HE always provides.'
  ),

  new BS_Paragraph(
    null,

    'In this passage there is a caveat that many overlook. It says, “Give to everyone who asks of you,” however, it doesn’t say that you have to give as MUCH as they asked of you or even WHAT they asked of you. In fact, Peter and John were once asked for alms by a beggar, but they healed him instead of giving him food or money and then used it as an opportunity to tell people about Jesus. (',
    new BS_BibleLink(['to' => 'Acts 3']),
    ')',
  ),

  new BS_BiblePassage(['passage' => '2 Corinthians 8:11–15', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'It’s easy to judge and possibly even judge rightly, but we should instead train our instincts to first ask why we need to keep what’s asked for rather than why shouldn’t we give it to them. We should ask what we CAN give them and how we can show them Christ through it. And, of course, we should first seek God’s wisdom instead of solely relying on our own deductive reasoning.'
  ),
));
