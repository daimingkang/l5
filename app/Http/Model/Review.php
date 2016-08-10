<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected  $table='review';
    protected  $primaryKey='id';
    public $timestamps=false;


    public  function user1(){
        return $this->belongsTo('App\Http\Model\User','user_id','id');
    }
}
