<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    //
    protected $table='role_user';
    protected $primaryKey='id';
    public    $timestamps=false;
}
