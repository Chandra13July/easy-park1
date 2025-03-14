<?php

namespace Database\Factories;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdiFactory extends Factory
{
    public function definition(): array
    {
        $prodi = $this->faker->unique()->words(2, true); 

        return [
            'jurusan_id' => Jurusan::inRandomOrder()->first()->id ?? Jurusan::factory(), 
            'prodi' => ucfirst($prodi), 
            'slug' => Str::slug($prodi),
        ];
    }
}
