<?php

namespace App;

use App\Extension\OpenModel;

/**
 * @property string branch
 * @property string last_name
 * @property int generation
 * @property int gender
 * @property string generation_name
 * @property string  name
 * @property string family
 * @property int father_id
 * @property string resume
 */
class Member extends OpenModel
{
    /**
     * 外键关联
     */
    public function father(){
        return $this->belongsTo('App\Member','father_id');
    }
}
