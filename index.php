<?php
/**
 * Created by PhpStorm.
 * User: Damon
 * Date: 2017/12/27
 * Time: 15:37
 */
$config = require('./config.php');
define('APP_ROOT',$config['APP_ROOT']);//设定项目路径
define('VIEW_ROOT',$config['VIEW_ROOT']);//设定视图路径
//composer自动加载
require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set($config['timeZone']);//时区设定
//获取控制器名称
if (empty($_GET["c"])) {
    $controller = '\App\\Controllers\\BaseController';
} else {
    $controller = '\App\\Controllers\\' . $_GET["c"] . 'Controller';
}

$method = empty($_GET["m"]) ? 'index' : $_GET["m"];//获取方法名
$app = isAvailableController($controller, $method, $config['DEBUG']);//实例化controller
echo $app->$method();
die();