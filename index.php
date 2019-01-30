<?php
require 'boot.php';

$tasks = $query->getAll('tasks', 'Tasks');

require 'templates/index.view.php';