<?php

require_once "Data/Location.php";
use Data\{City, Province, Country};

$city = new City();
$city->name = "Palembang";

$province = new Province();
$province->name = "Sumatera Selatan";

$country = new Country();
$country->name = "Indonesia";

var_dump($city);
var_dump($province);
var_dump($country);