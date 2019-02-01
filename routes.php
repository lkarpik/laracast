<?php

$router->define([
    '' => 'controllers/index.php',
    'laravel' => 'controllers/index.php',
    '404' => 'controllers/404.php',
    'about' => 'controllers/about.php',
    'about/history' => 'controllers/about-history.php',
    'contact' => 'controllers/contact.php'
]);