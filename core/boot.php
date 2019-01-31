<?php
$config = require 'config.php';

require 'core/Database/Connection.php';
require 'core/Database/QueryBuilder.php';
require 'core/Classes/Task.php';
require 'core/Classes/Router.php';


$query = new QueryBuilder(
    Connection::connect($config['database'])
);