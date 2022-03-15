@extends('layouts.main')
@section('content')
<div class="container">
    <h1 class="text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/blog">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search.." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"> {{ $posts[0]->title }}</a></h3>
          <small class="text-muted">
          <h5>By <a href="/blog?user={{ $posts[0]->User->username }}" class="text-decoration-none">{{ $posts[0]->User->name }}</a> in <a href="/blog?category={{ $posts[0]->Category->slug }}" class="text-decoration-none"> {{ $posts[0]->Category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</h5>
          </small>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute bg-dark px-3 py2"><a href="/blog?category={{ $post->Category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a></div>
            <img src="https://source.unsplash.com/800x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>By <a href="/blog?user={{ $post->User->username }}" class="text-decoration-none">{{ $post->User->name }}</a>  {{ $post->created_at->diffForHumans() }}</p>
              <p>{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    
    @else
    <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
</div>
@endsection