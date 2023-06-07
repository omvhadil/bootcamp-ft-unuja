<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     // untuk menentukan model yang akan digunakan
     protected $model = Student::class;
    public function definition()
    {
        return [
            // str::random() = membuat string random
            // strtolower() = membuat string menjadi huruf kecil semua
            'nim' => strtolower(Str::random(10)),
            // name() = membuat nama random
            'name' => $this->faker->name(),
            // unique() = membuat email yang unik
            'email' => $this->faker->unique()->email(),
            // all() = membuat semua data dari table major
            'major_id' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
            // address() = membuat alamat random
            'alamat' => $this->faker->address(),
            // randomElement() = membuat random element dari array
            'semester' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8']),
            // phoneNumber() = membuat nomor telepon random
            'no_hp' => $this->faker->phoneNumber(),
            // city() = membuat kota random
            'tempat_lahir' => $this->faker->city(),
            // randomElement() = membuat random element dari array
            'jk' => $this->faker->randomElement(['1', '0']),
            // year() = membuat tahun random
            'tahun_masuk' => $this->faker->year(),
            // randomElement() = membuat random element dari array
            'status' => $this->faker->randomElement(['aktif', 'nonaktif', 'cuti']),
        ];
    }
}