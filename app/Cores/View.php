<?php

/**
 * Created by PhpStorm.
 * User: Damon
 * Date: 2017/12/27
 * Time: 13:24
 */
namespace App\Cores;
use Xiaoler\Blade\FileViewFinder;
use Xiaoler\Blade\Factory;
use Xiaoler\Blade\Compilers\BladeCompiler;
use Xiaoler\Blade\Engines\CompilerEngine;
use Xiaoler\Blade\Filesystem;
use Xiaoler\Blade\Engines\EngineResolver;
class View
{
    const VIEW_PATH = [APP_ROOT.'/app/View'];
    const CACHE_PATH = APP_ROOT.'/storage/framework/cache';

    public static function getView(){
        $file = new Filesystem;
        $compiler = new BladeCompiler($file, self::CACHE_PATH);
        $resolver = new EngineResolver;
        $resolver->register('blade', function () use ($compiler) {
            return new CompilerEngine($compiler);
        });
        $factory = new Factory($resolver, new FileViewFinder($file, self::VIEW_PATH));

        return $factory;
    }
}