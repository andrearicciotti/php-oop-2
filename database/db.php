<?php
require_once __DIR__ . '/../models/products.php';
require_once __DIR__ . '/../models/kennel.php';
require_once __DIR__ . '/../models/game.php';

$products = 
[
    $tennis_ball = new Products('ball', 50, 12, 'cat', 'cat'),
    $dog_croccantins = new Products('dog croccantins', 25, 10, 'dog', 'dog'),
    $necklace = new Products('necklace', 20, 15, 'all', 'all'),
];

var_dump($products);