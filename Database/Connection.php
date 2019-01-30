<?php

class Connection 
{
    public static function connect($config)
    {
        try {
            return new PDO("mysql:host=mysql:3306;dbname=todo;charset=utf8", "root", "rootpassword");

            return new PDO(
                $config['connection'].';dbname='.$config['options']['dbname'].';charset='.$config['options']['charset'], $config['username'], $config['rootpassword']
            );
        } catch (Exception $e) {
            echo "Error occured while connecting to database.".$e;
        }
    }
}