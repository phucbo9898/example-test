<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::user() == '') {
            return view('cms.login.login');
        }
        
        return redirect()->route('cms.dashboard.index');
    }

    public function postLogin(Request $request) {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email'=> $request->email, 'password'=> $request->password])) {
            return redirect()->route('cms.dashboard.index');
        } else {
            return redirect()->back()->with('error', 'Email or password failed');
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('cms.login');
    }
}
