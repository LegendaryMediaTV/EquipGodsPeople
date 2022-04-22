<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_BiblePassage(['passage' => 'Colossians 3:23', 'version' => 'NLT']),

  new BS_Paragraph(
    null,
    'Interestingly, it literally says, “work from the soul.” I’d always taken this verse as, “Don’t let the focus of your work be to make your boss happy, but work diligently, as a representative of Christ.” While that is true and has contextual support, I think there is another meaning here also. Perhaps Paul is also saying, “Don’t let the focus of your work be to make people who depend on the paycheck happy (yourself, family, friends), but work diligently, as a representative of Christ.”',

    new BS_BiblePassage(['passage' => 'Luke 12:15', 'version' => 'NLT']),

    new BS_BiblePassage(['passage' => 'Ecclesiastes 5:15–20', 'version' => 'NLT']),

    new BS_BiblePassage(['passage' => '1 Corinthians 10:31', 'version' => 'NLT']),
  ),
));
