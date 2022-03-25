<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'In order to fulfill Scripture, Jesus was to enter Jerusalem on a colt ([bible to="Zechariah 9:9" /]). When it was time for this “Triumphal Entry”, Jesus told His disciples to go get one.',
  ),

  new BS_BiblePassage(['passage' => 'Mark 11:2-6', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'I always thought this passage was strange, because the disciples’ only defense for essentially stealing this donkey was, “the Lord needs it and we’ll bring it back.” I chalked it up to being “one of those God things” where He orchestrates things for a particular circumstance that wouldn’t otherwise work It very well could be, however, I think there may be more going on here.',
  ),

  new BS_Paragraph(
    null,
    'As many know, “You shall not take the Name of the [sc]Lord[/sc] your God in vain” is one of the Ten Commandments ([bible to="Exodus 20:3-17" /]). But because of the second half of that statement, “for the [sc]Lord[/sc] will not leave him unpunished who takes His Name in vain”, the Jews became HIGHLY paranoid of using His Name at all. In the Hebrew scriptures, God’s Name was written out as four Hebrew letters, “[egp_ConvertText language="H" word="hwhy" \/]” (usually transliterated, “Yahweh” or “Jehovah” [[strongs id="h3068" /]]), often called the Tetragrammaton (Greek for “four letters”), but when reading it aloud, they would say “Adonay” [[strongs id="h136" /]] instead, which is a variation of the Hebrew word for “lord” [[strongs id="h113" /]].',
  ),

  new BS_Paragraph(
    null,
    'They did this with writings about Scripture also, considering any document with the Tetragrammaton written on it to be holy and therefore treated as such (even today, Jews will write “G-d” because of this commandment). When the Scriptures were translated into Greek, called the Septuagint, the translators translated it “[greekCode]kurios[/greekCode]” (“kurios” [[strongs id="g2962" /]]), the Greek word for “lord”.',
  ),

  new BS_Paragraph(
    null,
    'Jesus had been referred to as “Lord” several times before this point, by Himself and others ([bible to="Mark 2:28" /], [bible to="Mark 7:28" /]) and the people who owned the colt the disciples were borrowing might have known Him by that title. However, I’m inclined to believe that in this particular instance, Jesus may have instructed the disciples to use God’s proper name when taking the colt. Its owners, knowing the severity of punishment for those misusing God’s Name, wouldn’t have taken their usage of it lightly and probably feared the repercussions of not letting them use the colt.',
  ),
));
