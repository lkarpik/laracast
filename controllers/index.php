<?php

$tasks = $app['database']->getAll('tasks', 'Task');

$counterToDo = 0;
$counterCompleted = 0;

require 'templates/index.view.php';