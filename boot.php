<?php
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';
require 'Classes/Tasks.php';

$query = new QueryBuilder(Connection::connect());