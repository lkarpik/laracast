<?php

return [
    'database' => [
        'dbname' => 'todo',
        'username' => 'root',
        'password' => 'rootpassword',
        'connection' => 'mysql:host=mysql:3306',
        'charset' => 'utf8',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];