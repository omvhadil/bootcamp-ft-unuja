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
        // Create 20 dummy student
        Student::create([
            [
            'nim' => '2031710011',
            'name' => 'Muhammad Rizky Ramadhan',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '081234567890',
            'address' => 'Jl. Raya Kedungbanteng No. 108',
            ],
            [
            'nim' => '2031710012',
            'name' => 'Muhammad Rizky Ramadhan',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '081234567890',
            'address' => 'Jl. Raya Kedungbanteng No. 108',
            ],
        ]);

    }
}
