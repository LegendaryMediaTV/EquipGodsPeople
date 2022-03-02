<?php
$html->add(new BS_Container(
  ['fluid' => true, 'className' => 'py-section'],
  new BS_Row(
    ['className' => 'justify-content-center'],
    new BS_Col(
      ['xs' => 12, 'xl' => 10],
      new BS_BlogEntries()
    )
  )
));
