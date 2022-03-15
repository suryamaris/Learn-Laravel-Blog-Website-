@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="pt-5">{{ $post->title }}</h2>
            <p>By <a href="/posts?author=" class="text-decoration-none">{{ $post->User->name }}</a> in <a href="/posts?category={{ $post->Category->slug }}" class="text-decoration-none"> {{ $post->Category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mb-5" alt="{{  $post->category->name  }}">
        {!! $post->body !!}
        <a href="/blog">Back to Posts </a>
        </div>
    </div>
</div>
@endsection