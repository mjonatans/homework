<?php

require "FuelGauge.php";
require "Odometer.php";
class Main
{
    public function __construct() {

        $fuelGauge = new FuelGauge();
        $odometer = new Odometer($fuelGauge);


        while ($fuelGauge->getFuelAmount() < 70) {
            $fuelGauge->incrementFuelAmount();
        }

        while ($fuelGauge->getFuelAmount() > 0) {
            $odometer->incrementMileage();

            echo "Mileage: " . $odometer->getMileage() . " km\n";
            echo "Fuel amount: " . $fuelGauge->getFuelAmount() . " liters\n\n";

        }
    }
}

new Main;