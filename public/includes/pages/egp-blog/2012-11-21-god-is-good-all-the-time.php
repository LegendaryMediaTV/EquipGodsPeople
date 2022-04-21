<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'While this book does tackle what scripture says about Hell, it doesn’t leave it without addressing the practical concerns.',
  ),

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Years ago, I came across an article entitled “Two Minutes to Eternity” by Marshall Shelley, one of the editors of Christianity Today at the time. In the article, Marshall tells the story of the miraculous birth of his son. When the child was in the womb, Marshall and his wife, Susan, found out that their child had an abnormal heart and would probably not survive the birth, if he even made it that far. And so the Shelleys wrestled with God. “This was a design flaw,” Marshall writes, “and the Designer was responsible.” So they Prayed. They prayed for a miracle, they prayed for survival, they prayed that the God of all compassion would give the child the breath of life.',
    ),

    new BS_Paragraph(
      null,
      'Then the day of birth came, and the child was still alive. The child had survived the pregnancy! God is so good! As the child was born, Marshall looked upon his beautiful son. “He was a healthy pink, and we saw his chest rise and fall. The breath of life. Thank you, God.”',
    ),

    new BS_Paragraph(
      null,
      'And then the child died. Two minutes later, their son turned from pink to blue, and then died. The miracle of life was followed by the mystery of death. And as far as the Shelleys were concerned, the Designer was responsible. When the nurse asked the Shelleys if they had a name for the child, Susan responded. “Toby. It’s short for a biblical name, Tobiah, which means ‘God is good.’”',
    ),

    new BS_Paragraph(
      null,
      'God is good.',
    ),

    new BS_Paragraph(
      null,
      'Good is good? How could they say that? How could they believe such an unbelievable attribute of God, when everything in that moment seemed to be proving the opposite? Because the Shelleys believed that God is good not only when He makes sense to us, but even when He doesn’t. God is good, because God is God. Goodness is inherent in who He is. And the Shelleys believed this. “The name was what we believed, not what we felt,” Marshall writes. “It was what we wanted to feel again someday.”',
    ),

    new BS_Paragraph(
      null,
      'And so it is with many things about God that don’t seem to add up.',
    ),

    new BS_Paragraph(
      null,
      'And so it must be with Hell.',
    ),

    new BS_Paragraph(
      null,
      'As I have said all along, I don’t FEEL like believing in Hell. And yet I do. Maybe someday I will stand in complete agreement with Him, but for now I attribute the discrepancy to an underdeveloped sense of justice on my part. God is perfect. And I joyfully submit to a God whose ways are much, much higher than mine.',
    ),


    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        ['to' => 'https://www.amazon.com/Crazy-Love-Overwhelmed-Relentless-God/dp/1434705943/'],

        'Francis Chan and Preston Sprinkle, ',
        new BS_Citation(null, 'Erasing Hell: What God Said About Eternity, and the Things We’ve Made Up'),
      ),
    ),
  ),
));
