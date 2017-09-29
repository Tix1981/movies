<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index () {

        $movies = Movie::all();

        return view('movies.index', compact('movies'));

    }

    public function show ($id) {

        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));

    }
}
