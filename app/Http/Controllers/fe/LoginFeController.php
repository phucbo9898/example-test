<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginFeController extends Controller
{
    public function login()
    {
        if (Auth::user() == '') {
            return view('fe.login.login');
        }
        return redirect()->route('fe.home');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->route('fe.home');
        } else {
            return redirect()->route('fe.login')->with('error', 'Email and password failed');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('fe.home');
    }
}
