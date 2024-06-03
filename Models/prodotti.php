<?php

class Prodotti {
    private string $name;
    private float $price;
    private string $type;
    private string $image;

    public function __construct(string $name, float $price, string $type, string $image = "") {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->image = $image;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getImage(): string {
        return $this->image;
    }
}