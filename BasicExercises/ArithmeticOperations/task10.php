<?php
class Geometry
{

    public static function checkInputs($first,$second) : bool {
        return !is_numeric($first) || !is_numeric($second);
    }
    public static function circleArea($radius) {
        if ($radius < 0) {
            echo "Error: Radius cannot be negative" . PHP_EOL;
            return 0;
        }
        return pi() * $radius * $radius;
    }
    public static function rectangleArea($length, $width) {
        if (self::checkInputs($length,$width) || $length < 0 || $width < 0) {
            echo "Error: Length and width cannot be negative". PHP_EOL;
            return 0;
        }
        return $length * $width;
    }
    public static function triangleArea($base, $height) {
        if (self::checkInputs($base,$height) || $base < 0 || $height < 0) {
            echo "Error: Base and height cannot be negative" . PHP_EOL;
            return 0;
        }
        return $base * $height * 0.5;
    }
}

while (true) {
    echo "==========================================" . PHP_EOL;
    echo "Geometry Calculator" . PHP_EOL;
    echo "1. Calculate the Area of a Circle" . PHP_EOL;
    echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
    echo "3. Calculate the Area of a Triangle". PHP_EOL;
    echo "4. Quit" . PHP_EOL;
    echo "==========================================" . PHP_EOL;
    echo "Enter your choice (1-4) : ";

    $choice = readline();

    switch ($choice) {
        case 1:
            $radius = readline("Enter the radius of the circle: ");
            echo "The area of the circle is " . Geometry::circleArea($radius) . PHP_EOL;
            break;
        case 2:
            $length = readline("Enter the length of the rectangle: ");
            $width = readline("Enter the width of the rectangle: ");
            echo "The area of the rectangle is " . Geometry::rectangleArea($length, $width) . PHP_EOL;
            break;
        case 3:
            $base = readline("Enter the base of the triangle: ");
            $height = readline("Enter the height of the triangle: ");
            echo "The area of the triangle is " . Geometry::triangleArea($base, $height) . PHP_EOL;
            break;
        case 4:
            echo "Goodbye!" . PHP_EOL;
            exit;
        default:
            echo "Invalid choice" . PHP_EOL;
            break;
    }
}