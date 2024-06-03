<?php

// collego caniphp e gattiphp
require_once __DIR__ . "/cani.php";
require_once __DIR__ . "/gatti.php";


class Prodotti {
    private string $name;
    private float $price;
    private string $image;

    public function __construct(string $name, float $price, string $image = "") {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getImage(): string {
        return $this->image;
    }
}