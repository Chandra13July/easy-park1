<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Prodi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['jurusan_id', 'prodi', 'slug'];

    // Generate slug otomatis dari prodi
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($prodi) {
            $prodi->slug = Str::slug($prodi->prodi);
        });

        static::updating(function ($prodi) {
            $prodi->slug = Str::slug($prodi->prodi);
        });
    }

    // Relasi ke jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
