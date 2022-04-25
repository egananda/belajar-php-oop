<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";


    function getIterator()
    {

        $array = [
            "first" => $this->first,
            "second" => $this->second,
            // "third" => $this->third,
            "forth" => $this->forth
        ];

        return new ArrayIterator($array);
    }
}


$data = new Data();

foreach ($data as $property => $value) {
    echo "$property = $value"  . PHP_EOL;
}
