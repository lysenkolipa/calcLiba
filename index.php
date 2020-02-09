<?php

declare(strict_types=1);

use lysenkolipa\calcLiba\basicCalculator\BasicCalculator;
use lysenkolipa\calcLiba\fuelCalculator\FuelCalculator;

require_once __DIR__ . '/vendor/autoload.php';

$calcBase = new BasicCalculator(5.3,4.0);
$calcBase->getMultiplication();
$calcBase->getSubtraction();
$calcBase->getSumm();
$calcBase->displayResult();

$fuelCost = new FuelCalculator(234.1, 9.0, 33);
$fuelCost->getFuelCostPerTrip();
$fuelCost->displayFuelCostPerTrip();


