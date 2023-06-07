<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $major = [
            [
            'major_name' => 'Sistem Informasi',
            ],
            [
            'major_name' => 'Teknik Informatika',
            ],
            [
            'major_name' => 'Teknik Elektro',
            ],
            [
            'major_name' => 'Teknik Informasi',
            ],
            [
            'major_name' => 'Rekayasa Perangkat Lunak',
            ],
        ];

        foreach ($major as $item) {
            Major::create($item);
        }
    }
}