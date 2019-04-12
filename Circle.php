<?php
include_once "Shape.php";
class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }

    function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
