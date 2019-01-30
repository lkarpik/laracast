<?php

class Connection 
{
    public static function connect()
    {
        try {
            return new PDO("mysql:host=mysql:3306;dbname=todo;charset=UTF8", "root", "rootpassword");
        } catch (Exception $e) {
            echo "Error occured while connecting to database.".$e;
        }
    }
}