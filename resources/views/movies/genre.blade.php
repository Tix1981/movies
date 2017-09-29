@extends('layout.master')

@section('title')
    Genre {{ $movies->first()->genre }}
@endsection

@section('header-title')
    Movies by genre: {{ $movies->first()->genre }}
@endsection

@section('content')
    @foreach ($movies as $movie)
        <div class="blog-post">
          <a href="{{ route('single-movie', ['id' => $movie->id ]) }}"><h2 class="blog-post-title">{{ $movie->title }}</h2></a>
          <p class="blog-post-meta">Year: {{ $movie->year }}; Directed by: {{ $movie->director }}; Genre: {{ $movie->genre }}</p>

          <p>{{ Illuminate\Support\Str::words($movie->storyline, 50) }}</p>
        </div><!-- /.blog-post -->
    @endforeach
@endsection
