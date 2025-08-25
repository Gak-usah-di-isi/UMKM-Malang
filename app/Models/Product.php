<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'umkm_id',
        'product_category_id',
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'buy_link',
        'is_favorite',
        'is_featured'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = self::generateUniqueSlug($product->name);
        });

        static::updating(function ($product) {
            $product->slug = self::generateUniqueSlug($product->name, $product->id);
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

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function photos()
    {
        return $this->hasMany(ProductPhoto::class);
    }
}
