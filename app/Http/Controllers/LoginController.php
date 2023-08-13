<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'

        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

    dd('berhasil login');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('dashboard');
        // };

        // return back()->with('loginError', 'Login failed!');
    }

    // public function logout()
    // {
    //     Auth::logout();

    //     request()->session()->invalidate();

    //     request()->session()->regenerateToken();

    //     return redirect('/login');
    // }
}
