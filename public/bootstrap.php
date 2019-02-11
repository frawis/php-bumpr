<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem( __DIR__ . '/templates' );

$twig = new Twig_Environment( $loader, [ 'cache' => __DIR__ . '/templates/cache', 'debug' => true ] );