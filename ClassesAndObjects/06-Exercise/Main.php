<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(int $numberSurveyed, float $percentPurchasedDrink): float {
    return floor($numberSurveyed * $percentPurchasedDrink);
}

function calculate_prefer_citrus(float $purchasedDrink, float $percentPreferCitrus): float {
    return floor($purchasedDrink * $percentPreferCitrus);
}

$energyDrinkers = calculate_energy_drinkers($surveyed, $purchased_energy_drinks);
$citrusDrinkers = calculate_prefer_citrus($energyDrinkers, $prefer_citrus_drinks);

echo "Total number of people surveyed: " . $surveyed . PHP_EOL;
echo "Approximately " . $energyDrinkers . " bought at least one energy drink." . PHP_EOL;
echo $citrusDrinkers . " of those prefer citrus flavored energy drinks." . PHP_EOL;