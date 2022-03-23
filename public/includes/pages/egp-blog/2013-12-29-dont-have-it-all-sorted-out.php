<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Matthew 21:18-22', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'The word translated “doubt” in [bible to="Matthew 21:21"]verse 21[/bible] literally means “to sort out” ([greekCode]diakr/inw[/greekCode] [strongs id="g1252" /], diakrino, [i]dee-ak-ree’-no[/i]), so Jesus wasn’t saying “you can’t have any doubts” as much as He was saying “believe, even though you don’t have it all figured out.” Subtly different, but beautiful…',
  ),

  new BS_Paragraph(
    null,
    'We see this word again in [bible to="Acts 10" /], after Peter saw the vision of the clean and unclean animals coming from the sky on a sheet and was told to kill and eat them all because God declared them clean.',
  ),

  new BS_BiblePassage(['passage' => 'Acts 10:17-20', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'This time it was translated “misgivings”, which means “a feeling of doubt or apprehension about the outcome or consequences of something.” The idea is the same though, the Spirit was telling Peter to obey Him, even though Peter didn’t have it all figured out. Interestingly, we find out in the following verses that he did obey the Spirit even though he didn’t have the vision or command all sorted out, and it all came together and made sense to him ([bible to="Acts 11:2-18" /]).',
  ),

  new BS_Paragraph(
    null,
    'So, yes, we are to test every spirit to know if it’s from God ([bible to="1 John 4:1-3" /]), but once you do and God tells you to do something, don’t sit around trying to figure out every detail, go in faith!',
  ),
));
