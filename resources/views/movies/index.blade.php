@extends('layout.master')

@section('title')
    Movies
@endsection

@section('header-title')
    Movie Database
@endsection

@section('content')
    @foreach ($movies as $movie)
        <div class="blog-post">
          <a href="{{ route('single-movie', ['id' => $movie->id ]) }}"><h2 class="blog-post-title">{{ $movie->title }}</h2></a>
          <p class="blog-post-meta">Year: {{ $movie->year }}; Directed by: {{ $movie->director }}; Genre: {{ $movie->genre }}</p>

          <p>{{ $movie->storyline }}</p>
        </div><!-- /.blog-post -->
    @endforeach
@endsection
