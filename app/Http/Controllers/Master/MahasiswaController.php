<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        $data['student'] = DB::table('student')->get();
        $data['orm_student'] = Mahasiswa::get();
        return $data;
    }
}