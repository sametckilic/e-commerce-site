<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('back.login');
    }
    public function loginPost(Request $request){


        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {

            return redirect()->route("admin");
        } 
        else {
            return redirect()->route("login")->withErrors('Username or Password is valid.');
        }


    }
    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
