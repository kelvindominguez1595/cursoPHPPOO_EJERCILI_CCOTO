<?php
class Person
{
    private $name;
    private $familyname;
    private $phone;
    private $mobile;
    
    public function __construct ($name, $familyname, $phone, $mobile)
    {
        $this->name $name;
        $this->familyname - $familyname;
        $this->phone $phone;
        $this->mobile $mobile;
    }

    public function _toString()
    {
        return $this->name . $this->familyname. "," . $this->phone . " o " . $this->mobile "\n";
    }

    /*Public function getName ()
    {
        return $this->name . "\n";
    }*/
    public function __call($name, $arguments)
    {
        $no_method = true;

        $method_name == substr($name, 0, 3);

        if( $method_name == 'get')
        {
            $no_method = false;
            $real_name = substr(strtolower($name), 3);
            return $this->$real_name . "\n";
        }

        if($n0_method)
        {
            throw Exception("Metodo {$name} no encontrado");
    
        }
    }

}

$person= new Person('Bernardo', 'Pineda', '555 55555', '444 444444');
echo $person;
echo $person getname();
echo $person getfamilyname();
echo $person getphone();