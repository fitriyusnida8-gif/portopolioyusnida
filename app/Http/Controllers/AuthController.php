<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan Form Login
    public function login()
    {
        return view('login'); // File views/login.blade.php
    }

    // Memproses kecocokan email & password
    public function autentikasi(Request $request)
    {
        $kredensial = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // Laravel akan mengambil email dan password yang diketik, lalu otomatis mencari ke tabel users di database.//
        if (Auth::attempt($kredensial)) {
    $request->session()->regenerate();
    
    
    return redirect()->intended('/dashboard'); 
    
}

        // Jika salah, balikkan ke form login dengan pesan eror
        return back()->with('loginError', 'Email atau password admin salah!');
    }

    // Proses Keluar
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Menghancurkan semua data sesi //
        $request->session()->regenerateToken(); // Memperbarui token CSRF baru agar tidak disalh gunakan setelah logout //

        return redirect()->route('user.index'); // kembali ke halaman user //
    }
}