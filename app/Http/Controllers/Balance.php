<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Helper\Http;
class Balance extends Controller
{
    public function wallet()
    {

        $data['title']  =   '我的钱包';

        $params['user_id'] = session('user.id');
        $res = Http::post(env('API_URL').'/user/getWalletByUserID' , $params);

        if ($res->status == 1) {

            $data['wallet'] = $res->results;

        } else {

            $data['msg'] = $res->message;
        }


        return view('balance.wallet' , $data);
    }
}
