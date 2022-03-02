<?php
$items = [
  [
    'title' => 'Pamphili Eusebius – Ecclesiastical History',
    'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history',
  ],
  [
    'title' => 'Thomas à Kempis – The Imitation of Christ',
    'url' => '/classic-works',
  ],
  [
    'title' => 'A.W. Tozer – The Pursuit of God',
    'url' => '/classic-works',
  ],
];

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_ListGroup([
    'title' => 'Select a Classic Work',
    'items' => $items,
    'size' => 'lg',
  ])
));
