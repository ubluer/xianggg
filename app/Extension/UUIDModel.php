<?php
/**
 * Created by PhpStorm.
 * User: xiang
 * Date: 17/11/2016
 * Time: 11:43 AM
 */

namespace App\Extension;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class UUIDModel extends Model
{

    public static function create(array $attributes = [])
    {
        $model = new static($attributes);
        if($model->getAttribute('id')){

        }
        $model->{$model->getKeyName()} = $model->generateNewUuid();
        $model->save();

        return $model;
    }

    public function generateNewUuid()
    {
        return Uuid::uuid4()->toString();
    }

}