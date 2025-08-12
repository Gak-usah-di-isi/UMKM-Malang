<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleLike extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'article_id',
        'user_id',
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Get the article that owns the like.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    /**
     * Get the user that owns the like.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include active likes.
     */
    public function scopeActive($query)
    {
        return $query->whereNull('deleted_at');
    }

    /**
     * Check if user already liked the article.
     */
    public static function isLikedByUser($articleId, $userId)
    {
        return self::where('article_id', $articleId)
            ->where('user_id', $userId)
            ->whereNull('deleted_at')
            ->exists();
    }
}
