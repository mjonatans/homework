<?php

$fruits = [
    [
        "name" => "Apple",
        "weight" => 2
    ],
    [
        "name" => "Watermelon",
        "weight" => 12
    ],
    [
        "name" => "Banana",
        "weight" => 1
    ],
];

function checkFruitWeight($number) : int{
    if ($number > 10) return 2;
    else return 1;
}

foreach ($fruits as $fruit){
    echo $fruit["name"] . "\n";
    echo "Shipping costs per kg are " . checkFruitWeight($fruit["weight"]) . " euros\n";
}
