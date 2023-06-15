<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $chart_status = Student::select('status')
            ->selectRaw('count(*) as total')
            ->groupBy('status')
            // kenapa pake get()->toArray()? karena jika tidak, maka akan error
            ->get()->toArray();

        return view('pages.landing_page.dashboard', [
                'total_data' => Student::get()->count(),
                'status_label' => array_column($chart_status, 'status'),
                'status_total' => array_column($chart_status, 'total'),
                'aktif' => Student::where('status', 'aktif')->count(),
                'nonaktif' => Student::where('status', 'nonaktif')->count(),
                'cuti' => Student::where('status', 'cuti')->count()
        ]);
    }
}