<?php

require_once "Data/Animal.php";

use Data\{Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();

$dog = new Dog();
$dog->name = "Jhon";
$dog->run();