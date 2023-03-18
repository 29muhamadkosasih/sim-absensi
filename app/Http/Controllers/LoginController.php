<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('hello.login.index');
    }

    public function authanticate(Request $request)
    {

        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            $ud =Auth::user()->name;

            return redirect()->intended('/dashboard')->with('success', ' 👋 Welcome '. $ud .'!  You have successfully logged in to Policeasu. Now you can start to explore! ');
        }
            return back()->with('error', 'Login failed!
            Please check your email or password again');

    }
}
