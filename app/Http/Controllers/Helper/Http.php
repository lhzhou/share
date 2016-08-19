<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class Http extends Controller
{
    /**
     * @param $url
     * @array $params
     * @return object
     */

    public static function post($url , array $params = [])
    {

        self::encryption($params);

        $client = new Client();
        $response = $client->request(
            'POST',
            $url,
            [
                'form_params' => $params,
                'timeout' => 30,
                'http_errors' => false
            ]
        );


        if ($response->getStatusCode() != 200)
        {
            return [
                'code' => -1 ,
                'message'   => '链接服务器错误'

            ];
        }

        $results = $response->getBody();



        if (is_object(json_decode($results)))
        {
            return  json_decode($results);
        }else{
            return [
                'code' => -1 ,
                'message'   => '返回对象错误'

            ];
        }

    }

    /**
     * @param $url
     * @array $params
     * @return object
     */

    public static function get($url , array $params = [])
    {

        self::encryption($params);

        $client = new Client();
        $response = $client->request(
            'GET',
            $url,
            [
                'form_params' => $params,
                'timeout' => 30,
                'http_errors' => false
            ]
        );

        $response->getStatusCode(); // 200

        $results = $response->getBody(true);

        if ($response->getStatusCode() != 200)
        {
            return [
                'code' => -1 ,
                'message'   => '链接服务器错误'

            ];
        }


        if (is_object(json_decode($results)))
        {
            return  json_decode($results);
        }else{
            return [
                'code' => -1 ,
                'message'   => '返回对象错误'

            ];
        }

    }

    private static function encryption(&$params)
    {
        $params['t'] = time();
        $params['sign'] =  strtolower(md5(env('SECRET').time().env('PUBLIC')));

        return $params;

    }
}
