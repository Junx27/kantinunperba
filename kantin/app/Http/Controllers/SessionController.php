<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('admin/dashboard');
            } elseif (Auth::user()->role == 'user') {
                return redirect()->intended('user/daftarmenu');
            } else {
                return back()->withErrors([
                    'email' => 'Email dan password tidak benar, silahkan ulangi kembali',
                ])->onlyInput('email');
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
