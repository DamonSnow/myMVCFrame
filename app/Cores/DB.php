<?php
/**
 * Created by PhpStorm.
 * User: Damon
 * Date: 2017/12/28
 * Time: 9:13
 */

namespace App\Cores;
use Illuminate\Database\Capsule\Manager as Capsule;

class DB
{

    protected static $instance = null;
    final protected function __construct(){
        $this->init();
    }

    final protected function __clone(){}
    protected function init(){
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'mes',
            'username' => 'root',
            'password' => '12345678',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
    }
    //abstract protected function init();

    public static function linkStart(){
        if(static::$instance === null){
            static::$instance = new static();
        }
        return static::$instance;
    }
}