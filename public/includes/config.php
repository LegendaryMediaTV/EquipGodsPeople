<?php
// pre-reqs
require_once('functions.php');
require_once('classes/Bootstrap.php');
require_once('classes/MySQL.php');

// enable session variable
session_start();

// settings
$siteTitle = 'Equip God’s People';
$siteSubtitle = 'online Bible, study resources, and Christian blog';
$siteDescription =
  'Welcome to EGP! Here, you’ll find online Bibles, study resources, and a Christian blog.' .
  ' Search, read, and compare multiple versions of the Bible. Find EGP Blog Christian quotes, mini-articles, music, and more!';

// connect to MySQL
$db = new lmtv_MySQL('equipgodspeople.com', 'equipgod_cms', 'sbN!ZJHE@HrK#dkC%kBiG?', 'equipgod_zenith');
