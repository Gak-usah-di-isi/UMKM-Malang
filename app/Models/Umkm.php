<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Umkm extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'umkm_category_id',
        'name',
        'slug',
        'description',
        'tagline',
        'established_year',
        'address',
        'district',
        'logo',
        'verification_status',
        'google_maps',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($umkm) {
            $umkm->slug = Str::slug($umkm->name);
        });

        static::updating(function ($umkm) {
            $umkm->slug = Str::slug($umkm->name);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(UmkmCategory::class, 'umkm_category_id');
    }

    public function documents()
    {
        return $this->hasMany(UmkmDocument::class);
    }

    public function photos()
    {
        return $this->hasMany(UmkmPhoto::class);
    }

    public function socials()
    {
        return $this->hasMany(UmkmSocial::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
