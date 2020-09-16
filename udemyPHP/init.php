<?php 

require __DIR__ . "/autoload.php";

 function e($str) //escaping für XSS
{
    return htmlentities($str, ENT_QUOTES, 'UTF-8');    
}

$container = new \App\Core\Container();


?>