<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Helper extends Controller
{


    public static function Status($status)
    {
        $string = '';
        switch ($status){
            case 'P':
                $string = '处理中';
                break;
            case 'Y':
                $string = '提现成功';
                break;
            case 'N':
                $string = '提现失败';
                break;
        }


        return $string;

    }
}
