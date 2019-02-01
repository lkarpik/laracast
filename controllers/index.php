<?php

$tasks = $app['database']->getAll('tasks', 'Task');

require 'templates/index.view.php';