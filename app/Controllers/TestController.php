<?php
/**
 * Created by PhpStorm.
 * User: Damon
 * Date: 2017/12/27
 * Time: 16:08
 */

namespace App\Controllers;

use App\Cores\DB;
use App\Cores\View;
use App\Model\Metal;

class TestController extends Controller
{
    public function index()
    {
        DB::linkStart();//连接db
        Metal::create([
            'metal_code' => 'TEST',
            'metal_name' => 'test',
            'materiel_type' => 1,
            'enable' => 0,
            'deadline' => 30
        ]);
        $res= Metal::all()->toArray();

        var_dump($res);
        die();

    }
}