<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JenisFactory extends Factory
{
    public function definition(): array
    {
        $jenis = $this->faker->randomElement([
            'Mobil', 
            'Sepeda Motor'
        ]);

        return [
            'jenis' => $jenis,
            'slug' => Str::slug($jenis),
        ];
    }
}
