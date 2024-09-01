<?php

require_once "Data/Category.php";

use Data\Category;

$category = new Category();
$category->setName("Nike Kobe 6");
$category->isExpensive(true);

var_dump($category);