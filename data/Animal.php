<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    abstract function run();

    abstract public function eat(AnimalFood $animalFood): void;
}


class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name is running!" . PHP_EOL;
    }


    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating";
    }
}


class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }


    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
