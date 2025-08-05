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
    ];

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
