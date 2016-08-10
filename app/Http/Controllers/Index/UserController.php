<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\Phone;
use App\Http\Model\Review;
use App\Http\Model\User;
use App\Http\Model\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //

    public function index()
    {
        //$a=User::all();
        /*  User::chunk(1,function ($a){
              foreach ($a as $flight) {
                  echo $flight->username;
              }
          });*/
        /* $a=User::where('id',1)->count();//返回计算后的结果
         echo $a;
          $a=User::find(1);
          $a->forceDelete();
          dd($a);*/


        /*  //一对一 查看子模型里面的数据 通过用户得到手机号码
          $a = User::find(1)->phone1;//获取关联表
          echo $a;
            //定义相对的关联取得父模型的 通过手机号码得到用户
           $b=Phone::find(1)->user1;
          echo $b;

          //一对多
          //通过用户id得到所有评论
          $aa = User::find(1)->review1;
          foreach ($aa as $v) {
              echo '<h1>' . $v->review . '</h1></br>';
          }
          //通过评论得到用户id
          $bb=Review::find(1)->user1;
          echo $bb;
          //b
          $aa = User::find(1)->review1()->where('id', 1)->first();
          echo $aa->review;



     //多对多
   $users=Users::find(1)->role1;
          dd($users);
    foreach ($users as $v){
        echo $v;
    }

  */

        //访问器
        // $user = User::find(1);
        //在模型中定义了这个字段的访问器 所以会调用模型里的方法
        //没有访问器会输出数据库里的数据 如果设置了访问器就走访问器
        // $username = $user->username;
        // echo $username;


        //修改器

        //   $user = User::find(1);
        // $re = $user->username = 'DaiMingkang';//赋值时调用模型里面的修改器、
        //  return $user->toJson();


        // $a=Artisan::call('create:table s');
        // dd($a);

        /*if (Cache::has('key')) {
            //
            echo 'no';
        }else{
            echo Cache::get('key','default');
        }*/


        /* $collection=collect(['abc'=>1,2,3])->chunk(20);//平均
        //确定集合是否包含一个给定项
         $collection->contains('abc');
         //true

         $collection->contains('saas');
         //false

        $re= $collection->count();
         dd($re);*/


        //  $collection = collect(['a', 'b', 'c', 'd', 'e', 'f']);

        ///echo  $collection->every(4);// a e
        // echo   $collection->every(4, 1);//b f

        //   $collection = collect(['product_id' => 1, 'name' => 'Desk', 'price' => 100, 'discount' => false]);

        //  $filtered = $collection->except(['price', 'discount']);

        //  dd( $filtered->all());
// ['product_id' => 1, 'name' => 'Desk']


        /*
                $a=Crypt::encrypt('addada');
                echo $a.'</br>';
                $b=Crypt::decrypt($a);
                echo $b;*/

        //Storage::disk('local')->put('file.txt','casnkcnas');
        $data = ['email' => '540719382@qq.com', 'name' => 'daimingkang', 'uid' => 1, 'activationcode' => '12345'];
        Mail::send('sendemail', ['user' => 'ccmknt@163.com'], function ($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
        });

    }


    /* public function create(){
         $data=[
             'username'=>'sssss',
             'password'=>'dsdsds'
         ];
         $a=User::create($data);
         dd($a);
     }*/
}
