<?php
require_once "data/Manager.php";

$Manager = new Manager();
$Manager->name = "Ega";
$Manager->sayHello("Ridho");


$VP = new VicePresident();
$VP->name = "Ridho";
$VP->sayHello("Ega");
