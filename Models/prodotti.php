<?php
require_once __DIR__ . "/type.php";
require_once __DIR__ . "/cani.php";
require_once __DIR__ . "/gatti.php";


class Prodotti {
    private string $name;
    private float  $price;
          
    public function __construct(string $name, float $price)
    {
        $this->name  = $name;
        $this->price = $price;       
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}