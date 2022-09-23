<?php

require_once "minuman.php";
require_once "sepatu.php";

// LOGIC
class ProductC
{
    public $products;

    public function __construct()
    {
        $this->products = [
            new MinumanModel("Jus Enak", 4000, "Mie semua kalangan", "Melon"),
            new SepatuModel("Sepatu A", 3000, "Mie semua kalangan", "42"),
            new SepatuModel("Sepatu B", 4500, "Mie semua kalangan", "43"),
        ];
    }
}
