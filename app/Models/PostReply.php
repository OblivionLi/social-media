<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostReply extends Model
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
     * Get the user that owns the reply
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post that owns the reply
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the replies
     */
    public function replies(): HasMany
    {
        return $this->hasMany(PostReply::class, 'parent_id')->with('user')->latest();
    }

    /**
     * Get the likes for the post
     */
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(PostReplyLikes::class, 'likes');
    }

    public function getImageAttribute()
    {
        if ($this->image_path) {
            return asset('storage/' . $this->image_path);
        }

        return null;
    }

    public function getVideoAttribute()
    {
        if ($this->video_path) {
            return asset('storage/' . $this->video_path);
        }

        return null;
    }
}
