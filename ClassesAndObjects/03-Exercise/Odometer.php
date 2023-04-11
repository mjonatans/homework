<?php


class Odometer {
    private int $mileage;
    private FuelGauge $fuelGauge;
    private static int $odometerLimit = 999999;

    public function __construct(FuelGauge $fuelGauge) {
        $this->mileage = 0;
        $this->fuelGauge = $fuelGauge;
    }

    public function getMileage(): int {
        return $this->mileage;
    }

    public function incrementMileage() {
        if ($this->mileage < self::$odometerLimit) {
            $this->mileage++;
        } else {
            $this->mileage = 0;
        }

        if ($this->mileage % 10 == 0) {
            $this->fuelGauge->decrementFuelAmount();
        }
    }
}