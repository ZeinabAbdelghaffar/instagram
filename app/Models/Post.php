<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_hashtags');
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function savedPosts()
    {
        return $this->belongsToMany(User::class, 'saved_posts');
    }
}
