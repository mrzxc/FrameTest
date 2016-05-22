<?php

/**
*
*/
class Controller
{
    private static $instance;
    function __construct()
    {
        echo 'father controller';
        $this->load = new loader();
    }
    public static function &get_instance()
    {
        return self::$instance;
    }
}

 ?>