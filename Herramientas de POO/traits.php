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
    public function makeSound()
    {
        echo "Guau\n";
    }
}

class Cat extends Animal
{
    use myUtilities;
    public $name = "Mish";
    public function makeSound()
    {
        echo "Miau\n";
    }
}

interface iDB
{
    public function connect();
}

class MySQL implements iDB
{
    use myUtilities;
    public $name = "MySQL";
    public function connect()
    {
        echo "Conectando con MySQL\n";
    }
}
class Oracle implements iDB
{
    use myUtilities;
    public $name = "Oracle";
    public function connect()
    {
        echo "Conectando con Oracle\n";
    }
}

$instDog = new Dog;
$instCat = new Cat;

$instMySQL = new MySQL;
$instOracle = new Oracle;

$instDog = sayMyName();
$instMySQL = sayMyName();
$instCat = sayMyName();
$instOracle = sayMyName();
?>