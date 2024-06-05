<?php
require_once __DIR__ . "/products.php";

class Toys extends Products
{
    private string $size;
    private float $vote;
    private string $description;

    public function __construct(string $name, float $price, string $image, string $type, string $size, float $vote, string $description)
    {
        parent::__construct($name, $price, $image, $type);
        if (!in_array($size, ["S", "M", "L"])) {
            throw new InvalidProductException("Taglia non valida: $size");
        }
        $this->size = $size;
        $this->vote = $vote;
        $this->description = $description;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setVote(float $vote): void
    {
        if ($vote < 0 || $vote > 5) {
            throw new InvalidProductException("Voto non valido: $vote");
        }
        $this->vote = $vote;
    }

    public function getVote(): float
    {
        return $this->vote;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
?>
