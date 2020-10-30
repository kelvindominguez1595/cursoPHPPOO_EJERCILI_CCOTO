<?php
function app_autoloader($class)
{
    include 'classes/'. $class .'.php'
}
//spl_autoload_register('app_loader');
spl_autoload_register(fuction($class)){
    include $class . '.php';
}

?>