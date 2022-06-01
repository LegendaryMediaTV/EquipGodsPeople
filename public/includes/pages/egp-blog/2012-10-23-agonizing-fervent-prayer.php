<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Ephesians 6:10–17; 1 John 4:4'],

  new BS_BiblePassage(['passage' => 'Luke 22:41–44', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'Sometime I wonder if I’m somewhat lax in my prayer life because I know that the will of God will be done. I think sometimes we don’t realize the weight of a situation, either because we haven’t really given it thought, or we’re afraid to invest ourselves in it.',
  ),

  new BS_Paragraph(
    null,

    'But in this passage we have Jesus praying “very fervently.” You can argue whether Jesus actually sweat blood (i.e., ',
    new BS_Link(['to' => 'https://en.wikipedia.org/wiki/Hematidrosis'], 'hematidrosis'),
    ') or so profusely that the sweat came forth like blood from an open wound, but I think you’d miss the point. The point is, He was in agony in His prayer. Jesus…in agony…apparently even AFTER an angel strengthened Him!',
  ),

  new BS_Paragraph(
    null,
    'The word translated “agony” in this passage is the Greek word [greekCode]agwnia[/greekCode] (agonia, ag-o-nee’-ah [[strongs id="g74" /]]) which is where we get our English word “agony”. If we simply take that and move on, we miss out on a deeper meaning. The word literally means “struggling/wrestling/fighting for victory”. How amazing is that? When we are in agony in prayer, we are wrestling for victory! Some would argue that “the battle is already won” or “the battle belongs to the Lord”, which are both true in a sense, but we must not forget that the war is not quite over yet.',
  ),

  new BS_BiblePassage(['passage' => 'Romans 8:37', 'version' => 'NASB']),
));
