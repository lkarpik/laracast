<?php 

class Request 
{
    public static function getUri()
    {


        return trim(str_replace("/laravel/index.php", '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), "/");
    }
    
}