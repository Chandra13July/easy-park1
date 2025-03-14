<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JenisSeeder extends Seeder
{
    public function run(): void
    {
        $jenisList = [
            'Mobil', 
            'Sepeda Motor'
        ];

        foreach ($jenisList as $jenis) {
            Jenis::create([
                'jenis' => $jenis,
                'slug' => Str::slug($jenis),
            ]);
        }
    }
}
