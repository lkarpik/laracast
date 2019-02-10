<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['email'])) {
        die('Insert all data');
    }
    $name = $_POST['name'];
    $email = $_POST['email'];

    if($app['database']->insert('users', [
        'name' => $name,
        'email' => $email
        ])) {
        header("Location: /laravel");
    } else
        echo "Something went wrong";
}