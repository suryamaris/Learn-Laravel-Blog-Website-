@extends('layouts.main')
@section('content')

<div class="row  justify-content-center">
  <div class="col-md-4">
    {{-- allert  --}}
    @if (session()->has('success'))
        
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif 

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please log in</h1>
            <form>          
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </form>
            <small class="d-block mt-3 text-center">
                Not regitered ? <a href="/register">Register Now!</a>
            </small>
          </main>
        
    </div>
</div>
@endsection