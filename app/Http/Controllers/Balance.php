<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Balance extends Controller
{
    public function wallet()
    {

        return \Session::get('user.id');

        $params['user_id'] = '';
        $res = Http::post(env('API_URL').'/user/getWalletByUserID' , $params);

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
}
