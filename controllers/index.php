<?php

$tasks = $query->getAll('tasks', 'Task');

require 'templates/index.view.php';