<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Pengguna.login');
    }

    public function postlogin(Request $request){
        // dd($request->all());
        if (Auth::guard('pengguna')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/beranda');
        }elseif (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/beranda');
        }
        return redirect('/');
    }

    public function logout(){
        if (Auth::guard('pengguna')->check()){
            Auth::guard('pengguna')->logout();
        } elseif(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('/');
    }
}
