<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '2 Corinthians 11:14; Matthew 4:1–11; Ephesians 6:11'],

  new BS_Paragraph(
    null,
    'While seeking God’s direction, it can be difficult to distinguish between what God and His angels are telling us and what Satan and his demons are telling us, especially since “Satan disguises himself as an angel of light.” John gave us a quick way to test whether or not the spirit talking to us is from God.',
  ),

  new BS_BiblePassage(['passage' => '1 John 4:1–3', 'version' => 'NASB']),

  new BS_Paragraph(
    null,
    'If the spirit is from God, it has nothing to hide and will never say anything that goes against Scripture. If it is not from God, it will either go away or craftily sidestep the question. Be persistent and do not be afraid! John must have known that there could be intimidation because [bible to="1 John 4:4"]the very next verse[/bible] says, “You are from God, little children, and have overcome them; because greater is He who is in you than he who is in the world.” Don’t argue in your own wisdom, but always bring things back to Scripture.',
  ),

  new BS_BiblePassage(['passage' => 'James 4:7', 'version' => 'NASB']),
));
