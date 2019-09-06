<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if("foo"==$request->password) {
            session(['setfoo' => 'foo']);
            return redirect('/dashboard');
            
        }
        return back()->with('error', 'You must set foo to continue!');
    }

    public function logout(Request $request)
    {
        if ($request->session()->has('setfoo')) {
            $request->session()->pull('setfoo', 'foo');
        }

        return redirect('/setfoo');

    }
}
