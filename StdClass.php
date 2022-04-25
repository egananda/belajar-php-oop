<?php

$array = [
    "firstName"  => "Ega",
    "middleName" => "Nanda",
    "lastName"   => "Brilian"
];


$object = (object) $array;

var_dump($object);

echo "First name : $object->firstName" . PHP_EOL;
echo "Middle name : $object->middleName" . PHP_EOL;
echo "Last name : $object->lastName" . PHP_EOL;


$arrayLagi = (array) $object;
var_dump($arrayLagi);
echo $arrayLagi["firstName"] . PHP_EOL;



require_once "data/Person.php";

$person = new Person("Kayes", "Bandung");
var_dump($person);


$arrayPerson = (array) $person;
var_dump($arrayPerson);
