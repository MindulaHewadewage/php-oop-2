<?php
require_once __DIR__ . '/Products.php';

$category = new Category('Dog', 'url');
$prodotto = new Products('url', 'Osso', 4, $category);

var_dump($category);
var_dump($prodotto);
