<?php

require_once __DIR__.'/bootstrap.php';

$films = [
    [
        'name' => 'Terminator',
        'genre' => 'Action'
    ],
    ];

//$tpl = $twig->loadTemplate('index.twig');
//echo $tpl->render(['films' => $films]);
echo $twig->render('index.twig', ['films' => $films]);