<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Praise the [sc]Lord[/sc] for HIS work, not His VESSELS’. Now, you can THANK them, you can ENCOURAGE them, you can HONOR them. Don’t EXALT them too high…they’ll run out of AIR. GOD doesn’t run out of air, MEN do, WOMEN do. Be careful you don’t put them in an altitude where they can’t SURVIVE. They’re just MEN, they’re just WOMEN. They’re all PERISHING. They all have CRACKS in their jar. It is GOD who is honored, it is GOD who is praised, and it is GOD who is building HIS church.'
    ),

    new BS_BlockquoteFooter(
      null,

      '—Matt Chandler, The Village Church, ',
      new BS_Citation(null, 'The Gospel Advances'),
    ),
  ),
));
