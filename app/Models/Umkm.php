<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'category',
        'logo_url',
        'address',
        'phone_number',
        'email',
        'facebook',
        'whatsapp',
        'instagram',
        'description',
        'slug',
        'status',
        'is_featured',
        'verified_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
