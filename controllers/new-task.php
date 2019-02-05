<?php

$date = date('Y-m-d');

if (isset($_POST['submit'])) {
    if (empty($_POST['description']) || empty($_POST['date'])) {
        die('Insert all data');
    }
    $description = $_POST['description'];
    $completed = (isset($_POST['task_done'])) ? true : false;
    $date = $_POST['date'];

    if($app['database']->insertTask('tasks', $description, $completed, $data)) {
        header('Location: index.php');
    }
}

require 'templates/new-task.view.php';


