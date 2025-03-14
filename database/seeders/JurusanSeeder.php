<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $jurusans = ['Teknologi Informasi','Bahasa, Komunikasi, dan Pariwisata', 'Manajemen Agribisnis', 'Teknologi Industri Pangan'];

        foreach ($jurusans as $jurusan) {
            Jurusan::create([
                'jurusan' => $jurusan,
                'slug' => Str::slug($jurusan)
            ]);
        }
    }
}
