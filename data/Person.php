<?php

class Person
{

    const AUTHOR = "Ega Nanda Brilian";


    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";



    function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }


    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Haii, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name $this->name" . PHP_EOL;
        }
    }


    function info()
    {
        echo "AUTHOR :" . self::AUTHOR . PHP_EOL;
    }


    function __destruct()
    {
        echo "Object person {$this->name} is Destroyed" . PHP_EOL;
    }
}




