<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Lee Strobel was an atheist journalist married to agnostic wife who recently converted to Christianity. So he wanted to use his journalistic powers to “get to the bottom of this Jesus” spoken of in the Bible (with all intention of disproving Him). After much research and consulting with experts (not all being Christians), this skeptic became a believer in the saving power of Jesus the Messiah!',
  ),

  new BS_Paragraph(
    null,
    'Being a journalist, he meticulously wrote down his journey for the Truth, which he later used to form the book he’s known for [i]The Case for Christ[/i]. As part of his journey, he had to deal with the events surrounding Christ’s birth. He later arranged this into a book called [i]The Case for Christmas[/i].',
  ),

  new BS_Paragraph(
    null,
    'This book is divided into four chapters: the trustworthiness of eyewitness accounts, archaeological evidence of events surrounding His birth, deity of Christ, and Jesus’s fulfillment of the Messianic prophecies (i.e., what the Old Testament said about the coming Messiah). This is a well-organized and easy read that’s just over 90 pages (selling for just a few dollars).',
  ),

  new BS_Paragraph(
    null,

    new BS_Link(
      ['to' => 'https://www.amazon.com/Case-Christmas-Journalist-Investigates-Identity/dp/0310340594/'],
      'Buy Lee Strobel’s [i]The Case for Christmas: A Journalist Investigates the Identity of the Child in the Manger[/i] on Amazon'
    ),

    new BS_Break(),

    new BS_Link(
      ['to' => 'https://www.amazon.com/Case-Christ-Journalists-Personal-Investigation/dp/0310350034/'],
      'Buy Lee Strobel’s [i]The Case for Christ: A Journalist’s Personal Investigation of the Evidence for Jesus[/i] on Amazon'
    ),
  ),
));
