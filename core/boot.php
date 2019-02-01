<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Database/Connection.php';
require 'core/Database/QueryBuilder.php';
require 'core/Classes/Task.php';
require 'core/Classes/Router.php';
require 'core/Classes/Request.php';


$app['database'] = new QueryBuilder(
    Connection::connect($app['config']['database'])
);
