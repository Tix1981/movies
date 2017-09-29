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

    public function create () {

        return view('movies.create');

    }

    public function store (Request $request) {

        $request->validate(
            [
                'title' => 'required | min:2',
                'storyline' => 'required | min:15',
                'director' => 'required | min:2',
                'genre' => 'required | min:2',
                'year' => 'required | integer | between:1900,2050'
            ]
        );

        $movie = Movie::create($request->all());

        return redirect()->route('movies');

    }

    public function show ($id) {

        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));

    }
}
