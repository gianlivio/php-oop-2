<?php
require_once __DIR__ . "/traits/Discountable.php";
require_once __DIR__ . "/exceptions/InvalidProductException.php";

class Products {
    use Discountable; // Utilizzo del trait

    protected string $name;
    protected float $price;
    protected string $image;
    protected string $type;

    public function __construct(string $name, float $price, string $image, string $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;

        if (!in_array($type, ["Cane", "Gatto"])) {
            throw new InvalidProductException("Categoria non valida: $type");
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setPrice(float $price): void
    {
        if ($price < 1 || $price > 300) {
            throw new InvalidProductException("Prezzo inserito non valido: $price");
        }
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
?>
