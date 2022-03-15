@extends('layouts.main')
@section('content')
<div class="container">
    <h1 class="mt-5 mb-5">Post Category : {{ $category }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="/blog?category={{ $posts[0]->Category->slug }}">
                @foreach ($posts as $post)
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h3 class="card-title text-center flex-fill p-3" style="background-color: rgba(0,0,0,0.6)">{{ $category->name }}</h3>
                    </div>
                  </div>
                @endforeach
                </a>
            </div>
        </div>
    </div>
</div>
@endsection