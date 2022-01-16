<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('FrontView.login');
    }

    function showregistrasi(){
        return view('FrontView.registrasi');
    }
    function showlogin2(){
        return view('BackView.login2');
    }
}