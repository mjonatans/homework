<?php

require "Product.php";
class Main
{
    private array $products = [];
    public function __construct() {
        $this->products = [
            $mouse = new Product("Logitech mouse", 70.00, 14),
            $iPhone = new Product("iPhone 5s", 999.99, 3),
            $epson = new Product("Epson EB-U05", 440.46, 1)
        ];

        $mouse->changePrice(120.43);
        $iPhone->changeQuantity(10);

        foreach ($this->products as $product){
            $product->printProduct();
        }
    }
}

new Main;