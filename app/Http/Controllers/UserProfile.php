<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Helper\ApiUrl;
use App\Http\Controllers\Helper\Http;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;

class UserProfile extends Controller
{

    /**
     * 用户登录
     */

    public function login(Request $request)
    {

        return view('index.login');
    }

    public function submitLogin(Request $request)
    {
        $messages = [
            'username.required' => '请输入用户名',
            'password.required' => '请输入密码'
        ];

        $rules= [
            'username' => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return \Response::json(
                [
                    'method'    => 'alert',
                    'msg'       =>  $validator->errors()->first()
                ]

            );
        }

        $params['username'] = $request->input('username');
        $params['password'] = $request->input('password');


        $res = Http::post(ApiUrl::LOGIN , $params);

        if ($res->status == 1)
        {
            return \Response::json(
                [
                    'method'    => 'redirect',
                    'url'       =>  url('index'),
                ]
            );
        } else {

            return \Response::json(
            [
                'method'    => 'alert',
                'msg'       =>  'HI'
            ]
        );
        }


    }
}
