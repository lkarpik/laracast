<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['description']) || empty($_POST['date'])) {
        die('Insert all data');
    }
    $description = $_POST['description'];
    $completed = (isset($_POST['task_done'])) ? true : false;
    $date = $_POST['date'];

    // old method 
    // if($app['database']->insertTask('tasks', $description, $completed, $date)) {
    //     header("Location: /laravel");
    // }
    
    if($app['database']->insert('tasks',[
        'description' => $description, 
        'completed' => $completed,
        'date' => $date
    ])) {
        header("Location: /laravel");
    }
}