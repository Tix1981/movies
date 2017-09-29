@extends('layout.master')

@section('title')
    {{ $movie->title }}
@endsection

@section('header-title')
    Movie Database
@endsection

@section('content')
    <div class="blog-post">
      <h2 class="blog-post-title">{{ $movie->title }}</h2>
      <p class="blog-post-meta">Year: {{ $movie->year }}; Directed by: {{ $movie->director }}; Genre: {{ $movie->genre }}</p>

      <p>{{ $movie->storyline }}</p>
    </div><!-- /.blog-post -->
@endsection
