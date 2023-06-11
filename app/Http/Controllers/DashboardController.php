<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total_data = Student::get()->count();
        return view('pages.landing_page.dashboard', compact('total_data'));
    }
}