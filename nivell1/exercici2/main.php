<?php
require_once "Shape.php";
require_once "Triangle.php";
require_once "Rectangle.php";

$rectangle = new Rectangle(5.25, 4.5);
echo $rectangle->area() . "\n";

$triangle = new Triangle(60.2, 84.7);
echo $triangle->area();
