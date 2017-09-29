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
        $rules = [
            'title' => 'required | min:2',
            'storyline' => 'required | min:15 | max:3000',
            'director' => 'required | min:2',
            'genre' => 'required | min:2',
            'year' => 'required | integer | between:1900,{year}'
        ];
        $now = new \Carbon\Carbon();
        $rules['year']= str_replace('{year}', $now->year, $rules['year']);

        $request->validate(
            $rules
        );

        $movie = Movie::create($request->all());

        return redirect()->route('movies');

    }

    public function show ($id) {

        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));

    }
}
