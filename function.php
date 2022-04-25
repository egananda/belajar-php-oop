<?php

require_once "data/Person.php";


$ega = new Person("Ega", "Jakarta");
$ega->name = "Ega";
$ega->sayHello("Ridho");


$ridho = new Person("Ridho", "Lampung");
$ridho->name = "Ridho";
$ridho->sayHello(null);



$ega->info();
$ridho->info();
