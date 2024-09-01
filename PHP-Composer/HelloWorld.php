<?php

use Wahyu\Data\People;

require_once __DIR__ . "/vendor/autoload.php";

echo "Hello World\n";

$people = new People("Andin");
$people->sayHello("Wahyu");