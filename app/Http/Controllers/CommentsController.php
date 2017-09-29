<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CommentsController extends Controller
{
    public function store (Request $request, $movieId) {

        $movie = Movie::find($movieId);

        $request->validate(
            [
                'body' => 'required | min:4 | max:1000'
            ]
        );

        $movie->comments()->create($request->all());

        return redirect()->route('single-movie', ['id' => $movieId]);

    }
}
