<?php

require_once "Data/Manager.php";

$manager = new Manager("Abdul");
$vicePresident = new VicePresident("Jhon");

$manager->sayHello("Jhon");
$vicePresident->sayHello("Abdul");