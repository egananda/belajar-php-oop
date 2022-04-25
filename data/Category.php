<?php

class Category
{
    private string $name;
    private bool $expensive;


    public function getName()
    {
        return $this->name;
    }


    public function setName(string $name)
    {

        if (trim($name) != "")
            $this->name = $name;
    }


    public function isExpensive()
    {
        return $this->expensive;
    }


    public function setExpensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }
}
