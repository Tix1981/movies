<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['body', 'movie_id'];


    public function movie () {

        return $this->belongsTo(Movie::class);

    }
}
