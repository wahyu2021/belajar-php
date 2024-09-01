<?php 

require_once "Data/SayGoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodbye};

$person = new Person();
$person->hello("Jhon");
$person->goodBye("Jhon");