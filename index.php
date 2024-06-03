<?php
require_once __DIR__ . "/models/prodotti.php";
require_once __DIR__ . "/models/cani.php";
require_once __DIR__ . "/models/gatti.php";

$prodotto1 = new Prodotti("Mangime per cani", 9.99);

var_dump($prodotto1); 