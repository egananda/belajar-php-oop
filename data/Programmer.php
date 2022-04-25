<?php


class Programmer
{
    public string $name;


    public function __construct(string $name)
    {
        $this->name = $name;
    }
}


class FrontendProgrammer extends Programmer
{
}


class BackendProgrammer extends Programmer
{
}


class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer, $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer, $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer, $programmer->name";
    }
}
