<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #021569">
    <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }} " aria-current="page" href="/">Surya Maris P.S</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }} " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }} " href="/about">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  {{ ($active === "posts") ? 'active' : '' }}" href="/blog">Posts</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Wellcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Log out</button></form>
                </li>
              </ul>
            </li>       
            @else
            <li class="nav-item">
                <a class="nav-link {{ ($active === "login") ? 'active' : '' }} text-light " href="/login" > <i class="bi bi-box-arrow-in-right p-3"></i>Login </a>
            </li>
            @endauth
          </ul>
        
    </div>
  </nav>

  <!-- Akhir Navbar -->