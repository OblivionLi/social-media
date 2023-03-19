<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'age',
        'country',
        'city',
        'bio',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the images for the user
     */
    public function userImages(): HasMany
    {
        return $this->hasMany(UserImages::class);
    }

    /**
     * Get the videos for the user
     */
    public function userVideos(): HasMany
    {
        return $this->hasMany(UserVideos::class);
    }

    /**
     * Get the notifications for the user
     */
    public function userNotifications(): HasMany
    {
        return $this->hasMany(UserNotifications::class);
    }

    /**
     * Get the messages for the user
     */
    public function userMessages(): HasMany
    {
        return $this->hasMany(UserMessages::class);
    }

    /**
     * Get the interests for the user
     */
    public function interests(): BelongsToMany
    {
        return $this->belongsToMany(Interest::class);
    }

    /**
     * Get the followers for the user
     */
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_follows', 'follower_id', 'user_id');
    }

    /**
     * Get the following for the user
     */
    public function following(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_follows', 'user_id', 'follower_id');
    }

    /**
     * Get the posts for the user
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the likes for the user
     */
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'likes');
    }
}
