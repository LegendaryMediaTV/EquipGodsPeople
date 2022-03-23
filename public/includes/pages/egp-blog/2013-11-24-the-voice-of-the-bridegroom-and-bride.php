<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Jeremiah 33:10-11', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'While we may face times of death and desolation, there is a day coming when Christ will restore everything to the way they were originally intended: no pain, no death, and face-to-face fellowship with God ([bible to="Revelation 21:1-5" /]). But there is a second Messianic prophecy here that may have been lost on Jeremiah and the believers of his day.',
  ),

  new BS_Paragraph(
    null,
    'In [bible to="Jeremiah 33:11"]verse 11[/bible], it mentions that “the voice of the bridegroom and the bride” will be heard again in this place. While at first this may seem like it is saying that it will be safe and joyful enough for people get married once again, Jesus said that “in the resurrection they neither marry nor are given in marriage” ([bible to="Matthew 22:23-30" /]).',
  ),

  new BS_Paragraph(
    null,
    'So, what is it? Well, we find out in the New Testament that Jesus is the Bridegroom and the church is the bride ([bible to="Ephesians 5:22-32" /]). So, I believe that God was hinting to that in this passage, rather than a generic statement about marriage.',
  ),

  new BS_BiblePassage(['passage' => 'Revelation 19:7-9', 'version' => 'NASB']),
));
