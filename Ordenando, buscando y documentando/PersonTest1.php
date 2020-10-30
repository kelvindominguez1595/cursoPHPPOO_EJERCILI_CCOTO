<?php
require_once('Person1.php');
class PersonTest1 extends PHPUnit_Framework_TestCase
{
    public function testPersonConstruct()
    {
        $person = new Person('Bernardo','Pineda');
        $this->asserrTrue($person instanceof Person, 'It should be instance of class Person');
        $this->assertTrue($person->getName()== 'Bernardo', 'It should be Bernardo');
        $this->assertTrue($person->getFamilyName()== 'Pineda', 'It should be Pineada');
    }
    /**
     * @expectesException Exception
     */
    public function testEmptyName()
    {
        $person = new Person('','Pineda');
        $this->assertTrue($person->getName()== 'Bernardo', 'It should be Bernardo');
    }
}



?>