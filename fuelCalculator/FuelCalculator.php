<?php

namespace lysenkolipa\calcLiba\FuelCalculator;

class FuelCalculator
{
    private const KM = 100;

    private $tripDistance;
    private $fuelEfficiency;
    private $fuelPrice;
    private $currency;

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

    /**
     * Method display fuel cost per trip according to the incoming parameters
     * @return void
     */
    public function displayFuelCostPerTrip(): void
    {
        echo "For current trip you need: " . $this->getFuelCostPerTrip() . " " . $this->currency;
    }
}
