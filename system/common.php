<?php
function config($name = '')
{
    static $arr = [];
    if (empty($arr)) {
        $arr = include CORE_PATH.'config.php';
        echo 'aaa';
    }
    if (!empty($arr[$name])) {
        return $arr[$name];
    }else {
        return null;
    }
}
function user_config($name = '')
{
    $arr = include APP_PATH.'config.php';
    return $arr[$name];
}

