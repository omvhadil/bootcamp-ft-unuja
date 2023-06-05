<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     // untuk memprotecsi model
     protected $model = User::class;

    public function definition()
    {
        return [
            // name() = untuk mengambil nama dari faker
            'name' => $this->faker->name(),
            // unique() = untuk membuat email yang unik
            'email' => $this->faker->unique()->safeEmail(),
            // now() = untuk mengambil waktu sekarang
            'email_verified_at' => now(),
            // password() = untuk membuat password
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // Str::random() = untuk membuat string random
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}