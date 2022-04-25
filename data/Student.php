<?php

class Student
{
    public string $name;
    public string $id;
    public string $value;
    private string $sample = "XXX";

    public function getSample()
    {
        return $this->sample;
    }


    public function __clone()
    {
        unset($this->sample);
    }


    public function __toString(): string
    {
        return "Student name: $this->name, id: $this->id, value: $this->value";
    }


    public function __invoke(...$arguments): void
    {
        $join = join(',', $arguments);
        echo "Invoke Stundent with arguments $join" . PHP_EOL;
    }


    public function __debugInfo(): array
    {
        return [
            "id"      => $this->id,
            "name"    => $this->name,
            "value"   => $this->value,
            "sample"  => $this->sample,
            "author"  => "EGA NANDA B",
            "version" => "1.1"
        ];
    }
}
