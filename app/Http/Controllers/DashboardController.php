<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total_data = Student::get()->count();

          // menselect status dan menghitung jumlahnya
          $status = Student::select('status')
          // selectRaw digunakan untuk mengambil data tanpa mengubahnya menjadi objek
          ->selectRaw('count(*) as total')
          // groupBy digunakan untuk mengelompokkan data berdasarkan status
          ->groupBy('status')
          // mengurutkan data berdasarkan status
          ->get()->toArray();

          // array_column digunakan untuk mengambil data dari array
          $status_label = array_column($status, 'status');
            $status_total = array_column($status, 'total');

            // mengambil total data status aktif
            $aktif = Student::where('status', 'aktif')->count();
            // mengambil total data status nonaktif
            $nonaktif = Student::where('status', 'nonaktif')->count();
            // mengambil total data status cuti
            $cuti = Student::where('status', 'cuti')->count();


        return view('pages.landing_page.dashboard', compact('total_data', 'status_label', 'status_total', 'aktif', 'nonaktif', 'cuti'));
    }
}
