<?php

class Product {

    public string $name;
    public float $startPrice;
    public int $amount;

    public function __construct(string $name, float $startPrice, int $amount) {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    function printProduct() : void {
        echo $this->name . ", price " . $this->startPrice . ", amount " . $this->amount . PHP_EOL;
    }

    function changePrice(float $newPrice) : void {
       $this->startPrice = $newPrice;
    }

    function changeQuantity(int $newAmount) : void {
        $this->amount = $newAmount;
    }
}