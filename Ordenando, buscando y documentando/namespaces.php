<?php
require_once('MyClass.php');
use MyNamespace\MyClass;
class Main
{
    public $post;

    public function __construct()
    {
        $this->posts = new MyNamespaces\MyClass;
    }
}

$app = new Main();
$app-> posts->greet(:)

?>