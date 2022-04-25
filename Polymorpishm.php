<?php

require_once "data/Programmer.php";

$company = new Company;
$company->programmer = new Programmer("Programmer");
var_dump($company);
$company->programmer = new FrontendProgrammer("FrontendProgrammer");
var_dump($company);
$company->programmer = new BackendProgrammer("BackendProgrammer");
var_dump($company);



sayHelloProgrammer(new Programmer("Ega"));
sayHelloProgrammer(new FrontendProgrammer("Ega"));
sayHelloProgrammer(new BackendProgrammer("Ega"));
