<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Helper\ApiUrl;
use App\Http\Controllers\Helper\Http;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use Cookie;

class UserProfile extends Controller
{

    /**
     * 用户登录
     */

    public function login(Request $request)
    {

        return view('user.login');
    }

    public function submitLogin(Request $request)
    {


        /* 配置验证 */
        $messages = [
            'username.required' => '请输入用户名',
            'password.required' => '请输入密码'
        ];

        $rules= [
            'username' => 'required',
            'password' => 'required',
        ];

        /* 开始验证 */
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return \Response::json(
                [
                    'method'    => 'alert',
                    'msg'       =>  $validator->errors()->first()
                ]

            );
        }

        /* 获取input */

        $params['username'] = $request->input('username');
        $params['password'] = $request->input('password');


        /* 调用登录API */

        $res = Http::post(env('API_URL').'/user/login' , $params);

        if ($res->status == 1)
        {
            /* 写入缓存 */

            session(
                [
                    'user.id' => $res->results->id,
                    'user.name' => $res->results->username,
                ]
            );

            return \Response::json(
                [
                    'method'    => 'redirect',
                    'url'       =>  url('/'),
                ]
            );

        } else {

            return \Response::json(
                [
                    'method'    => 'alert',
                    'msg'       =>  $res->message
                ]
            );

        }


    }

    public function invited()
    {

        $data = [];
        $data['title'] = '我要收徒';

        return view('user.invited' , $data);
    }

    public function wallet()
    {
        
    }
}
