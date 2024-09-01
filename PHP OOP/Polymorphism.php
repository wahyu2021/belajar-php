<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Wahyu");
var_dump ($company);
$company->programmer = new BackendProgrammer("Wahid");
var_dump ($company);
$company->programmer = new FrontendProgrammer("Andin");
var_dump ($company);

sayHelloProgrammer(new Programmer("Wahyu"));
sayHelloProgrammer(new BackendProgrammer("Wahyu"));
sayHelloProgrammer(new FrontendProgrammer("Wahyu"));

