<?php
trait myUtilities
{
    function sayMyName()
    {
        echo " Mi nombre es " . $this->name . "\n";
    }
}
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
    use myUtilities;
    public $name = "Chucho";
    protected $breed;
    public function makeSound()
    {
        echo "Guau\n";
    }
}

final class Schnauzer extends Dog
{
    public function __construct()
    {
        $this->breed = 'schanuzer';
    }
}


$instDog = new Schnauzer;
$instDog = sayMyName();

?>