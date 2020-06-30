<?php
namespace app;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        $class = str_replace('\\', '/', $class);
        require_once __DIR__ . '/' . $class . '.php';
    }
}