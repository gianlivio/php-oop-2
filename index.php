<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/food.php";

// Giocattoli per gatti
$giocattolo1 = new Toys("Topo Topone", 2.99, "./img/topo-giocattolo.jpg", "Gatto", "S", 3, "Topo giocattolo per gatti");
$giocattolo2 = new Toys("Palla Baytion", 11.99, "./img/gioco-gatto2.jpg", "Gatto", "S", 3.2, "Palla rotante automatica");

// Cibo per gatti
$cibo1 = new Food("Monge Gatto", 42.89, "./img/cibo-gatto.jpg", "Gatto", 4.8, "Pollo", "Adulto");
$cibo2 = new Food("Gold Mousse", 14.82, "./img/cibo-gatto2.jpg", "Gatto", 2.2, "Pollo", "Adulto");

// Giocattoli per cani
$giocattolo3 = new Toys("Osso Plasticone", 14.99, "./img/osso-giocattolo.jpg", "Cane", "M", 4, "Osso di gomma per cani");
$giocattolo4 = new Toys("Super Pollo", 2.49, "./img/gioco-cane2.jpg", "Cane", "L", 5, "Pollo in lattice per cani");

// Cibo per cani
$cibo3 = new Food("Dog Heroes", 44.99, "./img/cibo-cane.jpg", "Cane", 3.8, "Maiale + Pollo", "Tutte le fascie d'età");

$array_ProductsToys = [$giocattolo1, $giocattolo2, $giocattolo3, $giocattolo4];
$array_ProductsFood = [$cibo1, $cibo2, $cibo3];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Link Bootstrap -->
    <title>Document</title>
</head>

<body>

    <div class="container py-5 text-center">
        <h2>Giocattoli Per Animali</h2>
        <div class="row py-5">
            <div class="col d-flex justify-content-around flex-wrap">
                <?php foreach ($array_ProductsToys as $curProduct) { ?>
                    <!-- Card product Toys -->
                    <div class="card mb-3" style="width: 15rem;">
                        <img class="card-img-top" src="<?php echo $curProduct->getImage() ?>" alt="Image of <?php echo $curProduct->getName() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $curProduct->getName() ?></h5>
                            <p class="card-text"><?php echo $curProduct->getPrice() ?> Euro</p>
                            <p class="card-text">Prodotto per: <?php echo $curProduct->getType() ?></p>
                            <p class="card-text">Taglia: <?php echo $curProduct->getSize() ?></p>
                            <p class="card-text">Voto Utenti: <?php echo $curProduct->getVote() ?></p>
                            <p class="card-text">Descrizione Prodotto: <?php echo $curProduct->getDescription() ?></p>
                            <p class="card-text">Prezzo dopo sconto: <?php echo $curProduct->getPriceAfterDiscount() ?> Euro</p>
                        </div>
                    </div>
                    <!-- /card product -->
                <?php } ?>
            </div>
        </div>

        <h2>Cibo Per Animali</h2>
        <div class="row py-5">
            <div class="col d-flex justify-content-around flex-wrap">
                <?php foreach ($array_ProductsFood as $curFood) { ?>
                    <div class="card mb-3" style="width: 15rem;">
                        <img class="card-img-top" src="<?php echo $curFood->getImage() ?>" alt="Image of <?php echo $curFood->getName() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $curFood->getName() ?></h5>
                            <p class="card-text"><?php echo $curFood->getPrice() ?> Euro</p>
                            <p class="card-text">Prodotto per: <?php echo $curFood->getType() ?></p>
                            <p class="card-text">Peso: <?php echo $curFood->getWeight() ?> kg</p>
                            <p class="card-text">Adatto per: <?php echo $curFood->getAge_range() ?></p>
                            <p class="card-text">Gusto: <?php echo $curFood->getTaste() ?></p>
                            <p class="card-text">Prezzo dopo sconto: <?php echo $curFood->getPriceAfterDiscount() ?> Euro</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>
</html>
