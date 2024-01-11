<?php
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';


$cani = new category('fa-solid fa-dog', 'cani');
$gatti = new category('fa-solid fa-cat' , 'gatti');

$catalogo = [
    new Food ('Mio Gatto', 3, 50, $gatti ,'vegetale'),
    new Food ('Mio Cane', 4, 33, $cani, 'manzo'),
    new Toy ('topo', 10, 10, $gatti, 'lana'),
    new Toy ('osso', 12, 25, $cani, 'gomma'),
];
var_dump($catalogo)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="row row-cols-3">
        <?php foreach ($catalogo as $prodotto) { ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo $prodotto->getNome(); ?></h4>
                        <div>
                            <i class="<?php echo $prodotto->getcategoria()->getIcon(); ?>"></i>
                            <span><?php echo $prodotto->getcategoria()->getName(); ?> </span>
                        </div>

                        <?php if (is_a($prodotto, 'Food')) { ?>
                            <p><?php echo $prodotto-> get_gusto(); ?> </p>
                        <?php } else if (is_a ($prodotto, 'Toy'))  {?>
                            <p><?php echo $prodotto-> get_materiale(); ?> </p>
                       <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>