<?php

require_once "Data/Manager.php";

$wahyu = new Manager("Wahyu");
$andin = new VicePresident("Andini");

$wahyu->sayHello($andin->name);
$andin->sayHello($wahyu->name);