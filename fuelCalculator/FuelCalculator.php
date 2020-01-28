<?php
/**
 *
 */

class FuelCalculator

    /**
     * @param integer $tripDistance
     * @param integer $fuelEfficiency
     * @param integer $fuelPrice
     */
{
    public function __construct(int $tripDistance, int $fuelEfficiency, int $fuelPrice)
    {
        $this->$tripDistance = $tripDistance;
        $this->$fuelEfficiency = $fuelEfficiency;
        $this->$fuelPrice = $fuelPrice;
    }

    /**
     * Method, that calculate fuel cost per trip
     * @param $tripDistance
     * @param $fuelEfficiency
     * @param $fuelPrice
     * @return int
     */
    public function getFuelCostCalculationPerTrip($tripDistance, $fuelEfficiency, $fuelPrice):int
    {
        /**
         * @return integer
         */
        return $tripDistance * ($fuelEfficiency /  100)* $fuelPrice;
    }
}