<?php

namespace Data\Traits;

trait SayGoodBye
{

    public string $name;

    public function sayGoodBye(string $name)
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}


trait sayHello
{
    public function sayHello(string $name)
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}


trait hasName
{
    public string $name;
}


trait CanRun
{
    abstract function canRun(): void;
}


class ParentPerson
{

    public function sayGoodBye(string $name)
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function sayHello(string $name)
    {
        echo "Hello in Person" . PHP_EOL;
    }
}


trait All
{
    use SayGoodBye, sayHello, hasName, CanRun {
        // bisa di override
        // sayGoodBye as private;
        // sayHello as private;
    }
}



class Person extends ParentPerson
{

    use All;


    public function canRun(): void
    {
        echo "Person $this->name is running!" . PHP_EOL;
    }
}
