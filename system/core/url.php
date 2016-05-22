<?php
/**
*
*/
class url
{
    public $url_arr = [];
    function __construct()
    {
        $this->set_url_arr();
    }
    private function set_url_arr()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $this->url_arr = explode('/',trim($_SERVER['PATH_INFO'], '/'));
        }
    }
}


 ?>