<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Jenis extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['jenis', 'slug'];

    // Generate slug otomatis dari jenis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($jenis) {
            $jenis->slug = Str::slug($jenis->jenis);
        });

        static::updating(function ($jenis) {
            $jenis->slug = Str::slug($jenis->jenis);
        });
    }
}
