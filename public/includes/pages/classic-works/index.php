<?php
$items = [
  [
    'title' => 'Pamphili Eusebius – Ecclesiastical History',
    'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history',
  ],
  [
    'title' => 'Thomas à Kempis – The Imitation of Christ',
    'url' => '/classic-works/thomas-kempis-imitation-of-christ',
  ],
  [
    'title' => 'A.W. Tozer – The Pursuit of God',
    'url' => '/classic-works/aw-tozer-pursuit-of-god',
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
