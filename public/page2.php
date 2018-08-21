<?php 

require_once __DIR__.'/../config.php';

$people = [
    'Daniel',
    'Juan',
    'Pepe'
];

// renderizamos pasando la array people
echo $twig->render('view3.twig', compact('people'));