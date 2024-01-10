<?php
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toy.php.php";

$cani = new category('fa-solid fa-dog', 'cani');
$gatti = new category('fa-solid fa-cat' , 'gatti');

$catalogo = [
    new Food ('Mio Gatto', 3, 50, $gatti , 'vegetale'),
    new Food ('Mio Cane', 4, 33, $cani, 'manzo'),
    new Toy ('topo', 10, 10, $gatti, 'lana'),
    new Toy ('osso', 12, 25, $cani, 'gomma'),
];

// $prodotto1 = new Food();
// $prodotto1-> setNome('Mio gatto');
// $prodotto1-> setcategoria($gatti);
// $catalogo[] = $prodotto1;

