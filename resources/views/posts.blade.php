@extends('layouts.main')
@section('content')
<div class="container">
    <h1 class="mt-5">{{ $title }}</h1>

    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"> {{ $posts[0]->title }}</a></h3>
          <small class="text-muted">
          <h5>By <a href="/authors/{{ $posts[0]->User->username }}" class="text-decoration-none">{{ $posts[0]->User->name }}</a> in <a href="/categories/{{ $posts[0]->Category->slug }}" class="text-decoration-none"> {{ $posts[0]->Category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</h5>
          </small>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>
      @else
      <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="conrainer">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute bg-dark px-3 py2"><a href="/categories/{{ $post->Category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a></div>
            <img src="https://source.unsplash.com/800x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>By <a href="/authors/{{ $post->User->username }}" class="text-decoration-none">{{ $post->User->name }}</a>  {{ $post->created_at->diffForHumans() }}</p>
              <p>{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection