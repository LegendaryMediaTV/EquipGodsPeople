<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'When someone is going through a trying time, people will often say to them, “God will not give you more than you can bear.” While this may sound like spiritual comfort and is often regarded as Scripture, it isn’t either.',
  ),

  new BS_Paragraph(
    null,
    'This saying is loosely based off [bible to="1 Corinthians 10:13" /], “No temptation has overtaken you but such as is common to man; and God is faithful, who will not allow you to be tempted beyond what you are able, but with the temptation will provide the way of escape also, so that you will be able to endure it.” (NASB)',
  ),

  new BS_Paragraph(
    null,
    'But we see here that the passage is talking about temptation, not suffering. One could argue, however, that suffering is, in a sense, temptation. One of the greatest examples of this is Job. Satan was convinced that inflicting suffering upon Job would tempt Job to curse and reject God ([bible to="Job 1:6-11" /], [bible to="Job 2:1-5" /]).',
  ),

  new BS_Paragraph(
    null,
    'While many people are familiar with this part of Job, most of Job is a theological debate between Job and his God-fearing friends about why Job is suffering. In this time of great suffering (including the death of all his children), Job needed comforting, not cliché sayings and questioning the integrity of his faith ([bible to="Job 13:12" /]).',
  ),

  new BS_BiblePassage(['passage' => 'Job 16:2-6', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'So, why does God allow us to go through great suffering? We must be taken beyond our strength and abilities in order to be reminded of our dependence upon God.',
  ),

  new BS_BiblePassage(['passage' => '2 Corinthians 1:8-9', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'In the end, Job had to learn that even if we do everything to the best of our abilities to be righteous before God, that we still need to repent from our sins and that God is the only one truly righteous, holy, and good.',
  ),

  new BS_BiblePassage(['passage' => 'Job 42:2-6', 'version' => 'NLT']),
));
