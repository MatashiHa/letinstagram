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

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id' );
    }

    public function photos(): BelongsTo
    {
        return $this->hasMany(Photo::class);
    }

    public function hashtags(): BelongsToMany
    {
        return $this->belongsToMany(
            Hashtag::class,
            'hashtag_post',
            'post_id',
            'hashtag_id'
        );
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
