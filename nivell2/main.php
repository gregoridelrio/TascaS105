<?php
require_once "Shape.php";
require_once "Triangle.php";
require_once "Rectangle.php";
require_once "Cercle.php";

$rectangle = new Rectangle(5.25, 4.5);
echo $rectangle->area() . "\n";

$triangle = new Triangle(60.2, 84.7);
echo $triangle->area() . "\n";

$cercle = new Cercle(5);
echo $cercle->area();
