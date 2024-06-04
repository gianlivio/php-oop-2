<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/food.php";

// Giocattoli per gatti

$giocattolo1 = new Toys("Topo Topone", 2.99, "./img/topo-giocattolo.jpg", "Gatto", "S", 3, "Topo giocattolo per gatti");
$giocattolo3 = new Toys("Palla Baytion", 11.99,"./img/gioco-gatto2.jpg", "Gatto","S", 3.2 ,"Palla rotante automatica");

// Cibo per gatti

$cibo1 = new Food("Monge Gatto", 42.89, "./img/cibo-gatto.jpg", "Gatto", 4.8, "Adulto", "Pollo");
$cido3 = new Food("Gold Mousse", 14.82,"./img/cibo-gatto2.jpg", "Gatto", 2.2, "Adulto", "Pollo" );



// Giocattoli per cani 

$giocattolo2 = new Toys("Osso Plasticone", 14.99, "./img/osso-giocattolo.jpg", "Cane", "M", 4, "Osso di gomma per cani");
$giocattolo4 = new Toys("Super Pollo", 2.49, "./img/gioco-cane2.jpg", "Cane", "L", 5, "Pollo in lattice per cani");


// Cibo per Cani

$cibo2 = new Food("Dog Heroes", 44.99, "./img/cibo-cane.jpg", "Cane", 3.8, "Tutte le fascie d'età", "Maiale + Pollo");



$array_ProductsToys = [
    $giocattolo1,
    $giocattolo3,   
    $giocattolo4,
    $giocattolo2,   
];

$array_ProductsFood = [
    $cibo1,
    $cibo2,
    $cibo1,
    $cibo2,
];

// var_dump($array_Products);

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

    <div class="container py-5 text-center ">
        <h2>Giocattoli Per Animali</h2>
        <div class="row py-5 ">
            <div class="col d-flex justify-content-around">
                <?php foreach ($array_ProductsToys as $curProduct) { ?>
                    <!-- Card product Toys -->
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <img class="img-fluid" src="<?php echo $curProduct->getImage() ?>" alt="">
                            <h5 class="card-title">
                                <?php echo $curProduct->getName() ?>
                            </h5>

                            <h5>
                                <?php echo $curProduct->getPrice() ?> Euro
                            </h5>

                            <h5>
                                Prodotto per
                                <?php echo $curProduct->getType() ?>
                            </h5>

                            <h5>
                                Taglia
                            <?php echo $curProduct->getSize() ?>
                            </h5>
                            <h5>
                                Voto Utenti
                            <?php echo $curProduct->getVote() ?>
                            </h5>
    
                            <h6>
                                Descrizione Prodotto:
                            <?php echo $curProduct->getDescription() ?>
                            </h6>
    
                        </div>
                    </div>
                    <!-- /card product -->
                <?php } ?>
            </div>
        </div>

        <h2>Cibo Per Animali</h2>
        <div class="row py-5">
            <div class="col d-flex justify-content-around">
                <?php foreach($array_ProductsFood as $curFood) {?>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <img class="img-fluid" src="<?php echo $curFood->getImage() ?>" alt="">
                            <h5 class="card-title">
                                <?php echo $curFood->getName() ?>
                            </h5>

                            <h5>
                                <?php echo $curFood->getPrice() ?> Euro
                            </h5>

                            <h5>
                                Prodotto per
                                <?php echo $curFood->getType() ?>
                            </h5>

                            <h5>
                            <?php echo $curFood->getWeight() ?>
                            </h5>
                            <h5>
                                Prodotto adatto per
                            <?php echo $curFood->getAge_range() ?>
                            </h5>
    
                            <h6>
                                Prodotto al gusto di:
                            <?php echo $curFood->getTaste() ?>
                            </h6>
    
                        </div>
                    </div>
                <?php }?>    
            </div>
        </div>
    </div>
</body>

</html>