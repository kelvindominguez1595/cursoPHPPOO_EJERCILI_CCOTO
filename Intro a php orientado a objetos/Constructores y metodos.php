<?php
class Person
{
    public $age;
    public $name;

    public function run()
    {
        echo 'estoy correiendo';
    }
    public function walk()
    {
        echo 'Estoy caminando';
    }

    public function greet($other_person_name)
    {
        echo $this->name . 'Saluda a' . $other_person_name;
    }
    public function __construct()
    {
        echo "Estoy siendo creado ". rand(1,99)."\n";
    }
}
for($i = 0; $i< 5; $i++)
{
    //Person = new Person();
}
$Person = new Person();
$Person->run();
$Person->walk();
$Person->greet('Marco');



?>