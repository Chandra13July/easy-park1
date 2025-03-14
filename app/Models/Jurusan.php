<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Jurusan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['jurusan', 'slug'];

    // Generate slug otomatis dari jurusan
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($jurusan) {
            $jurusan->slug = Str::slug($jurusan->jurusan);
        });

        static::updating(function ($jurusan) {
            $jurusan->slug = Str::slug($jurusan->jurusan);
        });
    }
}
