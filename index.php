<?php
require 'vendor/autoload.php';

$database = require 'core/boot.php';

// $router = new Router; 

// require 'routes.php';

require Router::load('routes.php') -> direct(Request::getUri(), Request::method());