<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug'];

    // Generate slug otomatis dari name
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($role) {
            $role->slug = Str::slug($role->name);
        });

        static::updating(function ($role) {
            $role->slug = Str::slug($role->name);
        });
    }
}
