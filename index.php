<?php

$database = require 'core/boot.php';

$router = new Router; 

require 'routes.php';

$uri = trim(str_replace("/laravel/index.php", '', $_SERVER['REQUEST_URI']), "/");

require $router->direct($uri);
