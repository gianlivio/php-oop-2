<?php
require_once __DIR__ . "/prodotti.php";

class Type extends Prodotti {
    public function __construct(string $name, float $price)
    {
       parent::__construct($name, $price);
    }
}