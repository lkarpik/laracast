<?php

App::bind('config', require 'config.php');

$config = App::get('config');

// $app = [];

// $app['config'] = require 'config.php';

App::bind('database', new QueryBuilder(
    Connection::connect($config['database'])
));
