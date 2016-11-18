<?php
/**
 * Created by PhpStorm.
 * User: xiang
 * Date: 18/11/2016
 * Time: 2:43 PM
 */

namespace App\Extension;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpenModel extends Model
{
    use SoftDeletes;
    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = ['deleted_at','created_at','updated_at'];

    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}