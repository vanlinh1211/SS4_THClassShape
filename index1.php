<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle("circle 01", 5);
echo "circle area: " . $circle->getArea() . "<br>";
echo "circle perimeter: " . $circle->getPerimeter() . "<br>";

$cylinder = new Cylinder("cylinder 01", 3, 4);
echo "cylinder area: " . $cylinder->getArea() . "<br>";
echo "cylinder perimeter: " . $cylinder->getPerimeter() . "<br>";

$rectangle = new Rectangle("rectangle 01", 10, 5);
echo "rectangle area: " . $rectangle->getArea() . "<br>";
echo "rectangle perimeter: " . $rectangle->getPerimeter() . "<br>";

$square = new Square("square 01", 4);
echo "Square area: " . $square->getArea() . "<br>";
echo "Square perimeter: " . $square->getPerimeter();


?>
</body>
</html>