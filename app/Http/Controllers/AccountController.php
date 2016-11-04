<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Helper\ApiUrl;
use App\Http\Controllers\Helper\Http;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use Cookie;

class AccountController extends Controller
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
            'mobile.required' => '请输入用户名',
            'password.required' => '请输入密码'
        ];

        $rules= [
            'mobile' => 'required',
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

        $params['mobile'] = $request->input('mobile');
        $params['password'] = $request->input('password');


        /* 调用登录API */

        $res = Http::post(env('API_URL').'Account/Login' , $params);

        if ($res->status == 0)
        {
            /* 写入缓存 */

            session(
                [
                    'user.id' => $res->results->id,
                    'user.name' => $res->results->full_name,
                    'user.mobile' => $res->results->mobile,
                    'user.pid' => $res->results->pid,
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

    public function register(Request $request)
    {
        return view('user.register');
    }

    public function registerSubmit(Request $request)
    {

        $messages = [
            'mobile.required' => '请输入用户名',
            'password.required' => '请输入密码'
        ];

        $rules= [
            'mobile' => 'required',
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

        $params = $request->only('mobile' , 'password');

        $res = Http::post(env('API_URL').'Account/Register' , $params);

        if ($res->status == 0)
        {
            /* 写入缓存 */

            session(
                [
                    'user.id' => $res->results->id,
                    'user.mobile' => $res->results->mobile,
                    'user.pid' => $res->results->pid,
                ]
            );

            $arr = [
                    'method'    => 'redirect',
                    'url'       =>  url('/'),
                ];


        } else {

            $arr = [
                'method'    => 'alert',
                'msg'       =>  $res->message
            ];



        }

        return \Response::json($arr);

    }

    public function changePassword()
    {

        $data = [];
        $data['title'] = '我要收徒';

        return view('user.changePassword' , $data);

    }

    public function invited()
    {

        $data = [];
        $data['title'] = '我要收徒';

        return view('user.invited' , $data);
    }

    public function out()
    {
        \Session::clear();
        return redirect(url('/login'));
    }
    
    
    
}
