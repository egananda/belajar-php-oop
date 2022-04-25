<?php

use Data\AnimalFood;
use Data\CatShelter;
use Data\DogShelter;

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";


$catShelter = new CatShelter;
$cat = $catShelter->adopt("Luna");
$cat->eat(new Data\AnimalFood);

$dogShelter = new DogShelter;
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Data\food);



// var_dump($cat);
