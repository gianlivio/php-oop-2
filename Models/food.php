<?php
require_once __DIR__ . "/products.php";

class Food extends Products {
    private float $weight;
    private string $taste;
    private string $age_range;

    public function __construct(string $name, float $price, string $image, string $type, float $weight, string $taste, string $age_range)
    {
        parent::__construct($name, $price, $image, $type);
        $this->weight = $weight;
        $this->taste = $taste;
        $this->age_range = $age_range;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        if ($weight < 0.1 || $weight > 100) {
            throw new InvalidProductException("Peso non valido: $weight");
        }
        $this->weight = $weight;
    }

    public function getAge_range(): string
    {
        return $this->age_range;
    }

    public function setAge_range(string $age_range): void
    {
        if (!in_array($age_range, ["Cucciolo", "Adulto", "Anziano", "Tutte le fascie d'età"])) {
            throw new InvalidProductException("Fascia d'età non presente: $age_range");
        }
        $this->age_range = $age_range;
    }

    public function getTaste(): string
    {
        return $this->taste;
    }
}
?>
