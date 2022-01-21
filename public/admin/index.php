<?php
require_once('../includes/config.php');

// define available tabs
$tabs = [
  [ '_id' => '', 'title' => 'Home', 'url' => '/admin' ],
  [ '_id' => 'pages', 'title' => 'Pages', 'url' => '/admin?tab=pages' ],
];

// determine the selected tab
$selectedTab = array_filter(
  $tabs,
  function ($item) {
    return $item['_id'] === ($_GET['tab'] ?: '');
  }
);
if (count($selectedTab) >= 1) $selectedTab = (object) array_values($selectedTab)[0];
else $selectedTab = (object) $tabs[0];

// define page metadata
$metadata = (object) [
  'title' => $selectedTab->_id ? $selectedTab->title : 'EGP Admin',
  'admin' => true,
];

// start the HTML page
$html = new BS_HTMLPage($metadata, $selectedTab->_id ? 'EGP Admin' : null);

// add the main menu tabs
$html->add(new BS_Nav([
  'items' => $tabs,
  'tabs' => true,
  'activeItem' => $selectedTab->_id,
  'className' => 'mt-3 mb-4',
]));

// add tab-specific content
switch ($selectedTab->_id) {
  case 'pages':
    admin_pages();

    break;

  default:
    $html->add(new BS_Lead(null, 'Please select a menu option above'));

    break;
}

// display the resultant page
echo $html;

function admin_pages() {
  global $selectedTab, $db, $html;

  $sql =
    "SELECT _id, Title" .
    "\nFROM Pages" .
    "\nWHERE ParentID IS NULL" .
    "\nORDER BY Sequence";
  $rows = $db->rows($sql);

  $rows = array_map(
    function ($row) {
      return [
        '_id' => $row['_id'],
        'title' => $row['Title'] ?: 'Home',
        'url' => $selectedTab->url . '&page=' . $row['_id'],
      ];
    },
    $rows
  );

  $html->add(new BS_ListGroup([
    'title' => 'Select a Page',
    'items' => $rows,
  ]));

  $html->add(new BS_Preformatted([ 'title' => 'Pages', 'item' => $rows ]));
}