<?php
require_once __DIR__ . "/products.php";
class Toys extends Products
{
    private string $size;
    private float  $vote;
    private string $description;

    public function __construct(string $name, float $price, string $image, string $type, string $size, float $vote, string $description)
    {
        parent::__construct($name, $price, $image,$type);
        $this->size        = $size;
        $this->vote        = $vote;
        $this->description = $description;

        if (!in_array($size, ["S", "M", "L"])) {
            throw new Exception("Taglia non valida");
        }
    }

    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of vote
     *
     * @return  self
     */
    public function setVote($vote)
    { 
        if ($vote >= 0 || $vote <= 5) {
            throw new Exception("voto non valido");
        }
        
    }

    /**
     * Get the value of vote
     */
    public function getVote()
    {
        return $this->vote;
    }


    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }
}