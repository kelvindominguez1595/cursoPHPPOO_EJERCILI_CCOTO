<?php
require_once('autoload_for_everything.php');
use MyNamespace\MyClass;
class Main
{
    public $post;

    public function __construct()
    {
        $this->posts = new Posts;
    }
}

$app = new Main();
$app-> posts->greet(:)

?>