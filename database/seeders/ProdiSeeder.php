<?php

namespace Database\Seeders;

use App\Models\Prodi;
use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProdiSeeder extends Seeder
{
    public function run(): void
    {
        // Data Prodi dengan Jurusan yang sesuai
        $jurusanProdi = [
            'Teknologi Informasi' => ['Bisnis Digital', 'Teknik Informatika'],
            'Bahasa, Komunikasi, dan Pariwisata' => ['Produksi Media'],
            'Manajemen Agribisnis' => ['Manajemen Agribisnis'],
            'Teknologi Pertanian' => ['Teknologi Industri Pangan']
        ];
    
        foreach ($jurusanProdi as $jurusanNama => $prodis) {
            // Mencari jurusan berdasarkan nama
            $jurusan = Jurusan::where('jurusan', $jurusanNama)->first();
    
            if ($jurusan) {
                foreach ($prodis as $prodi) {
                    Prodi::create([
                        'jurusan_id' => $jurusan->id,
                        'prodi' => $prodi,
                        'slug' => Str::slug($prodi)
                    ]);
                }
            }
        }
    }
    
}
