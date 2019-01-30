<?php
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';
require 'Classes/Tasks.php';
require 'config.php';

$query = new QueryBuilder(Connection::connect($config));