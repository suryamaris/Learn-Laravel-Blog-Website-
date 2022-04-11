@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="pt-5">{{ $post->title }}</h2>
            <p>By <a href="/posts?author=" class="text-decoration-none">{{ $post->User->name }}</a> in <a href="/posts?category={{ $post->Category->slug }}" class="text-decoration-none"> {{ $post->Category->name }}</a></p>
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="{{  $post->category->name  }}">
                </div>
            @else 
                <img src="https://source.unsplash.com/800x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
        {!! $post->body !!}
        <a href="/blog">Back to Posts </a>
        </div>
    </div>
</div>
@endsection