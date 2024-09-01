<?php
// variabel
$age = 17;
$name = "Wahyu Wahid Nugroho";

echo "Nama: ";
echo $name;
echo "\n";
echo "Umur: ";
echo $age;
echo "\n";
echo "\n";

// variable variables
$name = "Wahyu";
$$name = "Andin";
echo "name: ";
echo $name;
echo "\n";
echo "Nama: ";
echo $Wahyu;
echo "\n";
echo "\n";

define("AUTHOR", "Andini");
define("APP_VERSION", 18.2);
echo "Author: ";
echo AUTHOR;
echo "\n";
echo "Version App: ";
echo APP_VERSION;
echo "\n";
echo "\n";

// data null
$name = null;
$age = null;

echo "Nama: ";
echo $name;
echo "\n";
echo "Umur: ";
echo $age;
echo "\n";
echo "Is Name Null? : ";
echo is_null($name);
echo "\n";
echo "\n";

unset($name);
echo "Name : ";
echo $name;