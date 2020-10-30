<?php

class Config
{
    /*constant DB_USER_NAME ='bpineda';
    constant DB_USER_PASSWORD ='123456787';
    constant DB_DATABASE_NAME ='mydb';*/
    const ENVIRONMENT = 'production';
}

class BaseProfile extends Config
{
    protected $connection_data = 'Conexion DB';
    protected function connect2DB()
    {
        if('production' === self::ENVIRONMENT)
        {
            echo 'Conenctando a produccion';
        }
        if('development' === self::ENVIRONMENT)
        {
            echo 'Conenctando a desarrollo';
        }
        if('staging' === self::ENVIRONMENT)
        {
            echo 'Conenctando a staging';
        }
    }
    public function __construct()
    {
        $this->connect2DB();
    }
}

class MyProfile extends BaseProfile 
{
    const DOMAIN_NAME = 'bernardoredsocial.com';
    private $email='bernardo@correo.com';
    public $name;
    public $last_name;
    
    public function __construct()
    {
        //echo "Conectando a ". self::DB_DATABASE_NAME;
        $this connect2DB();
        //echo self::DOMAIN_NAME;
    }
    
}
    public function getEmail();
     {
        return $this->email;
    }

    public function setEmail($email)
    {
    //Reglas para la asignación de nuestro correo 
    $this->email = $email;
    }

    public function message() 
    {
        echo "mensaje" ;
    }



}

//echo MyProfile::DOMAIN_NAME;
$instMyProfile = new MyProfile;