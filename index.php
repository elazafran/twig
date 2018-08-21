<?php 

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader,[]);

$who= 'gente del futuro';
$hello= 'sean todos bienvenidos ';

$user = [
    'name' =>'javier',
    'lastname' => 'aliaga rodriguez',
    'email' => 'javi@gmail.com'
];

echo $twig->render('index.twig', compact('user'));

