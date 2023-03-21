<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image',
        'reading_time',
        'views'
    ];

    /**
     * Get the user that owns the news
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that owns the news
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the likes for the news
     */
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(NewsLike::class, 'news_likes');
    }

    /**
     * Get the comments for the news
     */
    public function comments(): HasMany
    {
        return $this->hasMany(NewsComment::class, 'news_id')->with('user')->latest();
    }
}
