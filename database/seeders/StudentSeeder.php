<?php

namespace Database\Seeders;

use App\Models\Student;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy student
        $data = [
            [
            'nim' => '1921400001',
            'name' => 'Fadilatur Rohman',
            'email' => 'fadilaturrohman@gmail.com',
            'alamat' => 'Jl. Raya Kedungbanteng No. 1',
            'major_id' => 1,
            'semester' => 4,
            'no_hp' => '081234567890',
            'tempat_lahir' => 'Kediri',
            'jk' => 1,
            'tahun_masuk' => 2019,
            'status' => 'aktif',
            ],
            [
            'nim' => '1921400002',
            'name' => 'Abdur Rohman',
            'email' => 'abdurrohman@gmail.com',
            'alamat' => 'Jl. Raya Kedungbanteng No. 1',
            'major_id' => 1,
            'semester' => 4,
            'no_hp' => '081234567890',
            'tempat_lahir' => 'Kediri',
            'jk' => 1,
            'tahun_masuk' => 2019,
            'status' => 'nonaktif',
            ],
            [
            'nim' => '1921400003',
            'name' => 'Andi Bayu Setiawan',
            'email' => 'andibayu@gmail.com',
            'alamat' => 'Jl. Raya Kedungbanteng No. 1',
            'major_id' => 3,
            'semester' => 4,
            'no_hp' => '081234567890',
            'tempat_lahir' => 'Kediri',
            'jk' => 1,
            'tahun_masuk' => 2019,
            'status' => 'aktif',
            ],
            [
            'nim' => '1921400004',
            'name' => 'Saiful Rizal',
            'email' => 'saiful@gmail.com',
            'alamat' => 'Jl. Raya Kedungbanteng No. 1',
            'major_id' => 2,
            'semester' => 4,
            'no_hp' => '081234567890',
            'tempat_lahir' => 'Kediri',
            'jk' => 1,
            'tahun_masuk' => 2019,
            'status' => 'cuti',
            ],
        ];
        foreach ($data as $value) {
            Student::create($value);
        }
    }
}