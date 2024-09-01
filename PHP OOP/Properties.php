<?php

require_once "Data/Person.php";

$person = new Person("Wahyu", null);
$person->sayHello("Andin");

echo Person::AUTHOR . PHP_EOL;
$person->info();
echo "Program Selesai" .PHP_EOL;