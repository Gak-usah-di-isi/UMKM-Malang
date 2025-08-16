<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class UmkmCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function umkms()
    {
        return $this->hasMany(Umkm::class, 'umkm_category_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = self::generateUniqueSlug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = self::generateUniqueSlug($category->name, $category->id);
        });
    }

    public static function generateUniqueSlug($name, $excludeId = null)
    {
        $baseSlug = Str::slug($name);

        do {
            $randomId = self::generateRandomId(8);
            $slug = $baseSlug . '-' . $randomId;

            $query = self::where('slug', $slug);
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
        } while ($query->exists());

        return $slug;
    }

    private static function generateRandomId($length = 8)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $randomId = '';

        for ($i = 0; $i < $length; $i++) {
            $randomId .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $randomId;
    }
}
