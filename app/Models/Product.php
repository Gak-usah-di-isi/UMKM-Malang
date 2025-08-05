<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    ];

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

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
}
