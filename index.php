<?php
//程序入口
// 定义当前文件位置
// 未加入: 方法参数注册
$app_name = 'app';
$default_controller = 'welcome';




define('INPATH', dirname(__FILE__).'/');
define('CORE_PATH', INPATH.'system/core/');
define('APP_PATH', INPATH.$app_name.'/');
require INPATH.'system/common.php';
require CORE_PATH.'supervisor.php';