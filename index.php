<?php

require_once __DIR__ . "/Models/Prodotti.php";
require_once __DIR__ . "/Models/Cani.php";
require_once __DIR__ . "/Models/Gatti.php";

// Creare istanze dei prodotti
$prodotto1 = new Cani("Cibo per cani", 49.99, "Cibo", "");
$prodotto2 = new Gatti("Cibo per gatti", 39.99, "Cibo", "");

// Creare un array di prodotti
$prodotti = [$prodotto1, $prodotto2];

var_dump($prodotto1);
var_dump($prodotto2);
?>