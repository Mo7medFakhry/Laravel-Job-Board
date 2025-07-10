<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'body', 'published'];

    protected $guarded = ['id']; // read only


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tag ()
    {
        return $this->belongsToMany(Tag::class);
    }
}
