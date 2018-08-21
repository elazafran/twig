<?php 

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader,[]);

$who= 'gente del futuro';
$hello= 'sean todos bienvenidos ';

$person = [
    'name' =>'Javi',
    'age' => 26,
    'name-company' =>'Pampling'
];

echo $twig->render('index.twig', compact('person'));

?>