<?php
abstract class Animal
{
abstract public function makeSound();

public function run()
{
    echo "Corriendo\n";
}
}

class Dog extends Animal
{
    use MyUtilities;
    public $name = "Kanito";
    public function makeSound()
        {
            echo "Guau\n";
        }
    )
}
class Cat extends Animal
{
    use MyUtilities;
    public $name = "Gepeto";
    public function makeSound()
    {
        echo "Miau\n";
    }
}
$inst = new Cat()
var_dump(get_class_methods($inst));
var_dump(get_class_methods(new Dog));
var_dump(get_class_methods('Animal'));

?>