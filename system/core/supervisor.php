<?php
function system_loader($class_name) {
    require_once CORE_PATH.$class_name.'.php';
}
spl_autoload_register ('system_loader');//(PHP 5 >= 5.1.2, PHP 7)
// spl_autoload_register(function($class_name){
//     if(preg_match('/controller(.*)/', $class_name, $match))
//     require_once APP_PATH.'controller/'.$match[1].'.php';
// });
$router = new router();
$class = $router->class;
$method = $router->method;

function &get_instance()
{
    return Controller::get_instance();
}
config('dsada');
try {
    if ( ! file_exists(APP_PATH.'controller/'.$class.'.php')) {
        throw new Exception("Not Found", 404);
    }
    require APP_PATH.'controller/'.$class.'.php';
    if ( ! class_exists($class ,false) or ! in_array($method, get_class_methods($class)))
    {
        throw new Exception("Not Found", 404);
    }
$C = new $class();
spl_autoload_unregister('system_loader');
call_user_func([&$C ,$method]);

}catch (Exception $e) {
    echo $e->getmessage();
}



 ?>