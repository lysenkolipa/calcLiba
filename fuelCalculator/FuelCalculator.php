<?php

namespace lysenkolipa\calcliba\fuelCalculator;

class FuelCalculator
{
    private $tripDistance;
    private $fuelEfficiency;
    private $fuelPrice;
    private $currency;

    private const KM = 100;

    /**
     * @param float $tripDistance
     * @param float $fuelEfficiency
     * @param float $fuelPrice
     */
    public function __construct(float $tripDistance, float $fuelEfficiency, float $fuelPrice, ?string $currency = null)
    {
        $this->tripDistance = $tripDistance;
        $this->fuelEfficiency = $fuelEfficiency;
        $this->fuelPrice = $fuelPrice;
        $this->currency = $currency ?? 'UAH';
    }

    /**
     * Method, that calculate fuel cost per trip
     * @param $tripDistance
     * @param $fuelEfficiency
     * @param $fuelPrice
     * @return float
     */
    public function getFuelCostPerTrip(): float
    {
        return $this->tripDistance * ($this->fuelEfficiency / self::KM) * $this->fuelPrice;
    }

    public function displayFuelCostPerTrip(): void
    {
        echo "For current trip you need: " . $this->getFuelCostPerTrip() . " " . $this->currency;
    }
}