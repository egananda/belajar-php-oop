<?php
require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye, hasName};


$person = new Person;
$person->sayGoodBye("Ega");
$person->sayHello("Ridho");
$person->name = "Kayes";
var_dump($person);

$person->canRun();
