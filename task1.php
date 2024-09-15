<?php

// Task 1: Class Inheritance
// Create classes to represent geometric shapes, including circles and rectangles. Implement methods for area calculation. You can use the provided example code as a reference.


class Shape {
    public function area() {
        
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return M_PI * pow(num: $this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float|int {
        return $this->width * $this->height;
    }
}


$circle = new Circle(7);
echo "Circle Area: " . $circle->area() . "<br>";

$rectangle = new Rectangle(4, 5);
echo "Rectangle Area: " . $rectangle->area();



?>