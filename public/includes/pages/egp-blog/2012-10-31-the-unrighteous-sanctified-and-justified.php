<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => '1 Corinthians 6:9–10', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Any time we’re given a list, it’s easy to skim over it without really thinking about what it’s saying.',
  ),

  new BS_List(['items' => [
    '[b]fornicators[/b] – people who have sex (even if just in their mind), but aren’t married',
    '[b]idolaters[/b] – people who put someone or something besides God in His place',
    '[b]adulterers[/b] – people who have sex (even if just in their mind) with someone who’s married to someone else or they themselves are married, but not to the person they are having sex with',
    '[b]effeminate[/b] – transsexual or transvestite',
    '[b]homosexual[/b] – gay, lesbian, or bi-sexual',
    '[b]thieves[/b] – people who take what isn’t theirs',
    '[b]covetous[/b] – people who want what belongs to someone else',
    '[b]drunkards[/b] – people who use alcohol (or any drug) to the point of physical and mental impairment',
    '[b]revilers[/b] – people who are verbally abusive',
    '[b]swindlers[/b] – people who cheat others out of something valuable using fraud and deception',
  ]]),

  new BS_Paragraph(
    null,
    'What this passage is saying is that if you fall or have ever fallen into ANY of the above categories, then you are unrighteous (not right with God) and will not take part in His eternal Kingdom. People like to stop at this verse and point condemning fingers at others, but the truth is, we’re ALL in this list somewhere. Paul continues in the next verse…',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 6:11', 'version' => 'NASB']),

  new BS_List(['items' => [
    '[b]washed[/b] – the stain of sin removed',
    '[b]sanctified[/b] – made holy, purified',
    '[b]justified[/b] – made right with God',
  ]]),

  new BS_BiblePassage(['passage' => 'Romans 3:23–26', 'version' => 'NLT']),
));
