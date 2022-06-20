<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['verses' => '1 Corinthians 10:13; Matthew 11:30; Psalm 18:2'],

  new BS_Paragraph(
    null,
    'Maybe it’s just semantics, but it’s a pet peeve of mine when people say, “God won’t give you more than you can handle.” While it’s true that God won’t allow us to be “tempted beyond what we’re able…to endure” and that Christ’s “yoke is easy and His burden is light,” but God allows us to be overwhelmed so that we realize our dependence on Him, so that He is our Rock, our Fortress, our Deliverer, our Shield, Horn (or Power) of our Salvation, our Stronghold…',
  ),

  new BS_BiblePassage(['passage' => '2 Corinthians 1:8–10', 'version' => 'NLT']),
));
