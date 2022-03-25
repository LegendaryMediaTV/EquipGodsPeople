<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Hebrews 4:9–12; 1 Peter 1:6–9; Romans 8:35–39; Matthew 4:1–4; Psalm 18:4–6; Luke 15:18–24'],

  new BS_BiblePassage(['passage' => 'Jeremiah 31:2–4', 'version' => 'ESV']),

  new BS_Paragraph(
    null,
    'The sword mentioned here could be a literal sword, but more often, it’s a spiritual one, whether it’s spiritual oppression, persecution, or just seemingly the things of life. Regardless, they are all opportunities to draw us closer to God. When things get really bad, we can feel that we barely escape that sword with our very lives. This is one of the times that God calls us to the wilderness.'
  ),

  new BS_Paragraph(
    null,
    'Most frequently, He pulls us aside for a short stint, but occasionally it can be for years. The wilderness can be very discouraging, especially the longer you’re in it. Satan attacks during these extended periods, trying to convince us that we simply need to “survive the wilderness,” even questioning the very goodness of God for “leaving you there to die alone.”'
  ),

  new BS_Paragraph(
    null,
    'However, God brings us there because He wants to teach us something that’s not easily learned in the midst of the masses. It’s not something you learn by hearing another sermon or singing another song. It’s a heart shift. He’s pulling us away from all the noise so we can hear His voice, the Bread. He’s pulling us away from our schedules and routines so we have time to spend with Him instead of just filler. This is where we find Grace.'
  ),

  new BS_Paragraph(
    null,
    'We get tired of striving and beg for rest and then we can see that God is still there, faithful to His promise. It may appear that He is far off, but He’s calling is out of the muck and mire, and always comes running out to meet us where we are at. This is where He rebuilds us. And—despite any past unfaithfulness toward Him—He still sees us as pure and brings us great joy.'
  ),
));
