<?php

// usamos la constante dir para hacer referencia a la ruta absoluta de nuestro 
require_once __DIR__.'/vendor/autoload.php';

//esta constante almacena la ruta de nuestro proyecto
define('APP_ROOT',__DIR__);

$loader = new Twig_Loader_Filesystem(APP_ROOT.'/views');

$twig = new Twig_Environment($loader,[]);

?>