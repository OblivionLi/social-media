<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'image',
        'video'
    ];

    /**
     * Get the user that owns the post
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the likes for the post
     */
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(PostLike::class, 'likes');
    }

    /**
     * Get the parent post for the post
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'parent_id');
    }

    /**
     * Get the replies for the post
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Post::class, 'parent_id')->with('user')->latest();
    }
}
