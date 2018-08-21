<?php 

require_once __DIR__.'/../config.php';

$path = __DIR__;
$who= 'gente del futuro';
$hello= 'sean todos bienvenidos ';

$user = [
    'name' =>'javier',
    'lastname' => 'aliaga rodriguez',
    'email' => 'javi@gmail.com'
];

// Determina si el sitio está online o en mantenimiento
$online = false;

echo $twig->render('view2.twig', compact('user','online','path'));

