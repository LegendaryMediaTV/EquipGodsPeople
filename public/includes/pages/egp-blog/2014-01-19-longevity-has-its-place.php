<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  ['youtube' => 'Oehry1JC9Rk'],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      'Like anybody, I would like to live a long life. Longevity has its place, but I’m not concerned about that now. I just want to do God’s will. And He’s allowed me to go up to the mountain, and I’ve looked over, and I’ve seen the Promised Land. I may not get there with you, but I want you to know tonight, that we as a people will get to the Promised Land. So I’m happy, tonight. I’m not worried about anything. I’m not fearing any man! Mine eyes have seen the glory of the coming of the [sc]Lord[/sc]!'
    ),

    new BS_BlockquoteFooter(
      null,

      '—Dr. Martin Luther King Jr., ',
      new BS_Citation(null, 'I’ve Been to the Mountaintop'),
      ' (his last speech before his assassination)'
    ),
  ),

  new BS_Paragraph(
    null,
    'May we all have such faith and passion for whatever God has called us to do!'
  ),
));
