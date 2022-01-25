<?php
if ($_POST['api']) {
  switch ($_POST['api']) {
    case 'bible-books':
    case 'bible-testaments':
    case 'lexicon-languages':
    case 'lexicons':
    case 'reading-plans':
      $output = $db->documents($_POST['api']);

      break;

    case 'lexiconConvert':
      $output = egp_lexiconConvert($_POST['languageID'], $_POST['code']);

      break;

    case 'reading-plan':
      $output = $db->documentUpsert(
        'reading-plans',
        $_POST['_id'],
        json_decode($_POST['document'])
      );

      break;

    default:
      $output = [ 'error' => 'invalid API task ' . $_POST['api'] ];
  }

  echo json_encode(
    $output,
    JSON_UNESCAPED_LINE_TERMINATORS | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR
  );

  exit;
}

// define available tabs
$tabs = [
  [ '_id' => '', 'title' => 'Home' ],
  [
    '_id' => 'bible',
    'title' => 'Bible',
    'subtabs' => [
      [ '_id' => 'testaments', 'title' => 'Testaments' ],
      [ '_id' => 'ranges', 'title' => 'Ranges' ],
      [ '_id' => 'books', 'title' => 'Books' ],
      [ '_id' => 'chapters', 'title' => 'Chapters' ],
      [ '_id' => 'versions', 'title' => 'Versions' ],
      [ '_id' => 'verses', 'title' => 'Verses' ],
    ],
  ],
  [ '_id' => 'blog', 'title' => 'Blog' ],
  [ '_id' => 'languages', 'title' => 'Languages' ],
  [
    '_id' => 'lexicons',
    'title' => 'Lexicons',
    'subtabs' => [
      [ '_id' => 'versions', 'title' => 'Versions' ],
      [ '_id' => 'entries', 'title' => 'Entries' ],
    ],
  ],
  [ '_id' => 'reading-plans', 'title' => 'Reading Plans' ],
];

// add URLs to tabs/subtabs
$tabCount = count($tabs);
for ($tabIndex = 0; $tabIndex < $tabCount; $tabIndex++) {
  $tabs[$tabIndex] = (object) $tabs[$tabIndex];

  // add tab URL
  $tabs[$tabIndex]->url =
    '/admin' . ($tabs[$tabIndex]->_id ? '?tab=' . $tabs[$tabIndex]->_id : '');

  // add subtab URLs
  if ($tabs[$tabIndex]->subtabs) {
    $subtabCount = count($tabs[$tabIndex]->subtabs);
    for ($subtabIndex = 0; $subtabIndex < $subtabCount; $subtabIndex++) {
      $tabs[$tabIndex]->subtabs[$subtabIndex]->url =
        $tabs[$tabIndex]->url . '&subtab=' . $tabs[$tabIndex]->subtabs[$subtabIndex]->_id;
    }
  }
}

// determine the selected tab
$selectedTab = egp_documentViaID($tabs, $_GET['tab'] ?: '');

// determine the selected tab
if ($selectedTab->subtabs && $_GET['subtab'])
  $selectedSubtab = egp_documentViaID($selectedTab->subtabs, $_GET['subtab']);
else
  $selectedSubtab = null;

// define page metadata
$metadata = (object) [
  'title' => $selectedTab->_id ? $selectedTab->title : 'EGP Admin',
  'parent' => $selectedTab->_id ? 'EGP Admin' : null,
  'admin' => true,
  'react' => true,
];

// start the HTML page
$html = new BS_HTMLPage($metadata, $selectedTab->_id ? 'EGP Admin' : null);

// add the main tabs
$html->add(new BS_Nav([
  'items' => $tabs,
  'tabs' => true,
  'activeItem' => $selectedTab->_id,
  'className' => 'h4 ' . ($selectedTab->subtabs ? 'mb-3' : 'mb-5'),
]));

// add the subtabs
if ($selectedTab->subtabs) {
  $html->add(new BS_Nav([
    'items' => $selectedTab->subtabs,
    'tabs' => true,
    'activeItem' => $selectedSubtab->_id,
    'className' => 'mb-5',
  ]));
}

// add tab-specific content
switch ($selectedTab->_id) {
  case 'blog':
    $html->add(new BS_Division([ 'id' => 'react-like' ]));

    break;

  case 'lexicons':
    if ($selectedSubtab)
      $html->add(new BS_Division([ 'id' => 'react-lexicons-' . $selectedSubtab->_id ]));
    else
      $html->add(new BS_Lead(null, 'Please select a menu option above'));

    break;

  case 'reading-plans':
    $html->add(new BS_Division([ 'id' => 'react-reading-plans' ]));

    break;

  default:
    $html->add(new BS_Lead(null, 'Please select a menu option above'));

    break;
}

// display the resultant page
echo $html;

// TODO: delete this
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