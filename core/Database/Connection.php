<?php

class Connection 
{
    public static function connect($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['dbname'].';charset='.$config['charset'],
                $config['username'], 
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die ("Error occured while connecting to database.".$e->getMessage());
        }
    }
}