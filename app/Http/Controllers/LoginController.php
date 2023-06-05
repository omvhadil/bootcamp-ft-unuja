<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index()
   {
    return view('auth.login');
   }

   public function postlogin(Request $request)
   {
    // memvalidasi semua inputan yang masuk
    $attribut = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    // memproses login
    // attempt() = akan mengecek, apakah ada email dan password yang sesuai dengan database
    if (Auth::attempt($attribut)) {
        // jika berhasil, akan diarahkan ke halaman dashboard
        return redirect('/dashboard')->with('success', 'Login Berhasil');
    }
    // jika gagal, akan diarahkan ke halaman login
    return redirect('/')->with('error', 'Login Gagal');
   }
}