<?php

require_once 'rectangle.php';
require_once 'square.php';

$rectangleAlpha = new Rectangle(100, 50);
echo $rectangleAlpha->area() . PHP_EOL;
echo $rectangleAlpha->perimeter() . PHP_EOL;


$squareAlpha = new Square(10, 10);
echo $squareAlpha->area() . PHP_EOL;
echo $squareAlpha->perimeter() . PHP_EOL;


$squareBavo = new Square(2);
echo $squareBavo->perimeter() . PHP_EOL;
echo $squareBavo->area() . PHP_EOL;
