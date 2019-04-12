<?php
include_once "Shape.php";
class Rectangle extends Shape
{
    public $width;
    public $height;

    function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    function getArea()
    {
        return $this->width * $this->height;
    }
}

?>