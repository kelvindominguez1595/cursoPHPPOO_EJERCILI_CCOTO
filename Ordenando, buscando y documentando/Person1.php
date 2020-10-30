<?php
class Person
{
    private $name;
    private $familyname;
    private $phone;
    private $mobile;

    public function __construct($name,$familyname)
    {
        if($name ==trim($name) ) 
        {
            throw new Exception('El nombre no debe ir vacio');
        }
    $this->name = $name;
    $this->name = $familyname;
    }

    public function getName()
    {
        return $this->name
    }

    public function getFamilyName()
    {
        return $this->familyname
    }
}




?>