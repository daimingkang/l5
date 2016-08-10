<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class QqmailController extends Controller
{
    //
    public function gosend(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'uid' => $request->input('uid'),
            'title' => $request->input('title', '你好,这是来自名康网站重要的信息')
        ];
        $re = Mail::send('sendemail', ['user' => env('MAIL_USERNAME')], function ($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject($data['title']);
        });
        return $re;
    }
}
