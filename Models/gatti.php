<?php

class Gatti extends Prodotti {

    public function __construct(string $name, float $price, string $image = "") {
        parent::__construct($name, $price, $image);
    }

}