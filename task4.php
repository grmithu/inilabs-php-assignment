<?php


// Task 4: Polymorphism
// Build a set of animal classes that demonstrate polymorphism by overriding a method for making sounds.


class Animal {
    public function makeSound() {
        return "Some generic sound";
    }
}

class Tiger extends Animal {
    public function makeSound(){
        return 'Growl!';
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof woof!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}


$animals = [
    new Cow(),
    new Tiger(),
    new Dog(),
    new Cat()
];

foreach ($animals as $animal) {
    echo get_class($animal) . " says: " . $animal->makeSound() . "<br>";
}


?>