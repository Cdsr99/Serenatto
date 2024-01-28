<?php

require 'src/db_connection.php';
require 'src/Models/Products.php';

//Searching for coffee
$select =  'select * from products where type = "Coffee" order by price;';
$statement = $pdo->query($select);
$productsCoffee = $statement->fetchAll(PDO::FETCH_ASSOC);

$dataCoffee = array_map(function ($coffee) {
    return new Products(
        $coffee['id'],
        $coffee['type'],
        $coffee['name'],
        $coffee['description'],
        $coffee['imagem'],
        $coffee['price']
    );
}, $productsCoffee);


//Searching for lunch

$selectLunch =  'select * from products where type = "Lunch" order by price;';
$statement = $pdo->query($selectLunch);
$productsLunch = $statement->fetchAll(PDO::FETCH_ASSOC);

$datalunch = array_map(function ($lunch) {
    return new Products(
        $lunch['id'],
        $lunch['type'],
        $lunch['name'],
        $lunch['description'],
        $lunch['imagem'],
        $lunch['price']
    );
}, $productsLunch)

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serenatto - Cardápio</title>
</head>

<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-serenatto.png" class="logo" alt="logo-serenatto">
            </div>
        </section>
        <h2>Digital Menu</h2>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Coffee Options:</h3>
                <img class="ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-cafe-manha-produtos">

                <?php foreach ($dataCoffee as $dCoffee) : ?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="img/<?= $dCoffee->getImagem(); ?>">
                        </div>
                        <p><?= $dCoffee->getName(); ?></p>
                        <p><?= $dCoffee->getDescription(); ?></p>
                        <p><?= $dCoffee->getPriceFormated();?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Opções para o Almoço</h3>
                <img class="ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-almoco-produtos">
                <?php foreach ($datalunch as $datalunch) : ?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="img/<?= $datalunch->getImagem();?>">
                        </div>
                        <p><?= $datalunch->getName();?></p>
                        <p><?= $datalunch->getDescription();?></p>
                        <p><?= $datalunch->getPriceFormated();?></p>
                    </div>
                <?php endforeach; ?>

            </div>

        </section>
    </main>
</body>

</html>