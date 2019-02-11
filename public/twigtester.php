<?php

require_once __DIR__.'/bootstrap.php';

$films = [
    [
        'name' => 'Terminator',
        'genre' => 'Action'
    ],
    ];

		echo $twig->render('index.html', ['films' => $films]);