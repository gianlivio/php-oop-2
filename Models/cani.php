<?php

require_once __DIR__ . "/Prodotti.php";

class Cani extends Prodotti {

    public function __construct(string $name, float $price, string $type, string $image = "") {
        parent::__construct($name, $price, $type, $image);
    }
}