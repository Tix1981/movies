@extends('layout.master')

@section('title')
    Create New Movie
@endsection

@section('header-title')
    Create New Movie
@endsection

@section('content')

    <form method="POST" action="/movies">
        {{ csrf_field() }}

        <div class="form-group">
            <label>Movie title</label>
            <input type="text" class="form-control" id="title" name="title">
            @include('partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <label>Director</label>
            <input type="text" class="form-control" id="director" name="director">
            @include('partials.error-message', ['fieldTitle' => 'director'])
        </div>

        <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" id="year" name="year">
            @include('partials.error-message', ['fieldTitle' => 'year'])
        </div>

        <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
            @include('partials.error-message', ['fieldTitle' => 'genre'])
        </div>

        <div class="form-group">
            <label>Storyline</label>
            <textarea type="text" class="form-control" id="storyline" name="storyline"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'storyline'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
