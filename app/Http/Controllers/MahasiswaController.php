<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        // all() = mengambil semua data dari database
        $students = Student::all();

        // membuat variabel data semester
        $data['semester'] = [1, 2, 3, 4, 5, 6, 7, 8];

        // membuat variabel data tahun masuk
        $years = [];

        // membuat perulangan untuk menampilkan tahun masuk
        for ($i = 2010; $i <= date('Y'); $i++) {
            $years[] = $i;
        }

        return view('pages.mahasiswa.table_mahasiswa', $data, compact('students', 'years'));
    }

    public function create(Request $request) {
        // memvalidasi semua inputan yang masuk
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

        // menambahkan data status secara defauld
        $data['status'] = 'aktif';

        // menambahkan data ke database
        Student::create($data);

        // redirect ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Task Created Successfully!');
    }

    public function destroy(Student $student) {
        // menghapus data dari database
        $student->delete();
        // redirect ke halaman sebelumnya
        return back();
    }
}