<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use lysenkolipa\calcliba\basicCalculator\BasicCalculator;
use lysenkolipa\calcliba\fuelCalculator\FuelCalculator;

$calcBase = new BasicCalculator(5.3,566.5);
$calcBase->getDevision();
$calcBase->getMultiplication();
$calcBase->getSubtraction();
$calcBase->getSumm();
$calcBase->displayResult();


$fuelCost = new FuelCalculator(234.1, 9.0, 33);
$fuelCost->getFuelCostPerTrip();
$fuelCost->displayFuelCostPerTrip();


