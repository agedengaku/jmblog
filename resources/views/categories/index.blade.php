@extends('layouts.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Categories</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          @foreach($categories as $category)
          <div class="post-preview">
            {{-- <a href="{{url('/')}}/post/{{ $category->post->id }}"> --}}
              <h2 class="post-title">
                <a href="{{ url('/') }}/category/{{ $category->id }}">{{ $category->name}}</a>
              </h2>
              <p><i>Number of posts: </i><a href="{{ url('/') }}/category/{{ $category->id }}">{{ $category->posts->count() }}</a></p>
              {{-- <h3 class="post-subtitle"> --}}
                {{-- {!! substr($post->body, 0, 30) !!} ... --}}
                {{-- {{ $post->body }} --}}
              {{-- </h3> --}}
            {{-- </a> --}}
{{--             <p class="post-meta">Posted by
              <a href="#">{{ $post->user->name }}</a>
              on {{ $post->created_at->toFormattedDateString() }}</p> --}}
          </div>
          
          <hr>
          @endforeach

          {{-- <div class="post-preview">
            <a href="post">
              <h2 class="post-title">
                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post">
              <h2 class="post-title">
                Science has not yet mastered prophecy
              </h2>
              <h3 class="post-subtitle">
                We predict too much for the next year and yet far too little for the next ten.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post">
              <h2 class="post-title">
                Failure is not an option
              </h2>
              <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2017</p>
          </div>
          <hr> --}}
          <!-- Pager -->
          <div class="clearfix">
            {{-- {{ $posts->links() }} --}}
            @if($categories->previousPageUrl())
            <a class="btn btn-secondary float-left" href="{{ $categories->previousPageUrl() }}">&larr; Newer Posts</a>
            @endif
            @if($categories->nextPageUrl())
            <a class="btn btn-secondary float-right" href="{{ $categories->nextPageUrl() }}">Older Posts &rarr;</a>
            @endif
          </div>
        </div>
      </div>
    </div>

    <hr>
@endsection