<?php

namespace App;

class DB{
    private static ?DB $instance = null;

    private function __construct(public array $config)
    {
        echo "<h3>Instance created</h3>";
    }

    public static function getInstance(array $config):DB
    {
        if (self::$instance === null){
            self::$instance = new DB($config);
        }

        return self::$instance;
    }
}