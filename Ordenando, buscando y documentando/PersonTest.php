<?php
require_once('Person.php');
class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPersonConstruct()
    {
        $this->assertTrue(true, 'It should be true');
        $person = new Person('Bernardo','Pineda', '555 5555', '444 4444');
        $this->assteEquals($person->getName(),'Berard', 'It should be Bernard');
        $this->assteEquals($person->getFamilyName(),'Pineda', 'It should be Pineda');
        $this->assteEquals($person->geName(),'Berard', 'It should be Bernard');
    }

    public function testThrowException()
    {
        $this->assteEquals($person->geName(),'Berard', 'It should be Bernard');
    }
}



?>