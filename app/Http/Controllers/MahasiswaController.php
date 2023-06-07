<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // all() = mengambil semua data dari table student
        $students = Student::with('major')->get();

        // all() = mengambil semua data dari table major
        $majors = Major::all();

        // membuat variabel data semester
        $data['semester'] = [1, 2, 3, 4, 5, 6, 7, 8];

        // membuat variabel data tahun masuk
        $years = [];

        // membuat perulangan untuk menampilkan tahun masuk
        for ($i = 2018; $i <= date('Y'); $i++) {
            $years[] = $i;
        }

        return view('pages.mahasiswa.table_mahasiswa', $data, compact('students', 'years', 'majors'));
    }

    public function create(Request $request)
    {
        // memvalidasi semua inputan yang masuk
        $data = $request->validate([
            'nim' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required',
            'major_id' => 'required',
            'alamat' => ['required', 'string'],
            'semester' => 'required',
            'no_hp' => 'required',
            'tempat_lahir' => ['required', 'string'],
            'jk' => 'required',
            'tahun_masuk' => 'required',
        ]);

        // menambahkan data status secara defauld
        $data['status'] = 'aktif';

        // menambahkan data ke database
        Student::create($data);

        // redirect ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Task Created Successfully!');
    }

    public function edit(Student $student)
    {
        // all() = mengambil semua data dari table major
        $majors = Major::all();

        // membuat variabel data semester
        $data['semester'] = [1, 2, 3, 4, 5, 6, 7, 8];

        // membuat variabel data tahun masuk
        $years = [];

        // membuat perulangan untuk menampilkan tahun masuk
        for ($i = 2018; $i <= date('Y'); $i++) {
            $years[] = $i;
        }

        // edit
        $student = Student::with('major')->first();
        return view('pages.mahasiswa.edit_mahasiswa', $data, compact('student', 'years', 'majors'));
    }

    public function update(Student $student)
    {
        // memvalidasi semua inputan yang masuk
        $data = request()->validate([
            'nim' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required',
            'major_id' => 'required',
            'alamat' => ['required', 'string'],
            'semester' => 'required',
            'no_hp' => 'required',
            'tempat_lahir' => ['required', 'string'],
            'jk' => 'required',
            'tahun_masuk' => 'required',
        ]);


        // update data ke database
        $student->update($data);
        return redirect()->route('mahasiswa')->with('success', 'Task Updated Successfully!');
    }

    public function destroy(Student $student)
    {
        // pop Up untuk confirmasi delete
        confirmDelete('Delete Mahasiswa!', 'Anda yakin ingin menghapus data ini?');

        // menghapus data dari database
        $student->delete();
        // redirect ke halaman sebelumnya
        return back();
    }
}
