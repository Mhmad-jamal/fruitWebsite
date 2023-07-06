<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table="blog_posts";
    protected $fillable = ['title', 'short_description', 'content', 'image'];

    // Optional: If you want to specify a different table name
    // protected $table = 'blog_posts';

    // Optional: If you have relationships with other models
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }
}

