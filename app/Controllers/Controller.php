<?php

/**
 * Created by PhpStorm.
 * User: Damon
 * Date: 2017/12/26
 * Time: 2017/12/26
 * Info: basic controller
 */

namespace App\Controllers;

abstract class Controller
{

    protected static $instance = null;
    final protected function __construct(){
        $this->init();
    }

    final protected function __clone(){}
    protected function init(){}
    //abstract protected function init();

    public static function getInstance(){
        if(static::$instance === null){
            static::$instance = new static();
        }
        return static::$instance;
    }

}