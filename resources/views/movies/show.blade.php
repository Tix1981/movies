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
      <p class="blog-post-meta">Year: {{ $movie->year }}; Directed by: {{ $movie->director }}; Genre: <a href="{{ route('movies-by-genre', ['genre' => strtolower($movie->genre)]) }}">{{ $movie->genre }}</a></p>

      <p>{{ $movie->storyline }}</p>
    </div><!-- /.blog-post -->

    @if (count($movie->comments))
        <hr>
        <h4>Comments:</h4>
        <ul class="list-unstyled">
            @foreach ($movie->comments as $comment)
                <li>{{ $comment->created_at->diffForHumans() }} <strong>{{ $comment->body }}</strong></li>
            @endforeach
        </ul>
    @endif

    <hr>
    <h4>Comment this movie</h4>

    <form method="POST" action="{{ route('movie-comments', ['movie_id' => $movie->id]) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="body">Comment:</label>
            <textarea class="form-control" id="body" name="body"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'body'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
