<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $table='phone';
    protected $primaryKey='id';
    public  $timestamps=false;


    //定义相对的关联
    //我们可以从User中访问Phone模型，相应的，
    //我们也可以在Phone模型中定义关联关系从而让我们可以拥有该phone的User。
    //我们可以使用belongsTo方法定义与hasOne关联关系相对的关联：
    public function user1(){
        return $this->belongsTo('App\Http\Model\User','user_id','id');
    }
}
