<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'article_category_id',
        'title',
        'slug',
        'content',
        'thumbnail',
        'is_publish'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $article->slug = self::generateUniqueSlug($article->title);
        });

        static::updating(function ($article) {
            $article->slug = self::generateUniqueSlug($article->title, $article->id);
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

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(ArticleLike::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
