<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JurusanFactory extends Factory
{
    public function definition(): array
    {
        $jurusan = $this->faker->randomElement([
            'Teknologi Informasi', 
            'Bahasa, Komunikasi, dan Pariwisata', 
            'Manajemen Agribisnis', 
            'Teknologi Pertanian'
        ]);

        return [
            'jurusan' => ucfirst($jurusan), 
            'slug' => Str::slug($jurusan), 
        ];
    }
}
