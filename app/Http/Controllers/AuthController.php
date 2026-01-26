<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }
    public function authenticate(Request $request) {
        $email = $request->email;
        $password = $request->password;

        if ($email === 'admin' && $password === 'password') {
            session(['login' => True]);
            return redirect('/')
                ->with('success', 'Login berhasil!');
        } else {
            return redirect('/login')
                ->with('error', 'Email atau password salah.');
        }
        
    }
    public function logout(Request $request) {
        if (session('login')){
            $request->session()->forget('login');
            return redirect('/')
                ->with('success', 'Logout berhasil!');}
        else{
            return redirect('/login')
                ->with('error', 'Anda belum login.');
        }
    }
}
