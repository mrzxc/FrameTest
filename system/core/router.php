<?php
/**
* router 得到路由中的信息,包括控制器名,方法名,和非get传参参数
*/
class router
{
    public $class = 'welcome';
    public $method = 'index';
    private $url;
    function __construct()
    {
        $this->class = config('default_controller');
        $this->url = new url();
        $this->set_class();
        $this->set_method();
    }

    // set controller
    private function set_class()
    {
        if (!empty($this->url->get_behavior('controller'))) {
            $this->class = $this->url->get_behavior('controller');
        }
    }

    private function set_method()
    {
        if (!empty($this->url->get_behavior('method'))) {
            $this->method = $this->url->get_behavior('method');
        }
    }

}




 ?>