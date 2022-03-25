<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 Thessalonians 5:16–18; Matthew 14:19–20; Luke 11:37–40; Mark 7:1–16; Matthew 26:26–29'],

  new BS_Paragraph(
    null,
    'There is an expression amongst those who’ve eaten one too many cold meals thanks to long-winded pre-meal prayers. “There’s a time to pray and a time to eat.” While it is a funny expression, I do tend to agree with it. The problem is, many people only pray in fearful situations and before meals. So, they hear this as, “you don’t have to pray before a meal,” and only pray in the fearful situations. In reality, we should constantly pray throughout the day, but they don’t have to be long, eloquent, intercessory prayers.'
  ),

  new BS_Paragraph(
    null,
    'In fact, Jewish tradition has about three lines of pre-meal prayer that have been around since before Jesus’ time. So, when you see it written that Jesus gave thanks before a meal, He was likely saying one of these prayers.'
  ),

  new BS_Paragraph(
    null,
    'The first prayer was a prayer for the washing of hands:'
  ),

  new BS_Blockquote(
    null,
    'Blessed are You, O God, our [sc]Lord[/sc], King of the Universe, who has sanctified us with His commandments, and has commanded us about the washing of hands.',
  ),

  new BS_Paragraph(
    null,
    'Considering the prayer says we’re “sanctified by His commandments” (as opposed to no one being able to keep them), it’s interesting that Jesus and His disciples were called out by the Pharisees for not washing their hands before eating.'
  ),

  new BS_Paragraph(
    null,
    'The next couple prayers were right before eating and drinking. So, these are likely what was prayed at The Last Supper.'
  ),

  new BS_Blockquote(
    null,
    'Blessed are You, O God, our [sc]Lord[/sc], King of the Universe, Who brings forth bread from the earth.',
  ),

  new BS_Paragraph(null, 'And…'),

  new BS_Blockquote(
    null,
    'Blessed are you, O God, our [sc]Lord[/sc], King of the Universe, Creator of the fruit of the vine.',
  ),

  new BS_Paragraph(
    null,
    'Finally, the last prayer, which came after the meal is longer than the rest combined!'
  ),

  new BS_Blockquote(
    null,
    'Blessed is The [sc]Lord[/sc] our God, Sovereign of the Universe, who sustains the entire world with goodness, kindness and mercy. God gives food to all creatures, for God’s mercy is everlasting. Through God’s abundant goodness we have not lacked sustenance, and may we not lack sustenance forever, for the sake of God’s great Name. God sustains all, does good to all, and provides food for all the creatures whom God has created. Blessed is The [sc]Lord[/sc], our God, who provides food for all.',
  ),
));
