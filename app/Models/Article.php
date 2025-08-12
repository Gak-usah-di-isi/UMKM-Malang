<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopePublished($query)
    {
        return $query->where('is_publish', true);
    }

    /**
     * Get the user that owns the article.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that owns the article.
     */
    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }

    /**
     * Get the comments for the article.
     */
    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    /**
     * Get the likes for the article.
     */
    public function likes()
    {
        return $this->hasMany(ArticleLike::class);
    }

    /**
     * Scope a query to only include published articles.
     */

    /**
     * Scope a query to search articles.
     */
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
        });
    }

    /**
     * Get the thumbnail URL.
     */
    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }
        return asset('images/default-article-thumbnail.jpg');
    }

    /**
     * Get the excerpt of the article.
     */
    public function getExcerptAttribute($limit = 150)
    {
        return \Illuminate\Support\Str::limit(strip_tags($this->content), $limit);
    }
}
