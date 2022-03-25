<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  [
    'verses' => '1 Timothy 6:11–12; 2 Timothy 4:6–8; Hebrews 10:35–39',
    'youtube' => 'TuLPTpc86Bw',
  ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“We ALL must run, whether OLD or YOUNG, whether SICK or HEALTHY, whether BLIND or SEEING. And this is possible for the sick and senile because the race is a race against UNBELIEF, not a race against sickness or senility. … Sickness may come, senility may come, and WE STILL WIN. It is possible for the unhealthy to win the fight against unbelief, because the fight is against LOST HOPE, LOST FAITH, not against LOST HEALTH. … The fight is a fight of FAITH.'
    ),

    new BS_Paragraph(
      null,
      'It’s NOT a fight to get out of bed; it’s a fight to REST IN GOD. It’s NOT a fight to keep all the powers of youth, but to trust in the POWER OF GOD. The race is run against doubt in GOD’S GOODNESS and LOVE for us. It’s a fight to stay SATISFIED in God, in spite of broken hips, and lost sight, and failed memory, and inexplicable fatigue. The race CAN and MAY be run flat out ON YOUR BACK. …'
    ),

    new BS_Paragraph(
      null,
      'What gets us across the finish line with the saints cheering and the crown of life is NOT legs. It’s NOT hands. It’s FAITH and HOPE. … The finishing line is crossed in the end, not by a burst of HUMAN ENERGY, but by COLLAPSING into the arms of God. … May God give us the GRACE to help every [one] FINISH the race, namely, the fight of FAITH.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—John Piper, Ask Pastor John, ',
      new BS_Citation(null, 'I Have Chronic Fatigue, How Do I Not Waste My Life?'),
    ),
  )
));
