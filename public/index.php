<?php
// parse the requested URL
$pageURL = strtolower($_SERVER['REDIRECT_URL'] ?? $_SERVER['REQUEST_URI']);
$pageURL = str_replace('?' . $_SERVER['QUERY_STRING'], '', $pageURL);

// route the admin JavaScript file for local development
if ($pageURL === '/dist/admin-main.js' && $_SERVER['SERVER_NAME'] === 'localhost') {
  header('Content-Type: application/javascript');
  echo file_get_contents('../src/javascript/admin-main.js');
  exit;
}

// configure functions and settings
require_once('includes/config.php');

// route the admin page for local development
if ($pageURL === '/admin' && $_SERVER['SERVER_NAME'] === 'localhost') {
  require_once('admin.php');
  exit;
}

// retrieve page metadata for the given URL
$metadata = page_metadata($pageURL);

// enforce the URL
if ($pageURL !== $metadata->url) {
  if ($_SERVER['SERVER_NAME'] === 'localhost') {
    echo 'Requested: ' . $pageURL . '<br>';
    echo 'Metadata: ' . var_export($metadata, true);
  } else {
    header('Status: 301 Moved Permanently', false, 301);
    header('Location: ' . $metadata->url);
  }

  exit;
}

// render the page
$html = new BS_HTMLPage($metadata);
require_once('includes/pages' . $metadata->source);
echo egp_bb($html);
