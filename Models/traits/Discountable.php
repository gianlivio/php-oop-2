<?php
trait Discountable {
    private float $discount = 0.0;

    public function setDiscount(float $discount) {
        if ($discount < 0 || $discount > 100) {
            throw new Exception("Sconto non valido. Deve essere tra 0 e 100.");
        }
        $this->discount = $discount;
    }

    public function getDiscount(): float {
        return $this->discount;
    }

    public function getPriceAfterDiscount(): float {
        return $this->price * (1 - $this->discount / 100);
    }
}
?>
