<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'location',
        'organizer',
        'start_time',
        'end_time',
        'thumbnail',
        'status',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time'   => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->slug = self::generateUniqueSlug($event->title);
        });

        static::updating(function ($event) {
            $event->slug = self::generateUniqueSlug($event->title, $event->id);
        });
    }

    public static function generateUniqueSlug($title, $excludeId = null)
    {
        $baseSlug = Str::slug($title);

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
