<?php
/**
 * Created by PhpStorm.
 * User: Damon
 * Date: 2017/12/27
 * Time: 15:27
 */
if (!function_exists('isAvailableController')) {

    function isAvailableController($controller,$method,$debug)
    {
        if(class_exists($controller)){
            $app =$controller::getinstance();
            //判断调用的方法控制器类中是否存在
            if(!method_exists($controller,$method)){
                echo $controller.'类不存在'.$method.'方法!';
                die();
            }
        } else {
            echo $controller.'类不存在!';
            die();
        }
        return $app;
    }
}