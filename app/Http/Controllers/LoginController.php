<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

   public function index(){
    return view('auth.login');
   }

   public function postlogin(Request $request){
    if (Auth::attempt($request->only('email','password'))) {
        return redirect('/dashboard')->with('success', 'Login Berhasil');
    }
    return redirect('/')->with('error', 'Login Gagal');
   }
}