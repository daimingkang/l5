<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
 public  function  index(Request $request){
     //dd($name);可选参数
   // $re= DB::select('select * from user where id = 1');//原生sql
   // $users = DB::table('user')->lists('id');
    // $users=DB::table('user')->where('id',1)->get();
    //dd($users);

     $name=$request->input('name');
     $name = $request->name;
     $name = $request->input('name', 'Sally');//如果有输出name 无输出sally
     $url=$request->path();
     $method=$request->method();//获取请求方法
     $is=$request->has('name');//是否出现
     $all=$request->all();//获取所以
     $input=$request->only(['name','password']);
     $name=$request->flashonly('name');//存入
    // $name = $request->old('name');
    // dd($name);

    /* return response('sssssssssssssss')
         ->header('Content-Type', 'sssssssss')
         ->header('X-Header-One', 'Header Value')
         ->header('X-Header-Two', 'Header Value');*/
   // return response()->download('IndexController.php');
   //return response()->download($pathToFile, $name, $headers);

 }
}
