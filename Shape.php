<?php

class Shape
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function show()
    {
        return "I am a shape. My name is $this->name";
    }
}

?>