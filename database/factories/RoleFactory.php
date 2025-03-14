<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->randomElement([
            'Admin',
            'Petugas',
            'Mahasiswa'
        ]);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
