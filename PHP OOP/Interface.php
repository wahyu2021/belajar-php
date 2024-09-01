<?php

require_once "Data/Car.php";
use Data\{Avanza};

$car = new Avanza();
$car->drive();
echo "car is {$car->isMaintenance()}" . PHP_EOL;
echo "car brand is {$car->getBrand()}" . PHP_EOL;