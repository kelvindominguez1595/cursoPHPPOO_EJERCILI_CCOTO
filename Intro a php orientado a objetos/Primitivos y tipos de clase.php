<?php
class Pet
{
    public $name = 'Firulais';
}

class Person
{
    public $age;
    public $name;
    private $money_in_wallet;
    private $todos;
    private $married;

    public function run()
    {
        echo ' Estoy corriendo';
    }
    public function walk()
    {
        echo 'Estoy caminando';
    }
    public function greet($other_person)
    {
        echo"Hola, " . $other_person;
    }
    public function _construct($name)
    {
        $this->name = $name;
    }
}
$person1 = new Person();

?>