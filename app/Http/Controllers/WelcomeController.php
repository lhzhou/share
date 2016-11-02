<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Crypt;
use App\Http\Controllers\Helper\Http;
class WelcomeController extends Controller
{
    public function index()
    {


        $res = Http::post(env('API_URL').'Wallet/Balance' , ['user_id' => session('user.id')]);


        if ($res->status == 0)
        {
            $data['balance'] = $res->results->balance;
        } else {
            $data['balance'] = '获取失败';
        }


        return view('welcome' , $data);
    }

    public function test(Request $request)
    {


        $article = '13123123';


        return Crypt::encrypt($user);



    }

    public function show($id = '')
    {
            Crypt::decrypt($id);

    }


}
