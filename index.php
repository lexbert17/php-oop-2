<?php
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Product.php';

$big_dog = new category('cane grande', 'big_dog.png' );

var_dump($big_dog);

$big_cat = new product('gatto grande', 'big_cat.png');
$big_cat->prezzo = 50;
$big_cat->tipologia = 'gioco';

var_dump($big_cat);

$wolf = new game('wolf grande', 'wolf.png', 50, 'gioco');
$wolf->materiale = 'plastica';

var_dump($wolf);