<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => 'Titus 1:15; 1 Timothy 4:8; Revelation 2:4; Ecclesiastes 3:11; Colossians 3:2–5'],

  new BS_Paragraph(
    null,
    'This is part five of the series on distractions: use the world but not fully. This is the final part in the series, so be sure to check out the other parts.',
  ),

  new BS_BiblePassage(['passage' => '1 Corinthians 7:29–31', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'It’s REALLY easy to get addicted to social media, games, sports, or anything really. In and of themselves, none of these things are bad, but they are when they become an addiction, or too high of a priority in our lives. Paul told Titus, “To the pure, all things are pure; but to those who are defiled and unbelieving, nothing is pure, but both their mind and their conscience are defiled.” In his letter to Timothy he wrote, “bodily discipline [i.e., exercise] is only of little profit, but godliness is profitable for all things, since it holds promise for the present life and also for the life to come.”',
  ),

  new BS_BiblePassage(['passage' => '1 John 2:15–17', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'While many people interpret this passage to mean that you can’t find any enjoyment in this life, what’s it’s really saying is be careful what you “ingest” in this life (not only substance, but quantity). Make sure that you don’t “leave your first love” for things of this world. Solomon wrote about God, saying, “He has made everything appropriate in its time. He has also set eternity in their heart, yet so that man will not find out the work which God has done from the beginning even to the end.” Which is to say, that things in this life that God hasn’t forbidden are okay at times, but none of them can take His place. As believers, we must be even more careful about this, because the enemy wants to trap us.',
  ),

  new BS_BiblePassage(['passage' => '2 Peter 2:18–20', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'If you’ve been a Christian for any length of time, you’ve probably heard the phrase, “be IN the world, but not OF the world.” I want to end this series on distractions with Jesus’ prayer that inspired that phrase.',
  ),

  new BS_BiblePassage(['passage' => 'John 17:14–18', 'version' => 'NASB']),
));
