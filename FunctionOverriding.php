<?php
require_once "data/Manager.php";


$manager = new Manager;
$manager->name = "Ega";
$manager->sayHello("Ridho");

echo PHP_EOL;

$VP = new VicePresident();
$VP->name = "Ridho";
$VP->sayHello("Ega");
