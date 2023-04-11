<?php

class FuelGauge {
    private int $fuelAmount;

    public function __construct() {
        $this->fuelAmount = 0;
    }

    public function getFuelAmount() : int {
        return $this->fuelAmount;
    }

    public function incrementFuelAmount() : void {
        if ($this->fuelAmount < 70) {
            $this->fuelAmount++;
        }
    }

    public function decrementFuelAmount() : void {
        if ($this->fuelAmount > 0) {
            $this->fuelAmount--;
        }
    }
}