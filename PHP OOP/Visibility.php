<?php

require_once "Data/Product.php";

$product = new Product("Apple", 2000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();