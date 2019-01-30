<?php

class Connection 
{
    public static function connect($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['options']['dbname'].';charset='.$config['options']['charset'], $config['username'], $config['rootpassword']
            );
        } catch (Exception $e) {
            echo "Error occured while connecting to database.".$e;
        }
    }
}