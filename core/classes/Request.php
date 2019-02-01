<?php 

class Request 
{
    public static function getUri()
    {
        return trim(str_replace("/laravel/index.php", '', $_SERVER['REQUEST_URI']), "/");
    }
    
}