<?php

interface helloWorld
{
    function sayHello(): void;
}



$helloWorld = new class("Ega") implements helloWorld
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};


$helloWorld->sayHello();
