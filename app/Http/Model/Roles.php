<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //\
    protected $table='roles';
    protected $primaryKey='id';
    public $timestamps=false;
}
