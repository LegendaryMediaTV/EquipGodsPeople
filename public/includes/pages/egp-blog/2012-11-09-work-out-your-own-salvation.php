<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Romans 5:8–9; Hebrews 12:1–2; Acts 15:10–11; Matthew 23:27'],

  new BS_BiblePassage(['passage' => 'Philippians 2:12–13', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Every believer has a sinful background. After all, that’s the reason we needed salvation! Through the power of Christ and the work of the Holy Spirit, we can overcome temptation. There comes a point in your spiritual growth where you need to “work out your own salvation with fear and trembling,” meaning that within the guidelines of scripture and the Holy Spirit, figure out what’s best for you in order to help you stay on track.',
  ),

  new BS_Paragraph(
    null,
    'Jesus put it this way in [bible to="Matthew 18:8" /], “If your hand or your foot causes you to stumble, cut it off and throw it from you; it is better for you to enter life crippled or lame, than to have two hands or two feet and be cast into the eternal fire.”',
  ),

  new BS_Paragraph(
    null,
    'If you have a tendency to get drunk, you probably need to abstain from drinking alcohol indefinitely and maybe avoid places that make it easily available. If you have an addiction to pornography, you might need prohibit yourself from being alone on a computer or watching TV after a certain time, or at all. If you are violent or vulgar, you should probably try to avoid taking in violent and vulgar things.',
  ),

  new BS_Paragraph(
    null,
    'In “working out our own salvation,” we must be careful not force our guidelines on others as if they were God’s law. This is the mistake that the Pharisees often made, where they had an appearance of godliness, but internally overcome by sin.',
  ),

  new BS_BiblePassage(['passage' => 'Colossians 2:20–23', 'version' => 'NLT']),
));
