<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cookie;

class Welcome extends Controller
{
    public function index()
    {

        return view('welcome');
    }
}
