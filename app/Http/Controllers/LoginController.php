<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function getLoginForm()
    {
		//
		return view('vueLogin');
	}

    public function postLoginForm(Request $request){
       // $_POST["pseudo"];
        Session::put('login', $request->input('pseudo'));
        return view ('vue2');
    }

    public function testSession(){

        return view('vue3')->with('login',  Session::get('login')); 
    }
}
