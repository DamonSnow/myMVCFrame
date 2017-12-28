<?php
/**
 * Created by PhpStorm.
 * User: Damon
 * Date: 2017/12/28
 * Time: 9:52
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Metal extends Model
{
    protected $fillable = ['metal_code','metal_name','materiel_type','enable','deadline'];
    protected $table = 'mes_metal';
    public $timestamps = false;
}