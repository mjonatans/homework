<?php

class Product{
    public string $name;
    public int $price;
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

function showMenu ($array) : void {
    echo "======================================" . PHP_EOL;
    foreach ($array as $key => $product){
        $cost = $product->price/100;
        echo "[$key] ". $product->name . " | " . $cost . " euros". PHP_EOL;
    }
    echo "======================================" . PHP_EOL;
}

$coins = [200,100,50,20,10,5,2,1];
$credits = 0;
$productPurchased = false;
$depositFinished = false;

$products = [
    $latte = new Product("Latte", 180),
    $coffee = new Product("Black Coffee", 210),
    $chocolateDrink = new Product("Hot Chocolate", 235),
    $tea = new Product("Tea", 155)
];

$selectedProduct = null;
showMenu($products);

while (!$productPurchased) {

    while (!$depositFinished) {

        echo "Credits: $credits" . PHP_EOL;
        echo "Accepted coins: [ ";
        foreach ($coins as $coin) echo "$coin ";
        echo "]" . PHP_EOL;

        $deposit = readline("Deposit coins into the vending machine (Type 'stop' to stop depositing coins): ");

        if ($deposit == "stop") {
            $depositFinished = true;
            break;
        }

        if (!is_numeric($deposit) || !in_array($deposit, $coins)) {
            echo "There is no coin with this value." . PHP_EOL;
            continue;
        }

        $credits += $deposit;
        echo "======================================" . PHP_EOL;
    }

    echo "======================================" . PHP_EOL;
    echo "Credits: $credits" . PHP_EOL;
    showMenu($products);

    $selection = readLine("Select the number of the product (Type 'abort' to stop selecting and retrieve your money): ");

    if ($selection == "abort") {
        break;
    }

    if (!is_numeric($selection) || (int)$selection > sizeof($products) - 1) {
        echo "======================================" . PHP_EOL;
        echo "Invalid input" . PHP_EOL;
        continue;
    }

    if ($credits < $products[$selection]->price) {
        echo "======================================" . PHP_EOL;
        echo "Insufficient funds" . PHP_EOL;
        continue;
    }


    $productPurchased = true;
    $selectedProduct = $products[$selection];
}

$selectedProductPrice = 0;
$selectedProductMessage = "You haven't selected anything.";

if ($selectedProduct != null) {
    $selectedProductPrice = $selectedProduct->price;
    $selectedProductMessage = "You have selected $selectedProduct->name";
}

$remainder = $credits - $selectedProductPrice;
$remainderPrice = $remainder / 100;
$change = [];

foreach ($coins as $coin) {
    $frequency = floor($remainder / $coin);
    $remainder -= $coin * $frequency;

    if ($frequency > 0) {
        for ($i = 0; $i < $frequency; $i++) {
            $change[] = $coin;
        }
    }
}

echo "======================" . PHP_EOL;
echo $selectedProductMessage . PHP_EOL;
echo "You had $remainderPrice euros left as change." . PHP_EOL;
echo "======================" . PHP_EOL;
echo "Coin distribution: [ ";
foreach ($change as $coin) echo "$coin ";
echo "]" . PHP_EOL;



