<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Crypt;
class Welcome extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function test(Request $request)
    {
        $user = '123456';

        $article = '13123123';


        return Crypt::encrypt($user);



    }

    public function show($id = '')
    {
            Crypt::decrypt($id);

    }


}
