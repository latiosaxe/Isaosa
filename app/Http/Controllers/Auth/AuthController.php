<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use \Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('control.auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function authenticate(Request $request)
    {
        $username = $request->input('username', '');
        $password = $request->input('password', '');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return response()->json(['message' => 'ok']);

//            return redirect()->intended('dashboard');
        }
        return response()->json(['message' => 'ko'], 400);
    }
}
