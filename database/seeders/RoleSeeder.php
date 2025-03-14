<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['Admin', 'Petugas', 'Mahasiswa'];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'slug' => Str::slug($role) 
            ]);
        }
    }
}
