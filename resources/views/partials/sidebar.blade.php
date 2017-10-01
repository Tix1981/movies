<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module">
    <h4>Latest 5 movies</h4>
    @foreach ($sidebarMovies as $sidebarMovie)
        <li>
            <a href="{{ route('single-movie', ['id' => $sidebarMovie->id]) }}">{{ $sidebarMovie->title }}</a>
        </li>
    @endforeach
  </div>
</div><!-- /.blog-sidebar -->
