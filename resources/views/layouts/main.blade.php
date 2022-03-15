<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Laravel Blog | {{ $title }}</title>
  </head>
  <body id="home">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- Akhir navbar --}}
    
    {{-- Isi halaman --}}
    <section>
    @yield('content')
  </section>
    {{-- Akhir isi halaman --}}

    <!-- Footer -->
    {{-- <footer class="text-white text-center pb-3 pt-3">
      <p>Created with <i class="bi bi-stars text-warning"></i> by <a class="text-white fw-bold" href="https://www.instagram.com/surya_maris/">Surya Maris Panensa S</a></p>
    </footer> --}}
    <!-- Akhir Footer -->
  </body>
</html>
