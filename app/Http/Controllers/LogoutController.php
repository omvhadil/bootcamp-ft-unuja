<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        // logout() = untuk menghapus session yang aktif
        Auth::logout();
        // redirect() = untuk mengarahkan ke halaman tertentu
        // route() = untuk mengarahkan ke route tertentu
        return redirect()->route('login');
    }
}