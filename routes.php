<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'laravel' => 'controllers/index.php',
//     '404' => 'controllers/404.php',
//     'about' => 'controllers/about.php',
//     'about/history' => 'controllers/about-history.php',
//     'contact' => 'controllers/contact.php',
//     'new' => 'controllers/new-task.php',
//     'add' => 'core/models/new-task.php'
// ]);

$router->get('', 'controllers/index.php');
$router->get('laravel', 'controllers/index.php');
$router->get('404', 'controllers/404.php');
$router->get('about', 'controllers/about.php');
$router->get('about/history', 'controllers/about-history.php');
$router->get('contact', 'controllers/contact.php');
$router->get('new', 'controllers/new-task.php');
$router->post('add', 'core/models/new-task.php');