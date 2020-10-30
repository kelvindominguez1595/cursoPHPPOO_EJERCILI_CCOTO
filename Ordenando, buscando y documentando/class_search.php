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

echo class_exists('Dog');
$classes = ['Being','Animal','Plant','Dog','Cat','Mouse']

foreach($classes as $class_)
{
    echo $class_ . (class_exists($class_)? 'si':'no')."\n"
}
?>