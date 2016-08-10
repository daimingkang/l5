<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $hidden = ['password'];
    protected $visible = ['username'];//可以使用 visible 属性来定义模型数组和 JSON 显示的属性白名单：


    //一对一关联表phone
    public function phone1()
    {
        return $this->hasOne('App\Http\Model\Phone', 'user_id', 'id');//Eloquent 假设外键应该在父级上有一个与之匹配的id，换句话说，Eloquent 将会通过user表的id值去phone表中查询user_id与之匹配的Phone记录。如果你想要关联关系使用其他值而不是id，可以传递第三个参数到hasOne来指定自定义的主键
    }

    //一对多  一个用户可以有多评论
    public function review1()
    {
        return $this->hasMany('App\Http\Model\Review', 'user_id', 'id');
    }

    //定义访问器 该访问器在获取first_name的值时被 Eloquent 自动调用：
    public function getUserNameAttribute($value)
    {
        return ucfirst($value);
    }
  //定义修改器 当为这个字段赋值时调用
    public function setUserNameAttribute($value){
      $this->attributes['username']=md5($value);
    }
}
