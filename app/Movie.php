<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title', 'director', 'year', 'genre', 'storyline'];

    public function comments () {

        return $this->hasMany(Comment::class);

    }

}
