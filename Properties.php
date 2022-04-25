<?php

require_once "data/Person.php";

$Person = new Person("Ega", "Jakarta");
$Person->name = "Ega nanda brilian";
$Person->address = "Jakarta";
$Person->country = "Indonesia";


echo "Name    : {$Person->name}" . PHP_EOL;
echo "Address : {$Person->address}" . PHP_EOL;
echo "Country : {$Person->country}" . PHP_EOL;


$Person2 = new Person("Ridho", "Lampung");
$Person2->name = "Ridho putra duanda";
// $Person2->address = "Lampung";
// $Person2->country = "Afrika";

var_dump($Person2);

// error 
// $Person2->name = [];
