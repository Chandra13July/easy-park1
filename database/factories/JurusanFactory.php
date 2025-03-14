<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JurusanFactory extends Factory
{
    public function definition(): array
    {
        $jurusan = $this->faker->unique()->word();

        return [
            'jurusan' => ucfirst($jurusan), // Kapital di awal
            'slug' => Str::slug($jurusan),
        ];
    }
}
