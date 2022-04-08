<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'It only takes 15 minutes per day (1% of the day) to read through the Bible in a year. I realize that it’s not about volume but about what you get out of it, but I encourage you, as we celebrate the coming of a new year, to use this opportunity to immerse yourself in God’s Word.'
  ),

  new BS_Paragraph(
    null,
    'If God leads you to read through the Bible this year, please carve out a specific time of day to dedicate to prayer and reading. Please pray that God will open your heart and mind to His Scriptures, for a life changed by His Word, and for me as I read through and provide a daily commentary.'
  ),

  new BS_Paragraph(
    null,
    'Tomorrow’s reading for the Bible in a year: [bible to="Genesis 1"]Genesis 1–3[/bible]',
  ),
));
