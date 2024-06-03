<?php

require_once __DIR__ . "/Models/prodotti.php";
require_once __DIR__ . "/Models/cani.php";
require_once __DIR__ . "/Models/gatti.php";

$prodotto1 = new Prodotti("cibo per cani", 49.99);

var_dump($prodotto1);
?>