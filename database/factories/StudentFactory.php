<?php

namespace Database\Factories;

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

     protected $model = Student::class;
    public function definition()
    {
        return [
            'nim' => strtolower(Str::random(10)),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'alamat' => $this->faker->address(),
            'semester' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8']),
            'no_hp' => $this->faker->phoneNumber(),
            'tempat_lahir' => $this->faker->city(),
            'jk' => $this->faker->randomElement(['1', '0']),
            'tahun_masuk' => $this->faker->year(),
            'status' => $this->faker->randomElement(['aktif', 'nonaktif', 'cuti']),
            // 'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Teknik Mesin', 'Teknik Industri', 'Teknik Pangan', 'Teknik Planologi', 'Teknik Lingkungan']),


        ];
    }
}