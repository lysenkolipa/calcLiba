<?php

declare(strict_types=1);


use basicCalculator\BasicCalculator;
use fuelCalculator\FuelCalculator;

require_once __DIR__ . '/basicCalculator/BasicCalculator.php';
require_once __DIR__ . '/fuelCalculator/FuelCalculator.php';
require_once __DIR__ . '/vendor/autoload.php';

$calcBase = new BasicCalculator(5.3,566.5);
$calcBase->getDevision();
$calcBase->getMultiplication();
$calcBase->getSubtraction();
$calcBase->getSumm();
$calcBase->displayResult();


$fuelCost = new FuelCalculator(234.1, 9.0, 33);
$fuelCost->getFuelCostPerTrip();
$fuelCost->displayFuelCostPerTrip();


