<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];

    protected $guarded =['id'];


    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
