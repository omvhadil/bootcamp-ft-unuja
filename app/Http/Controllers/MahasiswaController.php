<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){

        $students = Student::all();

        $data['semester'] = [1, 2, 3, 4, 5, 6, 7, 8];
        // return $data;
        $years = [];

        for ($i = 2010; $i <= date('Y'); $i++) {
            $years[] = $i;
        }

        // return $years;

        // return $students;
        return view('pages.mahasiswa.table_mahasiswa', $data, compact('students', 'years'));
    }

    public function create(Request $request) {
        $data = $request->validate([
            'nim' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required'],
            'alamat' => ['required', 'string'],
            'semester' => 'required',
            'no_hp' => ['required'],
            'tempat_lahir' => ['required', 'string'],
            'jk' => 'required',
            'tahun_masuk' => ['required'],
        ]);

        $data['status'] = 'aktif';
        // dd($data);

        Student::create($data);

        return back();
    }

    public function destroy(Student $student) {
        $student->delete();

        return back();
    }
}