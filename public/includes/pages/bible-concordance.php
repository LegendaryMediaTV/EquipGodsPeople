<?php
// $versions = egp_bibleVersions();
// // page_crash($versions);

// if ($_POST['search']) {
//   // accommodate for submitted version changes
//   egp_bibleVersionsSelected();
// }

$html->add(new BS_Container(
  ['fluid' => true, 'className' => 'py-section'],

  new BS_Container(
    null,
    new BS_Alert(
      ['variant' => 'danger', 'title' => 'Under Construction'],

      'This section still needs to be built'
    ),
  ),
));
