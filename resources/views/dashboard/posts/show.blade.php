@extends('dashboard/layouts/main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="pt-5">{{ $post->title }}</h2>
            
            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid my-5" alt="{{  $post->category->name  }}">
            </div>
            @else 
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid my-5" alt="{{  $post->category->name  }}">
            @endif
        {!! $post->body !!}
        </div>
    </div>
</div>

@endsection