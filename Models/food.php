<?php
require_once __DIR__ . "/products.php";
class Food extends Products {
    private float  $weight;
    private string $taste;
    private string $age_range;

    public function __construct(string $name, float $price, string $image, string $type, float $weight, string $taste,
    string $age_range)
    {
        parent::__construct($name, $price, $image, $type);
        $this->weight    = $weight;
        $this->taste     = $taste;
        $this->age_range = $age_range;

       
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        if($weight >= 0.1 || $weight <= 100 ) {
            throw new Exception("Peso non valido");
        }
    }

    /**
     * Get the value of age_range
     */ 
    public function getAge_range()
    {
        return $this->age_range;
    }

    /**
     * Set the value of age_range
     *
     * @return  self
     */ 
    public function setAge_range($age_range)
    {
        if(!in_array($age_range,["Cucciolo","Adulto","Anziano","Tutte le fascie d'età"])) {
            throw new Exception("Fascia d'eta non presente");
        }
    }
    

    /**
     * Get the value of taste
     */ 
    public function getTaste()
    {
        return $this->taste;
    }

}