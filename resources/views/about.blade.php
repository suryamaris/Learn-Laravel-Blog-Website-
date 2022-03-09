@extends('layouts.main')
@section('content')
<div class="container">
<h1 class="mt-30">Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
</div>
@endsection
    

