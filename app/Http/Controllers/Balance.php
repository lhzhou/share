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
        $res = Http::post(env('API_URL').'balance/getWalletByUserID' , $params);

        if ($res->status == 1) {

            $data['wallet'] = $res->results;

        } else {

            $data['msg'] = $res->message;
        }


        return view('balance.wallet' , $data);
    }

    public function takeMoney()
    {
        $data['title'] = '提现申请';


        return view('balance.takeMoney' , $data);
    }

    public function takeMoneySubmit(Request $request)
    {
        $params['account']      =   $request->input('account');
        $params['name']         =   $request->input('name');
        $params['qty']          =   $request->input('qty');
        $params['user_id']      =   session('user.id');
        $params['ip']           =   $request->ip();
        $res = Http::post(env('API_URL').'balance/addTakeMoney' , $params);

        if ($res->status == 1) {
            $arr = [
                'method'    => 'redirect',
                'url'       =>  url('/takeMoneyLog'),
            ];
        } else {
            $arr = [
                'method'    => 'alert',
                'msg'       =>  $res->message
            ];
        }

        return \Response::json($arr);

    }


    public function takeMoneyLog(Request $request)
    {
        $data['title'] = '提现记录';

        $params['page'] = $request->input('page');
        $params['user_id'] = session('user.id');

        $res = Http::post(env('API_URL') . 'balance/takeMoneyLog', $params);

        if ($res->status == 1) {
            $data['log'] =  $res->results;
        } else {

            $data['errorMsg'] = $res->message;
        }

        return view('balance.takeMoneyLog' , $data);
    }

}
