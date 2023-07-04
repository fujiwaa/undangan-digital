<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('login/customer');
    }

    public function auth(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Email atau password anda salah!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/welcome');
    }
}