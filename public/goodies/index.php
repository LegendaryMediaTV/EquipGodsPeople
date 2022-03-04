<?php
// add basic functionality
require_once('../api/functions.php');

// start a PHP session
session_start();

// set the goodies flag
$_SESSION['goodies'] = true;

// redirect to the site root
header('Status: 301 Moved Permanently', false, 301);
header('Location: /');
